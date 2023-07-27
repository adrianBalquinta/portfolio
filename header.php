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
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="https://www.youtube.com/@adrianbalquinta9994" target="_blank"><i class="ti-youtube" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#" target="_blank"><i class="ti-linkedin" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="https://github.com/adrianBalquinta?tab=repositories" target="_blank"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
            <div class="header-content">
                <h4 class="header-subtitle">Hello, I am</h4>
                <h1 class="header-title"><?php bloginfo('name') ?></h1>
                <h6 class="header-mono" >Jr Web Designer | Developer</h6>
                <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Print Resume</button>
            </div>
        </div>
    </header>  