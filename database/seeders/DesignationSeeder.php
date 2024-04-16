<?php

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $designation = [
            [
                'name' => 'Window 1 Cashier',
                'usertype_id' => '1',
            ],
            [
                'name' => 'Window 2 Cashier',
                'usertype_id' => '1',
            ],
            [
                'name' => 'Window 1 Assessor',
                'usertype_id' => '2',
            ],
            [
                'name' => 'Window 2 Assessor',
                'usertype_id' => '2',
            ],
            [
                'name' => 'Entrance',
                'usertype_id' => '3',
            ],
            [
                'name' => 'TV Front',
                'usertype_id' => '4',
            ],
        ];

        Designation::insert($designation);
    }
}
