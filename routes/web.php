<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('membresia')->name('membresia/')->group(static function() {
            Route::get('/',                                             'MembresiaController@index')->name('index');
            Route::get('/create',                                       'MembresiaController@create')->name('create');
            Route::post('/',                                            'MembresiaController@store')->name('store');
            Route::get('/{membresium}/edit',                            'MembresiaController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MembresiaController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{membresium}',                                'MembresiaController@update')->name('update');
            Route::delete('/{membresium}',                              'MembresiaController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('descuentos')->name('descuentos/')->group(static function() {
            Route::get('/',                                             'DescuentoController@index')->name('index');
            Route::get('/create',                                       'DescuentoController@create')->name('create');
            Route::post('/',                                            'DescuentoController@store')->name('store');
            Route::get('/{descuento}/edit',                             'DescuentoController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'DescuentoController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{descuento}',                                 'DescuentoController@update')->name('update');
            Route::delete('/{descuento}',                               'DescuentoController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('clientes')->name('clientes/')->group(static function() {
            Route::get('/',                                             'ClienteController@index')->name('index');
            Route::get('/create',                                       'ClienteController@create')->name('create');
            Route::post('/',                                            'ClienteController@store')->name('store');
            Route::get('/{cliente}/edit',                               'ClienteController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ClienteController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{cliente}',                                   'ClienteController@update')->name('update');
            Route::delete('/{cliente}',                                 'ClienteController@destroy')->name('destroy');
        });
    });
});

