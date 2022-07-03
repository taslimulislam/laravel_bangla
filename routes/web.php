<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyinvokController;
use Illuminate\Support\Facades\Log;
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
    \Log::channel('contactstore')->info('this is a test log report '.rand(1,20));
    return view('welcome');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/test-one', function () {
    // app()->make('test_service_container');
    return view('test');
});

Route::get('/test-two', function () {
    Hunter::test();
});
Route::get('/city', function () {
   dd('this is my city');
})->middleware('examplemid');

Route::get('/myinvoke', MyinvokController::class);

require __DIR__.'/auth.php';
