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

    public function index(Request $request)
    {
        $authID = Auth::id();
        $auth = User::find($authID);

        if(empty($request -> all())){
            $users = User::simplePaginate(1);
    
            return view('welcome', compact("users", "auth"));
        }else{
            $users = User::where("name", "LIKE", "%" . $request->search . "%")->orWhere("email", "LIKE", "%" . $request->search . "%")->paginate(1);
            $users->appends($request->all());
            return view('welcome', compact("users", "auth"));
        }
    }

    public function EmployeeHome(Request $request){
        $authID = Auth::id();
        $auth = User::find($authID);

        if(empty($request->all())){
            $users = User::simplePaginate(10);

            return view("pages.employee", compact("users", "auth"));
        }else{
            $users = User::where("name", "LIKE", "%" . $request->search_employee . "%")->orWhere("email", "LIKE", "%" . $request->search_employee . "%")->simplePaginate(2);
            $users->appends($request->all());

            return view('pages.employee', compact("users", "auth"));
        }
    }
}