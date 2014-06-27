<div class="navcontain">
	<nav class="navbar inverse" gumby-fixed="top" id="nav1">
		<div class="row">
			<a class="toggle" gumby-trigger="#nav1 ul" href="#"><i class="icon-menu"></i></a>
			<h5 class="pull_left logo showOnFixed">
				<a href="<?= site_url(); ?>">	
					<img src="<?= get_stylesheet_directory_uri(); ?>/images/terreIcon.png" alt="">
					<span>TerraeMare</span>
				</a>
				
			</h5>
			<?php 
			wp_nav_menu( array( 
				'theme_location' => 'header-menu',
				'container'	 => false,
				'menu_class' => '',
				'walker' => new wp_gumby_navwalker()
			) ); 
			?>
		</div>
	</nav>
</div>
