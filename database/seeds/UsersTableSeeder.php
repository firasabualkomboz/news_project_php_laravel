<?php

use App\User;
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
        $user = User::create([
            'name' => 'azad',
            'email' => 'azad@gmail.com',
            'password' => bcrypt('azad123456')
        ]);

        $user -> attachRole('super_admin');
    }
}
