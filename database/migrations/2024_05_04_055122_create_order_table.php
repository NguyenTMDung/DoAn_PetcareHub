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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->string('code');
            $table->integer('user_id')->references('id')->on('users')->onDelete('cascade')->nullable;
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->text('note');
            $table->double('shipcost');
            $table->integer('discount');
            $table->enum('type_discount', ['Tiền mặt', 'Phần trăm']);
            $table->double('total');
            $table->enum('method_payment', ['Tiền mặt', 'Thanh toán online']);
            $table->enum('status', ['Đang chờ xử lý','Đang xử lý','Đang giao hàng','Đã giao hàng', 'Hủy']);
            $table->text('cancelllation_reason')->nullable();
            $table->timestamps();           
        });
    }
  

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
