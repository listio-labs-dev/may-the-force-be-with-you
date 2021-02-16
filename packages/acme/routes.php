<?php


Route::get('/without-facade-override', 'Packages\Acme\Controllers\AcmeController@WithoutFacadeOverride');

Route::get('/with-facade-override', 'Packages\Acme\Controllers\AcmeController@WithFacadeOverride');
