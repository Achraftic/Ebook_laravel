
@php
$prefix=Request::route()->getPrefix();
$route=Route::current()->getName();

@endphp






<div  class=" h-screen w-64   inset-0   shadow-xl md:sticky bg-[#EEEEEE]  flex-col justify-between hidden md:flex">
    <div class="px-8   ">
        <div class="h-16 my-8 w-full flex items-center ">
        <h1 class="text-2xl text-[#222831] font-semibold w-full flex space-x-4 items-center ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
          </svg>
           ADMINDASH</h1>
        </div>
        <ul class="  ">
            <li class="flex w-full {{ ($route=="admin.index")?"text-[#222831] ":"text-[#222831]/50" }} justify-between text-[#222831] font-bold cursor-pointer items-center mb-6">
                <a href=" {{route('admin.index')}} " class="flex items-center focus:outline-none ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"></path>
                        <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                        <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                        <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                        <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                    </svg>
                    <span class="text-md ml-2">Dashboard</span>
                </a>
                <div class="py-1 px-3 bg-[#FD7014] rounded text-white flex items-center justify-center text-xs">5</div>
            </li>
            <li class="flex w-full justify-between {{ ($route=="books")?"text-[#222831] ":"text-[#222831]/50" }} hover:text-[#222831] hover:font-semibold cursor-pointer items-center mb-6">
                <a href=" {{route('books')}} " class="flex items-center focus:outline-none ">
                    <svg xmlns="http://www.w3.org/2000/svg" height='22' width='22' fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class=" ">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>

                    <span class="text-md ml-2">Books</span>
                </a>
                <div class="py-1 px-3 bg-[#FD7014] rounded text-white flex items-center justify-center text-xs">8</div>
            </li>
            <li class="flex w-full justify-between text-[#222831]/50 hover:text-[#222831] hover:font-semibold cursor-pointer items-center mb-6">
                <a href="{{route('category.index')}}" class="flex items-center focus:outline-none ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  width="22" height="22">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                      </svg>

                    <span class="text-md ml-2">Category</span>
                </a>
            </li>
            <li class="flex w-full justify-between {{ ($route=="user.index")?"text-[#222831] ":"text-[#222831]/50" }} text-[#222831]/50 hover:text-[#222831] hover:font-semibold cursor-pointer items-center mb-6">
                <a href="{{route('user.index')}}" class="flex items-center focus:outline-none " >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"  width="22" height="22"  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                      </svg>


                    <span class="text-md ml-2">Users</span>
                </a>
            </li>

            <li class="flex w-full justify-between text-[#222831]/50 hover:text-[#222831] hover:font-semibold cursor-pointer items-center">
                <a href="javascript:void(0)" class="flex items-center focus:outline-none ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                    <span class="text-md ml-2">Settings</span>
                </a>
            </li>
        </ul>

    </div>


</div>
<div class="w-64  z-40 fixed  shadow min-h-screen flex-col justify-between md:hidden transition duration-150 ease-in-out bg-[#EEEEEE] " id="mobile-nav">
    <button aria-label="toggle sidebar" id="openSideBar" class="h-10 w-10 bg-gray-800 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 rounded focus:ring-gray-800" onclick="sidebarHandler(true)">
       <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg7.svg" alt="toggler">
    </button>
    <button aria-label="Close sidebar" id="closeSideBar" class="hidden h-10 w-10 bg-gray-800 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer text-white" onclick="sidebarHandler(false)">
      <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg8.svg" alt="cross">
    </button>
    <div class="px-8 ">
        <div class="h-16 my-8 w-full flex items-center ">
            <h1 class="text-2xl text-[#222831] font-semibold w-full flex space-x-4 items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
              </svg>
               ADMINDASH</h1>
            </div>
        <ul class="mt-12">
            <li class="flex w-full {{ ($route=="admin.index")?"text-[#222831] ":"text-[#222831]/50" }} justify-between text-[#222831] font-bold cursor-pointer items-center mb-6">
                <a href=" {{route('admin.index')}} " class="flex items-center focus:outline-none ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"></path>
                        <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                        <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                        <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                        <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                    </svg>
                    <span class="text-md ml-2">Dashboard</span>
                </a>
                <div class="py-1 px-3 bg-[#FD7014] rounded text-white flex items-center justify-center text-xs">5</div>
            </li>
            <li class="flex w-full justify-between {{ ($route=="books")?"text-[#222831] ":"text-[#222831]/50" }} hover:text-[#222831] hover:font-semibold cursor-pointer items-center mb-6">
                <a href=" {{route('books')}} " class="flex items-center focus:outline-none ">
                    <svg xmlns="http://www.w3.org/2000/svg" height='22' width='22' fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class=" ">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>

                    <span class="text-md ml-2">Books</span>
                </a>
                <div class="py-1 px-3 bg-[#FD7014] rounded text-white flex items-center justify-center text-xs">8</div>
            </li>
            <li class="flex w-full justify-between text-[#222831]/50 hover:text-[#222831] hover:font-semibold cursor-pointer items-center mb-6">
                <a href="{{route('category.index')}}" class="flex items-center focus:outline-none ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  width="22" height="22">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                      </svg>

                    <span class="text-md ml-2">Category</span>
                </a>
            </li>
            <li class="flex w-full justify-between text-[#222831]/50 hover:text-[#222831] hover:font-semibold cursor-pointer items-center mb-6">
                <a href="{{route('user.index')}}" class="flex items-center focus:outline-none " >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"  width="22" height="22"  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                      </svg>


                    <span class="text-md ml-2">Users</span>
                </a>
            </li>

            <li class="flex w-full justify-between text-[#222831]/50 hover:text-[#222831] hover:font-semibold cursor-pointer items-center">
                <a href="javascript:void(0)" class="flex items-center focus:outline-none ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                    <span class="text-md ml-2">Settings</span>
                </a>
            </li>
        </ul>

    </div>

</div>
