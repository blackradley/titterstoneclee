<div id="myCarousel" class="carousel drop-shadow curled visible-desktop visible-tablet hidden-phone">
	<div class="carousel-inner">
	<?php $first = true; ?>
	<?php foreach ($carousel->set as $photo): ?>
		<div class="item<?php ($first)? print ' active"': print '"' ?>><?php $first = false; ?>
			<img src="<?=$photo['image']?>" alt="<?=$photo['title']?>" style="height: 100%; width: 100%;">
			<div class="carousel-caption">
				<h4><a class="secret" href="<?=$photo['sourceUrl']?>" target="_blank"><?=$photo['title']?></a></h4>
				<p class="visible-desktop hidden-tablet hidden-phone"><?=$photo['content']?></p>
			</div>
		</div>
	<?php endforeach ?>
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="/public/img/left.png" width="40" height="40" /></a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="/public/img/right.png" width="40" height="40" /></a>
</div>
<header>
	<h1><a class="secret" href="<?= $blogger_page->sourceUrl ?>" target="_blank"><?= $blogger_page->title ?></a></h1>
</header>
<section class="content-main">
	<div><?= $blogger_page->content ?></div>
</section>