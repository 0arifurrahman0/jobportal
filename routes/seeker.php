<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('seeker')->user();

    //dd($users);

    return view('seeker.home');
})->name('home');

