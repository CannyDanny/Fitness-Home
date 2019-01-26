<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
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
    <div class="logo">
        <h3>Fitness Home</h3>

    </div>
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

<section class="showcase">
    <?php wd_slider(1); ?>
    <div class="container">
        <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
        <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p>
        <a class="front-button" href="<?php echo get_theme_mod('button_url', 'http://google.com') ?>">
            <?php echo get_theme_mod('button_text', 'Read Me') ?>
        </a>
    </div>
</section>

<section class="boxes">
    <div class="container">
        <h1>What We Offer</h1>
        <div class="row">
            <div class="col-md-4 box1 box">
                <?php if (is_active_sidebar('box1')) : ?>
                    <?php dynamic_sidebar('box1'); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4 box2 box">
                <?php if (is_active_sidebar('box2')) : ?>
                    <?php dynamic_sidebar('box2'); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4 box3 box">
                <?php if (is_active_sidebar('box3')) : ?>
                    <?php dynamic_sidebar('box3'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="testimonials">
    <div class="container">
        <h1>Testimonials</h1>
        <div class="row">
            <div class="testimonial-box col-md-4">
                <img src="<?php echo get_theme_mod('testimonials_image1', get_bloginfo('template_url').'/img/donald1.jpg'); ?>">
                <p><?php echo get_theme_mod('testimonials_text1'); ?></p>

            </div>
            <div class="testimonial-box col-md-4">
                <img src="<?php echo get_theme_mod('testimonials_image2', get_bloginfo('template_url').'/img/donald2.jpg'); ?>">
                <p><?php echo get_theme_mod('testimonials_text2'); ?></p>

            </div>
            <div class="testimonial-box col-md-4">
                <img src="<?php echo get_theme_mod('testimonials_image3', get_bloginfo('template_url').'/img/donald1.jpg'); ?>">
                <p><?php echo get_theme_mod('testimonials_text3'); ?></p>

            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<?php wp_footer(); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>
</html>