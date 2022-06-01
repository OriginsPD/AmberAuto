@extends('layouts.agent')

@section('page_title','Sales Information')

@section('content')
    <section class="text-gray-600 bg-orange-500 body-font">
        <div class=" px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-bold title-font mb-2 text-white uppercase text-white">Sale Dashboard</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus delectus eos iste labore maxime quasi quisquam..</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <a href="{{ route('SalesInvoice.index') }}"><div class="border bg-white cursor-pointer shadow-xl border-gray-200 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-200 border border-orange-500 text-indigo-500 mb-4">
                            <i class="far fa-file-invoice text-2xl text-orange-500"></i>
                        </div>
                        <h2 class="text-lg font-semibold title-font mb-2 text-orange-500 uppercase">Invoices</h2>
                        <p class="leading-relaxed text-orange-500">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                    </div></a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4 rounded">
                    <a href="{{ route('SalesTicket.index') }}"><div class="border bg-white cursor-pointer shadow-xl border-gray-200 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-200 border border-orange-500 text-indigo-500 mb-4">
                            <i class="fas fa-ticket-alt text-2xl text-orange-500"></i>
                        </div>
                        <h2 class="text-lg font-semibold title-font mb-2 text-orange-500 uppercase">Ticket</h2>
                        <p class="leading-relaxed text-orange-500">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                    </div></a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <a href="{{ route('SalesInvoiceDetail.index') }}"><div class="border bg-white cursor-pointer shadow-xl border-gray-200 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-200 border border-orange-500 text-indigo-500 mb-4">
                            <i class="fal fa-info-circle text-2xl text-orange-500"></i>
                        </div>
                        <h2 class="text-lg text-white font-semibold title-font mb-2 text-orange-500 uppercase">Invoices Details</h2>
                        <p class="leading-relaxed text-orange-500">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                    </div></a>
                </div>
            </div>
        </div>
    </section>
@endsection
