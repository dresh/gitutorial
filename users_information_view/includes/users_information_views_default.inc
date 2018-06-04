<?php

function user_information_views_default_views() {
$view = new view();
$view->name = 'users_information';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Users Information';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Users Information';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '5';
$handler->display->display_options['style_plugin'] = 'list';
$handler->display->display_options['row_plugin'] = 'fields';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
/* Field: Content: Email */
$handler->display->display_options['fields']['field_email']['id'] = 'field_email';
$handler->display->display_options['fields']['field_email']['table'] = 'field_data_field_email';
$handler->display->display_options['fields']['field_email']['field'] = 'field_email';
/* Field: Content: Name */
$handler->display->display_options['fields']['field_name']['id'] = 'field_name';
$handler->display->display_options['fields']['field_name']['table'] = 'field_data_field_name';
$handler->display->display_options['fields']['field_name']['field'] = 'field_name';
/* Field: Content: Phone Number */
$handler->display->display_options['fields']['field_phone_number']['id'] = 'field_phone_number';
$handler->display->display_options['fields']['field_phone_number']['table'] = 'field_data_field_phone_number';
$handler->display->display_options['fields']['field_phone_number']['field'] = 'field_phone_number';
/* Field: Content: Address */
$handler->display->display_options['fields']['field_address']['id'] = 'field_address';
$handler->display->display_options['fields']['field_address']['table'] = 'field_data_field_address';
$handler->display->display_options['fields']['field_address']['field'] = 'field_address';
$handler->display->display_options['fields']['field_address']['click_sort_column'] = 'country';
$handler->display->display_options['fields']['field_address']['settings'] = array(
  'use_widget_handlers' => 1,
  'format_handlers' => array(
    'address' => 'address',
  ),
);
/* Sort criterion: Content: Post date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'node';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Content: Type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'registrat_form' => 'registrat_form',
);

/* Display: Block */
$handler = $view->new_display('block', 'Block', 'block');


// Add view to list of views to provide.
  $views[$view->name] = $view;

  // Repeat all of the above for each view the module should provide. At the
  // end, return array of default views.
  return $views;

}