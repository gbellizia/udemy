<?php

function gb_admin_enqueue () {
	if (!isset($_GET["page"]) || $_GET["page"] !="gb_theme_opts"){
		return;
	}
	wp_register_style("gb_bootstrap", get_template_directory_uri() . "/assets/styles/bootstrap.css");
	wp_enqueue_style("gb_bootstrap");
	wp_register_script("gb_options", get_template_directory_uri() . "/assets/scripts/options.js", array(), false, true);
	wp_enqueue_script("gb_options");
}