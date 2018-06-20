<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Center</title>
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
        <nav class="flex flex-wrap items-center justify-between p-4 shadow rounded-t-lg bg-white">
            <form class="sm:w-full md:w-1/4">
                <div class="flex items-center py-2">
                    <i class="fas fa-search text-grey"></i>
                    <input class="appearance-none bg-transparent border-none w-full text-sm text-grey-darker px-2 leading-tight" type="text"
                        placeholder="Type to search">
                </div>
            </form>
            <div class="flex sm:w-full md:w-1/2 items-center justify-center">
                <a href="#" title="Home" class="mx-2 p-6 shadow rounded-lg"><i class="fas fa-th text-blue"></i></a>
                <a href="#" title="Users" class="mx-2 p-2"><i class="fas fa-users text-grey"></i></a>
                <a href="#" title="Posts" class="mx-2 p-2"><i class="fas fa-file text-grey"></i></a>
                <a href="#" title="Settings" class="mx-2 p-2"><i class="fas fa-cog text-grey"></i></a>
            </div>
            <div class="flex sm:w-full md:w-1/4 items-center justify-end">
                <span class="mr-4 text-sm font-semibold">Jeroen</span>
                <i class="fas fa-user-circle text-5xl text-blue mr-4"></i>
                <a href="#"><i class="fas fa-angle-down text-grey"></i></a>
                <!-- https://jsfiddle.net/rjyyef9m/21/ -->
            </div>
        </nav>

        <div id="main" class="p-8 rounded-b-lg">
            <h2 class="pb-8 font-light text-3xl tracking-wide">Overview</h2>

            <div class="flex items-stretch flex-wrap">
                <section class="sm:w-full md:w-1/4 mr-6 mb-6 rounded-lg overflow-hidden shadow bg-white p-6">
                    <h3 class="font-semibold text-xl mb-4">Planning</h3>
                    <table class="text-sm font-semibold">
                        <tr>
                            <td class="text-blue pr-4 pb-4">9:20</td>
                            <td class="pb-4">Meeting</td>
                        </tr>
                        <tr>
                            <td class="text-blue pr-4 pb-4">15:15</td>
                            <td class="pb-4">Coffee</td>
                        </tr>
                        <tr>
                            <td class="text-blue pr-4 pb-4">17:00</td>
                            <td class="pb-4">Conference call</td>
                        </tr>
                    </table>
                </section>

                <section class="sm:w-full md:w-1/4 mr-6 mb-6 rounded-lg overflow-hidden shadow bg-white p-6">
                    <h3 class="font-semibold text-xl mb-4">Progress</h3>
                    <div class="w-full">
                        <div class="shadow w-full bg-grey-lighter">
                            <div class="bg-blue text-xs leading-none py-1 text-center text-white" style="width: 45%">45%</div>
                        </div>
                    <div>
                </section>

                <section class="sm:w-full md:w-1/4 mr-6 mb-6 rounded-lg overflow-hidden shadow bg-white p-6">
                    <h3 class="font-semibold text-xl mb-4">Calendar</h3>
                    <div class="flex justify-center">
                        <div class="block rounded-t overflow-hidden bg-white text-center w-24">
                            <div class="bg-blue text-white py-1">
                                August
                            </div>
                            <div class="pt-1 pb-4 px-2 border-l border-r border-b rounded-b">
                                <span class="text-4xl font-bold">1</span>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="sm:w-full md:w-1/4 mr-6 mb-6 rounded-lg overflow-hidden shadow bg-white p-6">
                    <h3 class="font-semibold text-xl mb-4">Switches</h3>
                    <div class="flex justify-around">
                        <span class="border rounded-full border-grey flex items-center cursor-pointer w-12 bg-blue justify-end">
                            <span class="rounded-full border w-6 h-6 border-grey shadow-inner bg-white shadow">
                            </span>
                        </span>
                        <span class="border rounded-full border-grey flex items-center cursor-pointer w-12 justify-start">
                            <span class="rounded-full border w-6 h-6 border-grey shadow-inner bg-white shadow">
                            </span>
                        </span>
                    </div>
                </section>

                <section class="sm:w-full md:w-1/3 mr-6 mb-6 rounded-lg overflow-hidden shadow bg-white-to-blue p-6">
                    <h3 class="font-semibold text-xl mb-4 text-white">Check out more</h3>
                    <a href="https://github.com/Jeroen-G/Crosswind" target="_blank" class="no-underline text-sm float-right font-semibold text-white rounded-full bg-blue-dark p-2">Go to GitHub &rarr; </a>
                </section>

            </div>
        </div>
    </div>

</body>
</html>