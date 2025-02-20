<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Auth\Login as AdminLogin;
use App\Livewire\Emp\Auth\Login as EmpLogin;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::get('/admin/login', AdminLogin::class)->name('admin.login');
Route::get('/employee/login', EmpLogin::class)->name('emp.login');

require __DIR__.'/auth.php';
