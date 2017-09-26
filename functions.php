<?php function add_categories_for_attachments() {
    register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'add_categories_for_attachments' );

function theme_styles() {
  global $wp_styles;
    wp_enqueue_style( 'jquery_mobile','http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css' );
    wp_enqueue_style( 'jquery_fancybox','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css' );
    wp_enqueue_style( 'fonts','https://fonts.googleapis.com/css?family=Dosis:400,700' );
    wp_enqueue_style( 'CS-style', get_template_directory_uri() . '/css/main.css' );
    wp_enqueue_style( 'CS-normalize', get_template_directory_uri() . '/css/normalizeV.7.0.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


function theme_scripts() {
  global $wp_styles;
    wp_enqueue_script( 'JS-fontawesome','https://use.fontawesome.com/6ecd0de8d5.js' );
    wp_enqueue_script( 'JS-fancybox','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js', array('jquery', 'jquery-ui-core') );
    wp_enqueue_script( 'JS-script', get_template_directory_uri() . '/js/jquery.js', array('jquery', 'jquery-ui-core'), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
