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

Route::get('/', function () {
    return view('index');
});

Route::get('/index', [
    'as'=>'index',
    'uses'=>'ReservationController@index'
    ]
);

Route::get('/reservation/ListRerservation',[
    'as'=>'admin',
    'uses'=>'ReservationController@listReservation'
    ]
);

Route::get('/reservation/delete/{Reservations}',[
    'as'=>'deleteReservation',
    'uses'=>'ReservationController@deleteReservation'
    ]
);

Route::get('/reservation/form/{Reservations}',[
    'as'=> 'adminReservationForm',
    'uses'=>'ReservationController@adminReservationForm'
    ]
);

Route::post('/reservation/update/{Reservations}',[
    'as'=>'updateReservation',
    'uses'=>'ReservationController@updateReservation'
    ]
);

Route::get('/reservation/ValidReservation/{Reservations}',[
    'as'=> 'adminValidRerservation',
    'uses'=>'ReservationController@adminValidRerservation'
    ]
);
Route::get('/reservation/List',[
    'as'=> 'adminListReservations',
    'uses'=>'ReservationController@listReservation'
    ]
);

Route::get('/inner-page',function(){
    return view('inner-page');
}); 

Route::get('/AdminService', [
    'as'=>'Adminservice',
    'uses'=>'ReservationController@Adminservice'
    ]
); 

Route::post('/reservation/addReservation',[
    'as'=>'reservation',
    'uses'=>'ReservationController@addReservation'
    ]
);

Route::get('/Table/ListTable',[
    'as'=> 'ListTable',
    'uses'=>'TablesController@index'
    ]
);

Route::get('/Table/FormTable',[
    'as'=> 'FormTable',
    'uses'=>'TablesController@create'
    ]
);

Route::post('/Table/CreateTable',[
    'as'=> 'CreateTable',
    'uses'=>'TablesController@store'
    ]
);

Route::get('/Table/updateTableForm/{tables}',[
    'as'=> 'updateForm',
    'uses'=>'TablesController@updateForm'
    ]
);

Route::post('/Table/UpdateTable/{tables}',[
    'as'=> 'UpdateTable',
    'uses'=>'TablesController@update'
    ]
);

Route::get('/Table/DestroyTable/{tables}',[
    'as'=> 'DestroyTable',
    'uses'=>'TablesController@destroy'
    ]
);