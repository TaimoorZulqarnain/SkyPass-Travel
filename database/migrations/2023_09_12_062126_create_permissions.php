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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->foreignId('agent_id')->references('id')->on('users')->constrained();
            $table->enum('add', ['Yes', 'No'])->default('Yes');
            $table->enum('edit', ['Yes', 'No'])->default('Yes');
            $table->enum('delete', ['Yes', 'No'])->default('Yes');
            $table->enum('view', ['Yes', 'No'])->default('Yes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
