@extends('layouts.admin')

@section('page_title','Create Vehicle Type')

@section('content')
    <div class="p-4 flex">
        <h1 class="text-3xl font-bold mb-10">
            Add Vehicle Type
        </h1>
    </div>
    @if(session()->has('success'))
        <x-alert message="{{ session('success') }}"/>
    @endif
    <div class="mx-4 card bg-white shadow-2xl max-w-md p-10 md:rounded-lg my-10 mx-auto">

        <form action="{{ route('Type.store') }}" method="POST">
            @csrf
            <div class="title">
                <h1 class="font-bold text-center">Create Vehicle Type </h1>
            </div>

            <div class="form mt-4">
                <div class="flex flex-col text-sm">
                    <label for="title" class="font-bold mb-2">Type Name</label>
                    <input name="vehicle_types_nm" class=" @error('vehicle_types_nm') border-red-700 @enderror appearance-none border border-gray-200 p-2 focus:outline-none focus:border-gray-500" type="text" placeholder="Enter a title">
                    <div class="text-sm text-red-700 my-1">
                        @error('vehicle_types_nm')
                        * {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="submit flex">
                <button type="submit" class=" w-full bg-blue-600 shadow-lg m-1 text-white px-4 py-2 hover:bg-blue-700 mt-8 text-center font-semibold focus:outline-none ">Submit</button>
                <a href="{{ route('Type.index') }}" class=" w-full bg-red-600 shadow-lg m-1 text-white px-4 py-2 hover:bg-red-700 mt-8 text-center font-semibold focus:outline-none ">Cancel</a>
            </div>
        </form>
    </div>

@endsection

