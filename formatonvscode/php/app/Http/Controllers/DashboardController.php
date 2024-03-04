<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function test(Request $request)
    {
        $name = $request->input('name');
        
        return view('test', ['name' => $name]);
    }
}