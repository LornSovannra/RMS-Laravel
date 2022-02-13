<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TableController extends Controller
{
    public function TableHome(Request $request){
        $authID = Auth::id();
        $auth = User::find($authID);

        if(empty($request->all())){
            $tables = Table::simplePaginate(10);

            return view("pages.table", compact("tables", "auth"));
        }else{
            $tables = Table::where("table_name", "LIKE", "%" . $request->search_table . "%")->orWhere("status", "LIKE", "%" . $request->search_table . "%")->simplePaginate(10);
            $tables->appends($request->all());

            return view('pages.table', compact("tables", "auth"));
        }
    }

    public function Create(Request $request){
        $table = new Table();
        $table->table_name = $request->table_name;
        $table->description = $request->description;
        $table->status = $request->status;
        $table->save();

        return back();
    }

    public function View($id){
        $table = Table::findOrFail($id);

        return response()->json([
            'status'=>200,
            'table'=>$table
        ]);
    }

    public function Edit($id){
        $table = Table::findOrFail($id);

        return response()->json([
            'status'=>200,
            'table'=>$table
        ]);
    }

    public function Update(Request $req){
        $table = Table::findOrFail($req->id);
        $table -> table_name = $req -> table_name;
        $table -> description = $req -> description;
        $table -> status = $req -> status;
        $table -> save();

        return back();
    }

    public function Remove($id){
        $table = Table::findOrFail($id);

        return response()->json([
            'status'=>200,
            'table'=>$table
        ]);
    }

    public function Delete(Request $req){
        $table = Table::findOrFail($req->remove_id);
        $table -> delete();

        return back();
    }
}