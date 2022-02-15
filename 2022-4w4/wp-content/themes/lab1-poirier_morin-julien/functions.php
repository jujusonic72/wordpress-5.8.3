<?php 
    function lab1_enqueue(){
        wp_enqueue_style('style-css', get_stylesheet_uri());
    }
    add_action("wp_enqueue_scripts", "lab1_enqueue");
?>