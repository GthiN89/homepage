<?php

use App\Http\Controllers\SecurityController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [IndexController::class, 'index'])->name('home');
// Send Message route
Route::post('message/send', [MessagesController::class, 'send'])->name('message.send');


require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('backend.index');
    })->name('dashboard');

    // User profile settings routes
    Route::get('/user/profile', [UserProfileController::class, 'index'])->name('user.profile');
    Route::post('/user/update', [UserProfileController::class, 'update'])->name('user.update');
    Route::post('/user/password/update',  [UserProfileController::class,'updatePassword'])->name('user.update.password');
    // Home settings routes
    Route::get('/settings/home', [HomeController::class, 'index'])->name('settings.home');
    Route::post('settings/home/update', [HomeController::class, 'update'])->name('settings.home.update');
    // About me settings routes
    Route::get('/settings/about', [AboutController::class, 'index'])->name('settings.about');
    Route::post('/settings/about/update', [AboutController::class, 'update'])->name('settings.about.update');
    // Experience settings routes
    Route::get('/settings/experience', [ExperienceController::class, 'index'])->name('settings.experience');
    Route::get('/settings/experience/add', [ExperienceController::class, 'AddExperience'])->name('settings.experience.add');
    Route::post('/settings/experience/store', [ExperienceController::class, 'StoreExperience'])->name('settings.experience.store');
    Route::get('/settings/experience/edit/{id}', [ExperienceController::class, 'EditExperience'])->name('settings.experience.edit');
    Route::post('/settings/experience/update/{id}', [ExperienceController::class, 'UpdateExperience'])->name('settings.experience.update');
    Route::get('/settings/experience/delete/{id}', [ExperienceController::class, 'delete'])->name('settings.experience.delete');
    //skillss ettings routes
    Route::get('/settings/skills', [SkillsController::class, 'index'])->name('settings.skills');
    Route::get('/settings/skills/add', [SkillsController::class, 'AddSkill'])->name('settings.skills.add');
    Route::post('/settings/skills/store', [SkillsController::class, 'StoreSkill'])->name('settings.skills.store');
    Route::get('/settings/skills/edit/{id}', [SkillsController::class, 'EditSkill'])->name('settings.skills.edit');
    Route::post('/settings/skills/update/{id}', [SkillsController::class, 'UpdateSkill'])->name('settings.skills.update');
    Route::get('/settings/skills/delete/{id}', [SkillsController::class, 'delete'])->name('settings.skills.delete');
    // Portfolio settings routes
    Route::get('/settings/portfolio', [PortfolioController::class, 'index'])->name('settings.portfolio');
    Route::get('/settings/portfolio/add', [PortfolioController::class, 'AddPortfolio'])->name('settings.portfolio.add');
    Route::post('/settings/portfolio/store', [PortfolioController::class, 'StorePortfolio'])->name('settings.portfolio.store');
    Route::get('/settings/portfolio/edit/{id}', [PortfolioController::class, 'EditPortfolio'])->name('settings.portfolio.edit');
    Route::post('/settings/portfolio/update/{id}', [PortfolioController::class, 'UpdatePortfolio'])->name('settings.portfolio.update');
    Route::get('/settings/portfolio/delete/{id}', [PortfolioController::class, 'delete'])->name('settings.portfolio.delete');
    // Contact information settings routes
    Route::get('/settings/contact', [ContactController::class, 'index'])->name('settings.contact');
    Route::post('settings/contact/update', [ContactController::class, 'update'])->name('settings.contact.update');
    // Message system administration routes
    Route::get('/messages', [MessagesController::class, 'index'])->name('messages');

    Route::get('/message/read/{id}', [MessagesController::class, 'read'])->name('message.read');
    Route::get('/message/delete/{id}', [MessagesController::class, 'delete'])->name('message.delete');
});
