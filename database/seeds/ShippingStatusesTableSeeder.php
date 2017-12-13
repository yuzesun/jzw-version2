<?php

use Illuminate\Database\Seeder;

class ShippingStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipping_statuses')->insert([
            'status_name' => 'In Factory',
            'description' => 'The goods are in the factory for manufacturing',
        ]);

        DB::table('shipping_statuses')->insert([
            'status_name' => 'On the Ocean',
            'description' => 'The goods are loaded in a container and shipping to the U.S.',
        ]);

        DB::table('shipping_statuses')->insert([
            'status_name' => 'Arrived at U.S. Port',
            'description' => 'The goods are reached to U.S. Port',
        ]);

        DB::table('shipping_statuses')->insert([
            'status_name' => 'Delivered',
            'description' => 'The goods are delivered to the front door of customer',
        ]);
    }
}
