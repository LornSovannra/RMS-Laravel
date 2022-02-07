<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomeController::class, "index"]) -> name("dashboard");

Route::get("/employee", [HomeController::class, "EmployeeHome"]) -> name("employee_home");
Route::post("/employee", [EmployeeController::class, "Create"]) -> name("create_employee");
Route::post("/delete-employee/{id}", [EmployeeController::class, "Delete"]) -> name("delete_employee");