<?php

/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

    //******************************************************************************
	$options[] = array(
		'name' => __('Réseaux sociaux', 'options_check'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Behance', 'options_check'),
		'id' => 'behance_link',
		'type' => 'text');

    $options[] = array(
  		'name' => __('Twitter', 'options_check'),
  		'id' => 'twitter_link',
  		'type' => 'text');

      $options[] = array(
    		'name' => __('GooglePlus', 'options_check'),
    		'id' => 'googleplus_link',
    		'type' => 'text');

	return $options;
}

?>
