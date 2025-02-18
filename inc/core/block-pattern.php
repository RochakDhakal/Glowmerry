<?php
/**
 * Glowmerry: Block Patterns
 *
 * @since glowmerry 1.0.0
 */

/**
 * Registers pattern categories for glowmerry
 *
 * @since glowmerry 1.0.0
 *
 * @return void
 */
function glowmerry_register_pattern_category() {
	/*
	This code snippet is defining an array called `` which contains various
	block patterns categories for a WordPress theme or plugin called "glowmerry". Each key in the array
	represents a category name, and the corresponding value is an array with a 'label' key that holds
	the translated label for that category.
	*/
	$block_pattern_categories = array(
		'glowmerry' => array( 'label' => __( 'Glowmerry: Patterns', 'glowmerry' ) ),
	);
	$block_pattern_categories = apply_filters( 'glowmerry_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
            // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action( 'init', 'glowmerry_register_pattern_category', 1 );
