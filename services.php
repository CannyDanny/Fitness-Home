<?php /* Template Name: Services */ ?>
<?php get_header(); ?>

    <div class="container">
        <h2 class="blog-post-title">
            <?php the_title(); ?>

        </h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non dignissim turpis.
            Donec eget finibus sem, vel elementum urna. Fusce vitae turpis feugiat, dignissim nibh
            vel, ullamcorper erat. Nullam ut gravida nibh. Pellentesque fringilla egestas magna, vel
            ullamcorper justo accumsan vitae. Sed id ex ac est fringilla feugiat in vitae erat. Donec a
        </p>
        <div class="col">
            <ul class="price-box">
                <li class="header"><?php echo get_theme_mod('services_heading1', 'Offer'); ?></li>
                <li class="emph"><?php echo get_theme_mod('services_price1', '0.00'); ?></li>
                <li class="emph"><?php echo get_theme_mod('services_cardio1'); ?></li>
                <li class="emph"><?php echo get_theme_mod('services_crossfit1'); ?></li>
                <li class="emph"><?php echo get_theme_mod('services_time1'); ?></li>
                <li class="emph"><?php echo get_theme_mod('services_wellness1'); ?></li>
                <li class="emph<"><a href="#" class="button">Sign Up</a></li>
            </ul>
        </div>
        <div class="col">
            <ul class="price-box best">
                <li class="header header-green"><?php echo get_theme_mod('services_heading2', 'Offer'); ?></li>
                <li class="emph"><?php echo get_theme_mod('services_price2', '0.00'); ?></li>
                <li class="emph"><?php echo get_theme_mod('services_cardio2'); ?></li>
                <li class="emph"><?php echo get_theme_mod('services_crossfit2'); ?></li>
                <li class="emph"><?php echo get_theme_mod('services_time2'); ?></li>
                <li class="emph"><?php echo get_theme_mod('services_wellness2'); ?></li>
                <li class="emph<"><a href="#" class="button">Sign Up</a></li>
            </ul>
        </div>
        <div class="col">
            <ul class="price-box">
                <li class="header"><?php echo get_theme_mod('services_heading3', 'Offer'); ?></li>
                <li class="emph"><?php echo get_theme_mod('services_price3', '0.00'); ?></li>
                <li class="emph"><?php echo get_theme_mod('services_cardio3'); ?></li>
                <li class="emph"><?php echo get_theme_mod('services_crossfit3'); ?></li>
                <li class="emph"><?php echo get_theme_mod('services_time3'); ?></li>
                <li class="emph"><?php echo get_theme_mod('services_wellness3'); ?></li>
                <li class="emph<"><a href="#" class="button">Sign Up</a></li>
            </ul>
        </div>
    </div>

<?php get_footer(); ?>
<?php wp_footer(); ?>