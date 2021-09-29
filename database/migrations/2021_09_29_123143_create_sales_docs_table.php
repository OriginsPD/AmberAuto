<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_docs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ticket_id')->constrained('sales_tickets','id');
            $table->string('doc_name');
            $table->date('submitted_dt');
            $table->boolean('doc_checked')->default(0);
            $table->string('checked_by');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_docs');
    }
}
