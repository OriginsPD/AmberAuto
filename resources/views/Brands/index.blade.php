@extends('layouts.admin')

@section('page_title','Brands')

@section('content')
    <div class="text-gray-900 h-full bg-gray-200">
        <div class="p-4 flex">
            <h1 class="text-3xl">
                Brands
            </h1>
        </div>
        @if(session()->has('success'))
            <x-alert message="{{ session('success') }}"/>
        @endif
        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                <tr class="border-b border-2 border-white rounded hover:bg-gray-400 bg-gray-500">
                    <td colspan="2" class="p-3 text-white font-medium text-xl px-5">Create New Brand</td>

                    <td class="p-3 px-5 flex justify-end"><a href="{{ route('Brands.create') }}" type="button" class="mr-3 font-bold text-sm bg-green-500 hover:bg-green-700 text-white shadow-2xl py-1 px-4 rounded focus:outline-none focus:shadow-outline">ADD</a></td>
                </tr>
                <tr class="border-b border-gray-500">
                    <th class="text-left p-3 px-5">Brands Name</th>
                    <th class="text-left p-3 px-5">Description</th>

                    <th></th>
                </tr>
                @forelse($brands as $brand)
                <tr class="border-b hover:bg-gray-400 bg-gray-100">
                    <td class="p-3 px-5">{{ $brand['brand_nm'] }}</td>
                    <td class="p-3 px-5 word-wrap: break-word">{{ $brand['brand_desc'] }}</td>

                    <td class="p-3 px-5 flex justify-end">
                        <a href="{{ route('Brands.edit',$brand['id']) }}" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded focus:outline-none focus:shadow-outline">Edit</a>
                        <form action="{{ route('Brands.destroy',$brand['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" onclick="return confirm('Are You Sure Want to Delete {{ $brand['brand_nm'] }}')" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
                        </form>
                    </td>

                </tr>
                @empty
                    <tr  class="border-b border-2 border-white rounded hover:bg-gray-400 bg-base">
                        <td colspan="3" class="p-3  text-center font-medium text-xl px-5">No Brands Have Been Added</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
