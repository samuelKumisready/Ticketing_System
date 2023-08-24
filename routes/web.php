<?php

use App\Http\Controllers\user_controller;
use App\Http\Livewire\SingleTicket;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteGroup;
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
    return view('user_views.index');
})->name('home');
Route::middleware(['guest'])->group(function () {
    Route::get('/signup', function () {
        return view('user_views.signup');
    })->name('signup');
    Route::get('/login', function () {
        return view('user_views.login');
    })->name('login');   
});

Route::middleware(['auth'])->group(function () {
    Route::get('/createticket', [user_controller::class, 'createticket'] )->name('createTicket');
    Route::get('/singleTicket/{id}', SingleTicket::class )->name('singleTicket');
    Route::get('/tickets', [user_controller::class, 'tickets'] )-> name('tickets');
    Route::get('/learn', [user_controller::class, 'learn'] )-> name('learn');
});


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/ticketscategory', [user_controller::class, 'adminCategories'])->name('category');
    Route::get('/index', [user_controller::class, 'adminHome'] )-> name('adminHome');
    Route::get('/tickets', [user_controller::class, 'adminTickets'] )-> name('adminTicket');
});

// isAdmin