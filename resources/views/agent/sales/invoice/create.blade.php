@extends('layouts.agent')

@section('page_title','New Invoice')

@section('content')
    <section class="text-Gray-700 -mt-8">
        <div class="container px-8 mx-auto py-28 lg:px-4">
            <div class="flex flex-col w-full mb-12 text-left lg:text-center">
                <h1 class="mb-6 text-2xl font-black tracking-tighter text-black sm:text-5xl title-font"> Customer<br class="md:hidden"> Sales Invoice. </h1>
                <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 lg:w-2/3">You're about to launch soon and must be 100% focused on your product. Don't loose precious days designing, coding the landing page and testing . </p>
            </div>
            <form class="flex flex-col w-full pt-6 pb-8 mb-4 bg-white lg:px-32 " name="" method="POST">
                @csrf
                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                        <x-label>Customer Name</x-label>
                        <x-input type="text" name="customer" placeholder="Customer Name"/>
                    </div>
                    <div class="w-full px-3 md:w-1/2">
                        <x-label>Invoice Date</x-label>
                        <x-input onblur="(this.type=text)" onclick="(this.type=date)" placeholder="00/00/0000" />
                    </div>
                </div>
                <div class="flex flex-wrap mb-2 -mx-3">
                    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                        <x-label>Invoices Number</x-label>
                        <x-input name="invoices_nbr" placeholder="INV-10000" />
                    </div>
                    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                        <x-label>Invoice Type</x-label>
                            <select class="form-select border border-gray-400 block w-full mt-2">
                                <option selected disabled>Select Invoices Type</option>
                                <option value="Credit Invoice">Credit Invoice</option>
                                <option value="Debit Invoice">Debit Invoice</option>
                                <option value="Mixed Invoice">Mixed Invoice</option>
                                <option value="Commercial Invoice">Commercial Invoice</option>
                                <option value="Timesheet Invoice">Timesheet Invoice</option>
                                <option value="Expense Report">Expense Report</option>
                            </select>

                    </div>
                </div>
            </form>
            <div class="flex pb-6 lg:justify-center">
                <button class="inline-flex px-8 py-3 items.center text-white transition duration-500 ease-in-out transform bg-orange-500 rounded-lg shadow-xl ">Create</button>
            </div>
        </div>
    </section>

@endsection
