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
        Schema::create('tag_pizzas', function (Blueprint $table) {
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->unsignedBigInteger('pizza_id')->nullable();
            $table->foreign('tag_id')->references('id')->on('tags')
                ->onDelete('cascade');
            $table->foreign('pizza_id')->references('id')->on('pizzas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_pizzas');
    }
};