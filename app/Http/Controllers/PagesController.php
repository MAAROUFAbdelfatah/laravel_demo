<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Hello Laravel Devs :)';
        //method 1 the compact function
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = 'About Us :)';
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services :)',
            'services' => ['Web', 'Dev Oops', 'programing']
        );
        return view('pages.services') -> with($data);
    }
}
