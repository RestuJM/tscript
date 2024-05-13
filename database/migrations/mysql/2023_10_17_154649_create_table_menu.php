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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->integer('parentID')->nullable()->default(0);
            $table->string('name');
            $table->string('route_name')->nullable();
            $table->string('icon')->nullable();
            $table->integer('sub_menu')->default(0); /* 0 Non Sub Menu || 1 Sub Menu */
            $table->integer('level')->default(1); /* 0 Level Menu || 1 Level Menu */
            $table->integer('status')->default(1); /* 0 Non-Active || 1 Active */
            $table->integer('is_delete')->default(0); /* 0 Read || 1 No-Read */
            $table->dateTime('delete_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings.menus');
    }
};
