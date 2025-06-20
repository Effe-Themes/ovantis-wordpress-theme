<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package ovantis
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function ovantis_register_block_styles() {
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-outline-hover',
                'label' => __('Hover: Outline', 'ovantis')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-opacity',
                'label' => __('Hover: Opacity', 'ovantis')
            )
        );
    }
    add_action('init', 'ovantis_register_block_styles');
}
