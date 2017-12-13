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
            'city' => 'BELOIT',
            'state' => 'WI',
            'zipcode' => '53511',
            'office_number' => '(608) 362-7777',
        ]);

        DB::table('organizations')->insert([
            'organization_name' => 'Beacon Construction',
            'address_1' => '902 W. Drake Road',
            'address_2' => 'Unit #7',
            'city' => 'FORT COLLINS',
            'state' => 'CO',
            'zipcode' => '80526',
            'office_number' => '(970) 212-2432',
            'email' => 'tyler@beacon-con.com'
        ]);

        DB::table('organizations')->insert([
            'organization_name' => 'Northeastern Hardware',
            'address_1' => '173 Ridgedale Ave',
            'city' => 'MORRISTOWN',
            'state' => 'NJ',
            'zipcode' => '07960',
            'office_number' => '(973) 538-6220',
        ]);
    }
}
