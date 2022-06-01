<button {{ $attributes }} {{ $attributes->merge(['class'=> 'block w-full px-4 py-3 mt-6 font-semibold text-white transition duration-500 ease-in-out transform rounded-lg bg-black duration-150 hover:from-black to-black focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 hover:to-black']) }}>
    {{ $slot }}
</button>
