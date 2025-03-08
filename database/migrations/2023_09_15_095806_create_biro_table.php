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
            Schema::create('paket', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('media');
                $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
                $table->string('kode');
                $table->string('kota');
                $table->date('tanggal_keberangkatan');
                $table->date('tanggal_kepulangan');
                $table->date('expired_date');
                $table->enum('status',['pending','accept','decline'])->default('pending');
                $table->string('bandara');
                $table->string('airline');
                $table->enum('flight', ['direct', 'transit'])->default('direct');
                $table->string('kota_transit')->nullable();
                $table->integer('harga');
                $table->enum('tiket', ['yes', 'no'])->default('no');
                $table->enum('visa', ['yes', 'no'])->default('no');
                $table->enum('akomodasi', ['yes', 'no'])->default('no');
                $table->enum('makan', ['yes', 'no'])->default('no');
                $table->enum('umroh', ['yes', 'no'])->default('no');
                $table->string('tour')->nullable();
                $table->enum('airpot_handling', ['yes', 'no'])->default('no');
                $table->enum('bus', ['yes', 'no'])->default('no');
                $table->enum('zam', ['yes', 'no'])->default('no');
                $table->enum('passport', ['yes', 'no'])->default('no');

                // $table->string('image')->nullable();
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket');
    }
};
