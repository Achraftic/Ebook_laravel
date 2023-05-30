@extends('admin.layout.main')
@section('content')
    <section>
        <div class="mt-2 px-4 py-2 w-full space-y-4 max-w-9xl mx-auto flex flex-wrap justify-between items-center">
<div class="flex space-x-2 items-center">

    <h1 class="text-3xl md:text-4xl text-slate-800 font-bold">Book View</h1>
    <a href="{{route('books.create')}}" class="bg-orange-500 text-white p-2 rounded-md flex items-center  px-3 py-2 "> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
      </svg>
       Add Books</a>
</div>
            <div class="flex   sm:space-y-0 space-y-2 flex-wrap  items-center h-max space-x-1">
                <input type="text" class="border border-slate-300 w-full md:w-auto  rounded-md" placeholder="Search Books">
                <button class="bg-orange-500 text-white p-2 w-full md:w-auto  rounded-md  h-full">Search Books</button>
            </div>
        </div>




        <div class=" mt-2 px-4 py-8 w-full max-w-9xl mx-auto">



            <!-- Table -->
            <div class="bg-white shadow-xl rounded-sm border border-slate-200 mb-8">
                <header class="px-5 py-4">
                    <h2 class="font-semibold text-slate-800">ALL Books <span class="text-slate-400 font-medium">67</span>
                    </h2>
                </header>
                <div x-data="handleSelect">

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full ">
                            <!-- Table header -->
                            <thead
                                class="text-xs font-semibold uppercase text-slate-500 bg-slate-50 border-t border-b border-slate-200">
                                <tr>
                                    <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap ">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="sr-only">Select all</span>
                                                <input id="parent-checkbox" class="form-checkbox" type="checkbox"
                                                    @click="toggleAll" />
                                            </label>
                                        </div>
                                    </th>
                                    <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                        <div class="font-semibold text-left">image</div>
                                    </th>
                                    <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                        <div class="font-semibold text-left">Name Books</div>
                                    </th>
                                    <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                        <div class="font-semibold text-left">Author</div>
                                    </th>
                                    <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                        <div class="font-semibold text-left">Rate</div>
                                    </th>
                                    <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                        <div class="font-semibold text-left">Genre</div>
                                    </th>

                                    <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                        <div class="font-semibold text-left">Actions</div>
                                    </th>
                                </tr>
                            </thead>
                            <!-- Table body -->
                            <tbody class=" text-sm divide-y divide-slate-200">
                                <!-- Row -->
                                @foreach ($data as $key => $book)
      <tr>
                                    <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap ">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="sr-only">Select</span>
                                                <input class="table-item form-checkbox" type="checkbox"
                                                    @click="uncheckParent" />
                                            </label>
                                        </div>
                                    </td>
                                    <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                        <div class="font-medium  text-sky-500">
                                            <img src="{{asset('img/'.$book->image)}} " alt="" class="w-9 h-9">
                                        </div>
                                    </td>
                                    <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                        <div class="font-medium text-slate-700"> {{$book->name}} </div>
                                    </td>
                                    <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                        <div
                                            class="inline-flex font-medium text-slate-700 rounded-full text-center px-2.5 py-0.5">
                                            {{$book->author}}</div>
                                    </td>
                                    <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                        <div class=" ">
                                            @for ($i = 0; $i < 5; $i++)
                                            @if ($i >= $book->rate)
                                                <span class="fa fa-star fa-sm "></span>
                                            @else
                                                <span class="fa fa-star fa-sm checked   "></span>
                                            @endif
                                        @endfor
                                        </div>
                                    </td>
                                    <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                        <div class="font-medium text-slate-700"> {{$book->category }} </div>
                                    </td>

                                    <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                                        <div class=" flex items-center ">
                                            <a class="text-slate-400 hover:text-slate-500 rounded-full">
                                                <span class="sr-only">Edit</span>
                                                <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                                    <path
                                                        d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z" />
                                                </svg>
                                            </a>
                                            <a class="text-slate-400 hover:text-slate-500 rounded-full">
                                                <span class="sr-only">Download</span>
                                                <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                                    <path
                                                        d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z" />
                                                </svg>
                                            </a>
                                            <a href="{{route('books.delete',$book->id)}}" id="" class="text-rose-500 hover:text-rose-600 rounded-full delete">
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
                                disabled>&lt;- Previous</a>
                        </li>
                        <li class="ml-3 first:ml-0">
                            <a class="btn bg-white border-slate-200 hover:border-slate-300 text-indigo-500"
                                href="#0">Next -&gt;</a>
                        </li>
                    </ul>
                </nav>
                <div class="text-sm text-slate-500 text-center sm:text-left">
                    Showing <span class="font-medium text-slate-600">1</span> to <span
                        class="font-medium text-slate-600">10</span> of <span
                        class="font-medium text-slate-600">467</span> results
                </div>
            </div>

        </div>

    </section>
@endsection
