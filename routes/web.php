<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

Route::get('/view_news', [HomeController::class, 'viewNews']);

Route::get('/about_us', [HomeController::class, 'viewAbout']);

Route::get('/view_events', [HomeController::class, 'viewEvents']);

Route::get('/view_counselling', [HomeController::class, 'viewCounselling']);

Route::get('/view_financial_aid', [HomeController::class, 'viewFinancial']);

Route::post('/appointment', [HomeController::class, 'appointment']);

Route::post('/userAddEvent', [HomeController::class, 'userAddEvent']);

Route::post('/userAddNews', [HomeController::class, 'userAddNews']);

Route::post('/userApplication', [HomeController::class, 'userApplication']);

Route::get('/view_user_profile', [HomeController::class, 'viewProfile']);

Route::get('/cancel_appointment/{id}', [HomeController::class, 'cancelAppointment']);

Route::get('/cancel_application/{id}', [HomeController::class, 'cancelApplication']);

#Route::get('/detailed_news/{id}', [HomeController::class, 'detailedNews']);

Route::get('/detailed_news/{id}', [HomeController::class, 'detailedNews'])->name('detailed_news.show');

Route::get('/detailed_events/{id}', [HomeController::class, 'detailedEvents'])->name('detailed_events.show');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_news_view', [AdminController::class, 'addNews']);

Route::get('/add_event_view', [AdminController::class, 'addEvents']);

Route::get('/add_doctor_view', [AdminController::class, 'addDoc']);

Route::post('/upload_news', [AdminController::class, 'upNews']);

Route::post('/upload_event', [AdminController::class, 'upEvent']);

Route::post('/upload_doctor', [AdminController::class, 'upDoc']);