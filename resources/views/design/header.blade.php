  {{-- nav phone --}}

  @php
      use App\Models\wishList;
      $route = Route::currentRouteName();
      if (Auth::check()) {
          $countWish = count(wishList::where('user_id', Auth::user()->id)->get());
          $myWishlist = wishList::where('user_id', Auth::user()->id)->get();
      }

  @endphp


  <nav class="navphone bg-[#393E46] overflow-hidden right-0 h-full fixed hide  top-0 md:hidden   z-[5000]">
      <img src="{{ asset('asset/img/icon/back.png') }}" alt=""
          class=" back  absolute top-5 right-4 w-6 cursor-pointer">
      <ul class=" text-xl flex flex-col list mt-10 text-[#EEEEEE] px-6 p-10 space-y-7 ">
          <li class="{{ $route == 'welcome' ? 'text-orange-500' : '' }}"> <a href="{{ route('welcome') }}">Home</a> </li>
          <li>Books</li>
          <li class="{{ $route == 'books.index ' ? 'text-orange-500' : '' }}"> <a href="#contact"></a> Contact</li>
          <li>About Us</li>

          <li> <a href=" {{ route('login') }} " class=" px-3 py-1 border-[#FD7014]  border rounded-md">Login</a> </li>
          <li> <a href=" {{ route('register') }} " class="  py-bg-[#FD7014] px-3 py-1  rounded-md ">Register</a>
          </li>

      </ul>

  </nav>


  <header class="shadow-xl z-[500]  dark:text-blue-500 shadow-[#393E46]/40 p-2 bg-[#222831]   sticky top-0">
      <nav class="  text-[#EEEEEE] flex justify-between sm:w-[90%] w-full m-auto p-4    items-center   ">
          <div class="flex items-center   justify-center p-0">

              <h1 class="  text-3xl"> <span class="text-[#FD7014]">E</span>-Books</h1>
          </div>

          <ul class="md:flex hidden md:space-x-6 lg:space-x-8 list ">
              <li class="{{ $route == 'welcome' ? 'text-orange-500' : '' }}"> <a href="{{ route('welcome') }}">Home</a>
              </li>
              <a class="{{ $route == 'books.filter' || $route == 'books.index' ? 'text-orange-500' : '' }}"
                  href=" {{ route('books.index') }} ">
                  <li>Books</li>
              </a>
              <a href="  {{ $route == 'welcome' ? '#contact' : '/' }} ">
                  <li> Contact</li>
              </a>
              <li>About Us</li>
          </ul>
          <ul class=" md:flex hidden md:space-x-6 space-x-5 items-center ">
              @if (!Auth::check())
                  <li> <a href="{{ route('login') }}" class="py-2 px-3 sm:px-5 border-[#FD7014]  border rounded-md"
                          id='my-button'>Login</a> </li>
                  <li> <a href="{{ route('register') }}"
                          class="bg-[#FD7014] py-2 px-3 sm:px-5 text-[#EEEEEE]  rounded-md ">Register</a> </li>
              @else
                  <div class="relative">
                      <div class="cursor-pointer btntogle hh" id="wishlistBtn ">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                              stroke="currentColor" class="w-7 h-7">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                          </svg>
                          @if ($countWish > 0)
                              <span
                                  class="absolute rounded-full bg-white text-[12px] text-orange-400 w-3 h-3 flex justify-center items-center p-2 right-0 -top-1 font-bold">
                                  {{ $countWish }} </span>
                          @endif
                      </div>

                      <div
                          id="wishlistDropdown"class=" listshow hidden cursor-pointer  z-10 max-h-[280px]  min-h-[50px]  overflow-y-auto  min-w-[350px]  right-3 absolute  bg-[#EEEEEE] divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                          @if ($countWish > 0)
                              @foreach ($myWishlist as $i)
                                  <div class="p-3 text-[#222831] flex justify-between gap-3 items-center">

                                      <img src="{{ asset('img/' . $i->books?->image) }}" alt=""
                                          class="w-10 h-10">
                                      <div class=" flex flex-col w-full ">
                                          <h2>{{ $i->books?->name }}</h2>
                                          <p class="text-[12px]">{{ $i->books?->author }}</p>
                                      </div>
                                      <div class="flex space-x-2">
                                          <a href="{{ route('books.show', $i->books?->id) }}">
                                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                  stroke-width="1.5" stroke="currentColor"
                                                  class="w-5 h-5 text-orange-500 ">
                                                  <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                  <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                              </svg>
                                          </a>
                                          <a href="{{ route('wishlist.delete', $i->books?->id) }}"> <svg
                                                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                  stroke-width="1.5" stroke="currentColor"
                                                  class="w-5 h-5 text-red-700 ">
                                                  <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                              </svg></a>



                                      </div>

                                  </div>
                              @endforeach
                          @else
                              <h3 class="text-center text-gray-500 mt-4">The wishlist is vide</h3>


                          @endif
                      </div>

                  </div>

                  <div class="relative">
                      <div id="avatarButton" class=" hh cursor-pointer btntogle">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                              stroke="currentColor" class="w-7 h-7">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>
                      </div>

                      <div id="userDropdown"
                          class="z-10 hidden listshow  right-3 absolute  bg-[#EEEEEE] divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                          <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                              <div>{{ Auth::user()->name }}</div>
                              <div class="font-medium truncate"> {{ Auth::user()->email }} </div>
                          </div>
                          <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">

                              <li>
                                  <a href=" {{ route('user.view') }} "
                                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                              </li>

                          </ul>
                          @if (Auth::user()->userType == 'Admin')
                              <div class="py-1">
                                  <a href="{{ route('admin.index') }}"
                                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                              </div>
                          @endif

                          <div class="py-1">
                              <a href="{{ route('user.logout') }}"
                                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                  out</a>
                          </div>
                      </div>

                  </div>




              @endif

          </ul>
          <img src=" {{ asset('asset/img/icon/menu-burger.png') }} " alt=""
              class=" hum w-8 cursor-pointer block md:hidden">
      </nav>
      <!-- navphone -->






  </header>
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
      crossorigin="anonymous"></script>
  {{-- <script>
      $(document).ready(function() {
          $('#avatarButton').on('click', function() {
              $('#userDropdown').toggleClass('hidden');




          });



      });
  </script> --}}

  <script src="{{ asset('asset/js.js') }}"></script>
