<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;

Route::get('/', function () {



$projects = Project::latest()->get(); //databse query to get all projects from the database

    return view('home', ["name" => "Shahin Hossain", "email" => "shahin@example.com", "projects" => $projects]);
});

Route::get("/about", function () {
    return view("about");
});



Route::resource('admin/projects', ProjectController::class)
->except(['show'])
->middleware('auth.basic'); //projects/admin is the route prefix for the resource controller


;
