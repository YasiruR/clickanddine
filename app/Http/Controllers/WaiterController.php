<?php

namespace App\Http\Controllers;

use App\waiter;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

class WaiterController extends Controller
{
    public function display() {
        $waiters = waiter::all();

        return view('admin.waiters', compact('waiters'));
    }

    public function create() {
        return view('admin.addwaiter');
    }

    public function store(\Illuminate\Http\Request $request) {
        $this->validate($request, ['name' => 'required', 'availability' => 'required']);
        waiter::create($request->all());

        return redirect('/admin/waiters');
    }

    public function displayDelete() {
        $waiters = waiter::all();
        return view('admin.removewaiter', compact('waiters'));
    }

    public function destroy(\Illuminate\Http\Request $request) {
        $waiters_id = $request->id;
        $waiter = waiter::find($waiters_id);
        $waiter->delete();

        return redirect('/admin/waiters');
    }

    public function displayChange() {
        $waiters = waiter::all();
        return view('admin.changestatus', compact('waiters'));
    }

    public function changeStatus(\Illuminate\Http\Request $request) {
        $waiters_id = $request->id;
        $waiter = waiter::find($waiters_id);
        $waiter_status = $waiter->availability;
        if ( $waiter_status == 'available') {
            DB::table('waiters')
                ->where('waiters_id', $waiters_id)
                ->update(['availability' => 'busy']);
        } else {
            DB::table('waiters')
                ->where('waiters_id', $waiters_id)
                ->update(['availability' => 'available']);
        }
        return redirect('/admin/waiters');
    }
}
