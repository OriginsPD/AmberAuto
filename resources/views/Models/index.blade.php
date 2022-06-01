@extends('layouts.admin')

@section('page_title','Vehicle Models')

@section('content')

    <x-header>Vehicle Models</x-header>
         @if(session()->has('success'))
                <x-alert message="{{ session('success') }}"/>
            @endif
        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                <tr class="border-b border-2 border-white rounded hover:bg-gray-400 bg-gray-500">
                    <td colspan="9" class="p-3 text-white font-medium text-xl px-5">Create New Vehicle Type</td>

                    <td class="p-3 px-5 flex justify-end">
                    <a href="{{ route('Models.create') }}" class="mr-3 font-bold text-sm bg-green-500 hover:bg-green-700 text-white shadow-2xl py-1 px-4 rounded focus:outline-none focus:shadow-outline">
                    ADD</a>
                    </td>
                </tr>
                <tr class="border-b border-gray-500">
                    <th class="text-left p-3 px-5">Model</th>
                    <th class="text-left p-3 px-5">Type</th>
                    <th class="text-left p-3 px-5">Vehicle Number</th>
                    <th class="text-left p-3 px-5">Driver Side</th>
                    <th class="text-left p-3 px-5">Mileage</th>
                    <th class="text-left p-3 px-5">Color</th>
                    <th class="text-left p-3 px-5">Year</th>
                    <th class="text-left p-3 px-5">Brand</th>
                    <th class="text-left p-3 px-5">Cost</th>

                    <th></th>
                </tr>
                @forelse($models as $model)
                    <tr class="border-b hover:bg-gray-400 bg-gray-100">
                        <td class="p-3 px-5 word-wrap: break-word">{{ $model['vehicle_model_nm'] }}</td>
                        <td class="p-3 px-5 word-wrap: break-word">{{ $model['type']['vehicle_types_nm'] }}</td>
                        <td class="p-3 px-5 word-wrap: break-word">{{ $model['vehicle_nm'] }}</td>
                        <td class="p-3 px-5 word-wrap: break-word">{{ $model['driver_side'] }}</td>
                        <td class="p-3 px-5 word-wrap: break-word">{{ $model['mileage'] }}</td>
                        <td class="p-3 px-5 word-wrap: break-word">{{ $model['color'] }}</td>
                        <td class="p-3 px-5 word-wrap: break-word">{{ $model['year'] }}</td>
                        <td class="p-3 px-5 word-wrap: break-word">{{ $model['brand']['brand_nm'] }}</td>
                        <td class="p-3 px-5 word-wrap: break-word">${{ $model['cost'] }}</td>

                        <td class="p-3 px-5 flex justify-end">
                            <a href="{{ route('Models.edit',$model['id']) }}"
                                    class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded focus:outline-none focus:shadow-outline">
                                Edit
                            </a>
                            <form action="{{ route('Models.destroy',$model['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('Are You Sure Want to Delete {{ $model['vehicle_model_nm'] }}')"
                                        class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-4 rounded focus:outline-none focus:shadow-outline">
                                    Delete
                                </button>
                            </form>
                    </tr>
                @empty
                    <tr class="border-b hover:bg-gray-400 bg-gray-100">
                        <td colspan="10" class="p-3 text-center text-xl text-cool-gray-500 px-5">No Model Have Been
                            Added
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
@endsection
