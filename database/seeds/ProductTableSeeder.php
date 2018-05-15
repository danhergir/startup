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
            'imageUrl' => 'https://i5.walmartimages.com/asr/2f24a0b1-b1c2-4e6f-aee0-66143651b6e4_1.734c3efd52ff08d7a5fa7516b30fac68.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF',
            'image1' => 'https://i5.walmartimages.com/asr/d40ad991-47ef-4625-bddb-8ae53f94e5dc_1.0b6d00a772c621abd700691288988c6e.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF',
            'image2' => 'https://i5.walmartimages.com/asr/2f24a0b1-b1c2-4e6f-aee0-66143651b6e4_1.734c3efd52ff08d7a5fa7516b30fac68.jpeg?odnHeight=180&odnWidth=180&odnBg=FFFFFF',
            'image3' => 'https://i5.walmartimages.com/asr/d40ad991-47ef-4625-bddb-8ae53f94e5dc_1.0b6d00a772c621abd700691288988c6e.jpeg?odnHeight=180&odnWidth=180&odnBg=FFFFFF',
            'title' => 'Xbox One Wireless Controller White',
            'description' => 'Equip yourself with the Xbox Wireless Controller, featuring a sleek, arctic camouflage design and textured grip for enhanced comfort. Enjoy custom button mapping and up to twice the wireless range. Plug in any compatible headset with the 3.5mm stereo headset jack. And with Bluetooth technology, play your favorite games on Windows 10 PCs and tablets Microsoft Xbox One Wireless Controller, White',
            'price' => 359.99,
        ]);
        $product->save();
    }
}
