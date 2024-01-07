<?php
namespace App\Http\Controllers;
 use Illuminate\Http\Request;
class TestController extends Controller
{
  public function index() 
  {
     echo "this is an index method";
  } 
  public function edit() 
  {
     echo "this is an edit method";
  } 
  public function store() 
  {
     echo "this is an store method";
  } 
  public function update() 
  {
     echo "this is an update method";
  } 
  public function destroy() 
  {
     echo "this is an destroy method";
  } 

}
