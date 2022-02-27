<?php

use App\Http\Controllers\Auth\TeacherLoginController;
use App\Http\Livewire\Teacher\Dashboard;
use App\Http\Livewire\Teacher\Result\ResultEntry;
use App\Http\Livewire\Teacher\Result\ResultShow;
use App\Http\Livewire\Teacher\Result\ResultsTable;
use Illuminate\Support\Facades\Route;

Route::get('teacher-login', [TeacherLoginController::class, 'loginView'])->name('teacher.login_view');
Route::post('teacher/login', [TeacherLoginController::class, 'authenticate'])->name('teacher.login');

Route::prefix('/teacher')->name('teacher.')->middleware('teacher')->group(function(){
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/result-entry', ResultEntry::class)->name('result.entry');
    Route::get('/result-table', ResultsTable::class)->name('results.table');
    Route::get('/result-show/{result}', ResultShow::class)->name('result.show');
});

