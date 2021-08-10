<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js"> <![endif]-->
  <head>
     <?php if ( function_exists( 'get_option_tree') ) {
        $theme_options = get_option('option_tree');  
      } ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="bliccathemes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
    if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
     if (!empty($theme_options['favicon_upload'])){
     ?>
        <link rel="shortcut icon" href="<?php echo esc_url($theme_options['favicon_upload']); ?>" />
     <?php     
     }
    }
    ?>    
    <?php wp_head(); ?>
    <!--[if IE 7]>
      <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
    <![endif]-->
	<?php $analytics = get_option_tree('analytics', $theme_options);
	if ( $analytics != "") {
		echo $analytics;
	}
	?>	
  </head>
  <body <?php body_class('off'); ?>>
    <header class="landing-header">
        <div class="container">
            <div class="landing-header-wrap">
                <a class="header-logo-link">
                    <?php
                    $logo = get_field('landing_header_logo', 'option');
                    if($logo){
                        ?>
                        <img class="header-logo-img" src="<?php echo $logo['url']?>" alt="<?php echo $logo['alt']?>">
                        <?php
                    }
                    ?>
                </a>
                <div class="header-links">
                    <?php
                    $link = get_field('landing_header_link', 'option');
                    if($link) {
                        ?>
                        <a class="header-text-link" href="<?php echo $link['url']?>" target="<?php echo $link['target']?>"><?php echo $link['title']?></a>
                        <?php
                    }
                    ?>

                    <?php
                    $phone = get_field('landing_header_phone', 'option');
                    if($phone) {
                        ?>
                        <a class="header-btn-link" href="tel:<?php echo $phone?>">
                            <div class="header-btn-link-wrap">
                                <i class="fa fa-phone"></i>
                                <?php echo $phone?>
                            </div>
                        </a>
                        <?php
                    }
                    ?>
                    
                </div>
            </div>
            
        </div>
    </header>