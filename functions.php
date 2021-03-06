<?php

  function campus_files() {
    wp_enqueue_script('campus_js', get_theme_file_uri('/js/scripts-bundled.js'), null, '1.0', true);
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('campus_styles', get_stylesheet_uri());
    wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700');
  }

add_action('wp_enqueue_scripts', 'campus_files');

function campus_features() {
  register_nav_menu('navMenuLocation', 'main navigation location');
  register_nav_menu('footerleftMenu', 'footer navigation left');
  register_nav_menu('footerCenterMenu', 'footer navigation center');
  register_nav_menu('footerRightMenu', 'footer navigation right');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'campus_features');

