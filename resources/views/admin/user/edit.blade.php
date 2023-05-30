@extends('admin.layout.main')
@section('content')
    <section>
        <div class="mt-2 px-4 py-2 w-full space-y-4 max-w-9xl mx-auto flex flex-wrap justify-between items-center">
            <div class="flex space-x-2 items-center">

                <h1 class="text-3xl md:text-4xl text-slate-800 font-bold">Edit  User</h1>
             
            </div>

        </div>
        <div class="px-5 py-4">


            <form method="post" action="{{route('users.update',$data->id)}}" class="space-y-3">
                @csrf
                <div>
                    <label class="block text-sm font-medium mb-1" for="name">Name <span
                            class="text-rose-500">*</span></label>
                    <input name="name" id="name" class="border-gray-300 rounded-md w-full px-2 py-2"
                        type="text" value="{{$data->name}}" required  placeholder="name"/>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1" for="email">Email <span
                            class="text-rose-500">*</span></label>
                    <input name="email" value="{{$data->email}}" id="email" class="border-gray-300 rounded-md w-full px-2 py-2"
                        type="email" required placeholder="email" />
                </div>
                <div class="my-2 grid grid-cols-2 gap-2">
                    <div>
                        <label class="block text-sm font-medium mb-1" for="gender">Gender <span
                                class="text-rose-500">*</span></label>

                        <select name="gender" id="gender"
                            class="border-gray-300 rounded-md w-full px-2 py-2">
                            <option value="male" {{($data->gender=="male")?"selected":""}}" >Male</option>
                            <option value="female"  {{($data->gender=="female")?"selected":""}}>Female</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1" for="email">Age <span
                                class="text-rose-500">*</span></label>
                        <input name="age" id="age" value="{{$data->age}}"
                            class="border-gray-300 rounded-md w-full px-2 py-2" type="number" required  placeholder="age"/>
                    </div>

                </div>



                <button type="submit""
                class="bg-orange-500 text-white p-2 rounded-md flex items-center  px-3 py-2 ">
               Submite</button>
            </form>
        </div>










    </section>
@endsection
