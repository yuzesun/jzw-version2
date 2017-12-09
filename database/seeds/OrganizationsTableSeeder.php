<?php

use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizations')->insert([
            'organization_name' => 'JZW International Development, LLC.',
            'address_1' => '4245 S. 143rd Circle',
            'address_2' => 'Suite #5',
            'city' => 'Omaha',
            'state' => 'Nebraska',
            'zipcode' => '68127',
            'office_number' => '402-933-8876',
            'email' => 'sun@jzwusa.com',
        ]);
    }
}
