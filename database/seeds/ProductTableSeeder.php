<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Harry Potter',
            'description' => 'super cool',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Pokemon',
            'description' => 'super cool',
            'price' => 1270
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Games',
            'description' => 'super cool',
            'price' => 25
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Headset',
            'description' => 'super cool',
            'price' => 80
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Beker',
            'description' => 'super cool',
            'price' => 4
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Laptop',
            'description' => 'super cool',
            'price' => 100
        ]);
        $product->save();
    }
}
