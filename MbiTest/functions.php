<?php

function mbi_register_styles(){
    wp_enqueue_style('mbi-custom', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'mbi_register_styles');

?>