<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        return view('test.index');
    }
    public function quiz()
    {
        return view('test.quiz');
    }
    public function drag_n_drop()
    {
        return view('test.drag_n_drop');
    }
    public function time_attack()
    {
        return view('test.time_attack');
    }
}
