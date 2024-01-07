<?php
namespace App/Http/Controllers;
use Illuminate/Http/Request;
class HelloController extends Controller
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
  * Show the form for editing the specified resource.
  */
  public function edit($id) 
  {
   echo "Method name is edit";
  } 
}
