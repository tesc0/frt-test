<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\Quiz;
use App\Http\Controllers\Admin;
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

Route::get('/', [Quiz::class, 'initQuiz']);
Route::post('/start-quiz', [Quiz::class, 'startQuiz']);
Route::post('/submit-quiz', [Quiz::class, 'submitQuiz']);

Route::get('/scoreboard', [Quiz::class, 'scoreboard']);
Route::get('/stats', [Quiz::class, 'stats']);
 
Route::get('/admin', function(Request $request) {
    if (!$request->session()->exists('user')) {
        return view('admin-login');
    } else {
        return redirect('/admin-landing');
    }
});

Route::post('/login', [Admin::class, 'login']);

Route::group(['middleware' => 'usersession'], function () {

    Route::get('/admin-landing', [Admin::class, 'landing']);

    Route::get('/admin-questions', [Admin::class, 'questions']);
    Route::get('/admin-question/{id?}', [Admin::class, 'question']);
    Route::post('/save-question', [Admin::class, 'saveQuestion']);

    Route::post('/save-answer', [Admin::class, 'saveAnswer']);
    //Route::post('/admin', [Quiz::class, 'landing']);

});