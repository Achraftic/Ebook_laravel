<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\User;
use App\Models\BooksCategory;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  User::where('userType', "User")->get();
        return view('admin.user.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function search(Request $request)
     {
         $count = Books::count();
         $data = User::where('userType', 'User')->get();
         $query = $request->input('search');
         $userfilter = User::where('name', 'like', '%' . $query . '%')->where('userType', 'User')->get();

         if ($request->ajax()) {
             return response()->json(['users' => $userfilter, 'count' => $count]);
         } else {
             return view('filter', compact('data', 'count'));
         }
     }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->age=$request->age;
        $user->gender=$request->gender;
        $user->gender=$request->gender;
        $user->password= Hash::make($request->password) ;
        $user->save();
        return redirect()->route("user.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=User::find($id);

        return view('admin.user.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=User::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->age=$request->age;
        $data->gender=$request->gender;

        $data->save();
        return redirect()->route("user.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if($id) {
            User::find($id)->delete();
        }
        return redirect()->route('user.index');

    }
}
