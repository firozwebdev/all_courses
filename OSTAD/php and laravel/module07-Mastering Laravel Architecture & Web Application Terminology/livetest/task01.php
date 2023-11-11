<?php

/*
Task 1:

Write a Laravel route to handle a GET request for '/about' URL. The route should call the 'AboutController' and the 'index' method.
*/

Route::get('/about',[App\Http\Controllers\AboutController::class,'index']);

/*
 * Task 02
 * Create a function called 'login' inside the 'UserController' class that takes two parameters: 'email' and 'password'.
 *  This function should return a message saying 'Login successful' if the email and password match, and 'Invalid credentials' if they didn't match.
 */

class UserController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return "Login Successful";
        }

        // Invalid credentials
        return 'Invalid Credentials';
    }
}