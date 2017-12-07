<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'Root User',
            'description' => 'The ancestor of JZW International Development, LLC',
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'JZW Owner',
            'description' => 'The Owner of JZW International Development, LLC',
        ]);

        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'JZW Admin',
            'description' => 'The Admin of JZW International Development, LLC',
        ]);

        DB::table('roles')->insert([
            'id' => 4,
            'name' => 'JZW User',
            'description' => 'The User of JZW International Development, LLC',
        ]);

        DB::table('roles')->insert([
            'id' => 5,
            'name' => 'Business Admin',
            'description' => 'The Admin of a customer business',
        ]);

        DB::table('roles')->insert([
            'id' => 6,
            'name' => 'Business User',
            'description' => 'The User of a customer business',
        ]);
    }
}
