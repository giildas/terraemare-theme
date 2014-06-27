<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="row">
	<h2><?php echo ucfirst( wp_title('', false, 'right')); ?></h2>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post() ?>		
	<?php get_template_part('partials/posts', 'list'); ?>
<?php endwhile; endif; ?>


<!-- ARCHIVE.PHP -->
<?php get_footer(); ?>