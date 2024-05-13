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
        Schema::create('public.menu', function (Blueprint $table) {
            $table->id();
            $table->integer('parentID')->nullable();
            $table->string('name');
            $table->string('route_name')->nullable();
            $table->string('icon');
            $table->string('is_multiple')->default(0); /* 0 Single Menu || 1 Multiple Menu */
            $table->string('status')->default(1); /* 0 Non-Active || 1 Active */
            $table->string('is_delete')->default(0); /* 0 Read || 1 No-Read */
            $table->dateTime('delete_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('public.menu');
    }
};
