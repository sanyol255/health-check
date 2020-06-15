<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\HealthCheckHelper as HealthCheck;
use App\Http\Requests\RuffierTestCheckRequest;

class RuffierTestController extends Controller
{
    public function form()
    {
        return view('ruffier-test.form');
    }

    public function result(RuffierTestCheckRequest $request)
    {
        $pulse = [$request->pulse1, $request->pulse2, $request->pulse3];
        $indexRuffier = HealthCheck::ruffierResult($pulse);
        return view('ruffier-test.result', compact('indexRuffier'));
    }
}
