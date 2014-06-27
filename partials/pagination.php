	<?php if ( $GLOBALS['wp_query']->max_num_pages > 1 ): ?>
		<div class="row">
			<div class="alignright">
				<?php echo next_posts_link( "Messages plus anciens <i class='icon-arrow-right'></i>"); ?>
			</div>
			<div class="alignleft">
				<?php echo previous_posts_link( '<i class="icon-arrow-left"></i> Messages plus récents' ); ?>
			</div>
		</div>
	<?php endif ?>

	<?php if ( $GLOBALS['wp_query']->is_single == 1 ): ?>
		<div class="row">
			<div class="alignright">
				<?php echo next_post_link( "%link", "%title <i class='icon-arrow-right'></i>"); ?>
			</div>
			<div class="alignleft">
				<?php echo previous_post_link( "%link", "<i class='icon-arrow-left'></i> %title"); ?>
			</div>
		</div>
	<?php endif ?>