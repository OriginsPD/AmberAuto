@extends('layouts.agent')

@section('page_title','Sales Invoice Details')

@section('content')
    <div class="mb-12">
        <x-header>Invoices Details</x-header>
    </div>
    <x-searchbar/>
    <div class=" flex justify-center items-center mt-4">
        <x-table.index>
            <x-slot name="heading">
                <x-table.heading>Sale Invoice Number</x-table.heading>
                <x-table.heading>Vehicle Model</x-table.heading>
                <x-table.heading>Quantity</x-table.heading>
                <x-table.heading>Cost</x-table.heading>
                <x-table.heading>Discount</x-table.heading>
                <x-table.heading>Sales Price</x-table.heading>
            </x-slot>
            <x-table.row>
                <x-table.cell>Info 1</x-table.cell>
                <x-table.cell>Info 2</x-table.cell>
                <x-table.cell>Info 3</x-table.cell>
                <x-table.cell>Info 4</x-table.cell>
                <x-table.cell>Info 5</x-table.cell>
                <x-table.cell>Info 6</x-table.cell>
            </x-table.row>
        </x-table.index>
    </div>
@endsection
