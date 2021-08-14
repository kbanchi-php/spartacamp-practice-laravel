<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index() {
        $title = 'LIST APP';
        $message = 'LIST APP';
        return view('index', ['title' => $title, 'message' => $message]);
    }
}
