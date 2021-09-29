<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVechicleModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vechicle_models', function (Blueprint $table) {
            $table->id();
            $table->integer('vechicle_model_nm');
            $table->year('year');
            $table->string('cost');
            $table->string('condition');
            $table->bigInteger('mileage');
            $table->integer('capacity');
            $table->string('driver_side');
            $table->integer('trans_type');
            $table->foreignId('vehicle_types_id')->constrained('vechicle_types','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vechicle_models');
    }
}
