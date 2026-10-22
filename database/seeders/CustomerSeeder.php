<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        Customer::firstOrCreate(
            ['email' => 'pelanggan@example.com'],
            [
                'name' => 'Pelanggan Contoh',
                'phone' => '081234567890',
                'address' => 'Jember',
            ]
        );
    }
}
