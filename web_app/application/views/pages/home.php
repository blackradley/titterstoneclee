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


<!-- Content -->
<h1><a class="secret" href="<?=$graph->sourceUrl?>" target="_blank">About Bosworth</a></h3>
<p class="intropara"><?=$graph->about?></p>

<h3><a class="secret" href="<?=$events_list->sourceUrl?>" target="_blank">What's On</a></h3>
<?php foreach ($events_list->events as $event): ?>
	<div class="pull-left event">
		<img class="img-rounded pull-left" src="<?=$event->pic?>" alt="<?=$event->name?>">
		<h4><a href="<?=$event->url?>" target="_blank"><?=$event->name?></a></h4>
		<p><?=$event->when?></p>
		<p><?=$event->descriptionLong?></p>
	</div>
<?php endforeach ?>