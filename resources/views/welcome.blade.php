@extends('design.main')
@section('content')
    <style>
        .contactbg {
            background-image: url("{{ asset('img/cover.jpg') }}");
            background-size: cover;
            background-position: center;

        }
    </style>

    <section
        class=" heroSection   flex md:flex-nowrap flex-wrap  items-center z-10 space-y-5 w-full p-4 sm:p-2 sm:w-[85%]  m-auto space-x-5">

        <div class=" space-y-7 p-4  w-full">
            <h1 class="mb-2 max-w-3xl  font-extrabold leading-none text-5xl xl:text-6xl text-[#222831]">Welcome to
                E-book online book </h1>
            <p class="mb-3 max-w-2xl font-light text-[#393E46] lg:mb-5 text-md dark:text-orange-400 ">From checkout to
                global sales tax compliance, companies around the world use Flowbite to simplify their payment
                stack.
            </p>
            <a href="#"
                class="inline-flex justify-center items-center py-3 shadow-sm px-10 mr-3 text-white rounded-md bg-[#FD7014]  focus:ring-4 focus:ring-primary-300 ">
                Get started
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>

        </div>


        <img src=" {{ asset('/asset/img/hero.jpg') }} " alt="" class="hero sm:w-[500px] w-full    ">

    </section>


    <section class=" p-4 sm:p-0 my-10  mx-auto space-y-10 ">
         <h1 class="text-3xl ml-20  font-semibold text-[#222831]">Last Books</h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($records as $i )


                <div class="swiper-slide">
                    <div class="slider-image space-x-4">
                        <div class="cardBestSeler flex flex-col justify-center items-center shadow-lg p-8 w-80 text-center space-y-3 bg-[#EEEEEE] rounded-lg ">
                            <img  class="max-h-full " src="{{asset('img/'.$i->image)}}" alt="">
                            <div>

                                <h1 class="text-2xl"> {{$i->name}} </h1>
                                <p class="text-[#FD7014]/60 text-sm">{{$i->author}}</p>
                            </div>
                            <div>
                                <a href="{{route('books.show',$i->id)}}"
                                    class="text-white bg-gradient-to-r  from-orange-500 via-[#FD7014] to-orange-500 hover:shadow-lg shadow-[#FD7014]/&100 focus:ring-4 focus:outline-none focus:ring-[#FD7014] shadow-lg shadow-[#FD7014]/50 dark:shadow-lg font-medium rounded-lg text-sm px-12 w-[90%]  py-2.5 text-center mr-2 mb-2">Read Now</a>
                            </div>


                        </div>
                    </div>
                </div>
 @endforeach

            </div>
            <div class="swiper-pagination mt-32"></div>
        </div>
    </section>


    <section class="sm:w-[85%] p-4 sm:p-0  mx-auto space-y-10 ">
        <div class="  w-full mb-16   ">
            <h1 class="text-3xl font-semibold text-[#222831]">Top Rated</h1>

        </div>
        <div
            class="grid lg:grid-cols-2 mx-auto gap-10 lg:gap-4 grid-cols-1 place-items-center space-y-2 sm:space-y-7 mt-5">
@foreach ($topReated as $i )



            <div class="flex items-center   ">
                <img src="{{asset('img/'.$i->image)}}" alt="" class=" imgCard w-52 rounded-lg  ">
                <div class=" p-5 bg-zinc-100 shadow-xl  space-y-3">
                    <div>
                        <h1 class="text-2xl font-bold  text-[#222831] "> {{$i->name}} </h1>
                        <p class="text-[#FD7014]/60 text-sm"> {{$i->author}} </p>
                    </div>
                    <div>
                        @php
                            $rate = $i->rate; // Store the rate in a separate variable
                        @endphp
                        @for ($j = 1; $j <= 5; $j++)
                            @if ($j <= intval($rate))
                                <span class="fa fa-star fa-md checked"></span>
                            @else
                                <span class="fa fa-star fa-md"></span>
                            @endif
                        @endfor
                    </div>

                    <p class="discriotion max-w-full text-[#393E46] text-sm">
                      {{ substr($i->description,0,180) }}...

                    </p>

                    <a href="{{route('books.show',$i->id)}}" type="button"
                        class="text-white mt-4 relative  justify-center w-20 flex text-center bg-gradient-to-r from-orange-500 via-[#FD7014] to-orange-500 shadow-lg shadow-[#FD7014]/50 dark:shadow-lg font-medium rounded-lg text-sm px-12  py-2.5  mr-2 mb-2">View</a>

                </div>
            </div>
            @endforeach
        </div>
        <div class="w-full flex justify-center items-center">
            <a href=""
                class="inline-flex  justify-center items-center py-2  my-5 shadow-orange-400 shadow-lg hover:shadow-2xl px-8 mr-3 text-white rounded-md bg-[#FD7014]  focus:ring-4 focus:ring-primary-300 ">
                View All</a>
        </div>

    </section>



<section class="sm:w-[85%] p-4 sm:p-0  mx-auto space-y-1 my-9   " id="contact">
        <h1 class="text-3xl font-semibold text-[#222831]">Contact</h1>
        <div class="   flex px-2  items-center justify-center">


            <div class="w-full contactbg  rounded-md h-96 md:block hidden"></div>
            <div class="  rounded-lg bg-white p-8 lg:col-span-3 w-full max-w-[700px] ">
                <form action="{{ route('send.msg') }}" class="space-y-4" method="post">
                    @csrf
                    <div>
                        <label class="sr-only" for="name">Name</label>
                        <input class="w-full rounded-lg border-orange-300  p-3 text-sm" placeholder="Name" type="text"
                            id="name" name="name" />
                    </div>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label class="sr-only" for="email">Email</label>
                            <input class="w-full rounded-lg border-orange-300  p-3 text-sm" placeholder="Email address"
                                type="email" id="email" name="email" />
                        </div>

                        <div>
                            <label class="sr-only" for="phone">Phone</label>
                            <input class="w-full rounded-lg border-orange-300  p-3 text-sm" placeholder="Phone Number"
                                type="tel" id="phone" />
                        </div>
                    </div>



                    <div>
                        <label class="sr-only" for="message">Message</label>

                        <textarea class="w-full rounded-lg border-orange-300  p-3 text-sm" placeholder="Message" rows="8"
                            id="message" name="message"></textarea>
                    </div>

                    <div class="mt-4">
                        <button type="submit"
                            class="inline-block w-full rounded-lg bg-[#222831] px-5 py-3 font-medium text-white sm:w-auto">
                            Send Enquiry
                        </button>
                    </div>
                </form>
            </div>


         </div>

 </section>








@endsection
