<?php

namespace App\Http\Controllers\Web\Post;

use App\Model\Comment;
use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Post_cont extends Controller
{
    //
    public function index(Request $request,$id){
        $posts = Post::find($id);
        if ($request->isMethod('post')){
           
        }else{
            $arr['posts']=$posts;

            return view('Web.Post.index_view',$arr);

        }
    }


}
