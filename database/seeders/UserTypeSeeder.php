<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usertype = [
            [
                'name' => 'Cashier'
            ],
            [
                'name' => 'Assessor'
            ],
            [
                'name' => 'Guard'
            ],
            [
                'name' => 'Queue Display'
            ],
        ];

        UserType::insert($usertype);
    }
}
