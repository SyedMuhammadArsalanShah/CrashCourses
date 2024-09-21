<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/index/{username}/{userid?}', function ($name, $id = null) {

    echo "user name" . $name . "<br>";
    echo "user ID" . $id . "<br>";
});



Route::get('/info/{username}/{userid?}', function ($name, $id = null) {

    // echo"user name".$name."<br>";
    // echo"user ID".$id."<br>";

    $student= "<em> bilal </em>";
    $data = compact("name", "id", "student");
    return view("info")->with($data);
});
