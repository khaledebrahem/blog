<?php

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




Auth::routes();

Route::get('/home','HomeController@index')->name('home');




##############################       ADMIN PAGES      #############################


Route::prefix('admin')->middleware('Admin')->group(function () {

    Route::prefix('section')->group(function () {

        Route::get('/','Admin\Section\Section_cont@index')->name('section.index');

        Route::get('add','Admin\Section\Section_cont@add')->name('section.add');
        Route::post('add','Admin\Section\Section_cont@add')->name('section.add');

        Route::get('update/{id}','Admin\Section\Section_cont@update')->name('section.update');
        Route::post('update/{id}','Admin\Section\Section_cont@update')->name('section.update');

        Route::get('delete/{id}','Admin\Section\Section_cont@delete')->name('section.delete');
        Route::post('delete/{id}','Admin\Section\Section_cont@delete')->name('section.delete');

    });

    Route::prefix('image')->group(function (){

        Route::get('/','Admin\Image\Image_cont@index')->name('Image.Index');

        Route::get('add','Admin\Image\Image_cont@add')->name('Image.add');
        Route::post('add','Admin\Image\Image_cont@add')->name('Image.add');

        Route::get('delete/{id}','Admin\Image\Image_cont@delete')->name('image_Delete');
        Route::post('delete/{id}','Admin\Image\Image_cont@delete')->name('image_Delete');

    });

    Route::prefix('post')->group(function (){

        Route::get('/','Admin\Post\Post_cont@index')->name('Post.Index');

        Route::get('add','Admin\Post\Post_cont@add')->name('Post.add');
        Route::post('add','Admin\Post\Post_cont@add')->name('Post.add');

        Route::get('update/{id}','Admin\Post\Post_cont@update')->name('Post.update');
        Route::post('update/{id}','Admin\Post\Post_cont@update')->name('Post.update');


        Route::get('delete/{id}','Admin\Post\Post_cont@delete')->name('Post.delete');
        Route::post('delete/{id}','Admin\Post\Post_cont@delete')->name('Post.delete');

    });

});



##########################       WEB PAGES      #############################



Route::prefix('/')->group(function (){

    Route::get('','Web\Main\Main_cont@index')->name('Web.index');

    Route::prefix('section')->group(function (){

        Route::get('/{id}','Web\Section\Section_cont@index')->name('Web.section.index');

    });
    Route::prefix('Post')->group(function (){

        Route::get('/{id}','Web\Post\Post_cont@index')->name('Web.Post.index');
        Route::post('/{id}','Web\Post\Post_cont@index')->name('Web.Post.index');


    });


});
