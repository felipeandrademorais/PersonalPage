<?php 

/**
 * Nome: functions.php
 * Descrição: Arquivo com funções de configuração do wordpress.
 * Author: Felipe Andrade de Morais
 */

// Importando o arquivo do Customizer
require get_template_directory() . '/inc/customizer.php';

// Importando arquivos com campos personalizados
require get_template_directory() . '/inc/acf-fields.php';


/**
 * Função responsável por carregar scripts Javascript e CSS;
 */
function  load_scripts() {
    wp_enqueue_style( 'geral',        get_template_directory_uri().'/assets/css/geral.css', array(), null, 'all');
    wp_enqueue_script('scrollreveal', 'https://unpkg.com/scrollreveal@4.0.9/dist/scrollreveal.min.js', array(), null, true);
	wp_enqueue_script('slick-js',     get_template_directory_uri() . '/assets/js/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('script',       get_template_directory_uri().'/assets/js/scripts.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'load_scripts');

/**
 * Suporte title tag
 */
add_theme_support( 'title-tag' );

/**
 * Suporte a Logo
 */
$options = [
    'header-text' => [
        'site-title',
        'site-description',
    ],
    'height'      => 150,
    'width'       => 25,
    'flex-height' => true,
    'flex-width'  => true
];

add_theme_support('custom-logo', $options);


/**
 * Register Menus
 */

register_nav_menus(
	array(
		'main_menu' => _('Menu Principal', 'main-menu')
	)
);

/**
 * Register Sidebar
 */
register_sidebar(
    [
        'name'          => esc_html__( 'home-widgets', 'Portfolio' ),
        'id'            => 'home-widgets',
        'description'   => 'Widgets from home',
        'before_widget' => '<div id="%1$s" class="delayMediumReveal" >',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]
);

register_sidebar(
    [
        'name'          => esc_html__( 'bottom-widgets', 'Portfolio' ),
        'id'            => 'bottom-widgets',
        'description'   => 'Widgets from bottom',
        'before_widget' => '<div id="%1$s" class="bottom-widget" >',
        'after_widget'  => '</div>',
    ]
);

/**
 * Register PostTypes;
 */
function register_post_types() {
	register_post_type(
		'projects',
		array(
			'labels' => array(
				'name' => __('Projects'),
				'singular_name' => __('Projects')
			),
			'public' => false,
			'show_ui' => true,
			'has_archive' => false,
			'menu_icon' => 'dashicons-format-gallery',
			'supports' => array('title')
		)
	);

    register_post_type(
		'skills',
		array(
			'labels' => array(
				'name' => __('Skills'),
				'singular_name' => __('Skills')
			),
			'public' => false,
			'show_ui' => true,
			'has_archive' => false,
			'menu_icon' => 'dashicons-format-gallery',
			'supports' => array('title')
		)
	);
}

add_action('init', 'register_post_types');










