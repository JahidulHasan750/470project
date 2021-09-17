<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="Welcome to laravel";
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $about='About!';
        return view('pages.about')->with('about',$about);
    }

    public function services(){
        $services=array(
            'title'=> 'Services!',
            'another_array'=>['web dev','css','js']
        );
        return view('pages.services')->with($services);
    }
}
