<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('employer')->user();

    //dd($users);

    return view('employer.home');
})->name('home');

