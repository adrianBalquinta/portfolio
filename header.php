<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is <?php bloginfo('name') ?>'s Portfolio">
    <meta name="author" content="<?php bloginfo('name') ?>">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <header class="header" id='header'>
        <div class="container">
        <?php
            dynamic_sidebar('links-1');
            get_template_part('template-parts/banner','title');
        ?>

        </div>
    </header>
    <?php
    require_once get_template_directory() . '/classes/Class_bootstrap_navwalker.php';
    ?>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510" id="navbar">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php

                wp_nav_menu(array(
                    'theme_location' => 'headerMenu',
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    //'items_wrap' => '<div class="container">',
                    'menu_class' => 'navbar-nav mr-auto',
                    'menu_id' => '/n',
                    'fallback_cb' => false,
                    //'depth' => 2,
                    'walker' => new Custom_NavWalker() // Custom nav walker for Bootstrap compatibility
                ));?>


        </div>
    </nav> 
