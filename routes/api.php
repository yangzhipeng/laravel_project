<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('test', 'HelloController@testapi');
Route::post('validecode', 'HelloController@sendCode');
Route::get('reverse', "HelloController@reverse");


//示例中间件 https://segmentfault.com/a/1190000007227276
Route::group(['prefix' => 'route', 'namespace' => 'RouteParameter'], function () {

    // route/user/{user}/role/{role}, route parameter是{user}, {role}
    Route::group(['middleware' => 'route.parameter'], function () {
        Route::resource('user.role', 'RouteParameterToMiddlewareController');
    });

    // route/advisor, middleware parameter是 'advisor', 'show', 'comment'
    Route::group(['middleware' => 'middleware.parameter:advisor,show,comment'], function () {
        Route::resource('advisor', 'MiddlewareParameterToMiddlewareController');
    });
    
    // /route/controller, middleware parameter是 'client'
    Route::group(['middleware' => 'middleware.controller:client'], function () {
        Route::resource('controller', 'MiddlewareToController');
    });
});

//自己写的测试中间件
Route::group(['middleware' => ['demo.before','dealuser']], function() {
Route::group(['prefix' => 'demo'], function(){
  Route::get('before', ['as'=>'home.before.ware', 'uses'=>'HelloController@before']);
}); 
  Route::post('user/addUser','UserController@postAdduser');
});
Route::get('user/getuser','UserController@getAddUser');