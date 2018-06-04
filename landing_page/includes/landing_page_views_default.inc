<?php

function user_information_views_default_views() {
$page = new stdClass();
$page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
$page->api_version = 1;
$page->name = 'anonymous_users';
$page->task = 'page';
$page->admin_title = 'Anonymous Users';
$page->admin_description = 'Landing page for anonymous users';
$page->path = 'anonymoususers';
$page->access = array();
$page->menu = array(
  'type' => 'normal',
  'title' => 'Anonymous Users',
  'name' => 'main-menu',
  'weight' => '2',
  'parent' => array(
    'type' => 'none',
    'title' => '',
    'name' => 'navigation',
    'weight' => '0',
  ),
);
$page->arguments = array();
$page->conf = array();
$page->default_handlers = array();
$handler = new stdClass();
$handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
$handler->api_version = 1;
$handler->name = 'page_anonymous_users__panel_context_1c8e26a4-0006-46f2-91a5-77edb2e028fa';
$handler->task = 'page';
$handler->subtask = 'anonymous_users';
$handler->handler = 'panel_context';
$handler->weight = 0;
$handler->conf = array(
  'title' => 'Landing page',
  'no_blocks' => FALSE,
  'pipeline' => 'ipe',
  'body_classes_to_remove' => '',
  'body_classes_to_add' => '',
  'css_id' => '',
  'css' => '',
  'contexts' => array(),
  'relationships' => array(),
  'name' => '',
  'access' => array(
    'plugins' => array(
      1 => array(
        'name' => 'role',
        'settings' => array(
          'rids' => array(
            0 => 1,
          ),
        ),
        'context' => 'logged-in-user',
        'not' => FALSE,
      ),
    ),
    'logic' => 'or',
  ),
);
$display = new panels_display();
$display->layout = 'flexible';
$display->layout_settings = array();
$display->panel_settings = array(
  'style_settings' => array(
    'default' => NULL,
    'center' => NULL,
  ),
);
$display->cache = array();
$display->title = 'it\'s looks you are anonymous users, please login';
$display->uuid = 'de82c787-8872-4e6c-82d5-0d04cf9ce5c7';
$display->content = array();
$display->panels = array();
$display->hide_title = PANELS_TITLE_FIXED;
$display->title_pane = '0';
$handler->conf['display'] = $display;
$page->default_handlers[$handler->name] = $handler;



// Add view to list of views to provide.
  $views[$view->name] = $page;

  // Repeat all of the above for each view the module should provide. At the
  // end, return array of default views.
  return $views;

}