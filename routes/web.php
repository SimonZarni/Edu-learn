<?php

use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\User\ApplicationController as UserApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\User\CourseController as UserCourseController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    if (auth()->check()) {
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('home');
    }

    return redirect()->route('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/home', [UserCourseController::class, 'home'])->name('home');

Route::get('/courses', [UserCourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{course}', [UserCourseController::class, 'show'])->name('courses.show');

Route::get('/courses/{course}/apply', [UserApplicationController::class, 'create'])->name('applications.create');
Route::post('/courses/{course}/apply', [UserApplicationController::class, 'store'])->name('applications.store');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::middleware('auth')->group(function () {
//     Route::get('/courses/{course}/apply', [UserApplicationController::class, 'create'])->name('applications.create');
//     Route::post('/courses/{course}/apply', [UserApplicationController::class, 'store'])->name('applications.store');
// });

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware('auth', 'admin');

Route::get('/register', [AuthController::class, 'registrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('admin/course', CourseController::class)->middleware('auth', 'admin');

Route::get('/admin/application', [ApplicationController::class, 'index'])->name('admin.application.index')->middleware('auth', 'admin');
Route::post('/admin/application/{application}/status/{status}', [ApplicationController::class, 'updateStatus'])
    ->name('admin.application.updateStatus');

