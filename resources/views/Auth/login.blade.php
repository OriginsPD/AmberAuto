@extends('layouts.app')

@section('page_title','Login')

@section('content')
<section class="flex flex-col items-center h-screen md:flex-row ">
    <div class="hidden w-full h-screen bg-white lg:block md:w-1/3 lg:w-2/3">
        <img src="https://www.autoguide.com/blog/wp-content/uploads/2015/02/new-car-dealership.jpg" alt="" class="object-cover w-full h-full">
    </div>
    <div class="flex items-center justify-center w-full h-screen px-6 bg-white md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 lg:px-16 xl:px-12">
        <div class="w-full h-100">
            <h1 class="mt-8 text-2xl font-semibold text-black tracking-tighter sm:text-3xl title-font">Log in to your account</h1>
            <form class="mt-4" method="POST" action="{{ route('login.store') }}">
                @csrf
                <div>
                    <x-label for="email">Email Address</x-label>
                    <x-input type="email" name="email" id="email" placeholder="Sample@email.com" />
                    <div class="text-red-700  text-sm ">
                        @error('email')
                        * {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <x-label>Password</x-label>
                    <x-input type="password" id="password" name="password" />
                    <div class="text-red-700  text-sm ">
                        @error('password')
                        * {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mt-2 text-right">
                    <a href="#" class="text-sm font-semibold leading-relaxed text-blueGray-700 hover:text-black focus:text-blue-700">Forgot Password?</a>
                </div>
                <x-button>Log In</x-button>
            </form>
            <hr class="w-full my-6 border-blueGray-300">
            <div class="flex justify-enter">
                <button type="button" class="inline-flex w-full px-4 py-3 font-semibold text-black transition duration-500 ease-in-out transform bg-white border rounded-lg border-blueGray-300 hover:bg-black hover:text-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ">
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48">
                            <defs>
                                <path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"></path>
                            </defs>
                            <clipPath id="b">
                                <use xlink:href="#a" overflow="visible"></use>
                            </clipPath>
                            <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"></path>
                            <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"></path>
                            <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"></path>
                            <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"></path>
                        </svg>
                        <span class="ml-4"> Log in with Google </span>
                    </div>
                </button>
            </div>
            <p class="mt-8 text-center">Need an account? <a href="{{ route('register.create') }}" class="font-semibold text-blue-500 hover:text-blue-700">Sign Up</a></p>
        </div>
    </div>
</section>

@endsection
