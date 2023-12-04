<?php
/**
 * Template Name: Example Template
 *
 * This is an example template file for a WordPress theme.
 * You can use this file as a starting point to create custom templates for your theme.
 */

get_header(); // Include the header template


// Display the page content
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}


get_footer(); // Include the footer template
