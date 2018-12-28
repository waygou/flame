<?php

// Demo route.
Route::get('flame', 'Waygou\Flame\Features\Demo\Controllers\DemoController@index')
       ->name('flame.index')
       ->middleware('web');
