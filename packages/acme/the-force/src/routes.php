<?php

Route::get('test', [
	'uses' => 'Acme\TheForce\TheForceController@customDisplay',
	'as' => 'test'
 ]);

Route::get('test-one',  [
	'uses' => 'Acme\TheForce\TheForceController@display',
	'as' => 'test1'
]);