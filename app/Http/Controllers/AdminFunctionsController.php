<?php

namespace App\Http\Controllers;

use App\table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminFunctionsController extends Controller
{
    public function display(){
        return view('admin.functions');
    }

    public function displayTables() {
        $tables = table::all();
        return view('admin.tables', compact('tables'));
    }

    public function displayAddTable() {
        return view('admin.addtable');
    }

    public function changeStatus(Request $request) {
        $id = $request->id;
        $table = table::find($id);
        $table_status = $table->status;
        if ( $table_status == 0) {
            DB::table('tables')
                ->where('table_id', $id)
                ->update(['status' => '1']);
        } else {
            DB::table('tables')
                ->where('table_id', $id)
                ->update(['status' => '0']);
        }
        return redirect('/admin/tables/');
    }
}
