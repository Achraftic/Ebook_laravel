<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\wishList;
class wishListController extends Controller
{



      public function index(){
        $data= wishList::where('user_id', Auth::user()->id)->with(['user','books'])->get();
          dd($data);
      }

          public function store(Request $request){
            $data=new  wishList();
            $Countdata= wishList::where('books_id',$request->books_id)->where("user_id",$request->user_id)->count();
            if($Countdata>=1){
                wishList::where('books_id',$request->books_id)->where("user_id",$request->user_id)->delete();

            }
            else{
                 $data->books_id = $request->books_id;
            $data->user_id = $request->user_id;
            $data->save();
            }







            return redirect()->back();
          }

          public function delete($id)
          {
              if($id!=null){

                wishList::where('books_id',$id)->delete();
              }
              return redirect()->back();

          }
}
