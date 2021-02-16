<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['home', 'acupuncture', 'therapeutic_technics', 'treatments']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function acupuncture()
    {
        return view('acupuncture');
    }

    public function therapeutic_technics()
    {
        return view('therapeutic_technics');
    }

    public function treatments()
    {
        return view('treatments');
    }

}
