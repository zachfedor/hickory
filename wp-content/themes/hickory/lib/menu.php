<?php

/**
 * Menu Layout
 */

function hickory_do_main_menu()
{
    $args = array(
        'theme_location'  => 'main_menu',
        'container'       => 'nav',
        'container_class' => 'main-menu container',
        'items_wrap'      => '<ul id="%1$s" class="%2$s row">%3$s</ul>'
    );

    wp_nav_menu( $args );
}
