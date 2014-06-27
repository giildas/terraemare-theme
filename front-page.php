<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post() ?>
	<div class="row big-text">
		<?php the_content(); ?>
	</div>					
<?php endwhile; endif; ?>


<?php 
//requete pour récupérer les 2 derniers posts
$args = array(
	'posts_per_page'   => 3,
	'orderby'          => 'post_date',
	'order'            => 'DESC'
);
$last_posts = get_posts( $args );
?>
<?php if (!empty($last_posts)): ?>
	
<div class="row">
	<h2>Carnet de bord</h2>
</div>		

<?php
foreach ($last_posts as $post){
	setup_postdata( $post );
	get_template_part('partials/posts-list');
}
?>
<?php endif ?>


<?php TM_sponsors(); ?>

<?php get_footer(); ?>