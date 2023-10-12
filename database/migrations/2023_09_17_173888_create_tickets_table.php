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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('airline_id')->references('id')->on('airline')->constrained();
            $table->string('adult_price', 10)->nullable();
            $table->string('child_price', 10)->nullable();
            $table->string('infants_price', 10)->nullable();
            $table->string('adult_discount', 10)->nullable();
            $table->string('child_discount', 10)->nullable();
            $table->string('infants_discount', 10)->nullable();
            $table->enum('service_type', ['One Way', 'Two Way'])->default('One Way');
            $table->integer('seats')->unsigned();
            $table->enum('is_featured', ['Yes', 'No'])->default('No');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
