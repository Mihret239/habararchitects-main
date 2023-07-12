<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'openHabarHomepage'])->name('habar.home');
Route::get('/about', [PagesController::class, 'openHabarAboutpage'])->name('habar.about');
Route::get('/contact', [PagesController::class, 'openHabarContactpage'])->name('habar.contact');
Route::get('/projects', [PagesController::class, 'openHabarProjects'])->name('habar.project_list');
Route::get('/project/{id}', [PagesController::class, 'openHabarProject'])->name('habar.project');
Route::get('/news', [PagesController::class, 'openHabarAllNews'])->name('habar.news_list');
Route::get('/news/{id}', [PagesController::class, 'openHabarNews'])->name('habar.news');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
