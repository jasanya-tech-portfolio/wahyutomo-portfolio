<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                "id" => 1,
                'name' => 'Wahyu Dwi Utomo',
                'email' => "wahyuxd14@gmail.com",
                'password' => bcrypt('wahyu141402'),
                'status_id' => 1,         
            ],
        ];
        User::insert($user);
    }
}
