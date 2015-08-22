<?php
/**
 * Plugin Name: Help Tab Test Case
 * Plugin URI:  http://unserkaiser.com
 * Description: Add Help Tab test case
 */
$screen = get_current_screen();
$screen->remove_help_tab( 'post' );
?>