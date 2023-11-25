<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ActionController extends Controller
{
    public function index(){
        return "'Hello, World!' ";
    }
}
