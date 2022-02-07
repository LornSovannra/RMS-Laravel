<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::simplePaginate(10);
        $authID = Auth::id();
        $auth = User::find($authID);

        return view('welcome', compact("users", "auth"));
    }

    public function EmployeeHome(){
        $users = User::simplePaginate(10);
        $authID = Auth::id();
        $auth = User::find($authID);

        return view("pages.employee", compact("users", "auth"));
    }
}