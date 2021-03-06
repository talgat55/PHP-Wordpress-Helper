<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900|Open+Sans" rel="stylesheet">
    <?php wp_head(); ?>
    <title>
        <?php wp_title(); ?>
    </title>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="hamburger hamburger--slider">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12  text-center">
                        <div class="row">
                           <a href="<?php echo home_url(); ?>" class="logo">
                               <img src="<?php echo get_theme_file_uri('/assets/images/logo.png') ?>" alt="<?php  _e('Логотип', 'light'); ?>">
                           </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 text-right">
                        <div class="row">
                            <ul class="social-links">
                                <li>
                                    <a href="#" >
                                        <i class="fab fa-vk"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" >
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/search" >
                                        <i class="fas fa-search"></i>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <?php if(is_single()){
                        if(get_post_thumbnail_id(get_the_ID())){
                        ?>
                        <img class="single-news-image"  src=" <?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0]; ?>"
                             alt="<?=get_the_title(get_the_ID());?>"/>
                    <?php }  else{?>
                            <img src="<?php echo get_theme_file_uri('/assets/images/bg2.jpg') ?>" alt="<?php  _e('картинка', 'light'); ?>">
                    <?php   }
                    }else{  ?>
                            <img src="<?php echo get_theme_file_uri('/assets/images/bg2.jpg') ?>" alt="<?php  _e('картинка', 'light'); ?>">
                    <?php } ?>


                </div>
            </div>

        </div>
    </header>

    <div class="site-content-contain">
        <div id="content" class="site-content">
