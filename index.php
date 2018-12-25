<!DOCTYPE html>
<html lang="zxx" <?php language_attributes(); ?>>
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Carrby - Agency Template">
        <meta name="author" content="">

        <!-- Page Title -->
        <title>Carrby - Agency Template</title>

        <!-- Favicon and Touch Icons -->
        <link href="<?php bloginfo('template_url') ?> /images/favicon.png" rel="shortcut icon" type="image/png">

        <!-- Lead Style -->
        <link href="<?php bloginfo('template_url') ?> /css/style.css" rel="stylesheet" type="text/css">
        
        <?php wp_head() ?>

    </head>

    <body>
    
        <?php get_header() ?>
        
        <?php get_template_part('parts/slider') ?>
        
        <?php get_template_part('parts/main') ?>

        <?php get_template_part('parts/about') ?>
          
        <?php get_template_part('parts/works') ?>

        <?php get_template_part('parts/blog') ?>

        <?php get_template_part('parts/contact') ?>

        <?php get_footer() ?>


        <!-- All JavaScript Files
        ================================================== -->
        <script src="<?php bloginfo('template_url') ?> /js/jquery-3.2.1.min.js"></script>
        <script src="<?php bloginfo('template_url') ?> /js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_url') ?> /js/jquery.mixitup.min.js"></script>
        <script src="<?php bloginfo('template_url') ?> /js/jquery.fancybox.min.js"></script>
        <script src="<?php bloginfo('template_url') ?> /js/owl.carousel.js"></script>
        <script src="<?php bloginfo('template_url') ?> /js/typed.min.js"></script>
        <script src="<?php bloginfo('template_url') ?> /js/menu.js"></script>
        <script src="<?php bloginfo('template_url') ?> /js/custom.js"></script>

    </body>
</html>
