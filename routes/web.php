<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\controllers\ProjectsController;
use Illuminate\Support\Facades\Route;



/////Route For Pages\\\\\
Route::get('/',[HomeController::class,'page']);
Route::get('/resume',[ResumeController::class,'page']);
Route::get('/contact',[ContactController::class,'page']);
Route::get('/project',[ProjectsController::class,'page']);


///Route For Ajax\\\

Route::get('/heroData',[HomeController::class,'heroData']);
Route::get('/aboutData',[HomeController::class,'aboutData']);
Route::get('/socialData',[HomeController::class,'socialData']);
Route::post('/contactRequest',[ContactController::class,'contactRequest']);
Route::get('/projectData',[ProjectsController::class,'projectData']);
Route::get('/experienceData',[ResumeController::class,'experienceData']);
Route::get('/educationData',[ResumeController::class,'educationData']);
Route::get('/skillData',[ResumeController::class,'skillData']);
Route::get('/languageData',[ResumeController::class,'languageData']);

