<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatesTableSeeder::class);
        $this->call(ShippingStatusesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
    }
}
