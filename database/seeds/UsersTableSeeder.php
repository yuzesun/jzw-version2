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
            'address_1' => '4245 S. 143rd Circle',
            'address_2' => 'Suite #5',
            'city' => 'Omaha',
            'state' => 'NE',
            'zipCode' => '68137',
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
            'address_1' => '4425 S. 162nd Avenue',
            'city' => 'Omaha',
            'state' => 'NE',
            'zipCode' => '68135',
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
            'address_1' => '610 S. 180th Avenue',
            'city' => 'Elkhorn',
            'state' => 'NE',
            'zipCode' => '68022',
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
