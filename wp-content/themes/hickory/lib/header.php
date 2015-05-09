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
        <div class="site-background"></div>
    <?php
}

// Header Hero function to create large image and site title
function hickory_do_header_hero()
{
    ?>
    <header class="site-header container" >
        <a class="site-title" href="/" ><span class="hickory">Hickory</span><br/>Town Workshop</a>
    </header>
    <?php
}
