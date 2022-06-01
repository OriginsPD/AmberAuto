<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | @yield('page_title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
</head>
<body>
<div class="flex-col w-full md:flex md:flex-row md:min-h-screen bg-blueGray-50">
    <div class="flex flex-col h-screen sticky top-0 flex-shrink-0 w-full bg-gradient-to-b from-cool-gray-700 to-black shadow-xl text-blueGray-700 md:w-64">
        <div class="flex flex-row items-center justify-between flex-shrink-0 py-4">
            <a href="{{ route('Admin.index')}}" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none">
                <div class="inline-flex items-center">
                    <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-orange-600 to-blue-600">
                    </div>
                    <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8"><span class="uppercase font-bold text-orange-600">Amber</span><span class="uppercase font-bold text-blue-600"> AUTO</span></h2>
                </div>
            </a>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                    <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav class="flex-grow pb-4 pr-4 md:block md:pb-0 md:overflow-y-auto">
            <ul>
                <li>
                    <a class="block px-4 py-2 mt-2 text-white transition duration-500 ease-in-out transform border-l-4 border-blue-600 text-blueGray-500 hover:scale-105 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 "
                       href="{{ route('Admin.index')}}">Dashboard</a>
                </li>
                <li>
                    <a class="block px-4 py-2 mt-2 text-white transition duration-500 ease-in-out transform border-l-4 border-white text-blueGray-500 hover:bg-white hover:border-blue-600 hover:scale-105 hover:text-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 "
                       href="{{ route('Client.index') }}">Client List</a>
                </li>
                <li>
                    <a class="block px-4 py-2 mt-2 text-white transition duration-500 ease-in-out transform border-l-4 border-white text-blueGray-500 hover:bg-white hover:border-blue-600 hover:scale-105 hover:text-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 "
                       href="{{ route('Brands.index') }}">Brands</a>
                </li>
                <li>
                    <a class="block px-4 py-2 mt-2 text-white transition duration-500 ease-in-out transform border-l-4 border-white text-blueGray-500 hover:bg-white hover:border-blue-600 hover:scale-105 hover:text-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 "
                       href="{{ route('Type.index') }}">Vehicle Type</a>
                </li>
                <li>
                    <a class="block px-4 py-2 mt-2 text-white transition duration-500 ease-in-out transform border-l-4 border-white text-blueGray-500 hover:bg-white hover:border-blue-600 hover:scale-105 hover:text-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 "
                       href="{{ route('Models.index') }}">Vehicle Models</a>
                </li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li>
                        <button class="absolute bottom-10 block px-4 py-2 mt-2 text-white transition duration-500 ease-in-out transform border-l-4 border-white text-blueGray-500 hover:scale-105 hover:border-blue-600 ">Logout</button>
                    </li>
                </form>
            </ul>
        </nav>
    </div>
    <div class=" bg-gray-200 w-full justify-center items-center">
        @yield('content')
    </div>
</div>

</body>
</html>
