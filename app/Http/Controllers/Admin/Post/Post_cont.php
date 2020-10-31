<?php

namespace App\Http\Controllers\Admin\Post;

use App\model\Photo;
use App\model\Post;
use App\Model\Section;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Post_cont extends Controller
{
    //
      public function index(){

            $posts = Post::all();

            return view('Admin.Post.index_view',compact('posts'));
      }

    public function add(Request $request){
        if ($request->isMethod('post')){

        $user = Auth::user();
        $post =$user->posts()->create($request->all());
        $post->Photos()->attach($request->input('photos'));
        return redirect()->back();


        }else{
            $sections=Section::all();
            $photos=Photo::all();
            return view('Admin.Post.Add_view',compact('sections','photos'));
        }
    }

    public function update(Request $request ,$id)
    {
        $post = Post::find($id);
        if ($request->isMethod('post')) {

            $post->update($request->all());
            $post->Photos()->detach();
            $post->Photos()->attach($request->input('photos'));
            return redirect()->back();

        } else{
            $sections=Section::all();
            $photos=Photo::all();
            $arr['post']=$post;
            $arr['photos']=$photos;
            $arr['sections']=$sections;

            return view('Admin.Post.Update_view',$arr);
        }
    }



    public function delete(Request $request,$id){
            $posts = Post::find($id);
            if ($request ->isMethod('post')){

                $posts->delete();
                return redirect()->route('Post.Index');

            }else{
                $arr['posts']=$posts;
                return view('Admin.Post.Delete_view',$arr);
            }
        }



}
