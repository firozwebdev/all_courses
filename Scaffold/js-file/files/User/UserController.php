<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class UserController extends Controller
{
  /**
  * Display a listing of the resource.
  */
  public function index() 
  {
   echo "Method name is index";
  } 
  /**
  * Display a listing of the resource.
  */
  public function create() 
  {
   echo "Method name is create";
  } 
  /**
  * Update the specified resource in storage.
  */
  public function update(Request $request, string $id) 
  {
   echo "Method name is update";
  } 
  /**
  * Remove the specified resource from storage.
  */
  public function destroy(string $id) 
  {
   echo "Method name is destroy";
  } 
}
