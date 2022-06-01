<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_tickets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ticket_nbr');
            $table->date('created_dt');
            $table->foreignId('customer_id')->constrained('customers','id');
            $table->foreignId('sales_rep_id')->constrained('users','id');
            $table->boolean('ticket_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_tickets');
    }
}
