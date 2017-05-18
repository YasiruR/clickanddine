<?php

namespace App\Http\Controllers;

use App\table;
use App\waitingcustomer;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\String_;
use App\reservation;


class ReservationController extends Controller
{
    public function reserve() {
        return view('customer.reservation');
    }

    public function create($number) {
        $table = table::find($number);
        $status = $table->status;
        if ($status == 0) {
            return view('customer.reservationform', ['number' => $number]);
        } else {
            return view('customer.waitinglist', ['number' => $number]);
        }
    }

    public function store(Request $request) {
        $this->validate($request, ['customer'=>'required', 'time'=>'required', 'table_id'=>'required']);
        $res=new reservation(['customer'=>$request['customer'], 'reserved_time'=>$request['time'],
            'table_id'=>$request['table_id'], 'waiter_id'=>'0']);
        $res->save();
        return redirect('customer/reservation');
    }

    public function waitingList($number) {
        return view('customer.waitinglistform', ['number' => $number]);
    }

    public function addToWaitingList(Request $request) {
        $this->validate($request, ['name' => 'required', 'contact' => 'required']);
        waitingcustomer::create($request->all());
        $this->validation();
        return redirect('/customer/reservation');
    }


}
