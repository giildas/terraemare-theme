<?php


add_theme_support( 'post-thumbnails' ); 
add_editor_style();
/**
 * Scripts
 */
wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri().'/js/libs/modernizr-2.6.2.min.js', null, null, true );
wp_deregister_script('jquery' );
wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', null, '1.11.0', true );
wp_enqueue_script( 'gumby', get_stylesheet_directory_uri().'/js/libs/gumby.min.js', 'jquery', null, true );
wp_enqueue_script( 'plugins', get_stylesheet_directory_uri().'/js/plugins.js', 'jquery', null, true );


/*wp_localize_script( 'plugins', 'script_vars', array(
	'templateDir' => get_stylesheet_directory_uri()
));
*/
/**
 * Menus
 */
require_once 'classes/menu_walker.php';
add_action( 'init', function(){
	register_nav_menu('header-menu', 'Menu haut de page');
});

/**
* Modification du shortcode [caption]
*/
	add_filter( 'img_caption_shortcode', 'cleaner_caption', 10, 3 );
	function cleaner_caption( $output, $attr, $content ) {
		//echo $content;
		/* We're not worried abut captions in feeds, so just return the output here. */
		if ( is_feed() )
			return $output;

		/* Set up the default arguments. */
		$defaults = array(
			'id' => '',
			'align' => 'alignnone',
			'width' => '',
			'caption' => ''
		);

		/* Merge the defaults with user input. */
		$attr = shortcode_atts( $defaults, $attr );

		/* If the width is less than 1 or there is no caption, return the content wrapped between the [caption]< tags. */
		if ( 1 > $attr['width'] || empty( $attr['caption'] ) )
			return $content;

		/* Set up the attributes for the caption <div>. */
		$attributes = ( !empty( $attr['id'] ) ? ' id="' . esc_attr( $attr['id'] ) . '"' : '' );
		$attributes .= ' class="wp-caption ' . esc_attr( $attr['align'] ) . '"';

		/* Open the caption <div>. */
		$output = '<div' . $attributes .'>';

		/* Allow shortcodes for the content the caption was created for. */
		//$output .= do_shortcode( $content );
		$output .= $content;

		/* Append the caption text. */
		$output .= '<p class="wp-caption-text">' . $attr['caption'] . '</p>';

		$output .= '</div>';

		return $output;
	}


/**
 * Converts DMS ( Degrees / minutes / seconds ) 
 * to decimal format longitude / latitude
 */
function DMStoDEC($deg,$min,$sec)
{
	return $deg+((($min*60)+($sec))/3600);
}

/**
 * Converts decimal longitude / latitude to DMS
 * ( Degrees / minutes / seconds ) 
 */
function DECtoDMS($coord) //-2.5844
{
	$deg = floor(abs($coord)); //2
	$reste = (abs($coord)-$deg) * 3600;//2.5844 - 2 = 0.5844

	$min = floor($reste / 60);
	$sec = round($reste - ($min*60), 1);

	return array("deg"=>$deg,"min"=>$min,"sec"=>$sec);
}

function LatToDMS($lat){
	$dms = DECtoDMS($lat);
	return $dms['deg']."°".$dms['min']."'".$dms['sec']."\"".($lat >0 ? "N" : "S");
}

function LngToDMS($lng){
	$dms = DECtoDMS($lng);
	return $dms['deg']."°".$dms['min']."'".$dms['sec']."\"".($lng >0 ? "E" : "W");
}