<?php

/**
 * The plugin file
 *
 *
 * @link              on-lingua.com
 * @since             0.1
 * @package           Contextual Help
 *
 * @wordpress-plugin
 * Plugin Name:       Contextual Help 4
 * Plugin URI:        on-lingua.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.1
 * Author:            Toni
 * Author URI:        on-lingua.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       Contextual Help 4 https://codex.wordpress.org/Adding_Contextual_Help_to_Administration_Menus
 * Domain Path:       /languages
 */

/* To changed that, change the “post” in the if statement to the page’s screen ID you’d like to add it to. You can find the screen ID for all the pages in the WordPress Dashboard here http://codex.wordpress.org/Plugin_API/Admin_Screen_Referenceadd_action

('contextual_help', 'my_custom_help', 10, 3);

function my_custom_help($contextual_help, $screen_id, $screen) {
	if ( $screen_id == 'post'  ) {
		$contextual_help = '<p><b>This is my custom help text</b></p>';
	}
	return $contextual_help;
}
*/

function myprefix_page_help($contextual_help, $screen_id, $screen) {

  if ($screen_id == 'page') {
    $contextual_help = $contextual_help.'
    <h5>Shortcodes</h5>
    <p>Shortcodes help</p>';
  }

  elseif ($screen_id == 'post') {
    $contextual_help = $contextual_help.'
    <h5>Post help</h5>
    <p>Help is on its way!</p>';
  }

  return $contextual_help;
}       

add_filter('contextual_help', 'myprefix_page_help', 10, 3);


?>