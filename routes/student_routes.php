<?php

use App\Http\Controllers\Auth\StudentLoginController;
use App\Http\Livewire\Student\Assignments;
use App\Http\Livewire\Student\Classes;
use App\Http\Livewire\Student\Courses;
use App\Http\Livewire\Student\Dashboard;
use App\Http\Livewire\Student\Exam;
use App\Http\Livewire\Student\Hostel;
use App\Http\Livewire\Student\Hostel\ApplyForSit;
use App\Http\Livewire\Student\Hostel\HostelSitApplication;
use App\Http\Livewire\Student\Library;
use App\Http\Livewire\Student\Library\BorrowedBooks;
use App\Http\Livewire\Student\Registration;
use App\Http\Livewire\Student\RegistrationForm;
use App\Http\Livewire\Student\Result;
use App\Http\Livewire\Student\ResultShow;
use App\Http\Livewire\StudentClearance;
use App\Models\Result as ModelsResult;
use Illuminate\Support\Facades\Route;


Route::get('student-login', [StudentLoginController::class, 'loginView']);
Route::post('student/login', [StudentLoginController::class, 'login'])->name('student.login');

Route::prefix('/student')->name('student.')->middleware('student')->group(function(){
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/courses', Courses::class)->name('courses');
    Route::get('/classes', Classes::class)->name('classes');
    Route::get('/exam', Exam::class)->name('exam');
    Route::get('/assignments', Assignments::class)->name('assignments');
    Route::get('/result', Result::class)->name('result');



    Route::get('/registration', Registration::class)->name('registration');

    Route::get('/registration-form/{form_id}', RegistrationForm::class)->name('registration.form');


    Route::get('/library', Library::class)->name('library');
    Route::get('/library/borrowed-books', BorrowedBooks::class)->name('library.borrowed_books');
    Route::get('/notice', Library::class)->name('notice');


    Route::get('/hostel', Hostel::class)->name('hostel');
    Route::get('apply-for-sit', HostelSitApplication::class)->name('hostel.apply-for-sit');

    Route::get('/clearance', StudentClearance::class)->name('clearance');
});

Route::get('test/{id}', RegistrationForm::class)->name('registration.form');

Route::get('student/result-show/{semester_id}', function(){
    $results = ModelsResult::where([
        'student_id'=> 2022101501,
        'semester_id'=> 101
    ])->get();
    return view('student.show-result')->with(['results'=> $results]);
});
