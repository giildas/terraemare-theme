<?php // for static pages or single articles ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();	
	
	$lat = get_post_meta($post->ID, 'TM_lat', true );
	$lng = get_post_meta($post->ID, 'TM_lng', true ); 
?>
	<article class="row article-single">
		<header>
			<h2><?php the_title(); ?></h2>
			<?php the_post_thumbnail('large' ); ?>

			<?php if (!is_page()): ?>
				<em>Posté le <?= strftime('%A %d %B %Y', strtotime($post->post_date)); ?>.</em>
				<?php if ($lat && $lng): ?>
					<p>
						<em>Coordonnées : <?= LatToDMS($lat); ?>, <?= LngToDMS($lng); ?></em>
					</p>
				<?php endif ?>
			<?php endif ?>
		</header>			
		
		<?php the_content(); ?>	
	</article>

<?php endwhile; endif; ?>

<!-- INDEX.PHP -->
<?php get_footer(); ?>