<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//countries
Route::get('countries', [ApiController::class, 'countryIndex'])->name('countries');
Route::get('country/{slug}', [ApiController::class, 'singleCountry'])->name('country.single');

//blogs
Route::get('blogs', [ApiController::class, 'blogIndex'])->name('blogs');
Route::get('blog/{slug}', [ApiController::class, 'singleBlog'])->name('blog.single');

//courses
Route::get('courses', [ApiController::class, 'courseIndex'])->name('courses');
Route::get('course/{slug}', [ApiController::class, 'singleCourse'])->name('course.single');

//testimonials
Route::get('testimonials', [ApiController::class, 'testimonialIndex'])->name('testimonials');

//ourteams
Route::get('ourteams', [ApiController::class, 'ourTeamIndex'])->name('ourteams');

//services
Route::get('services', [ApiController::class, 'serviceIndex'])->name('services');
Route::get('service/{slug}', [ApiController::class, 'singleService'])->name('service.single');

//faqs
Route::get('faqs', [ApiController::class, 'faqIndex'])->name('faqs');

//pages
Route::get('pages', [ApiController::class, 'pageIndex'])->name('pages');
Route::get('page/{slug}', [ApiController::class, 'singlePage'])->name('page.single');

//social medias
Route::get('socialmedias', [ApiController::class, 'socialMediaIndex'])->name('socialmedias');

//settings
Route::get('settings', [ApiController::class, 'settings'])->name('settings');

//sliders
Route::get('sliders', [ApiController::class, 'sliderIndex'])->name('sliders');

//branches
Route::get('branches', [ApiController::class, 'branchIndex'])->name('branches');

//contact
Route::post('inquiries', [ApiController::class, 'inquiryStore'])->name('inquiries');
