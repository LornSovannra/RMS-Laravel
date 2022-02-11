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
}