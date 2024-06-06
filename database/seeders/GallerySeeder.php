<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Đảm bảo rằng bạn đã thêm dòng này

class GallerySeeder extends Seeder
{
    /**
     * Chạy các seeders cho bảng galleries.
     */
    public function run(): void
    {
        DB::table('galleries')->insert([
            [
                'product_id' => 1,
                'image' => 'path/to/image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 1,
                'image' => 'path/to/image2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'image' => 'path/to/image3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'image' => 'path/to/image4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 3,
                'image' => 'path/to/image5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
