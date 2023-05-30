

    @extends('design.main')
    @section('content')
    <div class="w-[80%] max-w-[900px] m-auto mt-10 space-y-3">

        <form method="GET" id="search-form">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input id="search" type="search" name="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." >
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
</form>


<div class="relative overflow-x-auto mt-10    ">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id User
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Date Use
                </th>
            </tr>
        </thead>
        <tbody class="space" id="search-results">
        @foreach ($users as $item)

        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item->id}}
                </th>
                <td class="px-6 py-4">
                    {{$item->name}}
                </td>
                <td class="px-6 py-4">
                    {{$item->email}}
                </td>
                <td class="px-6 py-4">
                   {{$item->created_at}}
                </td>
            </tr>

            @endforeach




        </tbody>
    </table>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
crossorigin="anonymous"></script>
<script>
    $('#search').on('input', function(e) {
        event.preventDefault();
        var query='';
         query = $('#search').val();

         var successCalled = false;

         $.ajax({
             url: '{{ route("filter") }}',
             method: 'GET',
             data: { search: query },
             success: function(response) {
                 if (!successCalled) {
                     successCalled = true;

                     var users = response.users;
                     var html = '';
                     for (var i = 0; i < users.length; i++) {
                         html += `
                             <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                 <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                     ${users[i].id}
                                 </th>
                                 <td class="px-6 py-4">
                                     ${users[i].name}
                                 </td>
                                 <td class="px-6 py-4">
                                     ${users[i].email}
                                 </td>
                                 <td class="px-6 py-4">
                                     ${users[i].created_at}
                                 </td>
                             </tr>
                         `;

                     }

                          var newUrl = '{{ url()->current() }}?search=' + query;
                         window.history.pushState({}, '', newUrl);
                     


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

