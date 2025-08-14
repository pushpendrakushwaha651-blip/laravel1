<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // <- Make sure this line exists if needed

class MyController extends Controller
{
    public function index()
    {
        return view('allusers');
    }
}
