<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::post('/form-submit', function (Request $request) {

    $email = $request->input('email');


    if ($email) {

        return response()->json([
            'status' => 'success',
            'message' => 'Form submitted successfully.',
            'email' => $email,
        ]);
    } else {

        return response()->json([
            'status' => 'failed',
            'message' => 'Form submission failed.',
        ]);
    }
});

Route::get('/user-agent', function (Request $request) {

    $userAgent = $request->header('User-Agent');

    return $userAgent;
});
