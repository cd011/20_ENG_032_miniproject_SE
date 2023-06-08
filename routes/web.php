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

Route::get('/detailed_appli/{id}', [HomeController::class, 'detailedAppli'])->name('detailed_appli.show');


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

Route::get('/add_application_view', [AdminController::class, 'addAppli']);


Route::get('/approve_news_view', [AdminController::class, 'approveNews']);

Route::get('/approve_events_view', [AdminController::class, 'approveEvents']);

Route::get('/approve_appointment_view', [AdminController::class, 'approveAppointment']);

Route::get('/approve_appli_view', [AdminController::class, 'approveAppli']);



Route::get('/all_data_view', [AdminController::class, 'viewAllData']);

Route::get('/detailed_data/{body}', [AdminController::class, 'detailedData'])->name('detailed_data.show');

Route::get('/delete_news/{id}', [AdminController::class, 'deleteNews']);

Route::get('/delete_event/{id}', [AdminController::class, 'deleteEvent']);

Route::get('/delete_doctor/{id}', [AdminController::class, 'deleteDoc']);

Route::get('/delete_appli/{id}', [AdminController::class, 'deleteAppli']);



Route::post('/upload_news', [AdminController::class, 'upNews']);

Route::post('/upload_event', [AdminController::class, 'upEvent']);

Route::post('/upload_doctor', [AdminController::class, 'upDoc']);

Route::post('/upload_application', [AdminController::class, 'upAppli']);



Route::get('/approve_user_news/{id}', [AdminController::class, 'approveUserNews']);

Route::get('/reject_user_news/{id}', [AdminController::class, 'rejectUserNews']);

Route::get('/approve_user_event/{id}', [AdminController::class, 'approveUserEvent']);

Route::get('/reject_user_event/{id}', [AdminController::class, 'rejectUserEvent']);

Route::get('/approve_user_appli/{id}', [AdminController::class, 'approveUserAppli']);

Route::get('/reject_user_appli/{id}', [AdminController::class, 'rejectUserAppli']);

Route::get('/approve_user_appointment/{id}', [AdminController::class, 'approveUserAppointment']);

Route::get('/reject_user_appointment/{id}', [AdminController::class, 'rejectUserAppointment']);