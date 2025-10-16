<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Kolom JSON/text untuk menyimpan nama penumpang
            // $table->json('passenger_names')->nullable()->after('passengers'); // hapus ini
        });
    }

    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
             // $table->dropColumn('passenger_names'); // hapus ini juga biar aman
        });
    }
};

