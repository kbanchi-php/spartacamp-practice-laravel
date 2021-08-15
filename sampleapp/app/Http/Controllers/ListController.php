<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Items;

class ListController extends Controller
{
    public function list() {
        $title = 'LIST';
        $message = 'LIST';
        $items = Items::all();
        return view('list', [
            'title' => $title,
            'message' => $message,
            'items' => $items
        ]);
    }
}
