<?php

namespace App\Http\Controllers\Admin\Section;



use App\Model\Section;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class Section_cont extends Controller
{
    //
    //
    public function index(){

        $sections=Section::select('id','name','admin')->get();

        return view('Admin.Section.index_view',compact('sections'));
    }

    public function add(Request $request){
        if ($request->isMethod('post')){
            $rules= [
                'name'=>'required|max:100|unique:sections,name'
            ];
            $messages=[
                'name.required'=>'يلزم ادخال اسم للقسم',
                'name.max'=>'الاسم كبير جدا',
                'name.unique'=>'الاسم متكرر',
            ];
            $SetValidator = Validator::make($request->all(),$rules,$messages);
            if ($SetValidator -> fails()){
                return redirect()->back()->withErrors($SetValidator)->withInput($request->all());
            }
                Section::create($request->all());

            return redirect()->back()-> with(['success'=> 'تم ادخال البيانات']);

        }else{
            $users= User::select('id','name')->where('role','admin')->get();
            //dd($user);
            $arr['users']=$users;
            return view("Admin.Section.Add_view",$arr);
        }

    }


public function update(Request $request ,$id)
{
    $section = Section::find($id);
    if ($request->isMethod('post')) {

        $section->name=$request->input('name');
        if (is_null($request->input('admin')) or $section->admin=$request->input('admin')) {
            if (!is_null($section->admin)) {
                $old_admin = User::find($section->admin);
                $old_admin->update();
            }
            $section->admin = $request->input('admin');
        }
        $section->update();
        return redirect()->back();


    } else{
        $users = User::select('id', 'name')->where('role', 'user')->get();
        $arr['users'] = $users;
        $arr['section']=$section;
        return view('Admin.Section.Update_view', $arr);
        }
}


    public function delete(Request $request ,$id){
        $section = Section::find($id);
        if ($request->isMethod('post')){
            $section->delete();
            return redirect()->Route('section.index');

        }else{
            $arr['section']=$section;
            return view('Admin.Section.Delete_view',$arr);        }
    }

}
