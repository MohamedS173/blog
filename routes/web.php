<?php

use Illuminate\Support\Facades\Route;



Route::get('/','App\Http\Controllers\contr@show');
Route::get('/filterEquips','App\Http\Controllers\contr@filterEquips');
Route::get('/filterActive','App\Http\Controllers\contr@show');
Route::get('/getUser','App\Http\Controllers\contr@getUser');
Route::post('/add-user','App\Http\Controllers\contr@store');
Route::post('/updateUser','App\Http\Controllers\contr@updateUser');
// Route::post('/upload-add','App\Http\Controllers\contr@uploadAdd')->name('users.upload');
Route::get('/delete-user/{id}','App\Http\Controllers\contr@deleteUser');


// Route::get('/', function () {
//     return view('index');
// });

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/about', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});


// Route::get('/edit/{id}','App\Http\Controllers\contr@edit');
