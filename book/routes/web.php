<?php


use Illuminate\Support\Facades\Route;

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

Route::post('/',
    'WelcomeController@submitForm')
    ->name('push-form');
Route::get('/',
    'WelcomeController@showForm')
    ->name('form');
Route::get('/users',
    'UserController@getUsers')
    ->name('users');
Route::get('users/newUser',
    'UserController@UserForm')
    ->name('UserForm');
Route::post('users/newUser',
    'UserController@newUser')
    ->name('newUser');
Route::get('/users/{id}/edit',
    'UserController@editUserForm')
    ->name('editUserForm');
Route::post('/users/{id}/edit',
    'UserController@editUserSubmit')
    ->name('editUserSubmit');
Route::get('/users/{id}/delete',
    'UserController@deleteUser')
    ->name('deleteUser');
Route::get('/groups/{id}/edit',
    'GroupController@editGroupForm')
    ->name('editGroupForm');
Route::post('/groups/{id}/edit',
    'GroupController@editGroupSubmit')
    ->name('editGroupSubmit');
Route::get('/groups/newGroup',
    'GroupController@newGroupForm')
    ->name('newGroupForm');
Route::post('/groups/newGroup',
    'GroupController@newGroupSubmit')
    ->name('newGroupSubmit');
Route::get('/groups',
    'GroupController@showGroups')
    ->name('showGroups');


