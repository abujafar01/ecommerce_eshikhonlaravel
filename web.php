<?php

use Illuminate\Support\Facades\Route;





Route::get('/user/{id}/{name}',function(){
    return view('user.welcome');
})->where(['id=>'[0-9]+','name'=>'[A-Za-z]+']);

Route::post('post_route_check',function(){
    return view('user.welcome');
});

Route::prefix('admin')->group(function(){
    Route::get('{type}', function ($type) {
        $user_list = [1,2,3,4,5,6];
        return view('admin.welcome',compact('type',$type,'user_list',$user_list));
    });
    Route::get('profile/{name}, function ($name) {
        $user_list = [1,2,3,4,5,6];
        return view('admin.profile',compact('name',$name,'user_list',$user_list));
    });
});