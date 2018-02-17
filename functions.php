<?php



/**



 * Kepler functions and definitions



 *



 * @package Graphy



 */







/**



 * Enqueue scripts and styles.



 */



function kepler_scripts() {

$new_url = str_replace( 'http','https',get_template_directory_uri() );

	wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );



	wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css' );



	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );



	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css' );



	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );



	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );



	



	wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/js/jquery.min.js' );



	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js' );



	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/flexslider.js' );



	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js' );



	wp_enqueue_script( 'jquery.appear', get_template_directory_uri() . '/js/jquery.appear.js' );



	wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/js/mixitup.js' );



	wp_enqueue_script( 'jquery.validation', get_template_directory_uri() . '/js/jquery.validation.js' );



	wp_enqueue_script( 'jquery.parallax-1.1.3', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js' );



	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js' );



	



}



add_action( 'wp_enqueue_scripts', 'kepler_scripts' );







// Register Navigation Menus



function custom_navigation_menus() {







	$locations = array(



		'Kepler' => __( 'Kepler Menu', 'text_domain' ),



	);



	register_nav_menus( $locations );







}











//Shortens length of excerpt to 20 characters



function custom_excerpt_length( $length ) {



	return 20;



}



add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );











// Hook into the 'init' action



add_action( 'init', 'custom_navigation_menus' );











// Register Theme Features



function custom_theme_features()  {







	// Add theme support for Featured Images



	add_theme_support( 'post-thumbnails' );



	



	// Add Post formats



	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat',));



}







// Hook into the 'after_setup_theme' action



add_action( 'after_setup_theme', 'custom_theme_features' );











//Add's the "Excerpt" field



function add_excerpt() {



	add_post_type_support( 'page', 'excerpt' );



}







add_action('init', 'add_excerpt');











// add tag support to pages



function tags_support_all() {



	register_taxonomy_for_object_type('post_tag', 'page');



}







// ensure all tags are included in queries



function tags_support_query($wp_query) {



	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');



}







// tag hooks



add_action('init', 'tags_support_all');



add_action('pre_get_posts', 'tags_support_query');







// Register Sidebar



function kepler_sidebar() {







	$args = array(



		'id'            => 'footer1',



		'name'          => __( 'footer1', 'text_domain' ),



		'description'   => __( 'Footer Widget', 'text_domain' ),



		'before_widget' => '<div class="col-md-6">',



		'after_widget'  => '</div>',



	);



	register_sidebar( $args );



	



	$args = array(



		'id'            => 'footer2',



		'name'          => __( 'footer2', 'text_domain' ),



		'description'   => __( 'Footer Widget', 'text_domain' ),



		'before_widget' => '<div class="col-md-3">',



		'after_widget'  => '</div>',



	);



	register_sidebar( $args );







}







// Hook into the 'widgets_init' action



add_action( 'widgets_init', 'kepler_sidebar' );









add_theme_support( 'post-thumbnails', array( 'sermon_post_type' ) );





// Register Sermon Post Type



