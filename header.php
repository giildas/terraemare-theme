<?php setlocale(LC_ALL, 'fr_FR'); ?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--><html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<title>TerraeMare</title>
	<link rel="icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/images/terreIcon.png" />

	<link href="<?= get_stylesheet_uri(); ?>" rel="stylesheet">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<header id="header" class="carrousel">
		<div class="shaded bottom"></div>
		<div class="row">
			<div class="centered twelve columns">	
				<img src="<?= get_stylesheet_directory_uri(); ?>/images/logo.png" alt="logo"  id="logo">
			</div>
		</div>
	</header>