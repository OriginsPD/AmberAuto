<form {{ $attributes }} method="POST">
    @csrf
<div class="w-9/12 h-10 pl-3 pr-2 bg-white border border-orange-500 rounded-full flex justify-between items-center relative">
        <input type="search" name="search" id="search" placeholder="Search"
               class="appearance-none w-full placeholder-orange-500 outline-none focus:outline-none active:outline-none"/>
        <button type="submit" class="ml-1 outline-none focus:outline-none active:outline-none">
            <svg fill="none" stroke="DarkOrange" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 viewBox="0 0 24 24" class="w-6 h-6">
                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </button>
</div>
</form>
