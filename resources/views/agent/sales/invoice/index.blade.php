@extends('layouts.agent')

@section('page_title','Sales Invoices')

@section('content')
    <div class="mb-12">
        <x-header>Sales Invoices</x-header>
    </div>
    <x-searchbar/>
    <div class=" flex justify-center items-center mt-4">
        <x-table.index>
            <x-slot name="heading">
                <x-table.heading>Customer Name</x-table.heading>
                <x-table.heading>Invoices Date</x-table.heading>
                <x-table.heading>Invoices Type</x-table.heading>
                <x-table.heading>Invoices Number</x-table.heading>
            </x-slot>
            <x-table.row>
                <x-table.cell>Info1</x-table.cell>
                <x-table.cell>Testing info</x-table.cell>
                <x-table.cell>New Information</x-table.cell>
                <x-table.cell>Info1</x-table.cell>
            </x-table.row>
        </x-table.index>
    </div>
@endsection
