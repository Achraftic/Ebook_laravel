@extends('admin.layout.main')
@section('content')
    <div class=" mt-2 px-5 py-2 w-full space-y-4 max-w-9xl mx-auto"></div>


    <div class="mb-6 flex flex-wrap justify-between">

        <div class="flex flex-wrap space-x-2 items-center">

            <h1 class="text-3xl md:text-4xl text-slate-800 font-bold">Manage User</h1>


            <form action="{{ route('userDashboard.store') }}" x-data="{ modalOpen: false }">
                <button class="btn px-3 flex items-center  py-2 rounded-[4px] bg-orange-500 hover:bg-orange-600 text-white"
                    @click.prevent="modalOpen = true" aria-controls="feedback-modal"><svg xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    <span class="hidden sm:block"> Add User</span></button>
                <!-- Modal backdrop -->
                <div class="fixed inset-0 bg-slate-900 bg-opacity-30 z-50 transition-opacity" x-show="modalOpen"
                    x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-out duration-100"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak>
                </div>
                <!-- Modal dialog -->
                <div id="feedback-modal"
                    class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
                    role="dialog" aria-modal="true" x-show="modalOpen"
                    x-transition:enter="transition ease-in-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in-out duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4"
                    x-cloak>
                    <div class="bg-white rounded shadow-lg overflow-auto max-w-lg w-full max-h-full"
                        @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                        <!-- Modal header -->
                        <div class="px-5 py-3 border-b border-slate-200">
                            <div class="flex justify-between items-center">
                                <div class="font-semibold text-slate-800">Add User</div>
                                <button class="text-slate-400 hover:text-slate-500" @click="modalOpen = false">
                                    <div class="sr-only">Close</div>
                                    <svg class="w-4 h-4 fill-current">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- Modal content -->
                        <div class="px-5 py-4">

                            <div class="space-y-3">
                                <div>
                                    <label class="block text-sm font-medium mb-1" for="name">Name <span
                                            class="text-rose-500">*</span></label>
                                    <input name="name" id="name" class="border-gray-300 rounded-md w-full px-2 py-1"
                                        type="text" required />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1" for="email">Email <span
                                            class="text-rose-500">*</span></label>
                                    <input name="email" id="email" class="border-gray-300 rounded-md w-full px-2 py-1"
                                        type="email" required />
                                </div>
                                <div class="my-2 grid grid-cols-2 gap-2">
                                    <div>
                                        <label class="block text-sm font-medium mb-1" for="gender">Gender <span
                                                class="text-rose-500">*</span></label>

                                        <select name="gender" id="gender"
                                            class="border-gray-300 rounded-md w-full px-2 py-1">
                                            <option value="male" selected>Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium mb-1" for="email">Age <span
                                                class="text-rose-500">*</span></label>
                                        <input name="age" id="age"
                                            class="border-gray-300 rounded-md w-full px-2 py-1" type="number" required />
                                    </div>

                                </div>

                                <div>
                                    <label class="block text-sm font-medium mb-1" for="email">password <span
                                            class="text-rose-500">*</span></label>
                                    <input name="password" id="password"
                                        class="border-gray-300 rounded-md w-full px-2 py-1" type="password" required />
                                </div>
                                {{-- <div>
                                        <label class="block text-sm font-medium mb-1" for="feedback">Message <span class="text-rose-500">*</span></label>
                                        <textarea id="feedback" class="border-gray-300 rounded-md  w-full px-2 py-1" rows="4" required></textarea>
                                    </div> --}}
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="px-5 py-4 border-t border-slate-200">
                            <div class="flex flex-wrap justify-end space-x-2">
                                <button class="btn-sm border-slate-200 hover:border-slate-300 text-slate-600"
                                    @click="modalOpen = false">Cancel</button>
                                <button type="submit"
                                    class="btn-sm bg-indigo-500 p-2 flex items-center rounded-sm hover:bg-indigo-600 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="m-1.5">

        </div>

        <form action="" method="get" class=" relative p-2 w-max  h-max " id="searchForm">

            <input type="text" class="rounded-md border-gray-400 px-4" id="search" name="search"
                placeholder="Search">
                <span class=" text-gray-500 absolute right-4 top-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                      </svg>
                </span>


        </form>
    </div>




    <!-- Table -->
    <div class="bg-white shadow-xl rounded-sm border border-slate-200 mb-8">
        <header class="px-5 py-4">
            <h2 class="font-semibold text-slate-800">Users <span class="text-slate-400 font-medium"> {{ count($data) }}
                </span></h2>
        </header>
        <div x-data="handleSelect">

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <!-- Table header -->
                    <thead
                        class="text-xs font-semibold uppercase text-slate-500 bg-slate-50 border-t border-b border-slate-200">
                        <tr>
                            <th class="px-2 first:pl-5 last:pr-5 py-4 whitespace-nowrap w-px">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="sr-only">Select all</span>
                                        <input id="parent-checkbox" class="form-checkbox" type="checkbox"
                                            @click="toggleAll" />
                                    </label>
                                </div>
                            </th>
                            <th class="px-2 first:pl-5 last:pr-5 py-4 whitespace-nowrap">
                                <div class="font-semibold text-left">Id</div>
                            </th>

                            <th class="px-2 first:pl-5 last:pr-5 py-4 whitespace-nowrap">
                                <div class="font-semibold text-left">Image</div>
                            </th>
                            <th class="px-2 first:pl-5 last:pr-5 py-4 whitespace-nowrap">
                                <div class="font-semibold text-left">Name</div>
                            </th>
                            <th class="px-2 first:pl-5 last:pr-5 py-4 whitespace-nowrap">
                                <div class="font-semibold text-left">gmail</div>
                            </th>
                            <th class="px-2 first:pl-5 last:pr-5 py-4 whitespace-nowrap">
                                <div class="font-semibold text-left">gender</div>
                            </th>
                            <th class="px-2 first:pl-5 last:pr-5 py-4 whitespace-nowrap">
                                <div class="font-semibold text-left">Age</div>
                            </th>
                            <th class="px-2 first:pl-5 last:pr-5 py-4 whitespace-nowrap">
                                <div class="font-semibold text-left">Date Added</div>
                            </th>
                            <th class="px-2 first:pl-5 last:pr-5 py-4 whitespace-nowrap">
                                <div class="font-semibold text-left">Action</div>
                            </th>

                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm divide-y divide-slate-200" id='search-results'>
                        <!-- Row -->

                        @foreach ($data as $key => $i)

                            <tr>
                                <td class="px-2  text-slate-600 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                                    <div class="flex items-center">
                                        <label class="inline-flex">
                                            <span class="sr-only">Select</span>
                                            <input class="table-item form-checkbox" type="checkbox"
                                                @click="uncheckParent" />
                                        </label>
                                    </div>
                                </td>
                                <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                    <div class="font-medium text-sky-500"> {{ $key }} </div>
                                </td>

                                <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                    <div class="w-9 rounded-full overflow-hidden  h-9">
                                        <img src="{{ asset($i->image ? 'imgUser/' . $i->image : 'imgUser/noImg.png') }}"
                                            alt="" class="object-cover   rounded-full">

                                    </div>

                                </td>
                                <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                    <div class="font-medium  text-slate-600"> {{ $i->name }}</div>
                                </td>

                                <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                    <div class="font-medium  text-slate-600"> {{ $i->email }} </div>
                                </td>
                                <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                    <div class="font-medium  text-slate-600"> {{($i->gender=="male")?"M":"F"}} </div>
                                </td>
                                <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                    <div class="font-medium  text-slate-600"> {{ $i->age }}</div>
                                </td>
                                <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">


                                    <div class="font-medium  text-slate-600"> {{ $i->created_at }} </div>

                                </td>
                                <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                                    <div class=" flex items-center justify-center">


                                        <a href="{{route('users.edit',$i->id)}}" class="text-slate-400 hover:text-slate-500 rounded-full">
                                            <span class="sr-only">Edit</span>
                                            <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                                <path
                                                    d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z" />
                                            </svg>
                                        </a>

                                        <a href="{{route('user.delete',$i->id)}}" class="text-rose-500 hover:text-rose-600 rounded-full delete">
                                            <span class="sr-only">Delete</span>
                                            <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                                <path d="M13 15h2v6h-2zM17 15h2v6h-2z" />
                                                <path
                                                    d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        <!-- Row -->



                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <script>
        // A basic demo function to handle "select all" functionality
        document.addEventListener('alpine:init', () => {
            Alpine.data('handleSelect', () => ({
                selectall: false,
                selectAction() {
                    countEl = document.querySelector('.table-items-action');
                    if (!countEl) return;
                    checkboxes = document.querySelectorAll('input.table-item:checked');
                    document.querySelector('.table-items-count').innerHTML = checkboxes.length;
                    if (checkboxes.length > 0) {
                        countEl.classList.remove('hidden');
                    } else {
                        countEl.classList.add('hidden');
                    }
                },
                toggleAll() {
                    this.selectall = !this.selectall;
                    checkboxes = document.querySelectorAll('input.table-item');
                    [...checkboxes].map((el) => {
                        el.checked = this.selectall;
                    });
                    this.selectAction();
                },
                uncheckParent() {
                    this.selectall = false;
                    document.getElementById('parent-checkbox').checked = false;
                    this.selectAction();
                }
            }))
        })
    </script>

    <!-- Pagination -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
        <nav class="mb-4 sm:mb-0 sm:order-1" role="navigation" aria-label="Navigation">
            <ul class="flex justify-center">
                <li class="ml-3 first:ml-0">
                    <a class="btn bg-white border-slate-200 text-slate-300 cursor-not-allowed" href="#0"
                        disabled>&lt;-
                        Previous</a>
                </li>
                <li class="ml-3 first:ml-0">
                    <a class="btn bg-white border-slate-200 hover:border-slate-300 text-indigo-500" href="#0">Next
                        -&gt;</a>
                </li>
            </ul>
        </nav>
        <div class="text-sm text-slate-500 text-center sm:text-left">
            Showing <span class="font-medium text-slate-600">1</span> to <span
                class="font-medium text-slate-600">10</span>
            of <span class="font-medium text-slate-600">467</span> results
        </div>
    </div>





    </div>




    <script defer type="module">
                $('#search').on('input', function(e) {
                    event.preventDefault();
                    var query='';
                     query = $('#search').val();

                     var successCalled = false;

                     $.ajax({
                        url: 'http://127.0.0.1:8000/dashboard/user/search?search=' + query,

                         method: 'GET',
                         data: { search: query },
                         success: function(response) {
                             if (!successCalled) {
                                 successCalled = true;

                                 var users = response.users;

                                 var html = '';
                                 for (var i = 0; i < users.length; i++) {
                                    var imagePath = users[i].image ? '/imgUser/' + users[i].image : '/imgUser/noImg.png';
                                     html += `
                                         <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td class="px-2  text-slate-600 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                                            <div class="flex items-center">
                                                <label class="inline-flex">
                                                    <span class="sr-only">Select</span>
                                                    <input class="table-item form-checkbox" type="checkbox" @click="uncheckParent" />
                                                </label>
                                            </div>
                                        </td>
                                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                 ${i}
                                             </td>
                                             <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                          <div class="w-9 rounded-full overflow-hidden  h-9">
                                            <img src="${imagePath}" alt=""
                                            class="object-cover   rounded-full">


                                          </div>

                                        </td>
                                        <td class="px-2 first:pl-5 last:pr-5 py-3  text-slate-600 whitespace-nowrap">
                                                 ${users[i].name}
                                             </td>
                                             <td class="px-2 first:pl-5 last:pr-5 py-3   text-slate-600 whitespace-nowrap">
                                                 ${users[i].email}
                                             </td>
                                             <td class="px-2 first:pl-5 last:pr-5 py-3   text-slate-600 whitespace-nowrap">
                                                 ${users[i].gender}
                                             </td>
                                             <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                            <div class="font-medium  text-slate-600">   ${users[i].age}</div>
                                        </td>
                                        <td class="px-2 first:pl-5 last:pr-5 py-3  text-slate-600 whitespace-nowrap">
                                                 ${users[i].created_at}
                                             </td>

                                             <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                                            <div class=" flex items-center justify-center">
                                                <a class="text-slate-400 hover:text-slate-500 rounded-full">
                                                    <span class="sr-only">Edit</span>
                                                    <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                                        <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z" />
                                                    </svg>
                                                </a>

                                                <a class="text-rose-500 hover:text-rose-600 rounded-full delete">
                                                    <span class="sr-only">Delete</span>
                                                    <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                                        <path d="M13 15h2v6h-2zM17 15h2v6h-2z" />
                                                        <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                         </tr>
                                     `;
                                 }
                                 $('#search-results').html(html);
                             }
                         },
                         error: function(xhr) {
                             console.log(xhr.responseText);
                         }
                     });



                });

   </script>
@endsection
