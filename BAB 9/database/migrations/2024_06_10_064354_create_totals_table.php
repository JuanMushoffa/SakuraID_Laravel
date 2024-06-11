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
        Schema::create('total', function (Blueprint $table) {
            $table->id('id_total');
            $table->string('nama',50);
            $table->string('jabatan',50);
            $table->string('jenis_kompensasi',50);
            $table->string('biaya_kompensasi',50);
            $table->string('total_kompensasi',50);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('totals');
    }
};
