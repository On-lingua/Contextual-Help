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
 * Plugin Name:       Contextual Help
 * Plugin URI:        on-lingua.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.1
 * Author:            Toni
 * Author URI:        on-lingua.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       Contextual Help https://codex.wordpress.org/Adding_Contextual_Help_to_Administration_Menus
 * Domain Path:       /languages
 */

/* To changed that, change the “post” in the if statement to the page’s screen ID you’d like to add it to. You can find the screen ID for all the pages in the WordPress Dashboard here http://codex.wordpress.org/Plugin_API/Admin_Screen_Reference
*/




add_action( 'contextual_help', 'my_contextual_help', 10, 3 );

function my_contextual_help( $contextual_help, $screen_id, $screen ) {
 
    if ( 'post' == $screen->id ) {
 
        $screen->add_help_tab( array(
            'id'    => 'my_help_tab',
            'title' => __('My Help Tab'),
            'content'   => '<p>' . __( '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>' ) . '</p>',
        ));
 
        $screen->add_help_tab( array(
            'id'    => 'my_help_tab2',
            'title' => __('My Help Tab2'),
            'content'   => '<p>' . __( '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>' ) . '</p>',
        )); 
 
        $screen->add_help_tab( array(
            'id'    => 'my_help_tab3',
            'title' => __('My Help Tab3'),
            'content'   => '<p>' . __( '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>' ) . '</p>',
        ));         
 
    }
}


?>