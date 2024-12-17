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
        Schema::create('card_input', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('custom_product_id');
            $table->foreign('custom_product_id')->references('id')->on('custom_product')->onDelete('cascade');

            $table->integer('position');
            $table->text('text');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_input');
    }
};
