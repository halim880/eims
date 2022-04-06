<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Livewire\Admin\Admission\ApplicationDetails;
use App\Http\Livewire\Admin\Admission\Applications;
use App\Http\Livewire\Admin\Admission\ManageSession;
use App\Http\Livewire\Admin\Admission\Session as AdmissionSession;
use App\Http\Livewire\Admin\Course\AssignCourse;
use App\Http\Livewire\Admin\Course\CourseEntry;
use App\Http\Livewire\Admin\Course\CourseTable;
use App\Http\Livewire\Admin\CreateExam;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Exam;
use App\Http\Livewire\Admin\Hostel\HostelFeeSetup;
use App\Http\Livewire\Admin\Hostel\ManageHostel;
use App\Http\Livewire\Admin\Student\StudentDetails;
use App\Http\Livewire\Admin\Student\StudentEntry;
use App\Http\Livewire\Admin\Student\StudentsTable;
use App\Http\Livewire\Admin\Teacher\TeacherEntry;
use App\Http\Livewire\Admin\Teacher\TeachersTable;
use Illuminate\Contracts\Session\Session;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Route;


Route::get('admin-login', [AdminLoginController::class, 'loginView']);
Route::post('admin/login', [AdminLoginController::class, 'authenticate'])->name('admin.login');

Route::prefix('/admin')->name('admin.')->middleware('admin')->group(function(){
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    // Admission
    Route::prefix('/admission')->name('admission.')->group(function(){
        Route::get('applications', Applications::class)->name('applications');
        // Route::get('applicatoin/show', function(){})->name('application.show');

        Route::get('/application-details/{id}', ApplicationDetails::class);
    });
    // Teacher
    Route::get('/teacher-entry', TeacherEntry::class)->name('teacher.entry');
    Route::get('/teacher-table', TeachersTable::class)->name('teacher.table');

    // Course
    Route::get('/course-entry', CourseEntry::class)->name('course.entry');
    Route::get('/course-assign', AssignCourse::class)->name('course.assign');
    Route::get('/course-table', CourseTable::class)->name('course.table');


    // Student
    Route::get('/student-entry', StudentEntry::class)->name('student.entry');
    Route::get('/student-table', StudentsTable::class)->name('student.table');
    Route::get('/student/details/{id}', StudentDetails::class)->name('student.details');

    Route::get('session', AdmissionSession::class)->name('session');
    Route::get('session-manage', ManageSession::class)->name('session.manage');

    Route::get('/exams', Exam::class)->name('exam');
    Route::get('/exam-create', CreateExam::class)->name('exam.create');



    //Hostel
    Route::get('/hostel-fee-setup', HostelFeeSetup::class)->name('hostel_fee_setup');
    Route::get('/manage-hostel', ManageHostel::class)->name('hostel.manage');
});

