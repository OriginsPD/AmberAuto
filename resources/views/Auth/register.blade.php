@extends('layouts.app')

@section('page_title','Register')

@section('content')

<section class="flex flex-col items-center h-screen md:flex-row">
    <div class="container mx-auto">
        <div class="flex justify-center px-2 py-6 ">
            <div class="flex w-full rounded-lg xl:w-3/4 lg:w-11/12 lg:shadow-xl ">
                <div class="relative hidden w-full h-auto bg-white bg-cover border-r rounded-l-lg lg:block lg:w-6/12">
                    <div class="relative z-10 m-12 text-left ">
                        <a class="flex items-center w-32 mb-4 font-medium text-blueGray-900 title-font md:mb-10">
                            <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-blue-300 to-blue-600">
                            </div>

                        </a>
                        <h2 class="mt-12 mb-2 text-2xl font-semibold tracking-tighter text-black sm:text-3xl title-font"> Create an account. </h2>
                        <div class="w-full mt-16 mb-8 text-base leading-relaxed text-blueGray-900 sm:md:w-3/3 lg:text-1xl "> All you have to do is choose the section you need, remove the one that you do not need for that project and paste the one you need in that moment. All the section have been given the same left/right padding. Because consistence is king. </div>
                    </div>
                </div>
                <div class="w-full px-8 py-24 bg-white rounded-lg border-blueGray-100 lg:w-8/12 lg:px-24 lg:py-4 lg:rounded-l-none s">
                    <form class="mt-4" method="POST" action="{{ route('register.store') }}">
                        @csrf
                    <div class="relative z-10 text-left ">
                        <div class="flex justify-enter lg:py-6">
                            <button type="button" class="inline-flex w-full px-4 py-3 font-semibold text-black transition duration-500 ease-in-out transform bg-white border rounded-lg border-blueGray-300 hover:bg-black hover:text-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
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
                        <form class="mt-6" action="#" method="POST">
                            <div>
                                <x-label for="name"> Full Name </x-label>
                                <x-input type="text" name="name" id="email" placeholder="Full Name" />
                                <div class="text-red-700  text-sm ">
                                    @error('name')
                                    * {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-4">
                                <x-label for="email"> Email Address </x-label>
                                <x-input type="email" name="email" id="email" placeholder="Sample@email.com"/>
                                <div class="text-red-700  text-sm ">
                                    @error('email')
                                    * {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="flex flex-wrap mt-4 mb-6 -mx-3">
                                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                                    <x-label for="password" >Password</x-label>
                                    <x-input type="password" name="password" id="password" />
                                    <div class="text-red-700  text-sm ">
                                        @error('password')
                                        * {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full px-3 md:w-1/2">
                                    <x-label for="password_confirmation">Confirm Password</x-label>
                                    <x-input type="password" name="password_confirmation" id="password_confirmation" />
                                    <div class="text-red-700  text-sm ">
                                        @error('password_confirmation')
                                        * {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <x-button type="submit"> Register </x-button>
                        </form>
                        <p class="mt-8 text-center">Already have an account? <a href="{{ route('login.index') }}" class="font-semibold text-black hover:text-black">Sign In</a></p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