function sermon_post_type() {







	$labels = array(



		'name'                => _x( 'Sermons', 'Post Type General Name', 'text_domain' ),



		'singular_name'       => _x( 'sermons', 'Post Type Singular Name', 'text_domain' ),



		'menu_name'           => __( 'Sermons', 'text_domain' ),



		'name_admin_bar'      => __( 'Sermons', 'text_domain' ),



		'parent_item_colon'   => __( 'Parent Sermon:', 'text_domain' ),



		'all_items'           => __( 'All Sermons', 'text_domain' ),



		'add_new_item'        => __( 'Add New Sermon', 'text_domain' ),



		'add_new'             => __( 'Add New Sermon', 'text_domain' ),



		'new_item'            => __( 'New Sermon', 'text_domain' ),



		'edit_item'           => __( 'Edit Sermon', 'text_domain' ),



		'update_item'         => __( 'Update Sermon', 'text_domain' ),



		'view_item'           => __( 'View Sermon', 'text_domain' ),



		'search_items'        => __( 'Search Item', 'text_domain' ),



		'not_found'           => __( 'Not found', 'text_domain' ),



		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),



	);



	$args = array(



		'label'               => __( 'sermons', 'text_domain' ),



		'description'         => __( 'A place to post sermons', 'text_domain' ),



		'labels'              => $labels,



		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),



		



		'hierarchical'        => false,



		'public'              => true,



		'show_ui'             => true,



		'show_in_menu'        => true,



		'menu_position'       => 5,



		'show_in_admin_bar'   => true,



		'show_in_nav_menus'   => true,



		'can_export'          => true,



		'has_archive'         => true,		



		'exclude_from_search' => false,



		'publicly_queryable'  => true,



		'capability_type'     => 'post',



	);



	register_post_type( 'sermon', $args );







}







// Hook into the 'init' action



add_action( 'init', 'sermon_post_type', 0 );











// Register Custom Taxonomy



function bible_book() {







	$labels = array(



		'name'                       => _x( 'Bible Book', 'Taxonomy General Name', 'text_domain' ),



		'singular_name'              => _x( 'Bible Book', 'Taxonomy Singular Name', 'text_domain' ),



		'menu_name'                  => __( 'Bible Book', 'text_domain' ),



		'all_items'                  => __( 'All Bible Books', 'text_domain' ),



		'parent_item'                => __( 'Parent Bible Book', 'text_domain' ),



		'parent_item_colon'          => __( 'Parent Bible Book:', 'text_domain' ),



		'new_item_name'              => __( 'New Bible Book', 'text_domain' ),



		'add_new_item'               => __( 'Add New Bible Book', 'text_domain' ),



		'edit_item'                  => __( 'Edit Bible Book', 'text_domain' ),



		'update_item'                => __( 'Update Bible Book', 'text_domain' ),



		'view_item'                  => __( 'View Bible Book', 'text_domain' ),



		'separate_items_with_commas' => __( 'Separate Bible Books with commas', 'text_domain' ),



		'add_or_remove_items'        => __( 'Add or remove Bible Book', 'text_domain' ),



		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),



		'popular_items'              => __( 'Popular Bible Books', 'text_domain' ),



		'search_items'               => __( 'Search Bible Book', 'text_domain' ),



		'not_found'                  => __( 'Not Found', 'text_domain' ),



	);



	$args = array(



		'labels'                     => $labels,



		'hierarchical'               => false,



		'public'                     => true,



		'show_ui'                    => true,



		'show_admin_column'          => true,



		'show_in_nav_menus'          => true,



		'show_tagcloud'              => true,



	);



	register_taxonomy( 'bible_book', array( 'sermon' ), $args );







}







// Hook into the 'init' action



add_action( 'init', 'bible_book', 0 );



















// Register Custom Taxonomy



function speaker() {







	$labels = array(



		'name'                       => _x( 'Speakers', 'Taxonomy General Name', 'text_domain' ),



		'singular_name'              => _x( 'Speaker', 'Taxonomy Singular Name', 'text_domain' ),



		'menu_name'                  => __( 'Speaker', 'text_domain' ),



		'all_items'                  => __( 'All Speaker', 'text_domain' ),



		'parent_item'                => __( 'Parent Item', 'text_domain' ),



		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),



		'new_item_name'              => __( 'New Speaker', 'text_domain' ),



		'add_new_item'               => __( 'Add New Speaker', 'text_domain' ),



		'edit_item'                  => __( 'Edit Speaker', 'text_domain' ),



		'update_item'                => __( 'Update Speaker', 'text_domain' ),



		'view_item'                  => __( 'View Speaker', 'text_domain' ),



		'separate_items_with_commas' => __( 'Separate Speakers with commas', 'text_domain' ),



		'add_or_remove_items'        => __( 'Add or remove Speaker', 'text_domain' ),



		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),



		'popular_items'              => __( 'Popular Speaker', 'text_domain' ),



		'search_items'               => __( 'Search Speaker', 'text_domain' ),



		'not_found'                  => __( 'Not Found', 'text_domain' ),



	);



	$args = array(



		'labels'                     => $labels,



		'hierarchical'               => false,



		'public'                     => true,



		'show_ui'                    => true,



		'show_admin_column'          => true,



		'show_in_nav_menus'          => true,



		'show_tagcloud'              => true,



	);



	register_taxonomy( 'speaker', array( 'sermon' ), $args );







}







