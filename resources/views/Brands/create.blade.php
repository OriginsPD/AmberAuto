@extends('layouts.admin')

@section('page_title','New Brand')

@section('content')
    @if(session()->has('success'))
        <x-alert message="{{ session('success') }}"/>
    @endif
    <div class="mx-4 card bg-white shadow-2xl max-w-md p-10 md:rounded-lg my-10 mx-auto">

        <form action="{{ route('Brands.store') }}" method="POST">
            @csrf
            <div class="title">
                <h1 class="font-bold text-center">Create New Brand</h1>
            </div>

            <div class="form mt-4">
                <div class="flex flex-col text-sm">
                    <label for="title" class="font-bold mb-2">Brand Name</label>
                    <input name="brand_nm"
                           class=" @error('brand_nm') border-red-700 @enderror appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500"
                           type="text" placeholder="Enter a title">
                    <div class="text-sm text-red-700 my-1">
                        @error('brand_nm')
                        * {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="text-sm flex flex-col">
                    <label for="description" class="font-bold mt-4 mb-2">Description</label>
                    <textarea name="brand_desc"
                              class=" @error('brand_desc') border-red-700 @enderror resize-none appearance-none w-full border border-gray-200 p-2 h-40 focus:outline-none focus:border-gray-500"
                              placeholder="Enter your description"></textarea>
                    <div class="text-sm text-red-700 my-1">
                        @error('brand_desc')
                        * {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="submit flex">
                <button type="submit"
                        class=" w-full bg-blue-600 shadow-lg text-white px-4 py-2 hover:bg-blue-700 mt-8 text-center font-semibold focus:outline-none ">
                    Submit
                </button>
                <a href="{{ route('Brands.index') }}" class=" w-full bg-red-600 ml-1 shadow-lg text-white px-4 py-2 hover:bg-red-700 mt-8 text-center font-semibold focus:outline-none ">Cancel</a>
            </div>
        </form>
    </div>

@endsection
