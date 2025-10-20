<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('registers', function (Blueprint $table) { // ✅ registers
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'anggota'])->default('anggota');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('registers'); // ✅ registers
    }
};
