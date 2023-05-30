

@php
use App\Models\wishList;
$route = Route::currentRouteName();
if (Auth::check()) {
    $countWish = count(wishList::where('user_id', Auth::user()->id)->get());
    $myWishlist = wishList::where('user_id', Auth::user()->id)->get();
}

@endphp



    <footer class=" shadow-xl p-4  px-6 flex  items-center justify-between   text-gray-500  dark:text-blue-500 bg-[#222831]   ">
   <P>
    © 2023 Ebook
   </P>
</footer>
