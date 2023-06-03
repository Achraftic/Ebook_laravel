<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\BooksCategory;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\DB;

class pageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $records = DB::table('books')->take(6)->orderBy('created_at', 'desc')->get();
        $topReated= DB::table('books')->take(4)->orderBy('rate',"desc")->get();

        return view('welcome',compact('records','topReated'));
    }
    public function books()
    {

        return view('books');
    }


    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        Mail::to('ticachraf@gmail.com')->send(new DemoMail($request->message));
        return redirect()->back()->with('success', 'Your message has been sent.');
    }



    public function test(Request $request)
    {
        $query = $request->input('search');
        $userfilter = User::all();


        return view('test', ['users' => $userfilter]);
        ;
    }

    public function filter(Request $request)
    {

        $userfilter = User::all();
        $query = $request->input('search');
        $userfilter = User::where('name', 'like', '%'.$query.'%')->get();
if($request->ajax()){
      return response()->json(['users' => $userfilter]);
}
else{
    return view('filter', ['users' => $userfilter]);
}

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
