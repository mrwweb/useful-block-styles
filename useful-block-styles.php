<?php

/**
 * Plugin Name:     Useful Block Styles
 * Description:     A simple plugin to register Block Styles that you'd want on any site with the WordPress block editor. Includes Multicolumn and marker-less lists and Button-only File block.
 * Author:          Mark Root-Wiley (So far)
 * Text Domain:     useful-block-styles
 * Version:         0.2.0
 *
 * @package         Useful_Block_Styles
 */

namespace WPSea\BlockStyles;

/**
 * Get the full list of block styles registered by the plugin. Enables filtering the list (to hide one or more styles) with `wpsea_block_styles` filter
 *
 * @return array nested array where value keys are block slugs and values are an array of user-readable style names
 */
function get_block_styles()
{

	$block_styles = array(
		'core/heading' => array(
			'Screen Reader Text'
		),
		'core/list' => array(
			'Multicolumn',
			'No Markers',
		),
		'core/file' => array(
			'Button Only',
		),
		'core/gallery' => array(
			'Not Stretched',
			'Centered Not Stretched',
			'Small Logos',
			'Small Grayscale Logos',
		),
	);

	return apply_filters('wpsea_block_styles', $block_styles);
}

add_action('init', 'WPSea\BlockStyles\register_block_styles');
/**
 * Registers all block styles with the block editor
 */
function register_block_styles()
{

	$block_styles = get_block_styles();

	foreach ($block_styles as $block => $styles) {

		foreach ($styles as $style) {

			register_block_style(
				$block,
				array(
					'name'  => 'useful-' . sanitize_title_with_dashes($style, null, 'save'),
					'label' => esc_html($style),
				)
			);
		}
	}
}

add_action('wp_enqueue_scripts', 'WPSea\BlockStyles\front_end_assets', 9);
/**
 * Enqueue front-end block stylesheet. Registered with priority 9 so it will generally come before theme stylesheets.
 */
function front_end_assets()
{

	wp_enqueue_style(
		'useful-block-styles',
		plugin_dir_url(__FILE__) . 'css/useful-block-styles.css',
		array('wp-block-library'),
		filemtime(plugin_dir_path(__FILE__) . 'css/useful-block-styles.css'),
	);
}

add_action('enqueue_block_editor_assets', 'WPSea\BlockStyles\block_editor_assets', 9);
/**
 * Enqueue block editor stylesheet. Registered with priority 9 so it will generally come before theme stylesheets.
 */
function block_editor_assets()
{

	wp_enqueue_style(
		'useful-block-styles-editor-styles',
		plugin_dir_url(__FILE__) . 'css/useful-block-styles-editor-styles.css',
		array(),
		filemtime(plugin_dir_path(__FILE__) . 'css/useful-block-styles-editor-styles.css')
	);
}
