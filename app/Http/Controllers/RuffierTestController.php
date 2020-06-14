<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuffierTestController extends Controller
{
    public function form()
    {
        return view('ruffier-test.form');
    }
}
