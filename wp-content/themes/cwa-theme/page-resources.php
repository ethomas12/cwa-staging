<?php

/**
 * Template Name: Group Landing Page
 *
 * @package WordPress
 */
// This file handles pages, but only exists for the sake of child theme forward compatibility.

add_action('genesis_after_entry_content', 'add_landing_page_widgets');
function add_landing_page_widgets() {
    genesis_widget_area( 'land-widget-1', array(
        'before' => '<div id="land-widget-1" class="land-widget-1 widget-area"><div class="wrap">',
        'after'  => '</div></div>',
    ) );
}
genesis();