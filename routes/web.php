<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('home');
})->middleware(['auth', 'verified']);

Route::get('/home', [TestController::class, 'Home'])->name('home');

Route::middleware('auth')->group(function () {
    // Admin AllRoute
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/logout', 'Logout')->name('logout');
    });

    // Category AllRoute
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'category')->name('category');
        Route::post('/category/store', 'categoryStore')->name('category.store');

        Route::get('/category/edit/{id}', 'categoryEdit')->name('category.edit');
        Route::post('/category/update', 'categoryUpdate')->name('category.update');
        Route::get('/category/delete/{id}', 'categoryDelete')->name('category.delete');
    });

    // Question AllRoute
    Route::controller(QuestionController::class)->group(function () {
        Route::get('/question', 'question')->name('question');
        Route::get('add/question', 'addQuestion')->name('add.question');
        Route::post('/question/store', 'questionStore')->name('question.store');

        Route::get('/question/edit/{id}', 'questionEdit')->name('question.edit');
        Route::post('/question/update', 'questionUpdate')->name('question.update');
        Route::get('/question/delete/{id}', 'questionDelete')->name('question.delete');
    });

    // option AllRoute
    Route::controller(OptionController::class)->group(function () {
        Route::get('/option', 'option')->name('option');
        Route::get('add/option', 'addoption')->name('add.option');
        Route::post('/option/store', 'optionStore')->name('option.store');

        Route::get('/option/edit/{id}', 'optionEdit')->name('option.edit');
        Route::post('/option/update', 'optionUpdate')->name('option.update');
        Route::get('/option/delete/{id}', 'optionDelete')->name('option.delete');
    });
    // result AllRoute
    Route::controller(ResultController::class)->group(function () {
        Route::get('/result', 'result')->name('result');
        Route::get('result/{result_id}', 'resultShow')->name('result.show');
        Route::get('admin/result/{id}', 'adminResultShow')->name('admin.result.show');

        Route::get('/result/delete/{id}', 'resultDelete')->name('result.delete');
    });

    // Test All Route
    Route::controller(TestController::class)->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/test/ipa', 'TestIpa')->name('test.ipa');
        Route::get('/test/matematika', 'Testmatematika')->name('test.matematika');
        Route::get('/test/ips', 'Testips')->name('test.ips');
        Route::post('/store/test', 'testStore')->name('test.store');
    });
});

require __DIR__ . '/auth.php';
