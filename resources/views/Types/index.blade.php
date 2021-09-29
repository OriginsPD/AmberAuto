@extends('layouts.admin')

@section('page_title','Vehicle Types')

@section('content')
    <div class="text-gray-900 h-full bg-gray-200">
        <div class="p-4 flex">
            <h1 class="text-3xl">
                Vehicle Type
            </h1>
        </div>
        @if(session()->has('success'))
            <x-alert message="{{ session('success') }}"/>
        @endif
        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                <tr class="border-b border-2 border-white rounded hover:bg-gray-400 bg-gray-500">
                    <td colspan="2" class="p-3 text-white font-medium text-xl px-5">Create New Vehicle Type</td>

                    <td class="p-3 px-5 flex justify-end"><a href="{{ route('Type.create') }}" class="mr-3 font-bold text-sm bg-green-500 hover:bg-green-700 text-white shadow-2xl py-1 px-4 rounded focus:outline-none focus:shadow-outline">ADD</a></td>
                </tr>
                <tr class="border-b border-gray-500">
                    <th class="text-left p-3 px-5">Vehicle Name</th>
                    <th></th>
                </tr>
                @forelse($types as $type)
                <tr class="border-b hover:bg-gray-400 bg-gray-100">
                    <td class="p-3 px-5">{{ $type['vehicle_types_nm'] }}</td>
                    <td class="p-3 px-5"></td>

                    <td class="p-3 px-5 flex justify-end">
                        <a href="{{ route('Type.edit',$type['id']) }}" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded focus:outline-none focus:shadow-outline">Edit</a>
                        <form action="{{ route('Type.destroy',$type['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are You Sure Want to Delete {{ $type['vehicle_types_nm'] }}')" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
                        </form>
                        </tr>
                @empty
                    <tr class="border-b hover:bg-gray-400 bg-gray-100">
                        <td colspan="3" class="p-3 text-center text-xl text-cool-gray-500 px-5">No Vehicle Types Have Been Added </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
