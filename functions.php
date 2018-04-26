<?php

function campus_files() {
wp_enqueue_style('campus_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'campus_files');
