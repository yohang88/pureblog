<?php
function theme_setup() {

    register_nav_menu( 'primary', 'Navigation Menu' );

}

add_action( 'after_setup_theme', 'theme_setup' );
