<?php
function register_menus() {
    register_nav_menus(
        array( 'main-nav' => __( 'Main Nav' ) )
    );
}
add_action( 'init', 'register_menus' );
