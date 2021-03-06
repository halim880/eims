<?php
// Auth::routes();

// Route::get('user', 'HomeController@user_info');

// /******************************************* Web Routes **********************************/
// Route::get('/', 'HomeController@index');

use App\Http\Controllers\Material\PagesController;
use Illuminate\Support\Facades\Route;

Route::prefix('web')->name('page.')->group(function (){
    Route::get('/home', [PagesController::class,  'home'])->name('home');
    Route::get('pages/events', [PagesController::class, "events"])->name('events');
    Route::get('pages/amission', [PagesController::class, 'admission'])->name('admission');
    Route::get('pages/department', [PagesController::class ,'department'])->name('department');
    Route::get('pages/notice', [PagesController::class, 'notice'])->name('notice');
    Route::get('pages/blog', [PagesController::class, 'blog'])->name('blog');
});

// Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('admin')->group(function (){
// /******************************************* Teachers Routes **********************************/
//     Route::get('/teacher/edit/{teacher}', 'TeachersController@edit');
//     Route::get('/teacher/create', 'TeachersController@create');
//     Route::resource('/teacher', 'TeachersController');
// /******************************************* Students Routes **********************************/
//     Route::get('/student/show/{student}', [StudentsController::class, 'show'])->name('student.show');
//     Route::get('/student/edit/{student}', [StudentsController::class, 'edit'])->name('student.edit');
//     Route::post('/student/update', [StudentsController::class, 'update'])->name('student.update');
//     Route::post('/student/store', [StudentsController::class, 'store'])->name('student.store');
//     Route::get('/student/create', [StudentsController::class, 'create'])->name('student.create');
//     Route::delete('/student/create', [StudentsController::class, 'destroy'])->name('student.destroy');
//     Route::resource('/student', 'StudentsController');
// /******************************************* Dashboard Routes **********************************/
//     Route::get('/dashboard', 'DashboardController@dashboard');
//     Route::get('/settings', 'DashboardController@settings');
//     Route::get('/hostel', 'DashboardController@hostel');
//     Route::get('/library', 'DashboardController@library');
//     Route::get('/teachers', 'DashboardController@teachers');
//     Route::get('/students', 'DashboardController@students')->name('students');
//     Route::get('/hostel/member/{member}', 'DashboardController@member_show');
// });


// Route::namespace('Teacher')->prefix('teacher')->middleware(IsTeacher::class)->group(function(){
//     Route::get('/home', 'TeachersController@home');
//     Route::get('/attendance/home', 'AttendanceController@home');
//     Route::get('/attendance/all/{course}', 'AttendanceController@all_attendance');
//     Route::post('/attendance/review', 'AttendanceController@review');
//     Route::get('/attendance/update', 'AttendanceController@update');
//     Route::post('/attendance/sheet', 'AttendanceController@sheet');
//     Route::get('/attendance/delete', 'AttendanceController@delete');
// });

/******************************************* Library Routes **********************************/
// Route::namespace('Library')->prefix('library')->name('library.')->middleware('admin')->group(function (){
//     // Route::resource('book', 'BooksController');
//     Route::get('book/issue/{book}', 'LibraryController@issueBook')->name('book.issue');
//     Route::Post('book/', 'LibraryController@submitIssue')->name('book.issue.submit');
// });

// Route::namespace('Student')->prefix('student')->middleware(IsStudent::class)->group(function (){
//      Route::get('/home', 'StudentsController@home');
//      Route::get('/attendance', 'StudentsController@attendance');
//      Route::get('/attendance/all/{course}', 'StudentsController@all_attendance');
//      Route::get('/attendance/show/', 'StudentsController@show');
//      Route::get('/form/submit', 'StudentsController@form_submit');
//      Route::get('/form/check', 'StudentsController@check');
//      Route::get('/library/books', 'StudentsController@books');
     
//      Route::get('/hostel', 'StudentsController@hostel');


//      Route::get('/results', 'ResultsController@index');
//      Route::get('/result/single-result/{department_id}/{semester_id}', 'ResultsController@show');
//      Route::get('/result/apply-for-review/{student}', 'ResultsController@apply_for_review');
//      Route::get('/result/pdf/{department_id}/{semester_id}', 'ResultsController@createPDF');
     
     
//      Route::get('/form/create', 'RegistrationFormController@create_form');
//      Route::post('/form/submit', 'RegistrationFormController@submit');
//      Route::get('/form/submitable', 'RegistrationFormController@submitable');


//      Route::get('/form/pdf', [PDFController::class, 'registrationForm']);
// });


// Route::get('test', function(){
//     return new StudentResource(Student::find(2016331509));
// });


Route::get('/attendance/take_attendance', "Attendance\AttendanceController@show");


// SSLCOMMERZ Start
// Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
// Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

// Route::post('/pay', 'SslCommerzPaymentController@index');
// Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

// Route::post('/success', 'SslCommerzPaymentController@success');
// Route::post('/fail', 'SslCommerzPaymentController@fail');
// Route::post('/cancel', 'SslCommerzPaymentController@cancel');

// Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END

// Route::get("book", [BooksController::class, 'index'])->name('library.book.index');
// Route::post("book/store", [BooksController::class, 'store'])->name('library.book.store');
// Route::get("book/create", [BooksController::class, 'create'])->name('library.book.create');
// Route::get("book/{book}/show", [BooksController::class, 'show'])->name('library.book.show');
// Route::get("book/{book}/edit", [BooksController::class, 'edit'])->name('library.book.edit');
// Route::get("book/{book}/destroy", [BooksController::class, 'destroy'])->name('library.book.destroy');
// Route::put("book/{book}/update", [BooksController::class, 'update'])->name('library.book.update');