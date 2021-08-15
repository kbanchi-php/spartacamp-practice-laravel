<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Items;

class NewController extends Controller
{
    public function new() {
        $title = 'NEW';
        $message = 'NEW';
        return view('new', ['title' => $title, 'message' => $message]);
    }

    public function create(Request $req) {
        $name = $req->itemName;
        $param = [
            'name' => $name,
        ];
        DB::insert('insert into items (name) values (:name)', $param);
        return redirect('/list');
    }
}
