
@extends('design.main')
@section('content')
    <div class="p-16">

        <div class="p-8 bg-white shadow-lg mt-20">
            <div class="grid grid-cols-1 md:grid-cols-3">
                <div class="grid grid-cols-3 text-center order-last md:order-first mt-20 md:mt-0">
                    <div>
                        <p class="font-bold text-slate-700 text-xl">22</p>
                        <p class="text-slate-400">Friends</p>
                    </div>
                    <div>
                        <p class="font-bold text-slate-700 text-xl">10</p>
                        <p class="text-slate-400">Photos</p>
                    </div>
                    <div>
                        <p class="font-bold text-slate-700 text-xl">89</p>
                        <p class="text-slate-400">Comments</p>
                    </div>
                </div>
             @if (  Auth::user()->image)
                    <div class="relative">
                        <div
                            class="  overflow-hidden   w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center text-indigo-500">
                            <img src=" {{ asset('imgUser/' . Auth::user()->image) }} " alt="">
                        </div>
                    </div>
                @else
                    <div class="relative">
                        <div
                            class="  overflow-hidden w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                @endif
                <div class="space-x-8 flex justify-between mt-32 md:mt-0 md:justify-center">
                    <a href="{{route('user.edit',Auth::user()->id)}} " class="text-white py-2 px-4 flex items-center uppercase rounded bg-green-600 hover:bg-green-700 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
                        Edit Profile</a> <button
                        class="text-white py-2 px-4 uppercase rounded bg-red-600 hover:bg-red-800 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
                        Delte Profile</button> </div>
            </div>
            <div class="mt-20 text-center  pb-12">
                <h1 class="text-4xl font-medium text-slate-700">{{ $data->name }} <span
                        class="font-light text-slate-500">27</span></h1>
                <p class="font-light text-slate-400 mt-3"> {{ $data->email }}</p>
                <p class="mt-8 text-slate-500">Solution Manager - Creative Tim Officer</p>
                <p class="mt-2 text-slate-500">University of Computer Science</p>
            </div>

        </div>
    </div>
    <script>
        document.getElementById('image').addEventListener('change', function() {
            document.getElementById('my-form').submit();
        });
    </script>
@endsection
