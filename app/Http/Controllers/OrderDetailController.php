<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderDetailController extends Controller
{
    public function OrderDetailHome(Request $request){
        $authID = Auth::id();
        $auth = User::find($authID);

        if(empty($request->all())){
            $order_details = OrderDetail::simplePaginate(10);

            return view("pages.order_detail", compact("order_details", "auth"));
        }else{
            $order_details = OrderDetail::where("order_detail_name", "LIKE", "%" . $request->search_order_detail . "%")->orWhere("status", "LIKE", "%" . $request->search_order_detail . "%")->simplePaginate(10);
            $order_details->appends($request->all());

            return view('pages.order_detail', compact("order_details", "auth"));
        }
    }
}