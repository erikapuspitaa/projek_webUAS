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
        Schema::create('data_dokter', function (Blueprint $table) {
            $table->id();
            $table->string('Dokter_Name');
            $table->enum('Gender', ['male','female']);
            $table->string('Email_Address');
            $table->string('Service');
            $table->biginteger('Phone_Number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_dokter');
    }
};
