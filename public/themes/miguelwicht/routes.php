<?php
/*
|--------------------------------------------------------------------------
| Custom Theme Routes
|--------------------------------------------------------------------------
|
| In this file you can over ride any routes and add new ones based on your
| needs. For information on routing please see the following documentation:
| http://laravel.com/docs/routing
| http://laravel.com/docs/controllers
|
*/

Route::get('/about', function()
{
    Wardrobe::setupViews();
    return View::make(theme_view('about'));
});

Route::get('/tags', function()
{
    Wardrobe::setupViews();
    return View::make(theme_view('tags'));
});

Route::get('/impressum', function()
{
    Wardrobe::setupViews();
    return View::make('impressum.index');
});

Route::get('/posts', function()
{
    Wardrobe::setupViews();
    return View::make(theme_view('posts'));
});
