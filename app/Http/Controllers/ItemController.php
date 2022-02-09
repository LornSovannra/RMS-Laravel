<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function ItemHome(Request $request){
        $authID = Auth::id();
        $auth = User::find($authID);

        if(empty($request->all())){
            $items = Item::simplePaginate(10);

            return view("pages.item", compact("items", "auth"));
        }else{
            $items = Item::where("item_name", "LIKE", "%" . $request->search_item . "%")->orWhere("status", "LIKE", "%" . $request->search_item . "%")->simplePaginate(10);
            $items->appends($request->all());

            return view('pages.item', compact("items", "auth"));
        }
    }
}
