<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'id' => Str::uuid(),
                'name' => 'SMK N 1 Gianyar',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'INSTIKI',
            ],
        ];
        School::insert($datas);
    }
}
