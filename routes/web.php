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
use App\Http\Controllers\admin\NobatController;

/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
*/

    Route::get('/',[FrontController::class,'index'])->name('front.index');
    Route::get('single/{slug}',[FrontController::class,'single'])->name('front.single');
    Route::post('store-comment',[FrontController::class,'storeComment'])->name('store.command');
    Route::get('about',[FrontController::class,'about'])->name('about');
    Route::get('galleries',[FrontController::class,'gallery'])->name('galleries');
    Route::get('blogs',[FrontController::class,'blogs'])->name('blogs');
    Route::get('contact',[FrontController::class,'contact'])->name('contact');
    Route::post('contact-store',[FrontController::class,'contactStore'])->name('contact.store');
    Route::get('category-blog/{slug}',[FrontController::class,'categoryBlog'])->name('category.blog');

    Route::get('login-panel',[FrontController::class,'login'])->name('panel.login');
    Route::post('login-store',[FrontController::class,'loginStore'])->name('login.store');
    Route::get('register-panel',[FrontController::class,'register'])->name('panel.register');
    Route::post('register-store',[FrontController::class,'registerStore'])->name('register.store');

    Route::middleware(['auth'])->group(function (){
        Route::get('panel',[FrontController::class,'panel'])->name('panel');
        Route::post('nobatgiri',[FrontController::class,'nobatgiri'])->name('nobatgiri');
        Route::post('logout',[FrontController::class,'logout'])->name('logout');
    });


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
    Route::middleware(['is_admin'])->group(function () {

        Route::get('/dashboard', function () {
            return view('layouts.admin_master');
        })->middleware(['auth', 'verified'])->name('dashboard');

        Route::delete('nobatgiri/{id}',[SettingController::class,'nobatgiriDestroy'])->name('nobatgiri.destroy');

        Route::resource('nobat',NobatController::class)->except(['show']);

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

        Route::get('messages',[SettingController::class,'messages'])->name('messages');

        Route::get('service',[SettingController::class,'serviceIndex'])->name('service.index');
        Route::get('service-create',[SettingController::class,'serviceCreate'])->name('service.create');
        Route::post('service-store',[SettingController::class,'serviceStore'])->name('service.store');
        Route::delete('service-destroy/{id}',[SettingController::class,'serviceDestroy'])->name('service.destroy');

        Route::get('personal-index',[SettingController::class,'personalIndex'])->name('personal.index');
        Route::get('personal-create',[SettingController::class,'personalCreate'])->name('personal.create');
        Route::post('personal-store',[SettingController::class,'personalStore'])->name('personal.store');
        Route::delete('personal-destroy/{id}',[SettingController::class,'personalDestroy'])->name('personal.destroy');
    });



require __DIR__.'/auth.php';
