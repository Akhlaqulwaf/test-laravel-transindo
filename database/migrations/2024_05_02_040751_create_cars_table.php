<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->text('description');
            $table->string('merek');
            $table->string('no_plat');
            $table->integer('tarif');
            $table->unsignedBigInteger('status_car_id');
            $table->timestamps();

            $table->foreign('status_car_id')->references('id')->on('status_car');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_cars');
    }
};
