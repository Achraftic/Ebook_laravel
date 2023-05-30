<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('asset/style.css') }} ">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href=" {{ asset('design/css/vendors/flatpickr.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('design/style.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">
</head>

<body>

    <div class="flex flex-no-wrap">
        <!-- Sidebar starts -->
        <!-- Remove class [ hidden ] and replace [ sm:flex ] with [ flex ] -->

        @include('admin.layout.sidebar')


        <div class="container  overflow-x-auto    mx-auto py-5 md:w-4/5 w-11/12 px-4">

            <nav class=" mb-10 flex justify-end p-2 space-x-2 items-center">

                <div class="flex items-center space-x-3 text-slate-700 hover:text-slate-950 cursor-pointer">
                    <div class=" items-center space-x-1  md:flex hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5  h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                        <h4 class="">Logout</h4>
                    </div>


                    <div class="text-center text-slate-400 cursor-pointer">
                        <img src=" {{ asset('imgUser/' . Auth::user()->image) }}" alt=""
                            class="w-9 h-9 rounded-full">

                    </div>

                </div>
            </nav>
            <!-- Remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
            @yield('content')
        </div>
    </div>


    </div>

</body>
<script>
    var sideBar = document.getElementById("mobile-nav");
    var openSidebar = document.getElementById("openSideBar");
    var closeSidebar = document.getElementById("closeSideBar");
    sideBar.style.transform = "translateX(-260px)";

    function sidebarHandler(flag) {
        if (flag) {
            sideBar.style.transform = "translateX(0px)";
            openSidebar.classList.add("hidden");
            closeSidebar.classList.remove("hidden");
        } else {
            sideBar.style.transform = "translateX(-260px)";
            closeSidebar.classList.add("hidden");
            openSidebar.classList.remove("hidden");
        }
    }
</script>


<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>

    <script src="{{ asset('design/js/vendors/alpinejs.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('design/js/vendors/chart.js') }}"></script>
    <script src="{{ asset('design/js/vendors/moment.js') }}"></script>
    <script src="{{ asset('design/js/vendors/chartjs-adapter-moment.js') }}"></script>
    <script src="{{ asset('design/js/dashboard-charts.js') }}"></script>
    <script src="{{ asset('design/js/vendors/flatpickr.js') }}"></script>
    <script src="{{ asset('design/js/flatpickr-init.js') }}"></script>
    <script src="{{ asset('design/js/test.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="module" defer>
        $(document).ready(function(){





      $(".delete").on("click", function(e){
e.preventDefault();
        let link=$(this).attr("href");

        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
      window.location=link;
    Swal.fire(
      'Deleted!',
      'User has been deleted.',
      'success'
    )
  }
})
      })
        });






    </script>

</html>
