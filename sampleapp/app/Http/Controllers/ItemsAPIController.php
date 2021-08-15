<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Items;

class ItemsAPIController extends Controller
{
    public function all() {
        $items = Items::all();
        return $items;
    }

    public function find($id) {
        $item = Items::find($id);
        return $item;
    }

    public function store(Request $request) {
        $item = new Items;
        $item->name = $request->name;
        $item->save();
        return $item;
    }

    public function update(Request $request, $id) {
        $item = Items::find($id);
        $item->name = $request->name;
        $item->save();
        return $item;
    }

    public function destroy($id) {
        $item = Items::find($id);
        $item->delete();
        return $item;
    }
    
}
