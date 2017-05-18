<?php

namespace App\Http\Controllers;

use App\feedback;
use App\reservation;
use App\table;
use App\waiter;
use App\waitingcustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function display(){
        $reservations = reservation::all();
        return view('admin.notifications', compact('reservations'));
    }

    public function destroy(Request $request) {
        $reservation_id = $request->id;
        $reservation = reservation::find($reservation_id);
        $table_id = $reservation->table_id;
        $waiters_id = $reservation->waiter_id;
        $reservation->delete();
        DB::table('tables')
            ->where('table_id', $table_id)
            ->update(['status' => '0']);
        DB::table('waiters')
            ->where('waiters_id', $waiters_id)
            ->update(['availability' => 'available']);
        return redirect('/admin/notifications');
    }

    public function feedback() {
        $feedback = feedback::all();
        return view('admin.feedback', compact('feedback'));
    }

    public function waiterForm() {
        $reservations = reservation::all();
        $waiters = waiter::all();
        return view('admin.assignwaiter', compact('reservations', 'waiters'));
    }

    public function assign(Request $request) {
//        $waiters_id = $request->waiters_id;
        $str = $request->id;
        $array = str_split($str);
//        dd($array);
//        $waiter = waiter::find($waiters_id);
        $reservation_id = $array[2].$array[3];
        $waiters_id = $array[0];
        DB::table('reservations')
            ->where('reservation_id', $reservation_id)
            ->update(['waiter_id' => $waiters_id]);
        DB::table('waiters')
            ->where('waiters_id', $waiters_id)
            ->update(['availability' => 'busy']);

        return redirect('/admin/notifications');
    }

    public function reserveTable(Request $request) {
        $table_id = $request->table_id;
        $table = table::find($table_id);
        $table_status = $table->status;
        if ( $table_status == 0) {
            DB::table('tables')
                ->where('table_id', $table_id)
                ->update(['status' => '1']);
            return redirect('/admin/notifications');
        } else {
            return view('/admin/errortable');
        }
    }

    public function viewWaitingList() {
        $waitinglist = waitingcustomer::all();
        return view('admin.waitinglist', compact('waitinglist'));
    }

    public function destroyWaitingCustomer(Request $request) {
        $id = $request->id;
        $reservation = waitingcustomer::find($id);
        $reservation->delete();
        return redirect('/admin/waitinglist');
    }
}
