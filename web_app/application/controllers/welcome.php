<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	private $layout_data = array();
	
	function __construct(){
		parent::__construct();
		// The Facebook opening hours are on all pages
		$parameters = array("facebook_page" => FACEBOOK_PAGE);
		$this->load->library('Fb_graph', $parameters);
		$this->layout_data['graph'] = $this->fb_graph->getGraph();
		
		$this->load->library('Blogger_post');
		$this->layout_data['prices_post'] = $this->blogger_post->getPostFromId("2269236198896150015");
		
		// Cache the page output
		$this->output->cache(CACHE_TIME_PAGE);
	}
	
	function index()
	{
		//Flickr carousel
		$this->load->library('Flickr', array('set' => FLICKR_SET_HOME));
		$content_data['carousel'] = $this->flickr->getFlickrSet();
		
		//Facebook events
		$this->load->library('Fb_events');
		$content_data['events_list'] = $this->fb_events->getEventsListFilteredOnEnd("Must See!");
						
		//Facebook - About and Description
		$this->load->library('Fb_graph');
		$content_data['graph'] = $this->fb_graph->getGraph();

		$this->layout_data['title'] = 'Welcome';
		$this->layout_data['content'] = $this->load->view('pages/home', $content_data, true);
		$this->load->view('layout', $this->layout_data, false);
	}
	
	function visit()
	{
		$this->_carouselAndBlogger("5073213117812112028", FLICKR_SET_VISIT);
	}
	
	function eat()
	{
		$this->_carouselAndBlogger("333411917878380359", FLICKR_SET_EAT);
	}
	
	function about()
	{
		$this->_bloggerPage("1101086117726466955");
	}

	function events(){
		//Blogger Page
		$this->load->library('Blogger_pages');
		$content_data['blogger_page'] = $this->blogger_pages->getPageFromId("6093289898146240243");
		
		//Facebook events
		$this->load->library('Fb_events');
		$content_data['events_list'] = $this->fb_events->getEventsList();
		
		//JavaScripts to do the more/less on the events text
		$this->layout_data['page_specific_scripts'] = array("/public/js/jquery.shorten.js",
															"/public/js/jquery.shorten.events.js");
		
		$this->layout_data['title'] = $content_data['blogger_page']->title;
		$this->layout_data['content'] = $this->load->view('pages/events', $content_data, true);
		$this->load->view('layout', $this->layout_data, false);
	}
	
	function hire()
	{
		$this->_carouselAndBlogger("3140058098589978206", FLICKR_SET_HIRE);
	}
	
	function learn()
	{
		$this->_carouselAndBlogger("2205580438520124830", FLICKR_SET_LEARN);
	}

	function education()
	{
		$this->_bloggerPage("402198738145349084");
	}
		
	function sessions()
	{
		$this->_bloggerPage("2282877983756699431");
	}

	function location()
	{	
		//Blogger Page
		$this->load->library('Blogger_pages');
		$content_data['blogger_page'] = $this->blogger_pages->getPageFromId("6181900132194236820");
		//Facebook location
		$this->load->library('Fb_graph');
		$content_data['graph'] = $this->fb_graph->getGraph();
		
		$this->layout_data['title'] = $content_data['blogger_page']->title;
		$this->layout_data['content'] = $this->load->view('pages/location', $content_data, true);
		$this->load->view('layout', $this->layout_data, false);
	}
	
	function facilities()
	{
		$this->_bloggerPage("6681080310711743648");
	}
	
	function privacy()
	{
		$this->_bloggerPost("5679777789468602318");
	}
	
	/*
	 * Blogger Page
	 */
	private function _bloggerPage($pageId)
	{
		$this->load->library('Blogger_pages');
		$content_data['blogger_item'] = $this->blogger_pages->getPageFromId($pageId);
		$this->layout_data['title'] = $content_data['blogger_item']->title;
		$this->layout_data['content'] = $this->load->view('pages/blogger', $content_data, true);
		$this->load->view('layout', $this->layout_data, false);
	}

	/*
	 * Carousel and Blogger Page
	 */
	private function _carouselAndBlogger($pageId, $flickrSet)
	{
		$this->load->library('Flickr', array('set' => $flickrSet));
		$content_data['carousel'] = $this->flickr->getFlickrSet();
		$this->load->library('Blogger_pages');
		$content_data['blogger_page'] = $this->blogger_pages->getPageFromId($pageId);
		$this->layout_data['title'] = $content_data['blogger_page']->title;
		$this->layout_data['content'] = $this->load->view('pages/carousel_and_blogger', $content_data, true);
		$this->load->view('layout', $this->layout_data, false);
	}
	
	/*
	 * Blogger Post
	 */
	private function _bloggerPost($pageId)
	{
		$this->load->library('Blogger_post');
		$content_data['blogger_item'] = $this->blogger_post->getPostFromId($pageId);
		$this->layout_data['title'] = $content_data['blogger_item']->title;
		$this->layout_data['content'] = $this->load->view('pages/blogger', $content_data, true);
		$this->load->view('layout', $this->layout_data, false);
	}
	
	/*
	 * Page not found 404
	 */
	public function error_404()
	{
		$content_data = array();
		$this->output->set_status_header('404');
		$this->layout_data['title'] = "Page Not Found";
		$this->layout_data['content'] = $this->load->view('errors/404', $content_data, true);
		$this->load->view('layout', $this->layout_data, false);
	}
}
?>
