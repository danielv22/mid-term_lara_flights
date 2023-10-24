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
        Schema::create('flights', function (Blueprint $table) {
            $table->id('fl_id');
            $table->date('fl_date');
            $table->string('fl_origin_airport');
            $table->string('fl_origin_city');
            $table->string('fl_destination_airport');
            $table->string('fl_destination_city');
            $table->string('fl_airline');
            $table->integer('fl_distance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
