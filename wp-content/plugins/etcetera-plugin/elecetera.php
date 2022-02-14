<?php
/*
* Plugin Name: Etecetera
* Version: 1.0
* Author: Illia Hummeniuk
* License: GPLv2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

define("PLUGIN_PATH", plugin_dir_path( __FILE__ ));
define("PLUGIN_URL", plugin_dir_url(__FILE__));

function elecetera_init(){
    register_taxonomy("region", "property",[
        "label" => "Region",
        "public" => true,
    ]);

    register_post_type("property", [
        "label" => "Property",
        "public" => true,
        "menu_position" => 12,
        'hierarchical' => true,
        "supports" => ['title', 'editor', 'page-attributes', 'excerpt'],
        "publicly_queryable" => true
    ]);
}

add_action("init", "elecetera_init");

function elecetera_scripts(){
    wp_register_script("elecetera-search-property", PLUGIN_URL."/assets/js/search-property.js", array(), false, true);

    wp_localize_script("elecetera-search-property", "searchPropertyObject", array(
        "ajax_url"=> admin_url( 'admin-ajax.php' ),
    ));

    wp_enqueue_script("elecetera-search-property");
}

add_action("wp_enqueue_scripts", "elecetera_scripts");

require_once PLUGIN_PATH."/inc/class-widgets.php";

require_once PLUGIN_PATH."/inc/functions-ajax.php";