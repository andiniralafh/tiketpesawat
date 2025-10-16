<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('flights', function (Blueprint $table) {
            if (!Schema::hasColumn('flights', 'arrival_time')) {
                $table->dateTime('arrival_time')->nullable()->after('departure_time');
            }
        });
    }

    public function down(): void
    {
        Schema::table('flights', function (Blueprint $table) {
            if (Schema::hasColumn('flights', 'arrival_time')) {
                $table->dropColumn('arrival_time');
            }
        });
    }
};
