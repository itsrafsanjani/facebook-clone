<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:api'], function (){

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/posts', [PostController::class, 'store']);
});
