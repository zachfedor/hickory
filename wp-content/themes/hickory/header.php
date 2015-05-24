<?php

/**
 * Header for Hickory.io
 */

// Lib/Doctype
hickory_do_doctype();

// Lib/Load-Assets
hickory_do_favicon();
hickory_do_scripts();

// Lib/Analytics
//hickory_analytics();

// Wordpress Head
wp_head();

// Lib/Header
hickory_do_header();

// Lib/Menu
hickory_do_main_menu();

// Lib/Header
hickory_do_header_hero();
