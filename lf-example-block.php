<?php
/**
 * Plugin Name:       Leapfrog DBS  Block
 * Plugin URI:        https://leapfrogdbs.co.uk
 * Description:       An example block for study
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            David McDonagh
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       lf-example-block
 *
 * @package           lf-example-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function lf_example_block_lf_example_block_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'lf_example_block_lf_example_block_block_init' );
