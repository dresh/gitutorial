<?php
/**
 * Implements hook_views_data().
 */
function movies_views_data()
{

    $data = array();

   

	/*
		Exposing Movies Table
   */

	$data['movies']['table']['group'] = t('Movies');

    $data['movies']['table']['base'] = array(
    	'field' => 'movie_id',
        'title' => t('Movie'),
        'help' => t('Contains records we want exposed to Views.'),
    );

    $data['movies']['movie_id'] = array(
	    'title' => t('Movie Id'),
	    'help' => t('The Movie Id.'),
	    'field' => array(
	        'handler' => 'views_handler_field',
	    ),
	    'sort' => array(
	        'handler' => 'views_handler_sort',
	    ),
	    'filter' => array(
	        'handler' => 'views_handler_filter_numeric',
	    ),
	    'relationship' => array(
		   // Views name of the table to join to for the relationship.
		  'base' => 'movies_related_actors',
		  // Database field name in the other table to join on.
		  'base field' => 'movie_id',

		  'id' => 'standard',
		  // Default label for relationship in the UI.
		  'label' => t('Movie ID'),
		),
	    
	);

	$data['movies']['movie_name'] = array(
	    'title' => t('Movie name'),
	    'help' => t('The Movie Name.'),
	    'field' => array(
	        'handler' => 'views_handler_field',
	    ),
	    'sort' => array(
	        'handler' => 'views_handler_sort',
	    ),
	    'filter' => array(
	        'handler' => 'views_handler_filter_string',
	    ),
	);

	$data['movies']['movie_year_release'] = array(
	    'title' => t('Year of Release'),
	    'help' => t('Year of Release.'),
	    'field' => array(
	        'handler' => 'views_handler_field',
	    ),
	    'sort' => array(
	        'handler' => 'views_handler_sort',
	    ),
	    'filter' => array(
	        'handler' => 'views_handler_filter_date',
	    ),
	);

	$data['movies']['movie_plot'] = array(
	    'title' => t('Movie Plot'),
	    'help' => t('Movie Plot.'),
	    'field' => array(
	        'handler' => 'views_handler_field',
	    ),
	    'sort' => array(
	        'handler' => 'views_handler_sort',
	    ),
	    'filter' => array(
	        'handler' => 'views_handler_filter_string',
	    ),
	);

	$data['movies']['movie_producer'] = array(
	    'title' => t('Movie Producer'),
	    'help' => t('Movie Producer.'),
	    'field' => array(
	        'handler' => 'views_handler_field',
	    ),
	    'sort' => array(
	        'handler' => 'views_handler_sort',
	    ),
	    'filter' => array(
	        'handler' => 'views_handler_filter_numeric',
	    ),
	     'relationship' => array(
		   // Views name of the table to join to for the relationship.
		  'base' => 'producers',
		  // Database field name in the other table to join on.
		  'base field' => 'producer_id',

		  'id' => 'standard',
		  // Default label for relationship in the UI.
		  'label' => t('Producer ID'),
		),
	);

	$data['movies']['movie_poster'] = array(
	    'title' => t('Movie Poster'),
	    'help' => t('Movie Poster.'),
	    'field' => array(
	        'handler' => 'views_handler_field',
	    ),
	    'sort' => array(
	        'handler' => 'views_handler_sort',
	    ),
	    'filter' => array(
	        'handler' => 'views_handler_filter_numeric',
	    ),
	    'relationship' => array(
		   // Views name of the table to join to for the relationship.
		  'base' => 'file_managed',
		  // Database field name in the other table to join on.
		  'base field' => 'fid',

		  'id' => 'standard',
		  // Default label for relationship in the UI.
		  'label' => t('Poster'),
		),
	);

	/*
		Exposing movies_related_actors Table
   */

	$data['movies_related_actors']['table']['group'] = t('Movies');

    $data['movies_related_actors']['movie_id'] = array(
	    'title' => t('Movie Id'),
	    'help' => t('The Movie Id.'),
	    'field' => array(
	        'handler' => 'views_handler_field',
	    ),
	    'sort' => array(
	        'handler' => 'views_handler_sort',
	    ),
	    'filter' => array(
	        'handler' => 'views_handler_filter_numeric',
	    ),
	    
	);

	$data['movies_related_actors']['actor_id'] = array(
	    'title' => t('Actor Id'),
	    'help' => t('The Actor Id.'),
	    'field' => array(
	        'handler' => 'views_handler_field',
	    ),
	    'sort' => array(
	        'handler' => 'views_handler_sort',
	    ),
	    'filter' => array(
	        'handler' => 'views_handler_filter_numeric',
	    ),
	    'relationship' => array(
		   // Views name of the table to join to for the relationship.
		  'base' => 'actors',
		  // Database field name in the other table to join on.
		  'base field' => 'actor_id',

		  'id' => 'standard',
		  // Default label for relationship in the UI.
		  'label' => t('Actor ID'),
		),
	);

	/*
		Exposing Actor Table
   */
    $data['actors']['table']['group'] = t('Actors');

    $data['actors']['actor_id'] = array(
	    'title' => t('Actor Id'),
	    'help' => t('The Actor Id.'),
	    'field' => array(
	        'handler' => 'views_handler_field',
	    ),
	    'sort' => array(
	        'handler' => 'views_handler_sort',
	    ),
	    'filter' => array(
	        'handler' => 'views_handler_filter_numeric',
	    ),
	    
	);

	$data['actors']['actor_name'] = array(
	    'title' => t('Actor name'),
	    'help' => t('The Actor Name.'),
	    'field' => array(
	        'handler' => 'views_handler_field',
	    ),
	    'sort' => array(
	        'handler' => 'views_handler_sort',
	    ),
	    'filter' => array(
	        'handler' => 'views_handler_filter_string',
	    ),
	);

	/*
		Exposing Producer Table
   */

	$data['producers']['table']['group'] = t('Producers');

    $data['producers']['producer_id'] = array(
	    'title' => t('Producer Id'),
	    'help' => t('The Producer Id.'),
	    'field' => array(
	        'handler' => 'views_handler_field',
	    ),
	    'sort' => array(
	        'handler' => 'views_handler_sort',
	    ),
	    'filter' => array(
	        'handler' => 'views_handler_filter_numeric',
	    ),
	   
	);

	$data['producers']['producer_name'] = array(
	    'title' => t('Producer name'),
	    'help' => t('The Producer Name.'),
	    'field' => array(
	        'handler' => 'views_handler_field',
	    ),
	    'sort' => array(
	        'handler' => 'views_handler_sort',
	    ),
	    'filter' => array(
	        'handler' => 'views_handler_filter_string',
	    ),
	);
	


    return $data;

}