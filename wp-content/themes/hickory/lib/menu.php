<?php

/**
 * Menu Layout
 */

function hickory_do_main_menu()
{
    $args = array(
        'theme_location'  => 'main_menu',
        'container'       => 'nav',
        'container_class' => 'main-menu'
    );

    wp_nav_menu( $args );
}
