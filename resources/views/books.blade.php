
@extends('design.main')
@section('content')

    <section class=" sm:p-5 p-2 gap-3 mt-8 m-auto min-h-screen flex  ">



        @csrf
        <div class="bg-[#f8f6f6] rounded-md sticky top-24 h-[85vh] w-[300px] py-8 sm:block hidden ">
            <h1 class="text-xl font-bold text-[#222831] w-full block ml-3 p-3">Filter By Category</h1>
            <ul class="category space-y-5 p-4 text-[#393E46] capitalize  ml-2 md:ml-3 ">

                <li class=""> <a href="{{ route('books.filter', 'all') }}"
                        class=" {{ 'all' == $link ? 'text-orange-600 font-semibold' : '' }}">All Genre</a> </li>
                @foreach ($category as $i)
                    <li class="flex items-center   "> <a href="{{ route('books.filter', $i->name) }} "
                            class=" {{ $i->name == $link ? 'text-orange-600 font-semibold' : '' }}"> {{ $i->name }}
                        </a> </li>
                @endforeach
    </ul>






        </div>

        <div class="  min-h-screen w-full p-5   ">

            <div class="flex justify-between items-center">
                <h1 class="font-bold text-sm">Sort by <span class="text-gray-400 font-normal">Newest Items</span>
                </h1>
                <div class="flex space-x-2 items-center">
                    <img src="./asset/img/icon/grid.png" alt="" class="w-5">
                    <img src="./asset/img/icon/list.png" alt="" class="w-5 contrast-0">
                </div>
            </div>


            <div
                class="grid sm:space-y-0 md:space-y-3  space-x-4  gap-3 xl:gap-6  p-6 xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 grid-cols-1  place-items-center ">




                @foreach ($data as $key => $book)




                    <div class="w-max h-fit group shadow-xl p-4  hover:scale-110 hover:shadow-orange-500/60">
                        <div class="relative overflow-hidden">
                            <img class="w-52 h-52  rounded-md object-cover" src="{{ asset('img/' . $book->image) }} "
                                alt="">
                            <div
                                class="absolute rounded-md  h-full w-full bg-slate-800/70 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <form method="post" action="{{route('wishlist.store')}}" class=" text-orange-500 py-2 px-5 flex space-x-4">
                                    @csrf
                                    @if(Auth::check())

                                    <input type="hidden" name="books_id" value=" {{$book->id}} ">

                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}" >
                                  @endif
                                  <button class=" ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="{{in_array($book->id,$wish->pluck('books_id')->toArray())?"rgb(234 88 12)":"none"}}" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="   w-9 h-9 font-bold">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                  </button>

                                    <a href="{{ route('books.show', $book->id) }} ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-9 h-9 font-bold">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </a>

                                </form>
                            </div>
                        </div>
                        <div class="py-3 px-2">
                            <h2 class="font-bold text-lg"> {{ $book->name }} </h2>
                            <p class="text-slate-400 text-sm">{{ $book->author }}</p>
                            <div class=" items-center  space-y-1">
                                <div class="">

                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($i >= $book->rate)
                                            <span class="fa fa-star fa-sm    "></span>
                                        @else
                                            <span class="fa fa-star fa-sm checked   "></span>
                                        @endif
                                    @endfor

                                </div>
                                <p class="text-slate-400 text-sm ">345 review</p>
                            </div>
                        </div>

                    </div>

                @endforeach








            </div>
    </section>


@endsection
