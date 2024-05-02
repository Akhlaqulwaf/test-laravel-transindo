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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->unsignedBigInteger('car_id')->nullable(false);
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('total')->nullable();
            $table->unsignedBigInteger('status_booking_id')->nullable(false);
            $table->timestamps();

            $table->foreign('status_booking_id')->references('id')->on('status_booking');
            $table->foreign('car_id')->references('id')->on('cars');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_bookings');
    }
};
