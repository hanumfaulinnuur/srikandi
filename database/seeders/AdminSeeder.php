<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       user::insert([
        'name'      => 'Admin Toko',
        'email'    => 'Admin@gmail.com',
        'password'     => 'admin123',
        'type'      => '1'
       ]);
    }
}
