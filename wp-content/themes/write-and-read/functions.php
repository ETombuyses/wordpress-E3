<?php 
add_action( 'wp_enqueue_scripts', 'write_and_read_enqueue_styles' );
function write_and_read_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
} 


// New header
require get_stylesheet_directory() . '/inc/custom-header.php';



// Google fonts, credits can be found in readme.
function write_and_read_google_fonts() {
	wp_enqueue_style( 'write-and-read-google-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600', false ); 
}
add_action( 'wp_enqueue_scripts', 'write_and_read_google_fonts' );



// New customizer options
function write_and_read_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'sidebar_settings', array(
		'title'      => __('Sidebar Settings','write-and-read'),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
		) );


	$wp_customize->add_setting( 'sidebar_bg_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_bg_color', array(
		'label'       => __( 'Background Color', 'write-and-read' ),
		'section'     => 'sidebar_settings',
		'priority'   => 1,
		'settings'    => 'sidebar_bg_color',
		) ) );


	$wp_customize->add_setting( 'sidebar_headline_color', array(
		'default'           => '#9e9e9e',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_headline_color', array(
		'label'       => __( 'Headline Color', 'write-and-read' ),
		'section'     => 'sidebar_settings',
		'priority'   => 1,
		'settings'    => 'sidebar_headline_color',
		) ) );

	$wp_customize->add_setting( 'sidebar_link_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_link_color', array(
		'label'       => __( 'Link Color', 'write-and-read' ),
		'section'     => 'sidebar_settings',
		'priority'   => 1,
		'settings'    => 'sidebar_link_color',
		) ) );

	$wp_customize->add_setting( 'sidebar_text_color', array(
		'default'           => '#333',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_text_color', array(
		'label'       => __( 'Text Color', 'write-and-read' ),
		'section'     => 'sidebar_settings',
		'priority'   => 1,
		'settings'    => 'sidebar_text_color',
		) ) );
	$wp_customize->add_section( 'footer_settings', array(
		'title'      => __('Footer Settings','write-and-read'),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
		) );
	$wp_customize->add_setting( 'footer_text_color', array(
		'default'           => '#656565',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
		'label'       => __( 'Text Color', 'write-and-read' ),
		'section'     => 'footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_text_color',
		) ) );
	$wp_customize->add_setting( 'footer_headline_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_headline_color', array(
		'label'       => __( 'Headline Color', 'write-and-read' ),
		'section'     => 'footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_headline_color',
		) ) );
	$wp_customize->add_setting( 'footer_link_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link_color', array(
		'label'       => __( 'Link Color', 'write-and-read' ),
		'section'     => 'footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_link_color',
		) ) );
	$wp_customize->add_setting( 'footer_border_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_border_color', array(
		'label'       => __( 'Border Color', 'write-and-read' ),
		'section'     => 'footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_border_color',
		) ) );

	$wp_customize->add_setting( 'footer_background_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background_color', array(
		'label'       => __( 'Background Color', 'write-and-read' ),
		'section'     => 'footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_background_color',
		) ) );
}
add_action( 'customize_register', 'write_and_read_customize_register' );




