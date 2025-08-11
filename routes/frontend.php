<?php

use App\Http\Controllers\Admin\AchievementController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Frontend\AchievementController as FrontendAchievementController;
use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;
use App\Http\Controllers\Frontend\CountryController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MessageController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\WhychooseusController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('auth.login');
// });


Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('teams', [HomeController::class, 'teams'])->name('teams');
Route::get('faqs', [HomeController::class, 'faqindex'])->name('faqs');
Route::get('galleries', [HomeController::class, 'gallery'])->name('galleries');
Route::get('become-member', [HomeController::class, 'member'])->name('become-member');
Route::get('awards', [HomeController::class, 'awards'])->name('awards');

Route::get('/team/current-members', [HomeController::class, 'currentMembers'])->name('team.current_members');
Route::get('/team/current-board', [HomeController::class, 'currentBoard'])->name('team.current_board');
Route::get('/team/past-board', [HomeController::class, 'pastBoard'])->name('team.past_board');


Route::get('courses', [CourseController::class, 'index'])->name('courses');
Route::get('courses/{slug}', [CourseController::class, 'show'])->name('course.show');

Route::get('countries', [CountryController::class, 'index'])->name('countries');
Route::get('countries/{slug}', [CountryController::class, 'show'])->name('country.show');

Route::get('whatwedo', [WhychooseusController::class, 'index'])->name('whychooseus');
Route::get('whatwedo/{slug}', [WhychooseusController::class, 'show'])->name('whychooseus.show');

Route::get('projects', [FrontendAchievementController::class, 'index'])->name('projects');
Route::get('projects/{slug}', [FrontendAchievementController::class, 'show'])->name('project.show');

Route::get('events', [EventController::class, 'index'])->name('events');
Route::get('events/{slug}', [EventController::class, 'show'])->name('event.show');

Route::get('messages', [MessageController::class, 'index'])->name('messages');
Route::get('messages/{slug}', [MessageController::class, 'show'])->name('message.show');

Route::get('blogs', [FrontendBlogController::class, 'index'])->name('blogs');
Route::get('blogs/{slug}', [FrontendBlogController::class, 'show'])->name('blog.show');

Route::get('/page/{slug}', [HomeController::class, 'pageDetail'])->name('page.show');

Route::post('inquiry', [HomeController::class, 'inquiry'])->name('inquiry');
Route::get('become-member', [HomeController::class, 'members'])->name('become-member');
Route::post('member', [HomeController::class, 'member'])->name('member');
