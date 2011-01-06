<?php

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
function sled_preprocess_block(&$vars, $hook) {
  // Special classes for blocks.
  $vars['title_attributes_array']['class'][] = 'block-title';
}