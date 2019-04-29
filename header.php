<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

<!-- container -->
<div class="container">

<div class="row">
    <div class="col-md-12">

                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <?php
                        wp_nav_menu( array(
                        'menu' => 'primary',
                        'depth' => 2,
                        'container' => false,
                        'menu_class' => 'navbar-nav ml-auto',
                        
                        'walker' => new wp_bootstrap_navwalker())
                        );
                    ?>
                </div>
                </nav>

    </div>
</div>