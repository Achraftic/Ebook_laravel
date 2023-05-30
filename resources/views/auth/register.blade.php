


@extends('layouts.auth')
@section('content')
    <form method="POST" action="{{ route('register') }}">

        @csrf
        <section class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-900">
            <div class=" md:p-6 p-10  md:w-[530px] w-full  max-h-max   ">
                <div class="flex-1   w-full  bg-white rounded-lg shadow-xl dark:bg-gray-950/90">

                    <div class="flex items-center justify-center p-6 sm:p-10  ">
                        <div class="w-full">
                            <h1 class="mb-4 text-3xl font-semibold text-gray-700 dark:text-gray-200">
                                register
                            </h1>
                            <div class="">



                                <div class="">

                                    <label class="block mt-4  text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Email</span>
                                        <input type="email" name="email" id="email"
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="JaneDoe@gmail.com" />
                                        @if ($errors->has('email'))
                                            <div class="text-sm absolute text-red-600">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </label>
                                </div>
                                <div class=" grid md:grid-cols-3 md:gap-2">
                                    <label class="block mt-4  text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Name</span>
                                        <input type="text" name="name" id="name"
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Jane Doe" />
                                        @if ($errors->has('name'))
                                            <div class="text-sm absolute text-red-600">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </label>
                                    <label class="block mt-4  text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Gender</span>
                                        <select name="gender" id="gender"   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                                            <option value="" selected="" disabled="">Select Your Gender</option>
                                            <option value="male" >Male</option>
                                            <option value="female" >Female</option>
                                        </select>

                                        @if ($errors->has('gender'))
                                            <div class="text-sm absolute text-red-600">
                                                {{ $errors->first('gender') }}
                                            </div>
                                        @endif
                                    </label>
                                    <label class="block mt-4  text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Age</span>
                                        <input type="number" name="age" id="age"
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Jane Doe" />
                                        @if ($errors->has('age'))
                                            <div class="text-sm absolute text-red-600">
                                                {{ $errors->first('age') }}
                                            </div>
                                        @endif
                                    </label>
                                </div>

                                <label class="block mt-4 text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">Password</span>
                                    <input type="password" name="password" id="password"
                                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="***************" />
                                    @if ($errors->has('password'))
                                        <div class="text-sm absolute text-red-500">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </label>
                                <label class="block mt-4  text-sm">
                                    <span class="text-gray-700 dark:text-gray-400"> Confirme Password</span>
                                    <input type="password" name="password_confirmation" id ="password_confirmation"
                                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="***************" />
                                    @if ($errors->has('password_confirmation'))
                                        <div class="text-sm absolute text-red-500">
                                            {{ $errors->first('password_confirmation') }}
                                        </div>
                                    @endif
                                </label>
                            </div>
                            <!-- You should use a button here, as the anchor is only used for the example  -->
                            <button type="submit"
                                class="block w-full px-4 py-3 mt-7 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-[#FD7014] border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-600 focus:outline-none focus:shadow-outline-purple">

                                Log in
                            </button>






                        </div>

                    </div>
                </div>
            </div>
        </section>

    </form>
@endsection
