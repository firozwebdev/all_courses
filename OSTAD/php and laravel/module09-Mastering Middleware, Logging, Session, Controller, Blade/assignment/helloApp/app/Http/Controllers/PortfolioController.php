<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('layout');
    }
    public function home(){
        return view('pages.home');
    }

    public function projects(){
        $projects = Projects::all();
        $frontend = $projects->where('category','Frontend Developer')->all();
        $backend = $projects->where('category','Backend Developer')->all();
        $fullstack = $projects->where('category','Full Stack Developer')->all();
        return view('pages.projects',compact('frontend','backend','fullstack'));
    }

    public function contact(){
        return view('pages.contact');
    }

    public function about(){
        return view('pages.about_me');
    }
}
