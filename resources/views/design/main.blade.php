<!DOCTYPE html >
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.0/nouislider.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.0/nouislider.min.js" defer></script>

  <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .swiper {
            width: 80%;
            min-height: 300px;

        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;

        }
    </style>
</head>

<body class=" font-sans antialiased">
  @include('design.header')
<div>
@yield('content')

</div>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('asset/js.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.menu').on('click', function() {
                $('.menu__line').toggleClass('menu__line--animate');
            });

            $('.hum').on('click', function() {
                $('.navphone').toggleClass('show');


            })
            $('.back').on('click', function() {
                $('.navphone').toggleClass('show');



            })


        });



    </script>

@include('design.footer')
</body>

</html>
