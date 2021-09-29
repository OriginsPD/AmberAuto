@extends('layouts.app')

@section('page_title','Register')

@section('content')
    <main>
        <div class="flex items-center justify-center mt-16 mx-6">
            <div class="p-6 max-w-sm w-full bg-gray-800 shadow-xl rounded-md">
                <h3 class="text-white text-xl text-center">Registration</h3>

                <form class="mt-4" method="POST" action="{{ route('register.store') }}">
                    @csrf
                    <label class="block">
                        <span class="text-white text-sm">Name </span>
                        <input type="text" id="name" name="name" class="form-input border mt-1 block w-full @error('name') border-red-700 @enderror rounded-md border bg-gray-200 border-gray-700 text-white"  placeholder="Full name" autocomplete="name" autofocus>
                        <div class="text-red-700  text-sm ">
                            @error('name')
                            * {{ $message }}
                            @enderror
                        </div>
                    </label>

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

                    <label class="block mt-4">
                        <span class="text-white text-sm">Password Confirm</span>
                        <input id="password_confirmation" type="password" class="form-input border mt-1 block w-full @error('password_confirmation') border-red-700 @enderror rounded-md bg-gray-200 border-gray-700 text-white" placeholder="Password Confirmation" name="password_confirmation">
                        <div class="text-red-700  text-sm ">
                            @error('password_confirmation')
                            * {{ $message }}
                            @enderror
                        </div>
                    </label>

                    <div class="mt-6">
                        <button type="submit" class="w-full py-2 px-4 text-center bg-blue-600 rounded-md text-white text-sm hover:bg-blue-500 focus:outline-none">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
