{{--<nav class="bg-white shadow-xl font-nunito">--}}
{{--    <div class="container flex justify-between items-center mx-auto px-6 py-4">--}}
{{--        <div>--}}
{{--            <a href="{{ route('index') }}" class="text-2xl uppercase text-white"><span--}}
{{--                    class="text-orange-600 font-bold">Amber</span> <span class="font-bold text-blue-700">Cars</span></a>--}}
{{--        </div>--}}

{{--        @guest--}}
{{--            <div>--}}
{{--                <a href="{{ route('login.index') }}"--}}
{{--                   class="text-cool-gray-900 px-4 py-1 font-light rounded--}}
{{--                        hover:bg-white hover:text-black hover:underline duration-300">Login</a>--}}
{{--                <a href="{{ route('register.create') }}"--}}
{{--                   class="text-cool-gray-900 px-4 py-1 font-light rounded--}}
{{--                        hover:bg-white hover:text-black hover:underline duration-300">Register</a>--}}
{{--            </div>--}}
{{--        @else--}}
{{--            <div>--}}
{{--                <a href="#"--}}
{{--                   class="text-gray-200 px-4 py-1 font-medium hover:underline">{{ Auth::user()->name }}</a>--}}
{{--                <form action="{{ route('logout') }}" method="POST" class="inline-block">--}}
{{--                    @csrf--}}
{{--                    <button class=" px-4 py-1 font-light rounded--}}
{{--                        bg-white text-black hover:underline duration-300">Logout</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        @endguest--}}
{{--    </div>--}}
{{--</nav>--}}


<div class=" items-center bg-white ">
    <div class="text-blueGray-700 rounded-lg">
        <div class="flex flex-col justify-between flex-wrap p-5 mx-auto md:items-center md:flex-row">
            <a href="{{ route('index') }}" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none">
                <div class="inline-flex items-center">
                    <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-orange-600 to-blue-600">
                    </div>
                    <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8"><span class="uppercase font-bold text-orange-600">Amber</span><span class="uppercase font-bold text-blue-600"> AUTO</span></h2>
                </div>
            </a>
            <div>
                @guest
                <a href="{{ route('register.create') }}" class="px-4 py-2 my-2 cursor-pointer text-base font-medium text-black transition duration-500 ease-in-out transform  border-blue-600 rounded-md hover:underline ">Sign Up</a>
                <a href="{{ route('login.index') }}" class="px-4 py-2 my-2 cursor-pointer bg-blue-600 text-base font-medium text-white transition duration-500 ease-in-out transform  border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:underline ">Login</a>
                @else
                    <form action="{{ route('logout') }}" method="POST" class="inline-block">
                        @csrf
                        <button class="w-auto px-8 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-700 ">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</div>



