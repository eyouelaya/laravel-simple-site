<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
        //git
        return view('pages.index')->with('title', $title);
    }
    public function showAbout(){
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }
    public function showServices(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO'] );
        return view('pages.services')->with($data);
    }
}
