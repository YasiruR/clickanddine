<?php

namespace App\Http\Controllers;

use App\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function display(){
        $menu = menu::all();
        return view('customer.menu', compact('menu'));
    }
}
