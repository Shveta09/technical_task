<?php

namespace Database\Seeders;

use App\Models\userDetails;

class userDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'developer',
            'password' => Hash::make('Test@Password123#'),
        ]);
    }
}
