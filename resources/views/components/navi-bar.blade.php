
<div class=" items-center border-b border-orange-500 bg-transparent ">
    <div class="text-blueGray-700 rounded-lg">
        <div class="flex flex-col justify-between flex-wrap p-5 mx-auto md:items-center md:flex-row">
            <a href="{{ route('index') }}" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none">
                <div class="inline-flex items-center">
                    <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-orange-600 to-blue-600">
                    </div>
                    <x-logo />
                </div>
            </a>
            <nav class="flex flex-wrap items-center justify-center text-base lg:mr-auto">
                <ul class="items-center inline-block list-none lg:inline-flex">
                    <li>
                        <a href="#" class="px-4 py-1 mr-1 hover:underline text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Pricing</a>
                    </li>
                    <li>
                        <a href="#" class="px-4 py-1 mr-1 hover:underline text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Contact</a>
                    </li>
                    <li>
                        <a href="#" class="px-4 py-1 mr-1 hover:underline text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Services</a>
                    </li>
                    <li>
                        <a href="#" class="px-4 py-1 mr-1 hover:underline text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Now</a>
                    </li>
                </ul>
            </nav>
            <div>
                @guest
                <a href="{{ route('register.create') }}" class="px-4 py-2 my-2 cursor-pointer text-base font-light text-black transition duration-500 ease-in-out transform rounded-md hover:underline ">Sign Up</a>
                <a href="{{ route('login.index') }}" class="px-4 py-2 my-2 cursor-pointer  text-base font-light text-black transition duration-500 ease-in-out transform rounded-md hover:underline ">Login</a>
                @else
                    <form action="{{ route('logout') }}" method="POST" class="inline-block">
                        @csrf
                        <button class="w-auto px-8 py-2 text-base font-light text-black hover:underline">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</div>



