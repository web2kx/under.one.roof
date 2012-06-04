<?php
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'homepage-thumb', 290, 130, true );
	add_image_size( 'homepage-slider', 985, 590, true );

	register_nav_menus( array(
		'menu-top1' => 'Menu Newsletter',
		'menu-top2' => 'Menu Twwiter',
		'menu' => 'Menu principal'
	) );

	function fn_googleMaps($atts, $content = null) 
	{
		extract(shortcode_atts(array(
			"width" => '300',
			"height" => '650',
			"src" => ''
		), $atts));
		
		return '<iframe width="'.$width.'" height="'.$height.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.$src.'"></iframe>';
	}
	
	add_shortcode("googlemap", "fn_googleMaps");
	

	register_sidebar(array(
	 'name' => 'Sidebar',
	 'before_widget' => '<div class="widget">',
	 'after_widget' => '</div>',
	 'before_title' => '<h3>',
	 'after_title' => '</h3>',
	 ));
	 
	 register_sidebar(array(
	 'name' => 'Sidebar Home',
	 'before_widget' => '<div class="widget">',
	 'after_widget' => '</div>',
	 'before_title' => '<h3>',
	 'after_title' => '</h3>',
	 ));
	 register_sidebar(array(
	 'name' => 'Sidebar Categoria',
	 'before_widget' => '<div class="widget">',
	 'after_widget' => '</div>',
	 'before_title' => '<h3>',
	 'after_title' => '</h3>',
	 ));
	 register_sidebar(array(
	 'name' => 'Sidebar Pagina',
	 'before_widget' => '<div class="widget">',
	 'after_widget' => '</div>',
	 'before_title' => '<h3>',
	 'after_title' => '</h3>',
	 ));
	 
	 function theme_widgets_init() {
    // Area 1
    register_sidebar( array (
    'name' => 'Slider',
    'id' => 'slider',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</li>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
} // end theme_widgets_init
	 
	add_action( 'init', 'theme_widgets_init' );

	$preset_widgets = array (
		'slider'  => array( 'search', 'pages', 'categories', 'archives' ));
		
	if ( isset( $_GET['activated'] ) ) {
		update_option( 'sidebars_widgets', $preset_widgets );
	}
	// update_option( 'sidebars_widgets', NULL );

	// Check for static widgets in widget-ready areas
	function is_sidebar_active( $index ){
	  global $wp_registered_sidebars;
	 
	  $widgetcolums = wp_get_sidebars_widgets();
	 
	  if ($widgetcolums[$index]) return true;
	 
		return false;
	} // end is_sidebar_active
	
//function to add breadcrumbs
function the_breadcrumb() {
	echo '<a href="';
	echo get_option('home');
	echo '">';
	echo "HOME";
	echo "</a>";
	if(is_home()){
		echo " &#47; <span style='font-size:12px;letter-spacing:0px;'>Welcome to Under One Roof Properties, a new generation of workspace.</span>";
	}
	if(!is_home()) {
		echo " &#47; ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo " &#47; ";
				strtoupper(the_title());
			}
		} elseif (is_page()) {
			echo strtoupper(the_title());
		}
	}
}

?>
