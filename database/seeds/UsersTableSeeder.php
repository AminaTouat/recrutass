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
            'name' => Str::random(10).'amina',
            'email' => Str::random(10).'touatamina@gmail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
