<?php
/**
 * Created by PhpStorm.
 * User: Danny
 * Date: 30/01/2018
 * Time: 16:38
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <title>
        <?php bloginfo('name'); ?>|
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href=<?php bloginfo('stylesheet_url'); ?> rel="stylesheet">
    <!--Font Awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body>
<div id="alobaidi-fade-plugin"></div>
<div class="blog-masthead">
    <div class="container">

        <nav class="blog-nav">
            <?php
            wp_nav_menu(array(
                    'menu' => 'primary',
                    'theme_location' => 'primary',
                    'depth' => 2,
                    'container' => 'false',
                    'menu_class' => 'nav nav-list',
                    'fallback_cb' => 'wp_bootstrap_navlist_walker::fallback',
                    'walker' => new wp_bootstrap_navlist_walker())
            );
            ?>
        </nav>
    </div>
</div>

<div class="container">
    <div class="blog-header">

    </div>
