<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'first_name' => 'JZW',
            'last_name' => 'USA',
            'phone_number' => '(402) 933-8876',
            'email' => 'sun@jzwusa.com',
            'role_id' => 1,
            'password' => bcrypt('password1234'),
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Jennifer',
            'last_name' => 'Zhang',
            'phone_number' => '(402) 719-6969',
            'email' => 'jennifer@gmail.com',
            'role_id' => 2,
            'password' => bcrypt('password1234'),
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Yuze',
            'last_name' => 'Sun',
            'phone_number' => '(402) 630-8515',
            'email' => 'yuzesun@gmail.com',
            'role_id' => 3,
            'password' => bcrypt('password1234'),
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Wen',
            'last_name' => 'Shi',
            'phone_number' => '(402) 650-5719',
            'email' => 'wenshi@gmail.com',
            'role_id' => 4,
            'password' => bcrypt('password1234'),
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);
    }
}
