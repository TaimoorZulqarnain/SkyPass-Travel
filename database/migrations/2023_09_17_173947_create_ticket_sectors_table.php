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
        Schema::create('ticket_sectors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ticket_id')->references('id')->on('tickets')->constrained();
            $table->string('flight_num', 50)->nullable();
            $table->string('departure', 50)->nullable();
            $table->string('destination', 50)->nullable();
            $table->string('baggage', 50)->nullable();
            
            $table->string('departure_date', 50)->nullable();
            $table->string('departure_time', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_sectors');
    }
};
