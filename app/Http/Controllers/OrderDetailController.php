<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderDetailFormRequest;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderDetailController extends Controller
{
    public function OrderDetailHome(Request $request){
        $authID = Auth::id();
        $auth = User::find($authID);
        $orders = Order::get();
        $items = Item::get();

        if(empty($request->all())){
            $order_details = OrderDetail::paginate(10);

            return view("pages.order_detail", compact("order_details", "auth", "orders", "items"));
        }else{
            $order_details = OrderDetail::where("id", "=", $request->search_order_detail)->paginate(10);
            $order_details->appends($request->all());

            return view('pages.order_detail', compact("order_details", "auth", "orders", "items"));
        }

        /* $order_details = OrderDetail::get();

        return view("pages.order_detail", compact("order_details", "auth", "orders", "items")); */
    }

    public function Create(OrderDetailFormRequest $request){
        $order_detail = new OrderDetail();
        $order_detail->order_id = $request->order_id;
        $order_detail->item_id = $request->item_id;
        $order_detail->qty_order = $request->qty_order;
        $order_detail->save();

        return redirect("/order-detail")->with("order_detail_created", "Order detail created!");
    }

    public function View($id){
        $order_detail = OrderDetail::findOrFail($id);

        return response()->json([
            'status'=>200,
            'order_detail'=>$order_detail
        ]);
    }

    public function Edit($id){
        $order_detail = OrderDetail::findOrFail($id);

        return response()->json([
            'status'=>200,
            'order_detail'=>$order_detail
        ]);
    }

    public function Update(OrderDetailFormRequest $req){
        $order_detail = OrderDetail::findOrFail($req->id);
        $order_detail -> order_id = $req -> order_id;
        $order_detail -> item_id = $req -> item_id;
        $order_detail -> qty_order = $req -> qty_order;
        $order_detail -> save();

        return redirect("/order-detail")->with("order_detail_updated", "Order detail updated");
    }

    public function Remove($id){
        $order_detail = OrderDetail::findOrFail($id);

        return response()->json([
            'status'=>200,
            'order_detail'=>$order_detail
        ]);
    }

    public function Delete(Request $req){
        $order_detail = OrderDetail::findOrFail($req->remove_id);
        $order_detail -> delete();

        return redirect("/order-detail")->with("order_detail_deleted", "Order detail deleted");
    }
}