@extends('admin.layout.main')
@section('content')
    <style>
        .bookscreate input,textarea {
            border: 1px solid rgb(218, 218, 218);
            border-radius: 5px;

        }
    </style>

    <section class="">
        <div class="mt-2 px-4 py-2 w-full space-y-4 max-w-9xl mx-auto flex flex-wrap justify-between items-center">
            <h1 class="text-3xl md:text-4xl text-slate-800 font-bold">Add Book</h1>
        </div>
        <form action=" {{route('books.store')}} " method="post" enctype="multipart/form-data" class=" bookscreate  p-8  space-y-4  gap-4   rounded-xl mx-auto   ">
            @csrf



            <div class=" sm:grid  sm:grid-cols-2  grid-cols-1 gap-4  sm:space-y-0  space-y-5 ">
                <div>
                    <div class="flex space-x-2 items-center my-2">
                        <label class="block text-sm font-medium mb-1" for="Name">Name</label>
                        <span class="text-rose-500">*</span>
                    </div>
                    <input id="Name" class="form-input w-full" name="name" type="text"
                        placeholder="Example: Book" />

                </div>

                <div>
                    <div class="flex space-x-2 items-center my-2">
                        <label class="block text-sm font-medium mb-1" for="author">Author</label>
                        <span class="text-rose-500">*</span>
                    </div>
                    <input id="author" class="form-input w-full" name="author" type="text"
                        placeholder="JohnDoe" />
                </div>
                <div>
                    <div class="flex space-x-2 items-center my-2">
                        <label class="block text-sm font-medium mb-1" for="genre">Category</label>
                        <span class="text-rose-500">*</span>
                    </div>
                 <select name="category" id="" class="form-input w-full border-gray-300 rounded-md">
                    <option value="" selected="" disabled  class="text-slate-500 p-2">select Category </option>
                     @foreach ($category as $item )
               <option value=" {{$item->name}} " class="text-slate-500 p-2"> {{$item->name}} </option>
                     @endforeach

                 </select>
                </div>
                <div>
                    <div class="flex space-x-2 items-center my-2">
                        <label class="block text-sm font-medium mb-1" for="rate">Rate</label>
                        <span class="text-rose-500">*</span>
                    </div>
                    <input id="rate" class="form-input w-full" name="rate"  max="5" type="number" placeholder="rate" />
                </div>

                <div class="col-span-2   w-full">
                    <div class="flex   space-x-2 items-center my-2">
                        <label class="block text-sm font-medium mb-1" for="description">Description</label>
                        <span class="text-rose-500">*</span>
                    </div>
                    <textarea name="description" id="description" cols="30" rows="10" class=" w-full"></textarea>
                </div>




            </div>
            <div class="flex justify-center items-center flex-col">

                <label
                    class="my-4  flex space-x-2 items-center w-full   cursor-pointer p-3 bg-white border-2  hover:border-orange-500 rounded-md font-semibold text-xs text-gray-700   shadow-sm hover:text-gray-500 focus:outline-none  transition ease-in-out duration-150">
                    <input type="file" id="image" name="image" class="hidden ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                      </svg>

                    <label for="image" class="cursor-pointer "> Upload Img</label>
                </label>
                <label
                    class="my-4  flex space-x-2 items-center w-full   cursor-pointer p-3 bg-white border-2  hover:border-orange-500 rounded-md font-semibold text-xs text-gray-700   shadow-sm hover:text-gray-500 focus:outline-none  transition ease-in-out duration-150">
                    <input type="file" id="pdf" name="pdf" class="hidden ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                      </svg>


                    <label for="pdf" class="cursor-pointer "> Upload Pdf</label>
                </label>
            </div>
            <button class="btn rounded-md bg-orange-500 hover:bg-orange-600 text-white sm:w-[150px] w-full p-2 ">Submit</button>

        </form>



    </section>
@endsection
