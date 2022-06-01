@extends('layouts.agent')

@section('page_title','Sales Invoices')

@section('content')
    <div class="mb-12">
        <x-header>Sales Tickets</x-header>
    </div>
    <x-searchbar/>
    <div class=" flex justify-center items-center mt-4">
        <x-table.index>
            <x-slot name="heading">
                <x-table.heading>Customer Name</x-table.heading>
                <x-table.heading>Ticket Number</x-table.heading>
                <x-table.heading>Sales Agent</x-table.heading>
                <x-table.heading>Ticket Status</x-table.heading>
                <x-table.heading>Created Date</x-table.heading>
            </x-slot>
            <x-table.row>
                <x-table.cell>Info 1</x-table.cell>
                <x-table.cell>Info 2</x-table.cell>
                <x-table.cell>Info 3</x-table.cell>
                <x-table.cell>Info 4</x-table.cell>
                <x-table.cell>Info 5</x-table.cell>
            </x-table.row>
        </x-table.index>
    </div>
@endsection
