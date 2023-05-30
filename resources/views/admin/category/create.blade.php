@extends('admin.layout.main')
@section('content')
    <style>
        .bookscreate input,
        textarea {
            border: 1px solid rgb(218, 218, 218);
            border-radius: 5px;

        }
    </style>

    <section class="">
        <div class="mt-2 px-4 py-2 w-full space-y-4 max-w-9xl mx-auto flex flex-wrap justify-between items-center">
            <h1 class="text-3xl md:text-4xl text-slate-800 font-bold">Add Book</h1>
        </div>
        <form action=" {{ route('category.store') }} " method="post" enctype="multipart/form-data"
            class=" bookscreate  p-8    gap-1   rounded-xl mx-auto   ">
            @csrf




             <div>
                       <div class="flex space-x-2 items-center my-1">
                <label class="block text-sm font-medium mb-1" for="Name">Category Name</label>
                <span class="text-rose-500">*</span>
            </div>
            <input id="Name" class="form-input sm:w-[80%] w-full focus:ring-orange-600  " name="name" type="text" placeholder="Example: fantasy" />

             </div>










            <button
                class=" my-3  btn rounded-md bg-orange-500 hover:bg-orange-600 text-white sm:w-[150px] w-full p-2 ">Submit</button>

        </form>



    </section>
@endsection
