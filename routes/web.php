<?php

use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Livewire\Admission\AdmissionApplication;
use App\Models\Event;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

include_once __DIR__ . '/student_routes.php';
include_once __DIR__ . '/hostel_routes.php';
include_once __DIR__ . '/teacher_routes.php';
include_once __DIR__ . '/admin_routes.php';
include_once __DIR__ . '/material_routes.php';
include_once __DIR__ . '/library_routes.php';
include_once __DIR__ . '/data_entry_routes.php';

Route::get('/', function () {
    $events = Event::all();
    $images = DB::table('slider_images')->get();
    return view('material.home_page', compact('images', 'events'));
});

Route::get('admission-form', AdmissionApplication::class);


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END