<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('focus_id')->references('id')->on('focuses')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('country_id')->references('id')->on('countries')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('position_x');
            $table->unsignedInteger('position_y');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nodes');
    }
};
