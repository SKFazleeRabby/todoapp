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

Route::get('/todos/{slug}/edit', ['uses' => 'TodosController@edit', 'as' => 'todo.edit' ]);

Route::patch('/todos/{slug}/update', ['uses' => 'TodosController@update', 'as' => 'todo.update' ]);

Route::get('/todos/{slug}/delete', ['uses' => 'TodosController@delete', 'as' => 'todo.delete']);

Route::get('/todos/{slug}/completed', ['uses' => 'TodosController@markedAsCompleted', 'as' => 'todo.markAsComplete']);

Route::get('/todos/delete/allcompleted', ['uses' => 'TodosController@deleteAllCompleted', 'as' => 'todo.deleteAllCompleted']);

