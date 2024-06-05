<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('appointments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('customer_id')->constrained()->onDelete('cascade');
        $table->dateTime('appointment_date');
        $table->text('notes')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('appointments');
}
};