// Hook into the 'init' action



add_action( 'init', 'speaker', 0 );















// Register Custom Taxonomy



function sermon_series() {







	$labels = array(



		'name'                       => _x( 'Sermon Series', 'Taxonomy General Name', 'text_domain' ),



		'singular_name'              => _x( 'Sermon Series', 'Taxonomy Singular Name', 'text_domain' ),



		'menu_name'                  => __( 'Sermon Series', 'text_domain' ),



		'all_items'                  => __( 'All Sermon Series', 'text_domain' ),



		'parent_item'                => __( 'Parent Item', 'text_domain' ),



		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),



		'new_item_name'              => __( 'New Sermon Series', 'text_domain' ),



		'add_new_item'               => __( 'Add New Sermon Series', 'text_domain' ),



		'edit_item'                  => __( 'Edit Sermon Series', 'text_domain' ),



		'update_item'                => __( 'Update Sermon Series', 'text_domain' ),



		'view_item'                  => __( 'View Sermon Series', 'text_domain' ),



		'separate_items_with_commas' => __( 'Separate Sermon Series with commas', 'text_domain' ),



		'add_or_remove_items'        => __( 'Add or remove Sermon Series', 'text_domain' ),



		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),



		'popular_items'              => __( 'Popular Sermon Series', 'text_domain' ),



		'search_items'               => __( 'Search Sermon Series', 'text_domain' ),



		'not_found'                  => __( 'Not Found', 'text_domain' ),



	);



	$args = array(



		'labels'                     => $labels,



		'hierarchical'               => false,



		'public'                     => true,



		'show_ui'                    => true,



		'show_admin_column'          => true,



		'show_in_nav_menus'          => true,



		'show_tagcloud'              => true,



	);



	register_taxonomy( 'sermon_series', array( 'sermon' ), $args );







}







// Hook into the 'init' action



add_action( 'init', 'sermon_series', 0 );











// Register Custom Post Type for Footer



function brett_options() {







	$labels = array(



		'name'                => _x( 'Brett Options', 'Post Type General Name', 'text_domain' ),



		'singular_name'       => _x( 'Brett Option', 'Post Type Singular Name', 'text_domain' ),



		'menu_name'           => __( 'Brett Options', 'text_domain' ),



		'name_admin_bar'      => __( 'Brett Options', 'text_domain' ),



		'parent_item_colon'   => __( 'Parent Item: Brett Options', 'text_domain' ),



		'all_items'           => __( 'All Brett Options', 'text_domain' ),



		'add_new_item'        => __( 'Add New Brett Option', 'text_domain' ),



		'add_new'             => __( 'Add New', 'text_domain' ),



		'new_item'            => __( 'New Brett Option', 'text_domain' ),



		'edit_item'           => __( 'Edit Brett Option', 'text_domain' ),



		'update_item'         => __( 'Update Brett Option', 'text_domain' ),



		'view_item'           => __( 'View Brett Option', 'text_domain' ),



		'search_items'        => __( 'Search Brett Options', 'text_domain' ),



		'not_found'           => __( 'Not found', 'text_domain' ),



		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),



	);



	$args = array(



		'label'               => __( 'footer', 'text_domain' ),



		'description'         => __( 'This is the footer section for social buttons', 'text_domain' ),



		'labels'              => $labels,



		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'post-formats', ),



		'taxonomies'          => array( 'category', 'post_tag' ),



		'hierarchical'        => false,



		'public'              => true,



		'show_ui'             => true,



		'show_in_menu'        => true,



		'menu_position'       => 50,



		'show_in_admin_bar'   => true,



		'show_in_nav_menus'   => true,



		'can_export'          => true,



		'has_archive'         => true,		



		'exclude_from_search' => false,



		'publicly_queryable'  => true,



		'capability_type'     => 'post',



	);



	register_post_type( 'brett_options', $args );







}















