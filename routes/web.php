<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['uses'  =>  'PageController@view','as'  =>  'welcome']);

Route::get('/todos',['uses' =>  'TodosController@index', 'as'   =>  'todo.all']);

Route::post('/todos', ['uses' => 'TodosController@store', 'as' => 'todo.store']);

Route::get('/todos/{slug}', ['uses' => 'TodosController@view', 'as' => 'todo.view' ]);
