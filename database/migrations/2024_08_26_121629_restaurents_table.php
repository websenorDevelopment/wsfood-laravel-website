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
        Schema::create('restaurant' ,function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('address');
            $table->unsignedBigInteger('phone');
            $table->string('email');
            $table->string('opening_time');
            $table->string('closing_time');
            
            $table->string('rating');
            $table->string('description');
            $table->string('image');
            $table->string('state');
            $table->string('city');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
