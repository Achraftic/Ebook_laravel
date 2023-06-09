<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\User;
use App\Models\BooksCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\wishList;
use App\Models\comment;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Books::count();
        $countCategory = BooksCategory::count();
        $data =  User::where('userType', "User")->get();
        $category = BooksCategory::orderBy('id', 'asc')->select("name")->pluck('name')->toArray();
        $countMale = count(User::where('gender', "male")->get()->toArray());

        $countFemale = count(User::where('gender', "female")->get()->toArray());
        $countrepeateBook = DB::table('books')
            ->selectRaw(' COUNT(categoryId) as count')
            ->groupBy('categoryId')
            ->orderBy('categoryId', 'asc')
            ->pluck('count')->toArray();

            $countComments=comment::select('*')->get()->count();

        // dd( $mostBookAddToWishlist = DB::table('wish_lists')
        // ->selectRaw('books_id, COUNT(books_id) as book_count')
        // ->groupBy('books_id')
        // ->orderByDesc('book_count')
        // ->first()->books_id


        // );

        $topReated = Books::where('rate', ">=", "4")->take(5)->with('wish')->orderBy('rate', "desc")->get();

        return view('admin.index', compact('count','countComments', 'data', 'category', 'countrepeateBook', "topReated", "countCategory", 'countFemale', 'countMale'));
    }

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
