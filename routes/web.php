<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstateController;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\ApplianceController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPagesController;
use App\Http\Controllers\NestController;

Route::redirect('/', '/home');

Route::get('/home', [HomeController::class, 'index']);

Route::get('/estate', [EstateController::class, 'index']);

Route::get('/furniture', [FurnitureController::class, 'index']);

Route::get('/appliance', [ApplianceController::class, 'index']);

Route::get('/services', [ServicesController::class, 'index']);

Route::get('/blogs', [BlogController::class, 'index']);

Route::get('/whispers', [BlogPagesController::class, 'index']);

Route::get('/studio', [NestController::class, 'getStudio']);

Route::get('/one', [NestController::class, 'getOneBed']);

Route::get('/two', [NestController::class, 'getTwoBed']);

Route::get('/three', [NestController::class, 'getThreeBed']);

Route::get('/four', [NestController::class, 'getFourBed']);

Route::get('/sale', [NestController::class, 'getForSale']);

Route::get('/baby', [NestController::class, 'getBabyCare']);

Route::get('/fitness', [NestController::class, 'getFitness']);

Route::get('/airbnb', [NestController::class, 'getAirbnb']);

Route::get('/camping', [NestController::class, 'getCamping']);

Route::get('/design', [NestController::class, 'getID']);

Route::get('/holiday', [NestController::class, 'getHD']);

Route::get('/nest_blog_0', [BlogController::class, 'getNestBlog0']);

Route::get('/travel', [BlogController::class, 'getNestBlogTravel']);
