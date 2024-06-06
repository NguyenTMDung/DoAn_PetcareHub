<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // thức ăn cho chó
        DB::table('product')->insert([
            [
                'id' => '01',
                'name' => 'Product 1',
                'typeProduct_name' => 'Thức ăn',
                'typeProduct_id' => 1,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '02',
                'name' => 'Product 2',
                'typeProduct_name' => 'Thức ăn',
                'typeProduct_id' => 1,
                'min_price' => 150,
                'max_price' => 250,
                'discount_price' => 200,
                'inventory' => 30,
                'image' => 'product2.jpg',
                'rating' => 4.0,
                'bestseller' => 0,
                'new' => 0,
                'number_of_sale' => 150,
                'size' => 'Medium',
                'gallery' => '["image3.jpg", "image4.jpg"]',
                'pet' => 'Mèo',
                'description' => 'Description for product 2',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '03',
                'name' => 'Product 1',
                'typeProduct_name' => 'Thức ăn',
                'typeProduct_id' => 1,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            //thức ăn cho mèo
            [
                'id' => '04',
                'name' => 'Product 1',
                'typeProduct_name' => 'Thức ăn',
                'typeProduct_id' => 1,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '05',
                'name' => 'Product 1',
                'typeProduct_name' => 'Thức ăn',
                'typeProduct_id' => 1,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '06',
                'name' => 'Product 1',
                'typeProduct_name' => 'Thức ăn',
                'typeProduct_id' => 1,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            //đồ dùng chó
            [
                'id' => '07',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 2,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '08',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 2,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '09',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 2,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            //đồ dùng mèo
            [
                'id' => '10',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 2,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '11',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 2,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '12',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 2,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            //thời trang chó
            [
                'id' => '13',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 3,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '14',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 3,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '15',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 3,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            //thời trang mèo
            [
                'id' => '16',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 3,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '17',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 3,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '18',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 3,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            // vệ sinh chó
            [
                'id' => '19',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 4,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '20',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 4,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '21',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 4,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            // vệ sinh mèo
            [
                'id' => '22',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 4,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '23',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 4,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => '24',
                'name' => 'Product 1',
                'typeProduct_name' => 'Type 1',
                'typeProduct_id' => 4,
                'min_price' => 100,
                'max_price' => 200,
                'discount_price' => 150,
                'inventory' => 50,
                'image' => 'product1.jpg',
                'rating' => 4.5,
                'bestseller' => 1,
                'new' => 1,
                'number_of_sale' => 100,
                'size' => 'Large',
                'gallery' => '["image1.jpg", "image2.jpg"]',
                'pet' => 'Chó',
                'description' => 'Description for product 1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],

        ]);
    }
}
