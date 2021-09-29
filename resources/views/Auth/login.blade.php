@extends('layouts.app')

@section('page_title','Login')

@section('content')
    <main>
        <div class="flex items-center justify-center mt-16 mx-6">
            <div class="p-6 max-w-sm w-full bg-gray-800 shadow rounded-md">
                <h3 class="text-white text-xl text-center">Login</h3>

                <form class="mt-4" method="POST" action="{{ route('login.store') }}">
                    @csrf
                    <label class="block mt-4">
                        <span class="text-white text-sm">E-Mail Address</span>
                        <input type="email" id="email" name="email" class="form-input border mt-1 block w-full @error('email') border-red-700 @enderror rounded-md bg-gray-200 border-gray-700 text-white" placeholder="Email" autocomplete="email">
                        <div class="text-red-700  text-sm ">
                            @error('email')
                            * {{ $message }}
                            @enderror
                        </div>
                    </label>

                    <label class="block mt-4">
                        <span class="text-white text-sm">Password</span>
                        <input id="password" type="password" class="form-input border mt-1 block w-full @error('password') border-red-700 @enderror rounded-md bg-gray-200 border-gray-700 text-white" name="password" placeholder="Password"  autocomplete="current-password">
                        <div class="text-red-700  text-sm ">
                            @error('password')
                            * {{ $message }}
                            @enderror
                        </div>
                    </label>

                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox text-blue-500 bg-gray-800 border border-white" name="remember" id="remember" >
                                <span class="mx-2 text-gray-200 text-sm">Remember Me</span>
                            </label>
                        </div>

                        <div>
                            <a class="block text-sm text-blue-500 hover:underline" href="http://localhost:8000/password/reset">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="w-full py-2 px-4 text-center bg-blue-600 rounded-md text-white text-sm hover:bg-blue-500 focus:outline-none">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
