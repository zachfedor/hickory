<?php

/**
 * Menu for Hickory.io
 */

?>
<aside class="sidebar">

    <header class="site-header " >
        <a class="site-title" href="/" ><span class="hickory">Hickory</span>Town Workshop</a>
    </header>

<?php

$args = array(
    'theme_location'  => 'main',
    'container'       => 'nav',
    'container_class' => 'main-nav',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
);

wp_nav_menu( $args );

$args = array(
    'theme_location'  => 'social',
    'container'       => 'nav',
    'container_class' => 'social-nav',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
);

wp_nav_menu( $args );

?>

    <footer class="block">
        Copyright 2015 Hickory Town Workshop<br />
        20 S. Duke Street<br />
        Lancaster, PA 17602
    </footer>
</aside>
