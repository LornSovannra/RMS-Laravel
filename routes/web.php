<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomeController::class, "index"]) -> name("dashboard");

//Employee
Route::get("/employee", [HomeController::class, "EmployeeHome"]) -> name("employee_home");
Route::get("/view-employee/{id}", [EmployeeController::class, "View"]) -> name("view_employee");
Route::post("/employee", [EmployeeController::class, "Create"]) -> name("create_employee");
Route::get("/edit-employee/{id}", [EmployeeController::class, "Edit"]) -> name("edit_employee");
Route::post("/update-employee", [EmployeeController::class, "Update"]) -> name("update_employee");
Route::get("/remove-employee/{id}", [EmployeeController::class, "Remove"]) -> name("remove_employee");
Route::post("/delete-employee", [EmployeeController::class, "Delete"]) -> name("delete_employee");
Route::get("/search-employee", [HomeController::class, "EmployeeHome"]) -> name("search_employee");
//End Employee