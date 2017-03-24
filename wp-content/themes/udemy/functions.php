<?php

//Setup
add_theme_support("menus");
add_theme_support("post-thumbnails");

//Includes
include(get_template_directory() . "/includes/front/enqueue.php");
include(get_template_directory() . "/includes/setup.php");
include(get_template_directory() . "/includes/widgets.php");
include(get_template_directory() . "/includes/admin/menus.php");
include(get_template_directory() . "/includes/admin/options-page.php");
include(get_template_directory() . "/includes/admin/init.php");
include(get_template_directory() . "/process/save-options.php");

//Action & flter Hooks
add_action("wp_enqueue_scripts","gb_enqueue");
add_action("after_setup_theme","gb_setup_theme");
add_action("widgets_init","gb_widgets");
add_action("admin_menu", "gb_admin_menu");
add_action("admin_init", "gb_admin_init");

//Shortcodes
