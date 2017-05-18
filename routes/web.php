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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/customer/reservation', 'ReservationController@reserve');
Route::get('/customer/menu', 'MenuController@display');
Route::get('/customer/feedback', 'FeedbackController@display');
Route::get('/customer/reservation/reservationform/{number}', 'ReservationController@create');
Route::get('/customer/reservation/waitinglistform/{number}', 'ReservationController@waitingList');
Route::get('/customer/contact', 'FeedbackController@contact');

Route::get('/admin/functions', 'AdminFunctionsController@display');
Route::get('/admin/notifications', 'NotificationController@display');
Route::get('/admin/waiters', 'WaiterController@display');
Route::get('/admin/managemenu', 'ManageMenuController@display');
Route::get('/admin/managemenu/addfood', 'ManageMenuController@create');
Route::get('/admin/waiters/addwaiter', 'WaiterController@create');
Route::get('/admin/managemenu/removefood', 'ManageMenuController@displayDelete');
Route::get('/admin/waiters/removewaiter', 'WaiterController@displayDelete');
Route::get('/admin/editmenu', 'ManageMenuController@editmenu');
Route::get('/admin/editmenu/add/{id}', 'ManageMenuController@addmenu');
Route::get('/admin/editmenu/delete/{id}', 'ManageMenuController@deletemenu');
Route::get('/admin/viewfeedback', 'NotificationController@feedback');
Route::get('/admin/waiters/displaychangestatus', 'WaiterController@displayChange');
Route::get('/admin/tables', 'AdminFunctionsController@displayTables');
Route::get('/admin/tables/addtable', 'AdminFunctionsController@displayAddTable');
Route::get('/admin/waitinglist', 'NotificationController@viewWaitingList');

Route::post('/admin/managemenu', 'ManageMenuController@store');
Route::post('/admin/waiters', 'WaiterController@store');
Route::post('/customer/feedback', 'FeedbackController@store');
Route::post('/customer/reservation', 'ReservationController@store');
Route::post('/customers/reservation/waitinglist/add', 'ReservationController@addToWaitingList');

Route::post('/admin/notifications/removereservation/', 'NotificationController@destroy');
Route::post('/admin/managemenu/removefood/', 'ManageMenuController@destroy');
Route::post('admin/waiters/removewaiter/', 'WaiterController@destroy');
Route::post('/admin/notifications/removewaitingcustomers/', 'NotificationController@destroyWaitingCustomer');

Route::post('/admin/waiters/changestatus', 'WaiterController@changeStatus');
Route::post('/admin/notifications/waiter', 'NotificationController@waiterForm');
Route::post('/admin/notifications/waiter/assign', 'NotificationController@assign');
Route::post('/admin/notifications/table', 'NotificationController@reserveTable');
Route::post('/admin/tables/status', 'AdminFunctionsController@changeStatus');

