@extends('crosswind::layout.crosswind')

@section('content')
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
@endsection