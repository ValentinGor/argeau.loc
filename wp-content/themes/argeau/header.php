<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Argeau
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="top__line">
                    <div class="top__line_logo">
                        <a href="<?php echo get_home_url();?>">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="img">
                        </a>
                    </div>
                    <div class="top__line_menu">
                        <a id="menu_toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sticky__header">
                        <div class="sticky__header_logo">
                            <a href="<?php echo get_home_url();?>">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-icon.svg" alt="img">
                            </a>
                        </div>
                        <div class="sticky__header_menu">
                            <div class="top__line_menu">
                                <a id="menu_toggle_sticky" href="#">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<menu id="menu">
    <li><a href="#">What we do</a></li>
    <li><a href="#">Why Argeau</a></li>
    <li><a href="#">People</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">News</a></li>
    <li><a href="#">Login</a></li>
</menu>