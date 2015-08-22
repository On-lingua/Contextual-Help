<?php

/** http://wordpresshelper.net/how-to-delete-custom-taxonomy-terms-in-plugins-uninstall-php/
 * The plugin file
 *
 *
 * @link              on-lingua.com
 * @since             1.0.0
 * @package           Taxonomies
 *
 */


function delete_custom_terms($taxonomy){
    global $wpdb;

    $query = 'SELECT t.name, t.term_id
            FROM ' . $wpdb->terms . ' AS t
            INNER JOIN ' . $wpdb->term_taxonomy . ' AS tt
            ON t.term_id = tt.term_id
            WHERE tt.taxonomy = "' . $taxonomy . '"';

    $terms = $wpdb->get_results($query);

    foreach ($terms as $term) {
        wp_delete_term( $term->term_id, $taxonomy );
    }
}

// Delete all custom terms for this taxonomy
delete_custom_terms(LISTING_TAXONOMY);

?>