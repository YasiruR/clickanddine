<?php

namespace App\Http\Controllers;

use App\feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function display() {

        return view('customer.feedback');
    }

    public function store(\Illuminate\Http\Request $request) {
        $this->validate($request, ['name' => 'required', 'feedback' => 'required']);
        feedback::create($request->all());

        return redirect('/');
    }

    public function contact() {
        return view('customer.contact');
    }

}
