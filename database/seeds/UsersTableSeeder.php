<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = User::where('email','hajoje571@mail.com')->first();

     if(!$user){

         User::create([
             'name' => 'Sanjo JR',
             'email' => 'hajoje571@mail.com',
             'role' => 'admin',
             'password' => Hash::make('password')
         ]);

     }
    }
}
