<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'Free user',
            'email' => 'free@email.com',
            'password' => bcrypt('password'),
            'type' => 0,
            'banned' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
