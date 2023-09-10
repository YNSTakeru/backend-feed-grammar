<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\WordController;
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

Route::get("/", function () {
    return view("welcome");
});

Route::prefix("sections")
    ->controller(SectionController::class)
    ->name("sections.")
    ->group(function () {
        Route::get("/", "index")->name("index");
        Route::get("/{id}", "sendQuestions")->name("sendQuestions");
        Route::get(
            "/{sectionId}/questions/{questionId}/next",
            "sendNextQuestion"
        )->name("sendNextQuestion");
        Route::get(
            "/{sectionId}/questions/{questionId}/previous",
            "sendPreviousQuestion"
        )->name("sendPreviousQuestion");
    });

Route::prefix("questions")
    ->controller(QuestionController::class)
    ->name("questions.")
    ->group(function () {
        Route::get("/{questionId}", "sendVideos")->name("sendVideos");
        Route::get(
            "/{questionId}/videos/{videoId}/next",
            "sendNextVideo"
        )->name("sendNextVideo");
        Route::get(
            "/{questionId}/videos/{videoId}/previous",
            "sendPreviousVideo"
        )->name("sendPreviousVideo");
    });

Route::prefix("words")
    ->controller(WordController::class)
    ->name("words.")
    ->group(function () {
        Route::get("/{id}", "sendWords")->name("sendWords");
    });
