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
            'name' => 'admin',
            'email' => 'admin@suiseicord.live',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('suiseicord'),
            'api_token' => Str::random(20),
        ]);
    }
}
