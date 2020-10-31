<?php

namespace App\Http\Controllers;

use App\Model\Photo;
use App\Model\Post;
use App\Model\Section;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //$section =Photo::find(1);
        //dd($section->Posts);
        return view('home');
    }
}
