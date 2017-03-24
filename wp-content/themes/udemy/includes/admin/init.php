<?php

function gb_admin_init() {
	include("enqueue.php");

	add_action("admin_enqueue_scripts", "gb_admin_enqueue");
	add_action("admin_post_gb_save_options", "gb_save_options");
}