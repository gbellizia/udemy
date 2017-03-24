<?php
function gb_enqueue(){
    
    wp_register_style("gb_bootstrap", get_template_directory_uri() . "/assets/styles/bootstrap.css");
    wp_register_style("gb_main", get_template_directory_uri() . "/assets/styles/main.css");
    wp_register_style("gb_roboto","http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900");
    wp_register_style("gb_roboto_mono","http://fonts.googleapis.com/css?family=Roboto+Mono:400,300,700");
  
    wp_enqueue_style("gb_bootstrap");
    wp_enqueue_style("gb_main");
    wp_enqueue_style("gb_roboto");
    wp_enqueue_style("gb_roboto_mono");
    
    wp_register_script("gb_fastclick", get_template_directory_uri() . "/assets/vendor/fastclick/fastclick.js");
    wp_register_script("gb_modernizr", get_template_directory_uri() . "/assets/vendor/modernizr/modernizr.js");
    wp_register_script("gb_bootstrap", get_template_directory_uri() . "/assets/scripts/bootstrap.min.js", array(), false, true);
    wp_register_script("gb_rippler", get_template_directory_uri() . "/assets/vendor/rippler/rippler.min.js", array(), false, true);
    wp_register_script("gb_slimscroll", get_template_directory_uri() . "/assets/vendor/slimscroll/slimscroll.min.js", array(), false, true);
    wp_register_script("gb_swipebox", get_template_directory_uri() . "/assets/vendor/swipebox/swipebox.min.js", array(), false, true);
    wp_register_script("gb_dotdotdot", get_template_directory_uri() . "/assets/vendor/dotdotdot/dotdotdot.min.js", array(), false, true);
    wp_register_script("gb_app", get_template_directory_uri() . "/assets/scripts/app.js", array(), false, true);
    
    wp_enqueue_script("jquery");
    wp_enqueue_script("gb_fastclick");
    wp_enqueue_script("gb_modernizr");
    wp_enqueue_script("gb_bootstrap");
    wp_enqueue_script("gb_rippler");
    wp_enqueue_script("gb_slimscroll");
    wp_enqueue_script("gb_swipebox");
    wp_enqueue_script("gb_dotdotdot");
    wp_enqueue_script("gb_app");
    
           
}