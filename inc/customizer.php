<?php
function wpb_customize_register($wp_customize)
{
//    Showcase Section

    $wp_customize->add_section('showcase', array(
        'title' => __('Showcase', 'wpbootstrap'),
        'description' => sprintf(__('Options for showcase', 'wpboostrap')),
        'priority' => 130
    ));

    $wp_customize->add_setting('showcase_image', array(
        'default' => get_bloginfo('template_directory') . '/img/showcase.jpg',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
        'label' => __('Showcase Image', 'wpbootstrap'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority' => 1
        )));

    $wp_customize->add_setting('showcase_heading', array(
        'default' => _x('Custom Bootstrap Wordpress Theme', 'wpboostrap'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
        'label' => __('Heading', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 2
    ));

    $wp_customize->add_setting('showcase_text', array(
        'default' => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'wpboostrap'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
        'label' => __('Text', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 3
    ));

    $wp_customize->add_setting('button_url', array(
        'default' => _x('htttp://google.com', 'wpboostrap'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('button_url', array(
        'label' => __('Button URL', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 4
    ));

    $wp_customize->add_setting('button_text', array(
        'default' => _x('Read More', 'wpboostrap'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('button_text', array(
        'label' => __('Button Text', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 5
    ));

//        Section Services

    $wp_customize->add_section('services', array(
        'title' => __('Services', 'wpbootstrap'),
        'description' => sprintf(__('Options for services', 'wpboostrap')),
        'priority' => 140
    ));

    $wp_customize->add_setting('services_heading1', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_heading1', array(
        'label' => __('Heading', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 1
    ));

    $wp_customize->add_setting('services_heading2', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_heading2', array(
        'label' => __('Heading2', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 2
    ));

    $wp_customize->add_setting('services_heading3', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_heading3', array(
        'label' => __('Heading3', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 3
    ));

    $wp_customize->add_setting('services_price1', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_price1', array(
        'label' => __('Price 1', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 4
    ));

    $wp_customize->add_setting('services_price2', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_price2', array(
        'label' => __('Price 2', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 5
    ));

    $wp_customize->add_setting('services_price3', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_price3', array(
        'label' => __('Price 3', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 6
    ));

    $wp_customize->add_setting('services_price3', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_price3', array(
        'label' => __('Price 3', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 6
    ));

    $wp_customize->add_setting('services_cardio1', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_cardio1', array(
        'label' => __('Cardio 1', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 7
    ));

    $wp_customize->add_setting('services_cardio2', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_cardio2', array(
        'label' => __('Cardio 2', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 8
    ));

    $wp_customize->add_setting('services_cardio3', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_cardio3', array(
        'label' => __('Cardio 3', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 9
    ));

    $wp_customize->add_setting('services_crossfit1', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_crossfit1', array(
        'label' => __('CrossFit 1', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 10
    ));

    $wp_customize->add_setting('services_crossfit2', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_crossfit2', array(
        'label' => __('CrossFit 2', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 11
    ));

    $wp_customize->add_setting('services_crossfit3', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_crossfit3', array(
        'label' => __('CrossFit 3', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 12
    ));

    $wp_customize->add_setting('services_time1', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_time1', array(
        'label' => __('Time 1', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 13
    ));

    $wp_customize->add_setting('services_time2', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_time2', array(
        'label' => __('Time 2', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 14
    ));

    $wp_customize->add_setting('services_time3', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_time3', array(
        'label' => __('Time 3', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 15
    ));


    $wp_customize->add_setting('services_wellness1', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_wellness1', array(
        'label' => __('Wellness 1', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 16
    ));

    $wp_customize->add_setting('services_wellness2', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_wellness2', array(
        'label' => __('Wellness 2', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 17
    ));

    $wp_customize->add_setting('services_wellness3', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services_wellness3', array(
        'label' => __('Wellness 3', 'wpbootstrap'),
        'section' => 'services',
        'priority' => 18
    ));

    //        Section Testimonials

    $wp_customize->add_section('testimonials', array(
        'title' => __('Testimonials', 'wpbootstrap'),
        'description' => sprintf(__('Options for testimonials', 'wpboostrap')),
        'priority' => 150
    ));

    $wp_customize->add_setting('testimonials_text1', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('testimonials_text1', array(
        'label' => __('First Testimonial', 'wpbootstrap'),
        'section' => 'testimonials',
        'priority' => 1
    ));

    $wp_customize->add_setting('testimonials_text2', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('testimonials_text2', array(
        'label' => __('Second Testimonial', 'wpbootstrap'),
        'section' => 'testimonials',
        'priority' => 2
    ));

    $wp_customize->add_setting('testimonials_text3', array(
        'default' => _x('', 'wpboostrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('testimonials_text3', array(
        'label' => __('Third Testimonial', 'wpbootstrap'),
        'section' => 'testimonials',
        'priority' => 3
    ));

    $wp_customize->add_setting('testimonials_image1', array(
        'default' => get_bloginfo('template_directory') . '/img/donald1.jpg',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonials_image1', array(
        'label' => __('Testimonial Image', 'wpbootstrap'),
        'section' => 'testimonials',
        'settings' => 'testimonials_image1',
        'priority' => 4
    )));


    $wp_customize->add_setting('testimonials_image2', array(
        'default' => get_bloginfo('template_directory') . '/img/donald2.jpg',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonials_image2', array(
        'label' => __('Testimonial Image', 'wpbootstrap'),
        'section' => 'testimonials',
        'settings' => 'testimonials_image2',
        'priority' => 4
    )));

    $wp_customize->add_setting('testimonials_image3', array(
        'default' => get_bloginfo('template_directory') . '/img/donald1.jpg',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonials_image3', array(
        'label' => __('Testimonial Image', 'wpbootstrap'),
        'section' => 'testimonials',
        'settings' => 'testimonials_image3',
        'priority' => 4
    )));






}

add_action('customize_register', 'wpb_customize_register');