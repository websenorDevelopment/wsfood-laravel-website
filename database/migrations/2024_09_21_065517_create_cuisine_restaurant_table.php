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
        Schema::create('cuisine_restaurant', function (Blueprint $table) {
            $table->id();
            $table->foreignId('restaurant_id')->constrained('restaurant')->onDelete('cascade');
            $table->foreignId('cuisine_id')->constrained('cuisines')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuisine_restaurant');
    }
};
