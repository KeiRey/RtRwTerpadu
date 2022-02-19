<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login')->name('login');
});



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'], function () {


    // User
    Route::get('/users', 'UserController@index');

    // Admin
    Route::get('/home', 'AdminController@dashboard');
    Route::get('/profile','ProfileController@profile');

    Route::get('/admin/user/index', 'AdminController@UserIndex');
    Route::get('/admin/user/detail/{id}', 'AdminController@UserDetail');
    Route::get('/admin/user/create', 'AdminController@UserCreate');
    Route::post('/admin/user/store', 'AdminController@UserStore');
    Route::get('/admin/user/edit/{id}', 'AdminController@UserEdit');
    Route::put('/admin/user/update/{id}', 'AdminController@UserUpdate');
    Route::get('/admin/user/delete/{id}', 'AdminController@UserDelete');

    Route::get('/admin/kecamatan/index', 'AdminController@KecamatanIndex');
    Route::get('/admin/kecamatan/detail/{id}', 'AdminController@KecamatanDetail');
    Route::get('/admin/kecamatan/create', 'AdminController@KecamatanCreate');
    Route::post('/admin/kecamatan/store', 'AdminController@KecamatanStore');
    Route::get('/admin/kecamatan/edit/{id}', 'AdminController@KecamatanEdit');
    Route::put('/admin/kecamatan/update/{id}', 'AdminController@KecamatanUpdate');
    Route::get('/admin/kecamatan/delete/{id}', 'AdminController@KecamatanDelete');

    Route::get('/admin/kelurahan/index', 'AdminController@KelurahanIndex');
    Route::get('/admin/kelurahan/detail/{id}', 'AdminController@KelurahanDetail');
    Route::get('/admin/kelurahan/create', 'AdminController@KelurahanCreate');
    Route::post('/admin/kelurahan/store', 'AdminController@KelurahanStore');
    Route::get('/admin/kelurahan/edit/{id}', 'AdminController@KelurahanEdit');
    Route::put('/admin/kelurahan/update/{id}', 'AdminController@KelurahanUpdate');
    Route::get('/admin/kelurahan/delete/{id}', 'AdminController@KelurahanDelete');

    Route::get('/admin/rt/index', 'AdminController@RtIndex');
    Route::get('/admin/rt/detail/{id}', 'AdminController@RtDetail');
    Route::get('/admin/rt/create', 'AdminController@RtCreate');
    Route::post('/admin/rt/store', 'AdminController@RtStore');
    Route::get('/admin/rt/edit/{id}', 'AdminController@RtEdit');
    Route::put('/admin/rt/update/{id}', 'AdminController@RtUpdate');
    Route::get('/admin/rt/delete/{id}', 'AdminController@RtDelete');

    Route::get('/admin/rw/index', 'AdminController@RwIndex');
    Route::get('/admin/rw/detail/{id}', 'AdminController@RwDetail');
    Route::get('/admin/rw/create', 'AdminController@RwCreate');
    Route::post('/admin/rw/store', 'AdminController@RwStore');
    Route::get('/admin/rw/edit/{id}', 'AdminController@RwEdit');
    Route::put('/admin/rw/update/{id}', 'AdminController@RwUpdate');
    Route::get('/admin/rw/delete/{id}', 'AdminController@RwDelete');

    Route::get('/admin/program/index', 'AdminController@ProgramIndex');
    Route::get('/admin/program/detail/{id}', 'AdminController@ProgramDetail');
    Route::get('/admin/program/create', 'AdminController@ProgramCreate');
    Route::post('/admin/program/store', 'AdminController@ProgramStore');
    Route::get('/admin/program/edit/{id}', 'AdminController@ProgramEdit');
    Route::put('/admin/program/update/{id}', 'AdminController@ProgramUpdate');
    Route::get('/admin/program/delete/{id}', 'AdminController@ProgramDelete');

    Route::get('/Iuran','AdminController@IndexIuran')->name('iuran.index');
    Route::get('/Iuran/{id}','AdminController@IuranShow')->name('iuran.show');
    Route::get('/Iuran/create/{id}','AdminController@IuranCreate');
    Route::post('/Iuran/store','AdminController@StoreIuran');

});
