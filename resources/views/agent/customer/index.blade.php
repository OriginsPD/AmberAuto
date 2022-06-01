@extends('layouts.agent')

@section('page_title','Customers')

@section('content')
    <!-- component -->

    <div class="mb-12">
        <x-header>Customer Information</x-header>
    </div>

    <x-searchbar/>
    <div class=" flex justify-center items-center mt-4">

        <x-table.index>
            <x-slot name="heading">
                <x-table.heading>Customer Name</x-table.heading>
                <x-table.heading>Primary Address</x-table.heading>
                <x-table.heading>Secondary Address</x-table.heading>
                <x-table.heading>City Name</x-table.heading>
                <x-table.heading>Action</x-table.heading>
                <x-table.heading>Action</x-table.heading>
            </x-slot>
            <x-table.row>
                <x-table.cell colspan="6">
                    <div class="w-full text-center border-b border-orange-500 my-2">
                        <a href="{{ route('Customer.create') }}"><x-button.createbutton>Create Invoice</x-button.createbutton></a>
                    </div>
                </x-table.cell>
            </x-table.row>
            <x-table.row>
                <x-table.cell>Info1</x-table.cell>
                <x-table.cell>Testing info</x-table.cell>
                <x-table.cell>New Information</x-table.cell>
                <x-table.cell>Info1</x-table.cell>
                <x-table.cell>Info1</x-table.cell>
                <<x-table class="cell">
                    <butt></butt>
                </x-table></x-table.cell>
            </x-table.row>
        </x-table.index>
    </div>

@endsection


