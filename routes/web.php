<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\BannerController;
use App\Http\Controllers\Dashboard\EventController;
use App\Http\Controllers\Dashboard\TestimonialController;
use App\Http\Controllers\Dashboard\HistoryController;
use App\Http\Controllers\Dashboard\TeacherController;
use App\Http\Controllers\Dashboard\CourseController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\SubscribeController;
use App\Http\Controllers\Frontend\AboutusController;
use App\Http\Controllers\Frontend\FcourseController;
use App\Http\Controllers\Frontend\FteacherController;
use App\Http\Controllers\Frontend\FcontactController;
use App\Http\Controllers\Frontend\FeventController;
use App\Http\Controllers\Admin\AuthController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dashboards', DashboardController::class);

Route::resource('banners', BannerController::class);

Route::resource('events', EventController::class);

Route::resource('testimonials', TestimonialController::class);

Route::resource('histories', HistoryController::class);

Route::resource('teachers', TeacherController::class);

Route::resource('courses', CourseController::class);

Route::resource('blogs',BlogController::class);

Route::resource('contacts',ContactController::class);



/////////////////////frontend///////////////////////////

Route::resource('homes',HomeController::class);

Route::resource('aboutus', AboutusController::class);

Route::resource('subscribes',SubscribeController::class);

Route::resource('course',FcourseController::class);

Route::resource('teacher',FteacherController::class);

Route::resource('contact',FcontactController::class);

Route::resource('event',FeventController::class);



// for user login and register



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
