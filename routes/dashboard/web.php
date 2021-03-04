<?php
use Illuminate\Support\Facades\Route;

        Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function(){

            Route::resource('/index', 'DashboardController')->except(['show']);

            //  route user
            Route::resource('user', 'UserController')->except(['show']);
            // end route user

            //  route category
            Route::resource('category', 'CategoryController')->except(['show']);
             // end   route category

            //  route post
            Route::resource('post', 'PostController')->except(['show']);
            // end route post

            //  route tag
            Route::resource('tag', 'TagController')->except(['show']);
            // end route tag


        });
        // end the route





