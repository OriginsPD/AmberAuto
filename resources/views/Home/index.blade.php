@extends('layouts.app')

@section('page_title',' All Stack')

@section('content')
    
    <section class="text-blueGray-700 ">
        <div class="container items-center px-5 py-8 mx-auto lg:px-24">
            <div class="flex flex-wrap mb-12 text-left">
                @forelse ($models as $model )
                <div class="w-full mx-auto lg:w-1/3">
                    <div class="p-6">
                        <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36" src="https://dummyimage.com/720x400/F3F4F7/8693ac" alt="blog">
                        <div class="inline-flex justify-between w-full">
                        <h1 class="mb-4 text-xl font-semibold leading-none tracking-tighter text-black title-font">{{ $model['brand']['brand_nm'] }}</h1>
                        </div>
                        <div class="inline-flex justify-between w-full">
                            <h2 class="mb-8 text-lg font-semibold leading-none tracking-tighter text-black title-font"> {{ $model['type']['vehicle_types_nm'] }} </h2>
                            <span>$ {{ $model['cost'] }}</span>
                        </div>
                        <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">{{ $model['brand']['brand_desc'] }}. </p>
                    </div>
                </div>
                @empty
                <div class="w-full mx-auto lg:w-1/3">
                    <div class="p-6">
                        <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36" src="https://dummyimage.com/720x400/F3F4F7/8693ac" alt="blog">
                        <div class="inline-flex justify-between w-full">
                        <h1 class="mb-4 text-xl font-semibold leading-none tracking-tighter text-black title-font">Title</h1>
                        </div>
                        <div class="inline-flex justify-between w-full">
                            <h2 class="mb-8 text-lg font-semibold leading-none tracking-tighter text-black title-font"> model </h2>
                            <span>$ Cost</span>
                        </div>
                        <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">Description. </p>
                    </div>
                </div>
                @endforelse
        </div>
    </section>
   
    
    
@endsection