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
       	User::create([
       		'name' => 'ThanhDat',
       		'email' => 'admin@gamil.com',
       		'password' => Hash::make('admin'),
       		'remember_token'=> str_random(10),
       	]);
    }
}
