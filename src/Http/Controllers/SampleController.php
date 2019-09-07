<?php

namespace Ahilan\Sample\Http\Controllers;

use App\Http\Controllers\Controller;

class SampleController extends Controller
{

    public function index()
    {
        return view('sample::sample');
    }
}
