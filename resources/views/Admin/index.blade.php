@extends('layouts.admin')

@section('page_title','DashBoard')

@section('content')
    <!---===================== FIRST ROW CONTAINING THE  STATS CARD STARTS HERE =============================-->
    <div class="flex justify-center bg-gray-100 py-10 p-14">
        <!---== First Stats Container ====--->
        <div class="container mx-auto pr-4">
            <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
                <div class="h-20 bg-red-400 flex items-center justify-between">
                    <p class="mr-0 text-white text-lg pl-5">BRANDS</p>
                </div>
                <div class="flex justify-between px-5 pt-6 mb-2 text-sm text-gray-600">
                    <p>TOTAL</p>
                </div>
                <p class="py-4 text-3xl ml-5">{{ App\Models\brands::count() }}</p>
                <!-- <hr > -->
            </div>
        </div>

        <div class="container mx-auto pr-4">
            <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
                <div class="h-20 bg-purple-400 flex items-center justify-between">
                    <p class="mr-0 text-white text-lg pl-5">MODELS</p>
                </div>
                <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
                    <p>TOTAL</p>
                </div>
                <p class="py-4 text-3xl ml-5">{{ App\Models\vehicle_model::count() }}</p>
                <!-- <hr > -->
            </div>
        </div>
        <!---== Third Stats Container ====--->

        <!---== Fourth Stats Container ====--->
        <div class="container mx-auto">
            <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
                <div class="h-20 bg-purple-900 flex items-center justify-between">
                    <p class="mr-0 text-white text-lg pl-5">VEHICLE TYPE</p>
                </div>
                <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
                    <p>TOTAL</p>
                </div>
                <p class="py-4 text-3xl ml-5">{{ App\Models\vehicle_types::count() }}</p>
                <!-- <hr > -->
            </div>
        </div>
        <!---== Fourth Stats Container ====--->
    </div>
    <!---===================== FIRST ROW CONTAINING THE  STATS CARD ENDS HERE =============================-->

    <!------===================== SECOND ROW CONTAINING THE TABLE STATS STARTS HERE =============================-->
    <div class="flex justify-center bg-gray-100 py-10 p-5">
        <!--==== frist div begins here ====--->
        <div class="container mr-5 ml-2 mx-auto bg-white shadow-xl">
            <div class="w-11/12 mx-auto">
                <div class="bg-white my-6">
                    <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                        <thead>
                        <tr>
                            <th class="py-4 px-6 bg-purple-400 font-bold uppercase text-sm text-white border-b border-grey-light">Client</th>
                            <th class="py-4 px-6 text-center bg-purple-400 font-bold uppercase text-sm text-white border-b border-grey-light">Brands Bougnt</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">Bible</td>
                            <td class="py-4 px-6 text-center border-b border-grey-light">
                                11980
                            </td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">Blah</td>
                            <td class="py-4 px-6 text-center border-b border-grey-light">
                                340
                            </td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">Blah</td>
                            <td class="py-4 px-6 text-center border-b border-grey-light">
                                901
                            </td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">Blah</td>
                            <td class="py-4 px-6 text-center border-b border-grey-light">
                                11950
                            </td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">Blah</td>
                            <td class="py-4 px-6 text-center border-b border-grey-light">
                                459
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--==== frist div ends here ====--->

        <!--==== Second div begins here ====--->
        <div class="container mr-5 mx-auto bg-white shadow-xl">
            <div class="w-11/12 mx-auto">
                <div class="bg-white my-6">
                    <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                        <thead>
                        <tr>
                            <th class="py-4 px-6 bg-purple-400 font-bold uppercase text-sm text-white border-b border-grey-light">MSISDN</th>
                            <th class="py-4 px-6 text-center bg-purple-400 font-bold uppercase text-sm text-white border-b border-grey-light">ENTRIES</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">26809304030</td>
                            <td class="py-4 px-6 text-center border-b border-grey-light">
                                495,455
                            </td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">26809304030</td>
                            <td class="py-4 px-6 text-center border-b border-grey-light">
                                495,455
                            </td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">26809304030</td>
                            <td class="py-4 px-6 text-center border-b border-grey-light">
                                495,455
                            </td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">26809304030</td>
                            <td class="py-4 px-6 text-center border-b border-grey-light">
                                32,333
                            </td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">26809304030</td>
                            <td class="py-4 px-6 text-center border-b border-grey-light">
                                31,199
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--==== Second div ends here ====--->

        <!--==== Third div begins here ====--->
        <div class="container mx-auto bg-white shadow-xl">
            <div class="w-11/12 mx-auto">
                <div class="bg-white my-6">
                    <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                        <thead>
                        <tr>
                            <th class="py-4 px-6 bg-purple-400 font-bold uppercase text-sm text-white border-b border-grey-light">MSISDN</th>
                            <th class="py-4 px-6 text-center bg-purple-400 font-bold uppercase text-sm text-white border-b border-grey-light">POINTS</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">28679609009</td>
                            <td class="py-4 text-center px-6 border-b border-grey-light">
                                11,290
                            </td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">28679609009</td>
                            <td class="py-4 text-center px-6 border-b border-grey-light">
                                9,230
                            </td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">28679609009</td>
                            <td class="py-4 px-6 text-center border-b border-grey-light">
                                234
                            </td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">28679609009</td>
                            <td class="py-4 px-6 text-center border-b border-grey-light">
                                56,230
                            </td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">28679609009</td>
                            <td class="py-4 px-6 text-center border-b border-grey-light">
                                323
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--==== Third div ends here ====--->
    </div>
    <!---------===================== SECOND ROW CONTAINING THE TABLE STATS ENDS HERE =============================-->
@endsection
