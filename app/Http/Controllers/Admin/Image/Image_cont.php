<?php

namespace App\Http\Controllers\Admin\Image;

use App\Model\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Image_cont extends Controller
{
    //
    public function index(){

        $photos = Photo::select('id', 'path')->get(); // return collection

        return view('Admin.image.index_view', compact('photos'));
    }


    public function add(Request $request){
        if ($request->isMethod('post')){

          $file_extension = $request -> file('photo')-> getClientOriginalExtension();
          $file_name=time().'.'.$file_extension;
          $path = 'images/post';
          $request -> file('photo')->move($path,$file_name);
            Photo::create([
                'path'=> $file_name,
            ]);
            return redirect()->back();
        }else{
            return view('Admin.image.Add_view');
        }
    }

    public function delete(Request $request ,$id){
        $photo = Photo::find($id);
        if($request->isMethod('post')){
            try {
                unlink(public_path('/images/post/'.$photo->path));
                $photo->delete();

            }catch (\Exception $exception){

            }
            return redirect(route('Image.Index'));
        }else{
            $arr['photo']=$photo;
            return view('Admin.image.delete_view',$arr);
        }
    }
}