if(! function_exists('write_and_read_customizer_css_final_output' ) ):
	function write_and_read_customizer_css_final_output(){
?>
<style type="text/css">
	.main-navigation ul li a, .main-navigation ul li .sub-arrow, .super-menu .toggle-mobile-menu,.toggle-mobile-menu:before, .mobile-menu-active .smenu-hide { color: <?php echo esc_attr(get_theme_mod( 'navigation_text_color')); ?>; }
		#smobile-menu.show .main-navigation ul ul.children.active, #smobile-menu.show .main-navigation ul ul.sub-menu.active, #smobile-menu.show .main-navigation ul li, .smenu-hide.toggle-mobile-menu.menu-toggle, #smobile-menu.show .main-navigation ul li, .primary-menu ul li ul.children li, .primary-menu ul li ul.sub-menu li, .primary-menu .pmenu, .super-menu { border-color: <?php echo esc_attr(get_theme_mod( 'navigation_border_color')); ?>; border-bottom-color: <?php echo esc_attr(get_theme_mod( 'navigation_border_color')); ?>; }
		#secondary .widget h3, #secondary .widget h3 a, #secondary .widget h4, #secondary .widget h1, #secondary .widget h2, #secondary .widget h5, #secondary .widget h6, #secondary .widget h4 a { color: <?php echo esc_attr(get_theme_mod( 'sidebar_headline_color')); ?>; }
		#secondary .widget a, #secondary a, #secondary .widget li a , #secondary span.sub-arrow{ color: <?php echo esc_attr(get_theme_mod( 'sidebar_link_color')); ?>; }
		#secondary, #secondary .widget, #secondary .widget p, #secondary .widget li, .widget time.rpwe-time.published { color: <?php echo esc_attr(get_theme_mod( 'sidebar_text_color')); ?>; }
		#secondary .swidgets-wrap, #secondary .widget ul li, .featured-sidebar .search-field { border-color: <?php echo esc_attr(get_theme_mod( 'sidebar_border_color')); ?>; }
		.site-info, .footer-column-three input.search-submit, .footer-column-three p, .footer-column-three li, .footer-column-three td, .footer-column-three th, .footer-column-three caption { color: <?php echo esc_attr(get_theme_mod( 'footer_text_color')); ?>; }
		.footer-column-three h3, .footer-column-three h4, .footer-column-three h5, .footer-column-three h6, .footer-column-three h1, .footer-column-three h2, .footer-column-three h4, .footer-column-three h3 a { color: <?php echo esc_attr(get_theme_mod( 'footer_headline_color')); ?>; }
		.footer-column-three a, .footer-column-three li a, .footer-column-three .widget a, .footer-column-three .sub-arrow { color: <?php echo esc_attr(get_theme_mod( 'footer_link_color')); ?>; }
		.footer-column-three h3:after { background: <?php echo esc_attr(get_theme_mod( 'footer_border_color')); ?>; }
		.site-info, .widget ul li, .footer-column-three input.search-field, .footer-column-three input.search-submit { border-color: <?php echo esc_attr(get_theme_mod( 'footer_border_color')); ?>; }
		.site-footer { background-color: <?php echo esc_attr(get_theme_mod( 'footer_background_color')); ?>; }
		.content-wrapper h2.entry-title a, .content-wrapper h2.entry-title a:hover, .content-wrapper h2.entry-title a:active, .content-wrapper h2.entry-title a:focus, .archive .page-header h1, .blogposts-list h2 a, .blogposts-list h2 a:hover, .blogposts-list h2 a:active, .search-results h1.page-title { color: <?php echo esc_attr(get_theme_mod( 'blogfeed_headline_color')); ?>; }
		.blogposts-list .post-data-text, .blogposts-list .post-data-text a, .content-wrapper .post-data-text *{ color: <?php echo esc_attr(get_theme_mod( 'blogfeed_byline_color')); ?>; }
		.blogposts-list p { color: <?php echo esc_attr(get_theme_mod( 'blogfeed_text_color')); ?>; }		
</style>
<?php }
add_action( 'wp_head', 'write_and_read_customizer_css_final_output' );
endif;


function cptui_register_my_cpts_game() {

	/**
	 * Post Type: Jeux.
	 */

	$labels = [
		"name" => __( "Jeux", "twentytwentyone" ),
		"singular_name" => __( "jeu", "twentytwentyone" ),
		"menu_name" => __( "Jeux", "twentytwentyone" ),
	];

	$args = [
		"label" => __( "Jeux", "twentytwentyone" ),
		"labels" => $labels,
		"description" => "Informations détaillées d\'un jeu vidéo",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "game", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "thumbnail", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "game", $args );
}

add_action( 'init', 'cptui_register_my_cpts_game' );
