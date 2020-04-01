<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
        	'name' => 'sam',
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('password')
        ]);
    }
}
