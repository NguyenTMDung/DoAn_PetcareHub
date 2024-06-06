<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class typeproduct extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('typeproduct')->insert([
            [
                'id' => '',
                'name' => 'Thức ăn',
                'category_name' => 'Chó',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '',
                'name' => 'Đồ dùng thú cưng',
                'category_name' => 'Chó',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '',
                'name' => 'Thức ăn',
                'category_name' => 'Mèo',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '',
                'name' => 'Đồ dùng thú cưng',
                'category_name' => 'Mèo',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '',
                'name' => 'Thức ăn',
                'category_name' => 'Chó',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '',
                'name' => 'Thức ăn',
                'category_name' => 'Chó',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '',
                'name' => 'Thức ăn',
                'category_name' => 'Chó',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '',
                'name' => 'Thức ăn',
                'category_name' => 'Chó',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
