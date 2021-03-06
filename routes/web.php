<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminController;
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
})->name('home');

Route::get('/blog', function () {
    return view('home.blog');
})->name('blog');

Route::post('sendmail', [MailController::class, 'send'])->name('send.email');


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('', [AdminController::class, 'index'])->name('admin.dashboard');
});

require __DIR__.'/auth.php';
