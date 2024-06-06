<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class bill extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bill')->insert([
            [
                'code' => 'BILL001',
                'user_id' => 1,
                'order_id' => 1,
                'name' => 'Nguyễn Văn A',
                'email' => 'nguyenvana@example.com',
                'phone' => '0123456789',
                'address' => '123 Lê Lợi, HCMC',
                'note' => 'Giao hàng trong giờ hành chính',
                'shipcost' => 50000,
                'discount' => 10,
                'type_discount' => 'Phần trăm',
                'total' => 1000000,
                'method_payment' => 'Thanh toán online',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'BILL002',
                'user_id' => 2,
                'order_id' => 2,
                'name' => 'Trần Thị B',
                'email' => 'tranthib@example.com',
                'phone' => '0987654321',
                'address' => '456 Nguyễn Huệ, HCMC',
                'note' => '',
                'shipcost' => 60000,
                'discount' => 50000,
                'type_discount' => 'Tiền mặt',
                'total' => 2000000,
                'method_payment' => 'Tiền mặt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
