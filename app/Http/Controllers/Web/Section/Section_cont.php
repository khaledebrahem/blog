<?php

namespace App\Http\Controllers\Web\Section;

use App\Model\Post;
use App\Model\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Section_cont extends Controller
{
    //
    public function index($id){
        $section = Section::find($id);
        $posts = $section->Posts;

     // $posts = Post::find($id);


      $arr['posts']=$posts;


        return view('Web.Section.index_view',compact('posts'));
    }
}
