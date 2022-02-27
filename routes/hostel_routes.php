<?php

use App\Http\Controllers\Auth\ProvostLoginController;
use App\Http\Livewire\Hostel\AddNewStudent;
use App\Http\Livewire\Hostel\ApplicationDetail;
use App\Http\Livewire\Hostel\Applications;
use App\Http\Livewire\Hostel\Dashboard;
use App\Http\Livewire\Hostel\Notices;
use App\Http\Livewire\Hostel\Payments;
use App\Http\Livewire\Hostel\Student\ApplyForSit;
use App\Http\Livewire\Hostel\StudentDetails;
use App\Http\Livewire\Hostel\Students;
use Illuminate\Support\Facades\Route;


Route::get('provost-login', [ProvostLoginController::class, 'loginView'])->name('provost.login_view');
Route::post('provost/login', [ProvostLoginController::class, 'authenticate'])->name('provost.login');



Route::prefix('hostel/')->name('hostel.')->middleware('provost')->group(function (){
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('students', Students::class)->name('students');
    Route::get('notice', Notices::class)->name('notice');
    Route::get('payments', Payments::class)->name('payments');
    Route::get('applications', Applications::class)->name('applications');

    Route::get('student/{hostelMember}/show', StudentDetails::class)->name('student.show');
    Route::get('student/create', AddNewStudent::class)->name('student.create');

    Route::get('application-details/{form_id}', ApplicationDetail::class);
});
  