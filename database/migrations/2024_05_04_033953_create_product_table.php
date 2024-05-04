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
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->string('name')->unique;
            $table->integer ('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->integer('price');
            $table->integer ('discount_price');
            $table->integer ('inventory');
            $table->string('avatar');
            $table->string('size');
            $table->string('type');
            $table->string('short_description');
            $table->longtext('long_description');
            $table->integer('id_user_created')->references('id')->on('users')->onDelete('set null');
            $table->integer('id_user_updated')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
