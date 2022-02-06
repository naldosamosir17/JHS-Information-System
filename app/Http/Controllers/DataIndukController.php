<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataIndukController extends Controller
{
    public function index()
    {
        return view('v_data_induk');
    }
}
