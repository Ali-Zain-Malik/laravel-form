<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");


Route::get("/register", function()
{
    return view("register");
})->name("register");

Route::get("/login", function()
{
    return view("login");
})->name("login");


Route::post("/login", [AuthManager::class, "registerPost"])->name("register.post");
Route::post("/home", [AuthManager::class, "loginPost"])->name("login.post");


Route::get("/home", function()
{
    return view("home");
})->name("home");