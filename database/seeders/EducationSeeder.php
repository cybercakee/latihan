<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EducationSeeder extends Seeder
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
                'school_id' => null,
                'title' => '-',
                'start_date' => '2014-06-12',
                'end_date' => '2017-05-04',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem necessitatibus autem corporis animi vel rem consequuntur incidunt culpa. Eaque assumenda vero doloremque dolore inventore doloribus nostrum alias, repellendus deleniti hic.'
            ],
            [
                'id' => Str::uuid(),
                'name' => 'INSTIKI',
                'school_id' => null,
                'title' => '-',
                'start_date' => '2019-01-01',
                'end_date' => '2024-01-01',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem necessitatibus autem corporis animi vel rem consequuntur incidunt culpa. Eaque assumenda vero doloremque dolore inventore doloribus nostrum alias, repellendus deleniti hic.'
            ],
        ];
        Education::insert($datas);
    }
}
