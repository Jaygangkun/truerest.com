<?php


function primer_setup() {
	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
  
	// Enqueue editor styles.
	add_editor_style( 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' );
	add_editor_style( get_template_directory_uri().'/template-parts/block/style.css' );
	
}

add_action( 'after_setup_theme', 'primer_setup' );

add_action('after_setup_theme','primer_ahoy', 15);

function primer_ahoy() {

    // enqueue base scripts and styles
    add_action('wp_enqueue_scripts', 'primer_scripts_and_styles', 999);

}

function primer_scripts_and_styles() {
    if (!is_admin()) {
        
      wp_register_style( 'fontawesome-stylesheet', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), '', 'all' );
      wp_register_style( 'bootstrap-stylesheet', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css', array(), '', 'all' );

      // register main stylesheet
      wp_register_style( 'block-stylesheet', get_stylesheet_directory_uri() . '/template-parts/block/style.css', array(), '', 'all' );
      
      // responsive stylesheet
      wp_register_style( 'block-responsive-stylesheet', get_stylesheet_directory_uri() . '/template-parts/block/responsive.css', array(), '', 'all' );
  
           
      // aos js
    //   wp_register_script( 'aos-js', get_stylesheet_directory_uri() . '/library/js/aos.js', array( 'jquery' ), '', true );
  
      //adding scripts file in the footer
      wp_register_script( 'block-js', get_stylesheet_directory_uri() . '/template-parts/block/scripts.js', array( 'jquery' ), '', true );
  
      // enqueue styles and scripts
      wp_enqueue_style( 'fontawesome-stylesheet' );
    //   wp_enqueue_style( 'bootstrap-stylesheet' );
      wp_enqueue_style( 'block-stylesheet' );
      wp_enqueue_style( 'block-responsive-stylesheet' );
      
  
      wp_enqueue_script( 'jquery' );
    //   wp_enqueue_script( 'aos-js' );
      wp_enqueue_script( 'block-js' );
  
    }
  }


/**************** Preview JS ****************/


// Still working out the kinks on this one.

/*
function primer_enqueue() {
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/library/js/libs/slick.min.js' );
    wp_enqueue_script( 'scripts-js', get_template_directory_uri() . '/library/js/scripts.js' );
}

add_action( 'enqueue_block_editor_assets', 'primer_enqueue' );
*/




/**************** Gutenberg Block Custom Category ****************/




function custom_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'custom',
				'title' => __( 'Custom', 'custom' ),
			),
		)
	);
}

add_filter( 'block_categories', 'custom_category', 10, 2);




/**************** Loading ACF into Gutenberg ****************/




// Render Callback

function my_acf_block_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_stylesheet_directory()."/template-parts/block/{$slug}.php" ) ) {
		include( get_stylesheet_directory()."/template-parts/block/{$slug}.php" );
	}
}


// Registering ACF Blocks

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
  	
		acf_register_block(array(
			'name'				=> 'landing-hero',
			'title'				=> __('Landing Hero'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'hero', 'header' )
		));

        acf_register_block(array(
			'name'				=> 'landing-freedom',
			'title'				=> __('Landing Freedom'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'hero', 'header' )
		));

        acf_register_block(array(
			'name'				=> 'landing-guarantee',
			'title'				=> __('Landing Guarantee'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'hero', 'header' )
		));

        acf_register_block(array(
			'name'				=> 'landing-floating',
			'title'				=> __('Landing Floating'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'hero', 'header' )
		));

        acf_register_block(array(
			'name'				=> 'landing-levels',
			'title'				=> __('Landing Levels'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'hero', 'header' )
		));
	}
}


// Add ACF Options Page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}
?>