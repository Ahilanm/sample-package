<?php

//Route::get('/sample',function (){
//    return 'Sample';
//});

$nameSpace = 'Ahilan\Sample\Http\Controllers';
Route::group(['namespace' => $nameSpace], function (){
    Route::get('/sample', 'SampleController@index');
});
