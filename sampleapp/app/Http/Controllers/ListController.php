<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function delete(Request $req) {
        $id = $req->id;
        DB::table('items')->where('id', $id)->delete();
        return redirect('/list');
    }
}
