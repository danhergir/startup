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
            'imageUrl' => 'https://images-na.ssl-images-amazon.com/images/I/51zy4SVNkxL._SX326_BO1,204,203,200_.jpg',
            'title' => '1984',
            'description' => 'The year is 1984, and life in Oceania is ruled by the Party. Under the gaze of Big Brother, Winston Smith yearns for intimacy and love – “thought crimes” that, if uncovered, would mean imprisonment, or death. But Winston is not alone in his defiance, and an illicit affair will draw him into the mysterious Brotherhood and the realities of resistance.',
            'price' => 10,
        ]);
        $product->save();
    }
}
