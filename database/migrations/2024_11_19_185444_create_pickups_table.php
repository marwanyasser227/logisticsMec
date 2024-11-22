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
        Schema::create('pickups', function (Blueprint $table) {
            $table->id();
            $table->time('pickup_time');
            $table->foreignId('pilot_id');
            $table->foreign('pilot_id')->references('id')->on('users');
            $table->foreignId('hubs_id');
            $table->foreign('hubs_id')->references('id')->on('hubs');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pickups');
    }
};
