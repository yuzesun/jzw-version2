<?php

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
            'branch_name' => '687',
            'organization_id' => 1,
            'address_1' => '800 S Council',
            'city' => 'MUNCIE',
            'state' => 'IN',
            'zipcode' => '47302',
            'office_number' => '(765) 289-0264',
        ]);

        DB::table('branches')->insert([
            'branch_name' => 'West End',
            'organization_id' => 2,
            'address_1' => '3601 Silver Dollar Circle',
            'city' => 'AUSTIN',
            'state' => 'TX',
            'zipcode' => '78744',
            'office_number' => '(512) 672-0022',
        ]);

        DB::table('branches')->insert([
            'branch_name' => 'Roofing Supply Group',
            'organization_id' => 2,
            'address_1' => '5608 Old Brownsville Road',
            'city' => 'CORPUS CHRISTI',
            'state' => 'TX',
            'zipcode' => '78417',
            'office_number' => '(800) 981-6493',
        ]);

        DB::table('branches')->insert([
            'branch_name' => 'Northeastern Hardware',
            'organization_id' => 3,
            'address_1' => '173 Ridgedale Ave',
            'city' => 'MORRISTOWN',
            'state' => 'NJ',
            'zipcode' => '07960',
            'office_number' => '(973) 538-6220',
        ]);
    }
}
