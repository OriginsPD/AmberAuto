@extends('layouts.agent')

@section('page_title','New Customer')

@section('content')
    <section class="text-Gray-700 -mt-8">
        <div class="container px-8 mx-auto py-28 lg:px-4">
            <div class="flex flex-col w-full mb-12 text-left lg:text-center">
                <h1 class="mb-6 text-2xl font-black tracking-tighter text-black sm:text-5xl title-font"> New Customer</h1>
                <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 lg:w-2/3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi assumenda autem dolore dolorem error facilis, fuga illo, itaque iure labore maiores minus nemo numquam quam quidem sed totam voluptates?. </p>
            </div>
            <form class="flex flex-col w-full pt-6 pb-8 mb-4 bg-white lg:px-32 " name="" method="POST">
                @csrf
                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                        <x-label>First Name</x-label>
                        <x-input type="text" name="first_nm" placeholder="Customer First Name"/>
                    </div>
                    <div class="w-full px-3 md:w-1/2">
                        <x-label>Last Name Date</x-label>
                        <x-input type="text" name="last_nm" placeholder="Customer Last Name"/>
                    </div>
                </div>
                <div class="flex flex-wrap mb-2 -mx-3">
                    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                        <x-label>Address </x-label>
                        <x-input name="invoices_nbr" placeholder="INV-10000" />
                    </div>
                    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                        <x-label>Invoice Type</x-label>
                        <x-input name="invoices_nbr" placeholder="INV-10000" />
                    </div>
                </div>
            </form>
            <div class="flex pb-6 lg:justify-center">
                <button class="inline-flex px-8 py-3 items.center text-white transition duration-500 ease-in-out transform bg-orange-500 rounded-lg shadow-xl ">Create</button>
            </div>
        </div>
    </section>

@endsection
