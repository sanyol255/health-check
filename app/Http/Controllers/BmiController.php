<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
// use Session;
use App\Components\HealthCheckHelper as HealthCheck;
use App\Http\Requests\BmiCheckRequest;

class BmiController extends Controller
{
    public function form()
    {
        return view('bmi.form');
    }

    public function result(BmiCheckRequest $request)
    {
        $name = $request->name;
        $weight = $request->weight;
        $height = $request->height;
        $bmiResult = HealthCheck::bmiResult($weight, $height);



        return view('bmi.result', compact('name', 'bmiResult'));
    }
}
