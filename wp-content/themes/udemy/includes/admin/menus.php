<?php
/**
 * Created by PhpStorm.
 * User: gluca
 * Date: 23/03/17
 * Time: 20.50
 */

function gb_admin_menu() {

	add_menu_page(
		"Udemy Theme Options",
		"Theme Options",
		"edit_theme_options",
		"gb_theme_opts",
		"gb_theme_opts_page"
	);
}