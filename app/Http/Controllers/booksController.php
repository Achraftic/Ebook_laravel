<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\BooksCategory;
use App\Models\comment;
use App\Models\wishList;
use Auth;
use Illuminate\Support\Facades\Storage;

class booksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function books()
    {
        $data = Books::select('*')->with(["wish"])->get();
        $wish = wishList::select('*')->where('user_id', Auth::user()->id)->get();
        if ($wish) {
            $wish = wishList::select('*')->where('user_id', Auth::user()->id)->get();
        } else {
            $wish = [];
        }

        $link = "all";
        $category = BooksCategory::all();
        return view('books', compact('data', 'category', 'link', 'wish'));
    }



    public function filter($id, Request $request)
    {


        if ($request) {
            $data = Books::where('rate', $request->rangeOne)->get();
        }

        $link = $id;

        if ($id == "all") {
            $data = Books::select('*')->get();
        } else {
            $data = Books::select('*')->where('categoryId', $id)->get();
        }

        $wish = wishList::select('*')->where('user_id', Auth::user()->id)->get();
        if ($wish) {
            $wish = wishList::select('*')->where('user_id', Auth::user()->id)->get();
        }






        $category = BooksCategory::all();


        return view('books', compact('data', 'category', 'link', 'wish'));
    }


    public function index()
    {
        $countbook = Books::select('*')->count();

        $data = Books::with('category')->paginate(5);

        return view('admin.books.index', compact('data', 'countbook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = BooksCategory::all();
        return view('admin.books.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Books();
        $book->name = $request->name;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->categoryId = $request->category;
        $book->rate = $request->rate;
        if ($request->file('image')) {

            $newImgName =  date('symD') . $request->image->extension();
            $request->image->move(public_path('img'), $newImgName);
            $book->image = $newImgName;
        }
        if ($request->file('pdf')) {

            $newNamePdf = $request->name . $request->author . $request->pdf->extension();
            $request->pdf->move(public_path('pdf'), $newNamePdf);
            $book->pdf = $newNamePdf;
        }
        $book->save();
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data =  Books::find($id);
        $bookCategory = Books::where('id', $id)->first()->categoryId;

        $BookSame = Books::where('categoryId', $bookCategory)->whereNot('id', $id)->get();


        return view('admin.books.show', compact('data', 'BookSame'));
    }

    public function comment(Request $request, $id)
    {

        $comment = comment::where("books_id", $id)->with(["user"])->get();
        return response()->json(['data' => $comment]);
    }
    public function commentadd(Request $request, $id)
    {
        $data = new comment();
        $data->comment = $request->comment;
        $data->books_id = $request->books_id;
        $data->user_id = Auth::user()->id;
        $data->save();
        $comment = comment::where("books_id", $id)->with(["user"])->get();
        return response()->json(['data' => $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if ($id != null) {
            Books::find($id)->delete();
        }
        return redirect()->route('books');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Books::select('*')->where('id', $id)->first();
        $category = BooksCategory::all();
        return view('admin.books.edit', compact('category', 'data'));
    }
    public function update(Request $request, $id)
    {
        $book =  Books::find($id);
        $book->name = $request->name;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->categoryId = $request->category;
        $book->rate = $request->rate;
        if ($request->file('image')) {

            $newImgName =  date('symD') . $request->image->extension();
            $request->image->move(public_path('img'), $newImgName);
            $book->image = $newImgName;
        }
        if ($request->file('pdf')) {

            $newNamePdf = $request->name . $request->author.$request->pdf->extension();
            $request->pdf->move(public_path('pdf'), $newNamePdf);
            $book->pdf = $newNamePdf;
        }
        $book->save();
        return redirect()->route('books');
    }
    public function search(Request $request)
    {
        $data = Books::where('name', 'like', "%" . $request->search . "%")->paginate(5);

        $countbook = count($data);

        return view('admin.books.index', compact('data', 'countbook'));
    }


    public function downloadPdf($pdfId)
    {
        // Retrieve the PDF file from the database or any other storage logic




        // Check if the file exists
        $filePath = public_path()."/pdf/".$pdfId;
            // Generate the response with headers to force a file download
            return response()->download($filePath,$pdfId);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
