<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/starter_pack', function() {
    $check = Artisan::call('app:tscript-start');
     return $check;
});

Route::get('/', function(){
    try {
        Illuminate\Support\Facades\DB::connection()->getPdo();
        return view('auth.login2');
    } catch (\Exception $e) {
       return view('database');
    }
});

Auth::routes([
    'register' => false,
    'verify' => false,
    'login' => true,
]);

Route::middleware('auth')->prefix('admin/')->name('admin.')->group(function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
