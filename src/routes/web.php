<?php

// reserved route for owlet
Route::group(['namespace' => 'Entwurfhaus\Owlet\Http\Controllers', 'middleware' => ['web']], function () {
    Route::get('owlet', 'ExampleController@index');
});
