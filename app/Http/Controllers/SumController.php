<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SumController extends Controller
{
    public function Sum(Request $request) {
        $sum = $request->soA + $request->soB;
        return view('form', compact('sum'));
    }
}
