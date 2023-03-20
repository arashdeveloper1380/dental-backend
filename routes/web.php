<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\admin\sliderController;
use App\Http\Controllers\admin\CommentController;

/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
*/

    Route::get('/',[FrontController::class,'index'])->name('front.index');
    Route::get('single/{slug}',[FrontController::class,'single'])->name('front.single');
    Route::post('store-comment',[FrontController::class,'storeComment'])->name('store.command');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
    Route::middleware(['is_admin'])->group(function () {
        Route::get('/dashboard', function () {
            return view('layouts.admin_master');
        })->middleware(['auth', 'verified'])->name('dashboard');

        // ------- CRUD -------
        Route::resource('categories',CategoryController::class)->except(['show']);
        Route::resource('blog',BlogController::class)->except(['show']);
        Route::resource('gallery',GalleryController::class)->except(['show']);
        Route::resource('slider',sliderController::class)->except(['show']);

        // -------- Comment -------
        Route::resource('comment',CommentController::class)->except(['show']);

        Route::get('comment-active/{id}',[CommentController::class,'activeComment'])->name('active.comment');
        Route::get('comment-deactive/{id}',[CommentController::class,'deactiveComment'])->name('deactive.comment');

        Route::get('answer-form/{id}',[CommentController::class,'answerForm'])->name('answer.form');
        Route::post('answer-store',[CommentController::class,'answerFormStore'])->name('answer.form.store');

        // ------- Settings --------
        Route::get('edit-about/{key}',[SettingController::class,'editAbout'])->name('editAbout');
        Route::put('update-about/{key}',[SettingController::class,'UpdateAbout'])->name('updateAbout');

        Route::get('edit-info/{key}',[SettingController::class,'editInfo'])->name('editInfo');
        Route::put('update-info/{key}',[SettingController::class,'UpdateInfo'])->name('updateInfo');


    //    Route::middleware('auth')->group(function () {
    //        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //    });
    });



require __DIR__.'/auth.php';
