{{-- <form method="get" action=" {{asset('img/'. $data['3']->pdf )}} ">
    <button type="submit">Download!</button>
 </form>

 <a href={{"/pdf/".$data['3']->pdf }} >View PDF</a> --}}




@extends('design.main')
@section('content')
    <section class=" sm:p-5 p-2 gap-3 mt-8 m-auto min-h-max lg:flex   ">

        <div class="  min-h-[50vh]  md:w-full lg:w-[80%] m-auto p-10 lg:items-start md:items-center md:flex  flex-cols ">


            <img src=" {{ asset('img/' . $data->image) }} " alt=""
                class=" rounded-sm shadow-md m-auto w-[300px] max-h-[400px] object-cover ">


            <div class=" space-y-2 p-5 md:w-[70%] w-full ">
                <div class="my-4">
                    <h1 class="text-3xl text-slate-900">{{ $data->name }}</h1>
                    <p class="text-sm text-slate-400">{{ $data->author }}</p>
                </div>

                <p class="text-slate-700 my-4 text-md">
                    {{ $data->description }}
                </p>


                <div class="text-white  flex  space-x-3  mt-10 ">
                    <a href={{ '/pdf/' . $data->pdf }}
                        class="h-max p-2  hover:bg-orange-600   bg-orange-500 rounded-sm mt-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class=" inline w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>

                        Read
                    </a>



                    <a download href={{ '/pdf/' . $data->pdf }} type="submit"
                        class=" bg-[#FD7014]  hover:bg-orange-600  rounded-sm h-max p-2 mt-3 >
                        <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline  w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                        </svg>

                        Download
                    </a>

                </div>

            </div>

        </div>

        <div class=" md:w-[30%]   shadow-md p-4 mt-4  h-full ">



            <div class=" max-w-[1000px]  ">
                <h1 class="text-xl ">You may Also like</h1>
                <div class="flex justify-center  md:justify-start md:space-x-0 space-x-4 flex-wrap items-center">
                    <div class="my-4 p-2 rounded-sm flex bg-slate-100 items-center space-x-3">
                        <div class="sm:w-max     ">
                            <img src=" {{ asset('img/082305Tue.jpg') }} " alt=""
                                class=" sm:w-14 w-[80px] object-cover ">

                        </div>

                        <div class="ml-0">
                            <h1 class="text-mg text-slate-900">Vikings</h1>
                            <p class="text-sm text-slate-400">Author</p>
                        </div>

                        <button class="p-2 px-4 bg-orange-500 rounded-sm  text-white ">Read</button>




                    </div>
                    <div class="my-4 p-2 rounded-sm flex bg-slate-100 items-center space-x-3">
                        <div class="sm:w-max     border">
                            <img src=" {{ asset('img/082305Tue.jpg') }} " alt=""
                                class=" sm:w-14 w-[80px] object-cover ">

                        </div>

                        <div class="ml-0">
                            <h1 class="text-mg text-slate-900">Vikings</h1>
                            <p class="text-sm text-slate-400">Author</p>
                        </div>

                        <button class="p-2 px-4 bg-orange-500 rounded-sm  text-white ">Read</button>




                    </div>
                </div>
            </div>






        </div>





    </section>


    <form action=""  class="sm:p-5 p-2 gap-3 mt-4 m-auto min-h-max" id="form">
        @csrf
        <div class="min-h-[50vh]  w-full  sm:px-12 px-5 p-3    ">
            <div class="relative  lg:w-[70%] w-full">
                <textarea name="comment" " rows="5" placeholder=" Add Comment"
                                    class="commentArea rounded-md p-5 w-full border-gray-300"></textarea>
                <span class="btnCl cursor-pointer absolute bottom-px right-0 rounded-sm p-2 bg-orange-500 text-white"><svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                    </svg>
                </span>
                <img src="{{ asset('imgUser/' . Auth::user()->image) }}" alt=""
                    class="absolute -top-6 -left-6 p-2 w-14 rounded-full h-14">
            </div>
            <div class="p-2 my-3 text-slate-700  flex items-center space-x-1 ">
                <h1> All Comment</h1> <span class="count">(0)</span>
            </div>
           <div class="content space-y-4">

           </div>


        </div>



    </form>
    <script type="module" defer>
      $(document).ready(function () {


        let a=window.location.href;


           let books_id= parseInt(a.substr(a.lastIndexOf('/')+1 )) ;

        function fetchComments() {

            // var comment = '';
            // comment = $('.commentArea').val();

            var successCalled = false;
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({

                url: 'http://127.0.0.1:8000/books/book/comment/'+ books_id,
                    method: 'GET',

                data: {
                     books_id:books_id,
                    // comment: comment
                },
                headers: {
                 'X-CSRF-TOKEN': csrfToken
                         },
                success: function(response) {
                    if (!successCalled) {
                                 successCalled = true;

                                 var comment = response.data;

                                 var html = '';
                                 $('.count').html(comment.length)
                                 for (var i = 0; i < comment.length; i++) {
                                    var imagePath = comment[i].user.image ? '/imgUser/' + comment[i].user.image : '/imgUser/noImg.png';
                     html+=`  <div class=" border min-h-[10vh] mt-5 lg:w-[70%] w-full relative border-gray-300 rounded-md text-slate-900">
                       <div class="p-7  ">
                     <p> ${comment[i].comment} </p>

                        <button type="submit" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class=" absolute bottom-2 right-4 w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                       </button>


                     </div>
                        <img src=${imagePath}  alt=""
                         class="absolute -top-6 -left-5 p-2 w-12 rounded-full h-12">


                   </div>`
                                 }
                                 $('.content').html(html);
                                }

                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });



        };
        function addComments() {

            var comment = '';
            comment = $('.commentArea').val();

            var successCalled = false;
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({

                url: 'http://127.0.0.1:8000/books/book/comment/add/'+ books_id,
                    method: 'GET',

                data: {
                     books_id:books_id,
                    comment: comment
                },
                headers: {
                 'X-CSRF-TOKEN': csrfToken
                         },
                success: function(response) {
                    if (!successCalled) {
                                 successCalled = true;

                                 var comment = response.data;

                                 var html = '';
                                 $('.count').html(comment.length)
                                 for (var i = 0; i < comment.length; i++) {
                                    var imagePath = comment[i].user.image ? '/imgUser/' + comment[i].user.image : '/imgUser/noImg.png';
                                 html+=`  <div class=" border min-h-[10vh] mt-5 lg:w-[70%] w-full relative border-gray-300 rounded-md text-slate-900">
                               <div class="p-7  ">
                           <p> ${comment[i].comment} </p>

                                 <button type="submit" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class=" absolute bottom-2 right-4 w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                       </button>


                     </div>
                        <img src=${imagePath}  alt=""
                         class="absolute -top-6 -left-5 p-2 w-12 rounded-full h-12">


                   </div>`
                                 }
                                 $('.content').html(html);
                                }

                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });



        };

        $('.btnCl').on('click', function(e) {
            e.preventDefault();

            addComments();
            $('.commentArea').val("");
        });
        fetchComments();

    });

    </script>
@endsection
