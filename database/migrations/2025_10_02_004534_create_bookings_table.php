<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flight_id')->constrained('flights')->onDelete('cascade');
            $table->string('origin');
            $table->string('destination');
            $table->string('departure_time');
            $table->enum('seat_class', ['Economy', 'Business', 'First'])->default('Economy');
            $table->integer('passengers');
            $table->json('passenger_names');
            $table->decimal('total_price', 12, 2);
            $table->enum('status', ['Pending', 'Paid', 'Cancelled'])->default('Pending');
            $table->enum('payment_method', ['Transfer Bank', 'E-Wallet', 'Credit Card']);
            $table->dateTime('payment_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
