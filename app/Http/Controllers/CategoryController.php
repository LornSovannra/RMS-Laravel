<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function CategoryHome(Request $request){
        $authID = Auth::id();
        $auth = User::find($authID);

        if(empty($request->all())){
            $categories = Category::simplePaginate(10);

            return view("pages.category", compact("categories", "auth"));
        }else{
            $categories = Category::where("category_name", "LIKE", "%" . $request->search_category . "%")->orWhere("status", "LIKE", "%" . $request->search_category . "%")->simplePaginate(10);
            $categories->appends($request->all());

            return view('pages.category', compact("categories", "auth"));
        }
    }
}