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
 * Plugin Name:       Contextual Help 3
 * Plugin URI:        on-lingua.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.1
 * Author:            Toni
 * Author URI:        on-lingua.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       Contextual Help 3 https://codex.wordpress.org/Adding_Contextual_Help_to_Administration_Menus
 * Domain Path:       /languages
 */

/* To changed that, change the “post” in the if statement to the page’s screen ID you’d like to add it to. You can find the screen ID for all the pages in the WordPress Dashboard here http://codex.wordpress.org/Plugin_API/Admin_Screen_Reference
*/

/**
 * Customize contextual help texts
 *
 * @param string $contextual_help
 * @param string $screen_id
 * @param string $screen
 */
function my_contextual_help($contextual_help, $screen_id, $screen)
{
	$help_text = "";
	$debug = 0; // toggle this to find out which $screen_id a certain page has
 
	switch($screen_id) {
		case "dashboard":
			$help_text = "<p>Welcome to the Dashboard, hier ziet u een overzicht van alle pagina\"s.</p>";
			break;
		case "upload":
			$help_text = "<p>Hier kunt u afbeeldingen beheren.</p>";
			break;
		case "edit-page":
			$help_text = "<p>Hier kunt u paginas beheren.</p>";
			break;
		case "page":
			$help_text = "<p>Hier kunt u een pagina bewerken.</p>";
			break;
		default:
			$help_text = ""; // remove default Wordpress help text
 
			if ($debug) {
				$help_text = $screen_id;
			}
			break;
	}
 
	// at least add a support text to every help text
	$help_text.= "<p><em>For questions you can see our <a href=\"http://support.webcreate.nl/knowledgebase\" target=\"_blank\">Knowledge Base</a> or you can contact us at <a href=\"mailto:support@webcreate.nl\">support@webcreate.nl</a>.</em></p>";
 
	return $help_text;
}
add_action("contextual_help", "my_contextual_help", 10, 3);


?>