// Register Spurgeon Daily Devotion Custom Post type



function daily_devotion() {







	$labels = array(



		'name'                => _x( 'Daily Devotions', 'Post Type General Name', 'text_domain' ),



		'singular_name'       => _x( 'Daily Devotion', 'Post Type Singular Name', 'text_domain' ),



		'menu_name'           => __( 'Daily Devotion', 'text_domain' ),



		'name_admin_bar'      => __( 'Daily Devotion', 'text_domain' ),



		'parent_item_colon'   => __( 'Parent Devotion:', 'text_domain' ),



		'all_items'           => __( 'All Devotions', 'text_domain' ),



		'add_new_item'        => __( 'Add New Devotion', 'text_domain' ),



		'add_new'             => __( 'Add New Devotion', 'text_domain' ),



		'new_item'            => __( 'New Devotion', 'text_domain' ),



		'edit_item'           => __( 'Edit Devotion', 'text_domain' ),



		'update_item'         => __( 'Update Devotion', 'text_domain' ),



		'view_item'           => __( 'View Devotion', 'text_domain' ),



		'search_items'        => __( 'Search Devotions', 'text_domain' ),



		'not_found'           => __( 'Not found', 'text_domain' ),



		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),



	);



	$args = array(



		'label'               => __( 'daily_devotion', 'text_domain' ),



		'description'         => __( 'This is the Spurgeon daily devotion Morning edition', 'text_domain' ),



		'labels'              => $labels,



		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', ),



		'taxonomies'          => array( 'category', 'post_tag' ),



		'hierarchical'        => false,



		'public'              => true,



		'show_ui'             => true,



		'show_in_menu'        => true,



		'menu_position'       => 5,



		'show_in_admin_bar'   => true,



		'show_in_nav_menus'   => true,



		'can_export'          => true,



		'has_archive'         => true,		



		'exclude_from_search' => false,



		'publicly_queryable'  => true,



		'capability_type'     => 'page',



	);



	register_post_type( 'daily_devotion', $args );







}







// Hook into the 'init' action



add_action( 'init', 'daily_devotion', 0 );







add_theme_support('post-formats', array( 'aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video', 'audio'));











function custom_pagination($numpages = '', $pagerange = '', $paged='') {



  if (empty($pagerange)) {

    $pagerange = 2;

  }



  /**

   * This first part of our function is a fallback

   * for custom pagination inside a regular loop that

   * uses the global $paged and global $wp_query variables.

   * 

   * It's good because we can now override default pagination

   * in our theme, and use this function in default quries

   * and custom queries.

   */

  global $paged;

  if (empty($paged)) {

    $paged = 1;

  }

  if ($numpages == '') {

    global $wp_query;

    $numpages = $wp_query->max_num_pages;

    if(!$numpages) {

        $numpages = 1;

    }

  }



  /** 

   * We construct the pagination arguments to enter into our paginate_links

   * function. 

   */

  $pagination_args = array(

    'base'            => get_pagenum_link(1) . '%_%',

    'format'          => 'page/%#%',

    'total'           => $numpages,

    'current'         => $paged,

    'show_all'        => False,

    'end_size'        => 1,

    'mid_size'        => $pagerange,

    'prev_next'       => True,

    'prev_text'       => __('&laquo;'),

    'next_text'       => __('&raquo;'),

    'type'            => 'plain',

    'add_args'        => false,

    'add_fragment'    => ''

  );



  $paginate_links = paginate_links($pagination_args);



  if ($paginate_links) {

    echo "<nav class='custom-pagination'>";

      echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";

      echo $paginate_links;

    echo "</nav>";

  }



}



