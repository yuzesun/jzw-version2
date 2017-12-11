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
            'organization_name' => 'ABC Supply Co',
            'address_1' => '1 ABC Parkway',
            'city' => 'Beloit',
            'state' => 'WI',
            'zipcode' => '53511',
            'office_number' => '608-362-7777',
        ]);
    }
}
