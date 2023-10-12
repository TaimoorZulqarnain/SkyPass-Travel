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
        Schema::create('agent_tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')->references('id')->on('users')->constrained();
            $table->foreignId('ticket_id')->references('id')->on('tickets')->constrained();
            $table->enum('passengers_type', ['Adult', 'Child', 'Infants'])->default('Adult');
            $table->string('pnr_num', 50)->nullable()->default(null);
            $table->integer('booking_id');
            $table->string('sur_name', 150);
            $table->string('given_name', 150);
            $table->enum('title', ['Mr.', 'Miss'])->default('Mr.');
            $table->string('passport_number', 25);
            $table->date('passport_expiry');
            $table->date('dob');
            $table->string('nationality', 255);
            $table->string('mobile_number', 15);
            $table->string('email')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->enum('on_hold_status', ['On Hold', 'Confirmed', 'Cancelled'])->default('On Hold');
            $table->string('price',10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent_tickets');
    }
};
