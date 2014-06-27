<?php 
	$lat = get_post_meta($post->ID, 'TM_lat', true );
	$lng = get_post_meta($post->ID, 'TM_lng', true ); 
?>

<article class="articles-list">
	<div class="row">

		<div class="three columns date_and_coords">
			<h4><?= date('d M. Y', strtotime($post->post_date)); ?></h4>
			<?php if ($lat != null && $lng != null): ?>
				<h6><?= LatToDMS($lat)." - ".LatToDMS($lng); ?></h6>
			<?php endif ?>
			<div>Classé dans : <?php the_category(' - '); ?></div>	
		</div>

		<div class="nine columns">
			<header>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			</header>
			<?php the_excerpt(); ?>
		</div>

	</div>
</article>