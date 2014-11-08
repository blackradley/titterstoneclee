<h1><?= $blogger_page->title ?></h1>

<div><?= $blogger_page->content ?></div>

<?php foreach ($events_list->events as $event): ?>
	<div class="pull-left event">
		<img class="img-rounded pull-left" src="<?=$event->pic?>" alt="<?=$event->name?>">
		<h4><a href="<?=$event->url?>" target="_blank"><?=$event->name?></a></h4>
		<p><?=$event->when?></p>
		<p itemprop="description" class="more">
			<?=$event->descriptionLong?>
		</p>
	</div>
<?php endforeach ?>