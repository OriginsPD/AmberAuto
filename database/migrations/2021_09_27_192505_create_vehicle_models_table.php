<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_models', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle_model_nm');
            $table->string('vehicle_nm');
            $table->foreignId('vehicle_types_id')->constrained('vehicle_types','id')->onDelete('cascade');
            $table->integer('capacity');
            $table->string('driver_side');
            $table->bigInteger('mileage');
            $table->string('color');
            $table->year('year');
            $table->foreignId('brand_id')->constrained('brands','id')->onDelete('cascade');
            $table->bigInteger('cost');
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
        Schema::dropIfExists('vehicle_models');
    }
}
