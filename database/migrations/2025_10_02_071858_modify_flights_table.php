<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('flights', function (Blueprint $table) {
            // Hapus kolom arrival_time kalau masih ada
            if (Schema::hasColumn('flights', 'arrival_time')) {
                $table->dropColumn('arrival_time');
            }

            // Tambah kolom flight_duration (misal format '10:30-11:20')
            if (!Schema::hasColumn('flights', 'flight_duration')) {
                $table->string('flight_duration')->after('departure_time');
            }
        });
    }

    public function down(): void
    {
        Schema::table('flights', function (Blueprint $table) {
            // Hapus kolom flight_duration
            if (Schema::hasColumn('flights', 'flight_duration')) {
                $table->dropColumn('flight_duration');
            }

            // Kalau mau dikembalikan, bisa uncomment:
            // $table->dateTime('arrival_time')->after('departure_time');
        });
    }
};
