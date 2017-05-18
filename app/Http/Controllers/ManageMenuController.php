<?php

namespace App\Http\Controllers;

use App\food;
use App\menu;
use Illuminate\Support\Facades\Request;


class ManageMenuController extends Controller
{
    public function display() {
        $food = food::all();
        return view('admin.managemenu', compact('food'));
    }

    public function create() {
        return view('admin.addfood');
    }

    public function store(\Illuminate\Http\Request $request) {

        $this->validate($request, ['name' => 'required', 'price' => 'required']);
        Food::create($request->all());

        return redirect('/admin/managemenu');
    }

    public function displayDelete() {
        $food = food::all();
        return view('admin.removefood', compact('food'));
    }

    public function editmenu() {
        $menu = menu::all();
        $food = food::all();
        return view('admin.editmenu', compact('menu', 'food'));
    }

    public function addmenu($id) {

        $item = food::find($id)->toarray();
        $menuitem = new menu();
        $menuitem->food_id = $item['food_id'];
        $menuitem->name = $item['name'];
        $menuitem->price = $item['price'];
        $menuitem->save();

        $menu = menu::all();
        $food = food::all();
        return view('admin.editmenu', compact('menu', 'food'));
    }

    public function deletemenu($id) {
        $item = menu::find($id);
        $item->delete();

        $menu = menu::all();
        $food = food::all();
        return view('admin.editmenu', compact('menu', 'food'));
    }

    public function destroy(\Illuminate\Http\Request $request) {
        $food_id = $request->id;
        $foodItem = food::find($food_id);
        $foodItem->delete();

        return redirect('/admin/managemenu');
    }
}
