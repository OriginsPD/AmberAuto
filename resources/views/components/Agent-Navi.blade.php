<header class="text-gray-600 body-font sticky top-0 bg-white overflow-hidden border-b">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a href="{{ route('Customer.index') }}" class="mr-5 hover:underline cursor-pointer transition duration-300 hover:text-gray-900">Customer List</a>
            <a href="{{ route('Sales.index') }}" class="mr-5 hover:underline cursor-pointer transition duration-300 hover:text-gray-900">Sales Information</a>
            <a class="mr-5 hover:underline cursor-pointer transition duration-300 hover:text-gray-900">Vehicles</a>
            <a class=" cursor-pointer transition duration-300 hover:underline hover:text-gray-900">Documents</a>
        </nav>
        <a href="{{ route('Agent.index') }}" class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-orange-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">AMBER AUTO AGENT</span>
        </a>
        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <form action="{{ route('logout') }}" method="POST" class="inline-block">
                @csrf
                <button class="w-auto px-8 py-2 text-base font-light text-black hover:underline">Logout</button>
            </form>
        </div>
    </div>
</header>
