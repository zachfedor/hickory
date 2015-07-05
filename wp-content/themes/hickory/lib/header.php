<?php

/**
 * Header Layout
 */

// Header function to close <head> tag and open <body>
function hickory_do_header()
{
    ?>
    </head>
    <body class="">
        <header class="mobile-header">
            <a href="#" class="site-title">Hickory Town Workshop</a>

            <a href="#" id="menu-button">menu</a>

            <?php
            /*
            * @todo add mobile navigation
            */
            ?>
        </header>
        <?php
}

// Header Hero function to create large image and site title
function hickory_do_header_hero()
{
    ?>
    <header class="site-header container" >
        <a class="site-title" href="/" ><span class="hickory">Hickory</span>Town Workshop</a>
    </header>
    <?php
}
