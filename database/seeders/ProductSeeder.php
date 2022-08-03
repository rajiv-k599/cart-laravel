<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product=[
            [
                'name' => 'MacBook Air',
                'details' => 'MacBook Air with M1',
                'description' => 'MacBook Air with M1 is an incredibly portable laptop — it’s nimble and quick, with a silent, fanless design and a beautiful Retina display. Thanks to its slim profile and all‑day battery life, this Air moves at the speed of lightness.',
                'brand' => 'Apple',
                'price' => '999',
                'shipping_cost' => '25',
                'image_path' => 'storage/product.png',
                
            ],
            [
                'name' => 'ThinkPad X1',
                'details' => 'ThinkPad X1 Carbon Gen 10 (14” Intel) Laptop',
                'description' => 'Powered by up to 12th Gen Intel® Core™ vPro® processors

                Built on the Intel® Evo platform
                
                Redesigned the keys to create better airflow
                
                New rear exhaust ventilation
                
                A transformed camera to a new Communications Bar
                
                Perfect for multitasking and heavy workloads
                
                Robust security includes Tile® tracking technology
                
                Military spec tested for durability and extreme conditions
                
                A great Laptop for on-the-go business professionals and students',
                'brand' => 'Lenovo',
                'price' => '1319',
                'shipping_cost' => '50',
                'image_path' => 'storage/product2.png',
                
            ]
            ];
            foreach($product as $key => $value){
                Product::create($value);
            }
    }
}
