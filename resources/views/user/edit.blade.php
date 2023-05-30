@extends('design.main')
@section('content')
    <div class="p-16">
        <style>


        </style>

        <form action=" {{ route('user.update', $data->id) }} " method="POST" enctype="multipart/form-data"
            class=" text-slate-800 mx-auto grid grid-cols-1 gap-4 max-w-[700px] min-w-[300px]">
            @csrf
            <h1 class="text-4xl text-slate-800 font-semibold ">Edit Profile</h1>
            <div class="overflow-hidden w-40 h-40 flex mx-auto justify-center mt-7">

                <img src=" {{ asset('imgUser/' . $data->image) }} " id="showImage"
                    class="w-max h-max object-cover border rounded-full" alt="">
            </div>

            <div class="grid grid-cols-2 gap-6 my-5">
                <input type="text" class="rounded-md  border-gray-300 " name="name" placeholder="Name" value="{{ $data->name }}">
                <input type="number" class="rounded-md  border-gray-300" min="1" max="80" name="age" placeholder="Age" value="{{ $data->age }}">
                <input type="email" class="rounded-md  border-gray-300   " name="email" placeholder="Email" value="{{ $data->email }}">
                <label
                    class="    flex space-x-2 items-center w-full   cursor-pointer p-2 bg-white border-2  hover:border-orange-500 rounded-md font-semibold text-xs text-gray-700   shadow-sm hover:text-gray-500 focus:outline-none  transition ease-in-out duration-150">
                    <input type="file" id="image" name="image" class="hidden ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>

                    <label for="image" class="cursor-pointer "> Upload Img</label>
                </label>
                <button class=" bg-orange-500 text-white p-2 rounded-md  w-40">Edit</button>
            </div>

        </form>
    </div>
    {{-- <script>
        document.getElementById('image').addEventListener('change', function() {
            document.getElementById('my-form').submit();
        });
    </script> --}}

    <script type="module" defer>
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
