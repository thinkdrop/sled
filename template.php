<?php


/**
 * 
 * @mainpage ThinkDrop Sled
 *
 * The main theme for thinkdrop.net in 2011Q1
 */

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
function slope_preprocess_block(&$vars, $hook) {
  // Special classes for blocks.
  $vars['title_attributes_array']['class'][] = 'block-title';
}


function slope_preprocess_page(&$vars, $hook) {
   
  //Give main menu links classes and a span.
  foreach ($vars['main_menu'] as &$link){
    $link['attributes']['class'][] = drupal_html_class($link['title']);
    $link['html'] = TRUE;
    $link['title'] = '<span>' . $link['title'] . '</span>';
  }
  $vars['nav'] = theme('links__system_main_menu', array(
    'links' => $vars['main_menu'],
    'attributes' => array(
      'id' => 'main-menu-links',
      'class' => array('links', 'clearfix'),
    ),
    'heading' => array(
      'text' => t('Main menu'),
      'level' => 'h2',
      'class' => array('element-invisible'),
    ),
  ));

  
}
