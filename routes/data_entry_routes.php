<?php

use App\Http\Livewire\Admin\Course\AssignCourse;
use App\Http\Livewire\Admin\Course\CourseEntry;
use App\Http\Livewire\Admin\Course\CourseTable;
use App\Http\Livewire\Admin\Student\StudentDetails;
use App\Http\Livewire\Admin\Student\StudentEntry;
use App\Http\Livewire\Admin\Student\StudentsTable;
use App\Http\Livewire\Admin\Teacher\TeacherEntry;
use App\Http\Livewire\Admin\Teacher\TeachersTable;
use App\Http\Livewire\DataEntry\Dashboard;
use App\Http\Livewire\DataEntry\Hostel\StudentEntry as HostelStudentEntry;
use App\Http\Livewire\Hostel\AddNewStudent;
use Illuminate\Support\Facades\Route;


Route::prefix('/data-entry')->name('data_entry.')->middleware('data_entry')->group(function(){
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    // Teacher
    Route::get('/teacher-entry', TeacherEntry::class)->name('teacher.entry');
    Route::get('/teacher-table', TeachersTable::class)->name('teacher.table');

    // Course
    Route::get('/course-entry', CourseEntry::class)->name('course.entry');
    Route::get('/course-table', CourseTable::class)->name('course.table');

    // Student
    Route::get('/student-entry', StudentEntry::class)->name('student.entry');
    Route::get('/student-table', StudentsTable::class)->name('student.table');
    Route::get('/student/details/{id}', StudentDetails::class)->name('student.details');

    //Hostel
    Route::get('/hostel/student-entry', HostelStudentEntry::class)->name('hostel.student.entry');
});
