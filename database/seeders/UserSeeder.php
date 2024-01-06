<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Administator',
                'Phone' => '01318533187',
                'phone_verified_at' => Carbon::now(),
                'password' => Hash::make('01318533187'),
                'role' => 'admin',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
