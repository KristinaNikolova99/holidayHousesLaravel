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
use Illuminate\Support\Facades\Input;
use App\HolidayHouse;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');

Route::resource('/holidayhouses', 'admin\HolidayHousesController');
Route::resource('/locations', 'admin\LocationsController');
Route::resource('/types', 'admin\TypesController');
Route::resource('/images', 'admin\ImagesController');
Route::resource('/holidayhousesusers', 'HolidayHousesUserController');

Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $holidayhouse = HolidayHouse::where('name','LIKE','%'.$q.'%')->get();
    if(count($holidayhouse) > 0)

        return view('welcome')->withDetails($holidayhouse)->withQuery ( $q );

    else return view ('welcome')->withMessage('No Details found. Try to search again!');
});
