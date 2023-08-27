<?php

function pizzeria_files(){
    wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css2?family=Raleway:wght@300;500;600;700;800&display=swap');
    wp_enqueue_style('custom-google-font','//fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

    wp_enqueue_script('jquery_pizzeria_js', get_theme_file_uri('/js/jquery.1.11.1.js'));
    wp_enqueue_script('bootstrap_pizzeria_js', get_theme_file_uri('/js/bootstrap.min.js'));
    
    wp_enqueue_script('main_pizzeria_js', get_theme_file_uri('/js/main.js'), array('jquery'),'1.11.1', true);

    wp_enqueue_style('bootstrap','//cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css');

    wp_enqueue_style('pizzeria_nivo-lightbox_styles', get_theme_file_uri('/css/nivo-lightbox/nivo-lightbox.css'));
    wp_enqueue_style('pizzeria_default_styles', get_theme_file_uri('/css/nivo-lightbox/default.css'));
    wp_enqueue_style('pizzeria_bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
    wp_enqueue_style('pizzeria_style', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('pizzeria_style2', get_theme_file_uri('/css/style2.css'));
}
add_action('wp_enqueue_scripts','pizzeria_files');

function pizzeria_features(){
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'pizzeria_features');

/**
 * Font Awesome Kit Setup
 *
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */
if (! function_exists('fa_custom_setup_kit') ) {
    function fa_custom_setup_kit($kit_url = '') {
      foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
        add_action(
          $action,
          function () use ( $kit_url ) {
            wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
          }
        );
      }
    }
  }
  fa_custom_setup_kit('https://kit.fontawesome.com/217941a73b.js');
