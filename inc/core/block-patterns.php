<?php

/**
 * ovantis: Block Patterns
 *
 * @since ovantis 1.0.0
 */

/**
 * Registers pattern categories for ovantis
 *
 * @since ovantis 1.0.0
 *
 * @return void
 */
function ovantis_register_pattern_category()
{
	$block_pattern_categories = array(
		'ovantis' => array('label' => __('Ovantis', 'ovantis')),
	);

	$block_pattern_categories = apply_filters('ovantis_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties);
		}
	}
}
add_action('init', 'ovantis_register_pattern_category', 9);
