<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function ChangePassword(Request $request){
        $id = Auth::id();
        $user = User::findOrFail($id);
        $password_verified = Hash::check($request->current_password, $user->password);

        if($password_verified){
            $user->password = Hash::make($request->new_password);
            $user->save();

            return redirect("/")->with("changed_password_successfully", "Changed password successfully!");
        }else{
            return redirect("/")->with("fail_to_change_password", "Failed to change password!");
        }
    }
}