<?php

use App\Http\Controllers\ResumeController;
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

Route::get('/', [ResumeController::class, 'index'])->name('home');
Route::get('/onboarding/step-one', [ResumeController::class, 'onboardingStepOne'])->name('resume.stepOne');
Route::get('/onboarding/step-two', [ResumeController::class, 'onboardingStepTwo'])->name('resume.stepTwo');
Route::get('/onboarding/step-three', [ResumeController::class, 'onboardingStepThree'])->name('resume.stepThree');
Route::post('/process/step-one', [ResumeController::class, 'processStepOne'])->name('resume.process.stepOne');
Route::post('/process/step-two', [ResumeController::class, 'processStepTwo'])->name('resume.process.stepTwo');
