@extends('layouts.app')

@section('page_title','Amber Cars')

@section('content')
    <main class="my-8">
        <div class="container mx-auto px-6">
            <div class="h-64 rounded-md overflow-hidden bg-cover border-white border shadow-2xl bg-center" style="background: url('https://wallpaperaccess.com/full/2920124.jpg');">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">View Your Full Stack</h2>
                        <p class="mt-2 text-gray-200">Lorem ipsum dolor, sit amet consectetur adipisiing elit. Tempore facere provide11t molestias ipsam sint voluptatum pariatur.</p>
                        <a href="{{ route('Home.index') }}"><button class="flex items-center mt-4 px-3 py-2 bg-gradient-to-r to-orange-600 from-blue-600 text-white duration-300 text-sm uppercase font-medium rounded focus:outline-none focus:bg-blue-500">
                            <span>Browse Now</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </button></a>
                    </div>
                </div>
            </div>
            <div class="md:flex mt-8 md:-mx-4">
                <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover border-white border shadow-2xl bg-center md:w-1/2" style="background-image: url('https://blog.carjunction.com/wp-content/uploads/2020/10/Japanese-car-brands-2.jpg')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Brands</h2>
                            <p class="mt-2 text-gray-200">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                            <button class="flex items-center mt-4 text-white bg-orange-600 hover:text-orange-600 duration-300 hover:bg-white px-4 py-1 text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Search Now</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover border-white border shadow-2xl bg-center md:mt-0 md:w-1/2" style="background-image: url('https://www.carsflow.com/wp-content/uploads/2020/02/top-luxury-car-brands.jpg')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Vehicle Type</h2>
                            <p class="mt-2 text-gray-200">Lorem ipsum dolor, sit amet conectetur adipiscing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                            <button class="flex items-center mt-4 text-white bg-orange-600 hover:text-orange-600 duration-300 hover:bg-white px-4 py-1 text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Shop Now</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <section class="text-blueGray-700 ">
                <div class="container items-center px-5 py-8 mx-auto lg:px-24">
                    <div class="flex flex-wrap mb-12 text-left">
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
                </div>
            </section>

        </div>
    </main>
@endsection
