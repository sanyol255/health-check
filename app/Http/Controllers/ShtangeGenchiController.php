<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\HealthCheckHelper as HealthCheck;

class ShtangeGenchiController extends Controller
{
    public function form()
    {
        return view('shtange-genchi.form');
    }

    public function result(Request $request)
    {
        $shtange = $request->shtange;
        $genchi = $request->genchi;
        $hypoxiaCheckResult = HealthCheck::hypoxiaCheck($shtange, $genchi);

        return view('shtange-genchi.result', compact('hypoxiaCheckResult'));
    }
}
