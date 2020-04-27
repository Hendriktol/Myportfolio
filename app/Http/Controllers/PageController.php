<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($path = null, Request $request)
    {
        $page = new \stdClass;
        $page->title = $path;
        return view('pages.home')->with(compact('page'));
    }
    
    public function about($path = null, Request $request)
    {
        $page = new \stdClass;
        $page->title = $path;
        return view('pages.about')->with(compact('page'));
    }
    
    public function contact($path = null, Request $request)
    {
        $page = new \stdClass;
        $page->title = $path;
        return view('pages.contact')->with(compact('page'));
    }
    
    public function work($path = null, Request $request)
    {
        $page = new \stdClass;
        $page->title = $path;
        return view('pages.work')->with(compact('page'));
    }
    
    public function case($path = null, Request $request)
    {
        $page = new \stdClass;
        $page->title = $path;
        
        if($path === "ambions") {
            $page->title = "Zorginstelling ambions";
        } elseif($path === "gorilla") {
            $page->title = "Gorilla Gang";
            
        } elseif($path === "25seven") {
            $page->title = "25seven";
            
        } elseif($path === "gaming") {
            $page->title = "Gaming & Esports";
            
        } else {
            return redirect('/portfolio');
            die();
        }
        
        return view('cases.' . $path)->with(compact('page'));
        
    }
}
