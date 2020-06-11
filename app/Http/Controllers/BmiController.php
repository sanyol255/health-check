<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\HealthCheckHelper as HealthCheck;

class BmiController extends Controller
{
    public function form()
    {
        return view('bmi.form');
    }

    public function result(Request $request)
    {
        $name = $request->name;
        $weight = $request->weight;
        $height = $request->height;

        $bmiResult = HealthCheck::bmiResult($weight, $height);
        return view('bmi.result', compact('name', 'bmiResult'));
    }
}
