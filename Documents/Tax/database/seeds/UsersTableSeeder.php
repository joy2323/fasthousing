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
        user::create([
            'name' => 'Ifeanyichukwu Praise',
            'company_name' => 'ighub',
            'email' => 'praiseifeanyichukwu9@gmail.com',
            'password' =>Hash::make('password'),
            'remember_token' =>str_random(10)

        ]);
    }
}
