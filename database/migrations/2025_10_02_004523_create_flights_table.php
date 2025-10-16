<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('flight_code')->unique();
            $table->string('airline');
            $table->string('origin');
            $table->string('destination');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time')->nullable(); // ✅ tambahin ini
            $table->string('flight_duration')->nullable(); // ✅ dan ini
            $table->decimal('economy_price', 12, 2)->nullable();
            $table->decimal('business_price', 12, 2)->nullable();
            $table->decimal('first_price', 12, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
