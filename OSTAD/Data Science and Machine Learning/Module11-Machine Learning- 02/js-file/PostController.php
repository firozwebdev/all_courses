<?php
namespace AppHttpControllers;
use IlluminateHttpRequest;
class PostController extends Controller
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
  public function edit(string $id) 
  {
   echo "Method name is edit";
  } 
  /**
  * Store a newly created resource in storage.
  */
  public function store(Request $request) 
  {
   echo "Method name is store";
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
