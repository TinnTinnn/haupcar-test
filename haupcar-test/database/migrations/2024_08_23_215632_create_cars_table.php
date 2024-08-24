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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->string('vin',20);
            $table->string('engine_number', 20)->nullable();
            $table->string('license_plate', 10)->nullable();
            $table->string('color')->nullable();
            $table->integer('mileage')->nullable();
            $table->boolean('completed')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
