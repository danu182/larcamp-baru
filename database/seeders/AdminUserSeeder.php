<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'email_verified_at'=>date('Y-m-d H:i:s', time()),
            'password'=>bcrypt('123'),
            'is_admin'=>true,

            
        ]);
    }
}
