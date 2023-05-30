<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
class UsersController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function index(Request $request)
    {
        $data = Auth::user();

        return view('user.index', compact('data'));
    }

public function edit($id){

   $data=Auth::user()->find($id);

    return view('user.edit',compact('data'));
}

    public function changeImg(Request $request){
        $id = Auth::user()->id;
        $user = User::find($id);
        if($request->file('image')){

            $newimgname= date('YMD') .".". $request->image->extension();
            $request->image->move(public_path('imgUser'),$newimgname);

            $user->image = $newimgname;
        }
        $user->save();





        return redirect()->back();
    }



    public function update(Request $request,$id){
        $user=Auth::user()->find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->age=$request->age;
        if($request->file('image')){

            $newimgname= date('YMD') .".". $request->image->extension();
            $request->image->move(public_path('imgUser'),$newimgname);

            $user->image = $newimgname;
        }
        $user->save();
        return redirect()->route('user.view');

    }

}
