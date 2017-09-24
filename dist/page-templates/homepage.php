<?php
/**
 * Template Name: Home Page
 *
 * Has linked scripts for 
 *
 * @package understrap
 */

get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;


/**
 * Custom Scripts go here (outside the quotes)
 */

echo '<script src="' . get_template_directory_uri() . '/src/plugins/skills/main.js' . '"></script>';
echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/plugins/skills/main.css' . '" />';


echo '<script src="' . get_template_directory_uri() . '/src/plugins/experience/main.js' . '"></script>';
echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/plugins/experience/main.css' . '" />';


get_footer();