//Advanced Custom Fields

if( function_exists('acf_add_local_field_group') ):



acf_add_local_field_group(array (

	'key' => 'group_55b41b3710ccf',

	'title' => 'Home Page',

	'fields' => array (

		array (

			'key' => 'field_55b41b40db641',

			'label' => 'Homepage',

			'name' => 'homepage',

			'type' => 'repeater',

			'instructions' => '',

			'required' => 0,

			'conditional_logic' => 0,

			'wrapper' => array (

				'width' => '',

				'class' => '',

				'id' => '',

			),

			'min' => '',

			'max' => '',

			'layout' => 'row',

			'button_label' => 'Add Row',

			'collapsed' => '',

			'sub_fields' => array (

				array (

					'key' => 'field_55b41b68db642',

					'label' => 'Title',

					'name' => 'title',

					'type' => 'text',

					'instructions' => '',

					'required' => 0,

					'conditional_logic' => 0,

					'wrapper' => array (

						'width' => '',

						'class' => '',

						'id' => '',

					),

					'default_value' => '',

					'placeholder' => '',

					'prepend' => '',

					'append' => '',

					'maxlength' => '',

					'readonly' => 0,

					'disabled' => 0,

				),

				array (

					'key' => 'field_55b41b9cdb643',

					'label' => 'Image',

					'name' => 'image',

					'type' => 'image',

					'instructions' => '',

					'required' => 0,

					'conditional_logic' => 0,

					'wrapper' => array (

						'width' => '',

						'class' => '',

						'id' => '',

					),

					'return_format' => 'url',

					'preview_size' => 'full',

					'library' => 'all',

					'min_width' => 0,

					'min_height' => 0,

					'min_size' => 0,

					'max_width' => 0,

					'max_height' => 0,

					'max_size' => 0,

					'mime_types' => '',

				),

				array (

					'key' => 'field_55b41bb6db644',

					'label' => 'Link',

					'name' => 'link',

					'type' => 'page_link',

					'instructions' => '',

					'required' => 0,

					'conditional_logic' => 0,

					'wrapper' => array (

						'width' => '',

						'class' => '',

						'id' => '',

					),

					'post_type' => array (

					),

					'taxonomy' => array (

					),

					'allow_null' => 0,

					'multiple' => 0,

				),

				array (

					'key' => 'field_55b4206ec8204',

					'label' => 'Content',

					'name' => 'content',

					'type' => 'wysiwyg',

					'instructions' => '',

					'required' => 0,

					'conditional_logic' => 0,

					'wrapper' => array (

						'width' => '',

						'class' => '',

						'id' => '',

					),

					'default_value' => '',

					'tabs' => 'all',

					'toolbar' => 'full',

					'media_upload' => 1,

				),

				array (

					'key' => 'field_55b45e4087072',

					'label' => 'Background Color',

					'name' => 'background_color',

					'type' => 'color_picker',

					'instructions' => '',

					'required' => 0,

					'conditional_logic' => 0,

					'wrapper' => array (

						'width' => '',

						'class' => '',

						'id' => '',

					),

					'default_value' => '',

				),

				array (

					'key' => 'field_55b512fbc3bd8',

					'label' => 'Text Color',

					'name' => 'text_color',

					'type' => 'color_picker',

					'instructions' => '',

					'required' => 0,

					'conditional_logic' => 0,

					'wrapper' => array (

						'width' => '',

						'class' => '',

						'id' => '',

					),

					'default_value' => '',

				),

			),

		),

		array (

			'key' => 'field_55b4563936d56',

			'label' => 'Homepage Slides',

			'name' => 'homepage_slides',

			'type' => 'repeater',

			'instructions' => '',

			'required' => 0,

			'conditional_logic' => 0,

			'wrapper' => array (

				'width' => '',

				'class' => '',

				'id' => '',

			),

			'min' => '',

			'max' => '',

			'layout' => 'row',

			'button_label' => 'Add Row',

			'collapsed' => '',

			'sub_fields' => array (

				array (

					'key' => 'field_55b4565836d57',

					'label' => 'Slides',

					'name' => 'slides',

					'type' => 'image',

					'instructions' => '',

					'required' => 0,

					'conditional_logic' => 0,

					'wrapper' => array (

						'width' => '',

						'class' => '',

						'id' => '',

					),

					'return_format' => 'url',

					'preview_size' => 'thumbnail',

					'library' => 'all',

					'min_width' => 0,

					'min_height' => 0,

					'min_size' => 0,

					'max_width' => 0,

					'max_height' => 0,

					'max_size' => 0,

					'mime_types' => '',

				),

			),

		),

	),

	'location' => array (

		array (

			array (

				'param' => 'page',

				'operator' => '==',

				'value' => '418',

			),

		),

	),

	'menu_order' => 0,

	'position' => 'normal',

	'style' => 'default',

	'label_placement' => 'top',

	'instruction_placement' => 'label',

	'hide_on_screen' => '',

	'active' => 1,

	'description' => '',

));



