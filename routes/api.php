<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\VideoController;
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

Route::apiResource("contact", ContactController::class)->only("store");
Route::apiResource("sections", SectionController::class)->only(["index", "show"]);
Route::apiResource("sections.questions", QuestionController::class)->only(["index"]);
Route::apiResource("questions", QuestionController::class)->only(["show"]);
Route::apiResource("videos", VideoController::class)->only(["index", "show"]);

Route::middleware("auth:sanctum")->get("/user", function (Request $request) {
    return $request->user();
});
