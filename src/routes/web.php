<?php

// reserved route for owlet
Route::group(['namespace' => 'entwurfhaus\owlet\Http\Controllers', 'middleware' => ['web']], function () {
    Route::get('owlet', 'ExampleController@index');
});