acf_add_local_field_group(array (

	'key' => 'group_55b41412be2e0',

	'title' => 'Sermon Single Fields',

	'fields' => array (

		array (

			'key' => 'field_55a66ca1f2acd',

			'label' => 'Add Sermon',

			'name' => 'add_sermon',

			'type' => 'file',

			'instructions' => 'Add your sermon audio file here.',

			'required' => 0,

			'conditional_logic' => 0,

			'wrapper' => array (

				'width' => '',

				'class' => '',

				'id' => '',

			),

			'library' => 'all',

			'return_format' => 'url',

			'min_size' => 0,

			'max_size' => 0,

			'mime_types' => '',

		),

	),

	'location' => array (

		array (

			array (

				'param' => 'post_type',

				'operator' => '==',

				'value' => 'sermon',

			),

		),

	),

	'menu_order' => 0,

	'position' => 'normal',

	'style' => 'seamless',

	'label_placement' => 'top',

	'instruction_placement' => 'label',

	'hide_on_screen' => array (

	),

	'active' => 1,

	'description' => '',

));



endif;



/**

 * Register Sermon post type, with REST API support

 *

 * Based on example at: https://codex.wordpress.org/Function_Reference/register_post_type

 */

add_action( 'init', 'my_sermon_cpt' );

function my_sermon_cpt() {

    $args = array(

      'public'       => true,

      'show_in_rest' => true,

      'label'        => 'Sermons',

      'supports'     => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ) 	

    );

    register_post_type( 'sermon', $args );

}

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

/**
* force plugins to load scripts with SSL if page is SSL
*/
function enqueueScriptsFix() {
    if (!is_admin()) {
        if (!empty($_SERVER['HTTPS'])) {
            global $wp_scripts;
            foreach ((array) $wp_scripts->registered as $script) {
                if (stripos($script->src, 'http://', 0) !== FALSE)
                    $script->src = str_replace('http://', 'https://', $script->src);
            }
        }
    }
}
 
/**
* force plugins to load styles with SSL if page is SSL
*/
function enqueueStylesFix() {
    if (!is_admin()) {
        if (!empty($_SERVER['HTTPS'])) {
            global $wp_styles;
            foreach ((array) $wp_styles->registered as $script) {
                if (stripos($script->src, 'http://', 0) !== FALSE)
                    $script->src = str_replace('http://', 'https://', $script->src);
            }
        }
    }
}