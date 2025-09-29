<?php

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
   $user = User::find(5);
    return $user->profile;

    /*$profile = Profile::find(1);
    return $profile->user;*/
});
