<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get("/student-register", [StudentController::class, "studentReg"])->name("student.register");
Route::post("/student-register", [StudentController::class, "register"])->name("student.register");
Route::get("/student-login", [StudentController::class, "studentLogin"])->name("student.login");
Route::post("/student-login", [StudentController::class, "login"])->name("student.login");
Route::get("/student-profile", [StudentController::class, "profile"])->name("student.profile");
Route::get("/student-logout", [StudentController::class, "logout"])->name("student.logout");
