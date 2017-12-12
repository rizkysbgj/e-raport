<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function logged_in_index()
    {
        return view('home');
    }

    public function guest_index()
    {
        return view('first');
    }
}
