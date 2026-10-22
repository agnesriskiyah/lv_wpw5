<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $customer = Customer::where(
            'email',
            'pelanggan@example.com'
        )->firstOrFail();

        $product = Product::firstOrFail();

        $order = Order::firstOrCreate(
            [
                'customer_id' => $customer->id,
                'total_amount' => $product->price * 2,
            ]
        );

        OrderItem::firstOrCreate(
            [
                'order_id' => $order->id,
                'product_id' => $product->id,
            ],
            [
                'quantity' => 2,
                'price' => $product->price,
                'subtotal' => $product->price * 2,
            ]
        );
    }
}
