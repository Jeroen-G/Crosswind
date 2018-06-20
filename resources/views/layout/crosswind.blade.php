<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crosswind</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="{{ asset('vendor/crosswind/fa-solid.min.js') }}"></script>
    <script defer src="{{ asset('vendor/crosswind/fontawesome.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url("{{ asset('vendor/crosswind/background.jpg') }}");
        }
        #main {
            background-color: rgba(255, 255, 255, 0.50);
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
        }
        .bg-white-to-blue {
            background: #3490DC;
            background: linear-gradient(to bottom right, #BCDEFA, #3490DC);
        }
    </style>
</head>
<body class="py-8 font-sans bg-cover">
    <div class="container mx-auto my-8">

        @include('crosswind::layout.header')

        <div id="main" class="p-8 rounded-b-lg">

            @yield('content')

        </div>
    </div>
</body>
</html>