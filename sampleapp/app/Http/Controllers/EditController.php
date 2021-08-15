<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Items;

class EditController extends Controller
{
    public function edit(Request $req) {
        $title = 'EDIT';
        $message = 'EDIT';
        $id = $req->id;
        $item = Items::find($id);
        return view('edit', [
            'title' => $title,
            'message' => $message,
            'item' => $item
        ]);
    }

    public function update(Request $req) {
        $id = $req->id;
        $name = $req->itemName;
        DB::table('items')->where('id', $id)->update([
            'name' => $name
        ]);
        return redirect('/list');
    }
}
