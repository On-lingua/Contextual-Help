<?php

/**
 * The plugin file
 *
 *
 * @link              on-lingua.com
 * @since             0.1
 * @package           Contextual Help 2
 *
 * @wordpress-plugin
 * Plugin Name:       Contextual Help 2
 * Plugin URI:        on-lingua.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.1
 * Author:            Toni
 * Author URI:        on-lingua.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       Contextual Help 2 
 * Domain Path:       /languages
 */


/* Start Adding Functions Below this Line */

/* Stop Adding Functions Below this Line */
/* https://clarknikdelpowell.com/blog/add-a-custom-wordpress-admin-contextual-help-menu-to-your-plugin-or-theme/ */


add_action('init', 'cjr_register_books_cpt');
add_action('admin_menu', 'cjr_add_book_settings');
/**
 * Registers the Books CPT to WordPress. Must be called in 'init' action hook.
 */
function cjr_register_books_cpt()
{
  $args = array(
		'public' => true,
		'label'  => 'Books'
	);
	register_post_type('book', $args);
	add_action('load-post-new.php', 'cjr_add_help_tabs');
	add_action('load-post.php', 'cjr_add_help_tabs');
}
/**
 * Adds an admin page under Settings
 */
function cjr_add_book_settings()
{
	$page = add_options_page(
		'Book Settings',           // Page Title
		'Books',                   // Menu Title
		'manage_options',          // Capability
		'cjr-books',               // Slug
		'cjr_render_book_settings' // Callback
	);
	add_action("load-$page", 'cjr_add_help_tabs');
}
/**
 * Renders the content of our custom admin page
 */
function cjr_render_book_settings()
{
	/***/
}


/**
 * Adds the help tabs to the current page
 */
function cjr_add_help_tabs()
{
	$screen = get_current_screen();
	if ('post' === $screen->base && 'book' !== $screen->post_type) return;
	$tabs = array(
		array(
			'title'    => 'All About Books',
			'id'       => 'cjr-books-about',
			'content'  => '<p>Books are pretty awesome...</p>'
		),
		array(
			'title'    => 'More About Books',
			'id'       => 'cjr-books-more',
			'callback' => 'cjr_get_more_tab'
		)
	);
	foreach($tabs as $tab) {
		$screen->add_help_tab($tab);
	}
	$screen->set_help_sidebar('<a href="#">More info!</a>');
}
/**
 * Outputs the content for the 'More About Books' Help Tab
 */
function cjr_get_more_tab() 
{ ?>
	<p>Many long paragraphs about books...</p>
<? }