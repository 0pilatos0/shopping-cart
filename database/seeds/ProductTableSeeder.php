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
        //Cat 1
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Harry Potter',
            'description' => 'super cool',
            'price' => 10,
            'cato' => 1
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Pokemon',
            'description' => 'super cool',
            'price' => 1270,
            'cato' => 1
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Games',
            'description' => 'super cool',
            'price' => 25,
            'cato' => 1
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Headset',
            'description' => 'super cool',
            'price' => 80,
            'cato' => 1
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Beker',
            'description' => 'super cool',
            'price' => 4,
            'cato' => 1
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Laptop',
            'description' => 'super cool',
            'price' => 100,
            'cato' => 1
        ]);
        $product->save();

        

        // Cat 2


        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Telefoon',
            'description' => 'super cool',
            'price' => 10,
            'cato' => 2
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'toetsenbord',
            'description' => 'super cool',
            'price' => 21,
            'cato' => 2
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Muismat',
            'description' => 'super cool',
            'price' => 2,
            'cato' => 2
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Sherm',
            'description' => 'super cool',
            'price' => 145,
            'cato' => 2
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'luidspreker',
            'description' => 'super cool',
            'price' => 14556,
            'cato' => 2
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'fles',
            'description' => 'super cool',
            'price' => 1,
            'cato' => 2
        ]);
        $product->save();


        //Cat 3


        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'foto',
            'description' => 'super cool',
            'price' => 3,
            'cato' => 3
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Magneetbord',
            'description' => 'super cool',
            'price' => 12,
            'cato' => 3
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'onderzetter',
            'description' => 'super cool',
            'price' => 4,
            'cato' => 3
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'wifi',
            'description' => 'super cool',
            'price' => 16,
            'cato' => 3
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'stoel',
            'description' => 'super cool',
            'price' => 967,
            'cato' => 3
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'oordopjes',
            'description' => 'super cool',
            'price' => 34,
            'cato' => 3
        ]);
        $product->save();


        //Cat 4


        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'lamp',
            'description' => 'super cool',
            'price' => 31,
            'cato' => 4
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'tekentablet',
            'description' => 'super cool',
            'price' => 2,
            'cato' => 4
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Snoep',
            'description' => 'super cool',
            'price' => 41,
            'cato' => 4
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'glas',
            'description' => 'super cool',
            'price' => 14,
            'cato' => 4
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'bed',
            'description' => 'super cool',
            'price' => 156,
            'cato' => 4
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'powerbank',
            'description' => 'super cool',
            'price' => 135,
            'cato' => 4
        ]);
        $product->save();


        //Cat 5


        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Lijst',
            'description' => 'super cool',
            'price' => 56,
            'cato' => 5
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Kast',
            'description' => 'super cool',
            'price' => 890,
            'cato' => 5
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'Bord',
            'description' => 'super cool',
            'price' => 98,
            'cato' => 5
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'deur',
            'description' => 'super cool',
            'price' => 8657,
            'cato' => 5
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'pot',
            'description' => 'super cool',
            'price' => 1,
            'cato' => 5
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://placehold.it/500x300',
            'title' => 'boom',
            'description' => 'super cool',
            'price' => 97687689,
            'cato' => 5
        ]);
        $product->save();
    }
}
