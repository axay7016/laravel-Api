<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::insert([
            'name' => 'Akshay Mendapara', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin12345'),
            'role'=> 'admin'
        ]);
    }
}
