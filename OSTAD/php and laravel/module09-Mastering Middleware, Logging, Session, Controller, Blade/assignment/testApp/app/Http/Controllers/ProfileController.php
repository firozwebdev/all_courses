<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {

        $name = "Donald Trump";
        $age = "75";


        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];


        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;


        Cookie::queue($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);


        return response()->json($data, 200)->withCookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
