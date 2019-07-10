<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Beaver Builder Modules Load Filter
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Speeds up Beaver Builder by loading only necessary modules.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined('ABSPATH') || die;

add_filter('fl_builder_load_modules_paths', function ($paths) {

    $disable_modules = [
		'accordion',
		'audio',
		'callout',
		'contact-form',
		'content-slider',
		'countdown',
		'cta',
		'gallery',
		'map',
		'numbers',
		'post-carousel',
		'post-slider',
		'pricing-table',
		'sidebar',
		'slideshow',
		'social-buttons',
		'subscribe-form',
		'tabs',
		'testimonials',
		'video',
		'widget',
		'woocommerce',
    ];

    $selected_paths = [];
    foreach ($paths as $path) {
        if (!in_array(basename($path), $disable_modules)) {
            $selected_paths[] = $path;
        }
    }

    return $selected_paths;

});
