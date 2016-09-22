<?php
// $Id: template.php,v 1.17.2.1 2009/02/13 06:47:44 johnalbin Exp $

/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 *
 * ABOUT THE TEMPLATE.PHP FILE
 *
 *   The template.php file is one of the most useful files when creating or
 *   modifying Drupal themes. You can add new regions for block content, modify
 *   or override Drupal's theme functions, intercept or make additional
 *   variables available to your theme, and create custom PHP logic. For more
 *   information, please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/theme-guide
 *
 * OVERRIDING THEME FUNCTIONS
 *
 *   The Drupal theme system uses special theme functions to generate HTML
 *   output automatically. Often we wish to customize this HTML output. To do
 *   this, we have to override the theme function. You have to first find the
 *   theme function that generates the output, and then "catch" it and modify it
 *   here. The easiest way to do it is to copy the original function in its
 *   entirety and paste it here, changing the prefix from theme_ to teneqs_v1_.
 *   For example:
 *
 *     original: theme_breadcrumb()
 *     theme override: teneqs_v1_breadcrumb()
 *
 *   where teneqs_v1 is the name of your sub-theme. For example, the
 *   zen_classic theme would define a zen_classic_breadcrumb() function.
 *
 *   If you would like to override any of the theme functions used in Zen core,
 *   you should first look at how Zen core implements those functions:
 *     theme_breadcrumbs()      in zen/template.php
 *     theme_menu_item_link()   in zen/template.php
 *     theme_menu_local_tasks() in zen/template.php
 *
 *   For more information, please visit the Theme Developer's Guide on
 *   Drupal.org: http://drupal.org/node/173880
 *
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 *   Each tpl.php template file has several variables which hold various pieces
 *   of content. You can modify those variables (or add new ones) before they
 *   are used in the template files by using preprocess functions.
 *
 *   This makes THEME_preprocess_HOOK() functions the most powerful functions
 *   available to themers.
 *
 *   It works by having one preprocess function for each template file or its
 *   derivatives (called template suggestions). For example:
 *     THEME_preprocess_page    alters the variables for page.tpl.php
 *     THEME_preprocess_node    alters the variables for node.tpl.php or
 *                              for node-forum.tpl.php
 *     THEME_preprocess_comment alters the variables for comment.tpl.php
 *     THEME_preprocess_block   alters the variables for block.tpl.php
 *
 *   For more information on preprocess functions and template suggestions,
 *   please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/node/223440
 *   and http://drupal.org/node/190815#template-suggestions
 */


/*
 * Add any conditional stylesheets you will need for this sub-theme.
 *
 * To add stylesheets that ALWAYS need to be included, you should add them to
 * your .info file instead. Only use this section if you are including
 * stylesheets based on certain conditions.
 */
/* -- Delete this line if you want to use and modify this code
// Example: optionally add a fixed width CSS file.
if (theme_get_setting('teneqs_v1_fixed')) {
  drupal_add_css(path_to_theme() . '/layout-fixed.css', 'theme', 'all');
}
// */


/**
 * Implementation of HOOK_theme().
 */
function teneqs_v1_theme(&$existing, $type, $theme, $path) {
  $hooks = zen_theme($existing, $type, $theme, $path);
  // Add your theme hooks like this:
  /*
  $hooks['hook_name_here'] = array( // Details go here );
  */
  // @TODO: Needs detailed comments. Patches welcome!
  return $hooks;
}

/**
 * Override or insert variables into all templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered (name of the .tpl.php file.)
 */
/* -- Delete this line if you want to use this function
function teneqs_v1_preprocess(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function teneqs_v1_preprocess_page(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function teneqs_v1_preprocess_node(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function teneqs_v1_preprocess_comment(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function teneqs_v1_preprocess_block(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Implementation of hook_breadcrumb();
 */
function teneqs_v1_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return $breadcrumb;
  }
}

/**
 * Function to build breadcrumb.
 */
function teneqs_custom_breadcrumb($breadcrumb, $title) {
  if (count($_SESSION['custom_breadcrumb'])) {
    $breadcrumb[] = '<a href="' . url($_SESSION['custom_breadcrumb'][1]) . '">' . ucfirst($_SESSION['custom_breadcrumb'][0]) . '</a>';
	unset($_SESSION['custom_breadcrumb']);
  }
  elseif (count($_SESSION['custom_breadcrumb_third_level'])) {
    foreach ($_SESSION['custom_breadcrumb_third_level'] as $key => $arr) {
	  $breadcrumb[] = '<a href="' . url($arr[1]) . '">' . ucfirst($arr[0]) . '</a>';
	}
    unset($_SESSION['custom_breadcrumb_third_level']);
  }
  $breadcrumb[] = $title;
  return '<div id="breadcrumb">' . implode('<span>&nbsp;&gt;&nbsp;</span>', $breadcrumb) . '</div>';
}

/**
 * Function to preprocess of node.
 */
function teneqs_v1_preprocess_node(&$vars){
  $vars['template_files'][] = 'node-'. $vars['node']->nid;  
}

/**
 * Function to preprocess of content types.
 */
function teneqs_v1_preprocess_page(&$vars, $hook) {
  if (isset ($vars['node']) && $vars['node']->type == "industries_functions") {
    $vars['template_files'] = array();
    $vars['template_files'][] = 'page-industries-functions';
  }
  elseif (isset ($vars['node']) && $vars['node']->type == "industry_practices") {
    $vars['template_files'] = array();
    $vars['template_files'][] = 'page-industry-practices';
  }
  elseif (isset ($vars['node']) && $vars['node']->type == "localized_landing_page") {
    $vars['template_files'] = array();
    $vars['template_files'][] = 'page-localized-landing-page';
  }
  elseif (isset ($vars['node']) && $vars['node']->type == "10eqs_team") {
    $vars['template_files'] = array();
    $vars['template_files'][] = 'page-10eqs-team';
  }
}