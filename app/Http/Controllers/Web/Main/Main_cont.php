<?php

namespace App\Http\Controllers\Web\Main;

use App\Model\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Main_cont extends Controller
{
    //
    public function index(){
        $sections = Section::all();
        return view('Web.Main.Main_view',compact('sections'));
    }

}
