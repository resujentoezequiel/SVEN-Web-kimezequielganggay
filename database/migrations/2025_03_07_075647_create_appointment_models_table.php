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
        Schema::create('appointment_models', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->dateTime('appointment_date', precision: 0);
            $table->string('appointment_time');
            $table->string('notes', length: 9999)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_models');
    }
};
