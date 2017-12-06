<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Jennifer',
            'last_name' => 'Zhang',
            'phone_number' => '(402) 719-6969',
            'email' => 'jennifer@gmail.com',
            'role_id' => 1,
            'password' => bcrypt('password1234'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Yuze',
            'last_name' => 'Sun',
            'phone_number' => '(402) 630-8515',
            'email' => 'yuzesun@gmail.com',
            'role_id' => 2,
            'password' => bcrypt('password1234'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Wen',
            'last_name' => 'Shi',
            'phone_number' => '(402) 650-5719',
            'email' => 'wenshi@gmail.com',
            'role_id' => 3,
            'password' => bcrypt('password1234'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'John',
            'last_name' => 'Legend',
            'phone_number' => '(402) 929-1172',
            'email' => 'john@gmail.com',
            'role_id' => 4,
            'password' => bcrypt('password1234'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Adam',
            'last_name' => 'England',
            'phone_number' => '(402) 374-2129',
            'email' => 'adam@gmail.com',
            'role_id' => 5,
            'password' => bcrypt('password1234'),
        ]);
    }
}
