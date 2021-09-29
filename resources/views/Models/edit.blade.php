@extends('layouts.admin')

@section('page_title','Edit Vehicle Model')

@section('content')
    <div class="p-4 flex">
        <h1 class="text-3xl font-bold mb-10">
            Edit Vehicle Model
        </h1>
    </div>
<!-- component -->
<div class="bg-white w-5/6 mx-24 shadow rounded-lg p-6">
    <form action="{{ route('Models.update',$model['id']) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="grid lg:grid-cols-2 gap-6">
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="vehicle_model_nm" class="bg-white text-gray-600 px-1">Vehicle Model *</label>
                </p>
            </div>
            <p>
                <input id="vehicle_model_nm" name="vehicle_model_nm" value="{{ $model['vehicle_model_nm'] }}" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 text-gray-900 outline-none block h-full w-full">
            </p>
            <div class="text-sm text-red-700 my-1">
                @error('vehicle_model_nm')
                * {{ $message }}
                @enderror
            </div>
        </div>
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="year" class="bg-white text-gray-600 px-1">Vehicle Year *</label>
                </p>
            </div>
            <p>
                <input id="year" autocomplete="false" name="year" value="{{ $model['year'] }}" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full">
            </p>
            <div class="text-sm text-red-700 my-1">
                @error('year')
                * {{ $message }}
                @enderror
            </div>
        </div>
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="vehicle_nm" class="bg-white text-gray-600 px-1">Vehicle ID Number *</label>
                </p>
            </div>
            <p>
                <input id="vehicle_nm" name="vehicle_nm" value="{{ $model['vehicle_nm'] }}" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full">
            </p>
            <div class="text-sm text-red-700 my-1">
                @error('vehicle_nm')
                * {{ $message }}
                @enderror
            </div>
        </div>
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="brand_id" class="bg-white text-gray-600 px-1">Vehicle Brand *</label>
                </p>
            </div>
            <p>
                <select name="brand_id" value="{{ $model['brand_id'] }}" id="brand_id" class="py-1 px-1 appearance-none outline-none block h-full w-full">
                    <option selected disabled> Select Brands </option>
                    @forelse($brands as $brand)
                        <option value="{{ $brand['id'] }}">{{ $brand['brand_nm'] }}</option>
                        @empty
                        <option selected disabled> No Brands have Been added </option>
                    @endforelse
                </select>
            </p>
            <div class="text-sm text-red-700 my-1">
                @error('brand_id')
                * {{ $message }}
                @enderror
            </div>
        </div>
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="mileage" class="bg-white text-gray-600 px-1">Mileage Amount *</label>
                </p>
            </div>
            <p>
                <input id="mileage" name="mileage" value="{{ $model['mileage'] }}" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full">
            </p>
            <div class="text-sm text-red-700 my-1">
                @error('mileage')
                * {{ $message }}
                @enderror
            </div>
        </div>
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="capacity" class="bg-white text-gray-600 px-1">Capacity *</label>
                </p>
            </div>
            <p>
                <input id="capacity" name="capacity" value="{{ $model['capacity'] }}" autocomplete="false" tabindex="0" type="number" class="py-1 px-1 outline-none block h-full w-full">
            </p>
            <div class="text-sm text-red-700 my-1">
                @error('capacity')
                * {{ $message }}
                @enderror
            </div>
        </div>
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="color" class="bg-white text-gray-600 px-1">Vehicle Color *</label>
                </p>
            </div>
            <p>
                <input id="color" name="color" value="{{ $model['color'] }}" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full">
            </p>
            <div class="text-sm text-red-700 my-1">
                @error('color')
                * {{ $message }}
                @enderror
            </div>
        </div>
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="driver_side" class="bg-white text-gray-600 px-1">Driver Side *</label>
                </p>
            </div>
            <p>
                <input id="driver_side" name="driver_side" value="{{ $model['driver_side'] }}" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full">
            </p>
            <div class="text-sm text-red-700 my-1">
                @error('driver_side')
                * {{ $message }}
                @enderror
            </div>
        </div>
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="cost" class="bg-white text-gray-600 px-1">Cost *</label>
                </p>
            </div>
            <p>
                <input id="cost" name="cost" value="{{ $model['cost'] }}" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full">
            </p>
            <div class="text-sm text-red-700 my-1">
                @error('cost')
                * {{ $message }}
                @enderror
            </div>
        </div>
        <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="vehicle_types_id" class="bg-white text-gray-600 px-1">Vehicle Type *</label>
                </p>
            </div>
            <p>
                <select name="vehicle_types_id" value="{{ $model['vehicle_types_id'] }}" id="vehicle_types_id" class="py-1 px-1 appearance-none outline-none block h-full w-full">
                    <option selected disabled> Select Brands </option>
                    @forelse($vehicles as $vehicle)
                        <option value="{{ $vehicle['id'] }}">{{ $vehicle['vehicle_types_nm'] }}</option>
                    @empty
                        <option selected disabled> No Brands have Been added </option>
                    @endforelse
                </select>
            </p>
            <div class="text-sm text-red-700 my-1">
                @error('vehicle_types_id')
                * {{ $message }}
                @enderror
            </div>
        </div>

    </div>
    <div class="border-t mt-6 pt-3">
        <button class="rounded text-gray-100 px-3 py-1 bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300">
            Save
        </button>
    </div>
    </form>
</div>

@endsection
