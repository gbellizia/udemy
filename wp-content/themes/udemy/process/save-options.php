<?php
function gb_save_options() {
	if (!current_user_can("edit_theme_options")) {
		wp_die("Area 51. No authorization");

	}

	check_admin_referer("gb_options_verify");

	$opts               = get_option("gb_opts");
	$opts["twitter"]    = sanitize_text_field($_POST["ju_inputTwitter"]);
	$opts["facebook"]    = sanitize_text_field($_POST["ju_inputFacebook"]);
	$opts["youtube"]    = sanitize_text_field($_POST["ju_inputYoutube"]);
	$opts["logo_type"]    = absint($_POST["ju_inputLogoType"]);
	$opts["footer"]    = $_POST["ju_inputFooter"];

	update_option("gb_opts", $opts);
	wp_redirect(admin_url("admin.php?page=gb_theme_opts&status=1"));
}