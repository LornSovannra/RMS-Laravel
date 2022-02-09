<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function OrderHome(Request $request){
        $authID = Auth::id();
        $auth = User::find($authID);

        if(empty($request->all())){
            $orders = Order::simplePaginate(10);

            return view("pages.order", compact("orders", "auth"));
        }else{
            $orders = Order::where("order_name", "LIKE", "%" . $request->search_order . "%")->orWhere("status", "LIKE", "%" . $request->search_order . "%")->simplePaginate(10);
            $orders->appends($request->all());

            return view('pages.order', compact("orders", "auth"));
        }
    }
}
