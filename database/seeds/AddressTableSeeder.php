<?php

use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $address = new \App\Address([
            'user_id' => '1',
            'first_name' => 'Daniel',
            'last_name' => 'Hernandez',
            'street_address' => 'Alamos',
            'street_address2' => '18-03',
            'country' => 'Colombia',
            'city' => 'Cartago',
            'state_province' => 'Valle Del Cauca',
            'phone_number' => '+57 1234567890',
            'phone_number2' => '+57 1234567890',
            'address_type' => 'Home - House',
        ]);
        $address->save();
    }
}
