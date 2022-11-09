<?php

namespace Database\Seeders;

use App\Models\Family;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Family::insert([
            [
                'name' => 'Budi',
                'gender' => 'Laki-Laki',
                'level' => 'kakek',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'Dedi',
                'gender' => 'Laki-Laki',
                'level' => 'anak',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'Dodi',
                'gender' => 'Laki-Laki',
                'level' => 'anak',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'Dede',
                'gender' => 'Laki-Laki',
                'level' => 'anak',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'Dewi',
                'gender' => 'Perempuan',
                'level' => 'anak',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'Feri',
                'gender' => 'Laki-Laki',
                'level' => 'cucu',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'Farah',
                'gender' => 'Perempuan',
                'level' => 'cucu',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'Gugus',
                'gender' => 'Laki-Laki',
                'level' => 'cucu',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'Gandi',
                'gender' => 'Laki-Laki',
                'level' => 'cucu',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'Hana',
                'gender' => 'Perempuan',
                'level' => 'cucu',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ],
            [
                'name' => 'Hani',
                'gender' => 'Perempuan',
                'level' => 'cucu',
                'created_at' => date('Y-m-d h:i'),
                'updated_at' => date('Y-m-d h:i'),
            ]
        ]);
    }
}
