<?php
/**
 * Theme functions and definitions
 */

if (!function_exists('theme_setup')) {
    function theme_setup() {
        // Add default posts and comments RSS feed links to head
        add_theme_support('automatic-feed-links');
        
        // Let WordPress manage the document title
        add_theme_support('title-tag');
        
        // Enable support for Post Thumbnails on posts and pages
        add_theme_support('post-thumbnails');
        
        // This theme uses wp_nav_menu() in two locations
        register_nav_menus(array(
            'primary-menu' => esc_html__('Primary Menu', 'theme-name'),
            'footer-menu'  => esc_html__('Footer Menu', 'theme-name'),
        ));
        
        // Add theme support for Custom Logo
        add_theme_support('custom-logo', array(
            'height'      => 100,
            'width'       => 300,
            'flex-height' => true,
            'flex-width'  => true,
        ));
    }
}
add_action('after_setup_theme', 'theme_setup');

// Enqueue scripts and styles
function theme_scripts() {
    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
    
    // Enqueue main stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue custom scripts
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');

// Theme Customizer
function theme_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title'    => __('Hero Section', 'theme-name'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default'   => 'SİZE KALİTELİ HİZMET SAĞLIYORUZ',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label'    => __('Hero Title', 'theme-name'),
        'section'  => 'hero_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('hero_description', array(
        'default'   => 'Kaliteli hizmet anlayışımızla size en iyi çözümleri sunuyoruz',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('hero_description', array(
        'label'    => __('Hero Description', 'theme-name'),
        'section'  => 'hero_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('hero_button_text', array(
        'default'   => 'DAHA FAZLA BİLGİ',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('hero_button_text', array(
        'label'    => __('Button Text', 'theme-name'),
        'section'  => 'hero_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('hero_button_url', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('hero_button_url', array(
        'label'    => __('Button URL', 'theme-name'),
        'section'  => 'hero_section',
        'type'     => 'url',
    ));
    
    // Features Section
    $wp_customize->add_section('features_section', array(
        'title'    => __('Features Section', 'theme-name'),
        'priority' => 40,
    ));
    
    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting('feature_image_' . $i, array(
            'default'   => get_template_directory_uri() . '/assets/img/icon' . $i . '.png',
            'transport' => 'refresh',
        ));
        
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_image_' . $i, array(
            'label'    => __('Feature ' . $i . ' Image', 'theme-name'),
            'section'  => 'features_section',
        )));
        
        $wp_customize->add_setting('feature_title_' . $i, array(
            'default'   => 'Özellik ' . $i,
            'transport' => 'refresh',
        ));
        
        $wp_customize->add_control('feature_title_' . $i, array(
            'label'    => __('Feature ' . $i . ' Title', 'theme-name'),
            'section'  => 'features_section',
            'type'     => 'text',
        ));
        
        $wp_customize->add_setting('feature_description_' . $i, array(
            'default'   => 'Bu alanda hizmetlerimiz hakkında detaylı bilgi verilmektedir.',
            'transport' => 'refresh',
        ));
        
        $wp_customize->add_control('feature_description_' . $i, array(
            'label'    => __('Feature ' . $i . ' Description', 'theme-name'),
            'section'  => 'features_section',
            'type'     => 'textarea',
        ));
    }
    
    // About Section
    $wp_customize->add_section('about_section', array(
        'title'    => __('About Section', 'theme-name'),
        'priority' => 50,
    ));
    
    $wp_customize->add_setting('about_title', array(
        'default'   => 'HAKKIMIZDA',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('about_title', array(
        'label'    => __('About Title', 'theme-name'),
        'section'  => 'about_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('about_description', array(
        'default'   => 'Firmamız uzun yıllardır sektörde hizmet vermektedir. Müşteri memnuniyeti odaklı çalışmalarımızla öne çıkıyoruz.',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('about_description', array(
        'label'    => __('About Description', 'theme-name'),
        'section'  => 'about_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('about_button_text', array(
        'default'   => 'DAHA FAZLA',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('about_button_text', array(
        'label'    => __('Button Text', 'theme-name'),
        'section'  => 'about_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('about_button_url', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('about_button_url', array(
        'label'    => __('Button URL', 'theme-name'),
        'section'  => 'about_section',
        'type'     => 'url',
    ));
    
    $wp_customize->add_setting('about_image', array(
        'default'   => get_template_directory_uri() . '/assets/img/about.jpg',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image', array(
        'label'    => __('About Image', 'theme-name'),
        'section'  => 'about_section',
    )));
    
    // Footer Settings
    $wp_customize->add_section('footer_section', array(
        'title'    => __('Footer Settings', 'theme-name'),
        'priority' => 90,
    ));
    
    $wp_customize->add_setting('footer_address', array(
        'default'   => 'İstanbul, Türkiye',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('footer_address', array(
        'label'    => __('Address', 'theme-name'),
        'section'  => 'footer_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('footer_phone', array(
        'default'   => '+90 555 123 4567',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('footer_phone', array(
        'label'    => __('Phone', 'theme-name'),
        'section'  => 'footer_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('footer_email', array(
        'default'   => 'info@example.com',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('footer_email', array(
        'label'    => __('Email', 'theme-name'),
        'section'  => 'footer_section',
        'type'     => 'text',
    ));
    
    // Social Media
    $wp_customize->add_setting('social_facebook', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('social_facebook', array(
        'label'    => __('Facebook URL', 'theme-name'),
        'section'  => 'footer_section',
        'type'     => 'url',
    ));
    
    $wp_customize->add_setting('social_twitter', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('social_twitter', array(
        'label'    => __('Twitter URL', 'theme-name'),
        'section'  => 'footer_section',
        'type'     => 'url',
    ));
    
    $wp_customize->add_setting('social_instagram', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('social_instagram', array(
        'label'    => __('Instagram URL', 'theme-name'),
        'section'  => 'footer_section',
        'type'     => 'url',
    ));
    
    $wp_customize->add_setting('social_linkedin', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('social_linkedin', array(
        'label'    => __('LinkedIn URL', 'theme-name'),
        'section'  => 'footer_section',
        'type'     => 'url',
    ));
    
    $wp_customize->add_setting('copyright_text', array(
        'default'   => 'Tüm hakları saklıdır.',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('copyright_text', array(
        'label'    => __('Copyright Text', 'theme-name'),
        'section'  => 'footer_section',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'theme_customize_register');
