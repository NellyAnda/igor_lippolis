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
        // $this->middleware('auth', ['except' => ['home', 'acupuncture', 'therapeutic_technics', 'treatments', 'basic_theories']]);
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

    public function basic_theories()
    {
        return view('basic_theories');
    }

    public function acupuncture()
    {
        return view('acupuncture');
    }

    public function therapeutic_techniques()
    {
        return view('therapeutic_techniques');
    }

    public function treatments()
    {
        return view('treatments');
    }

}
