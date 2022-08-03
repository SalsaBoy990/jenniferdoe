<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Qualification;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        $qualifications = [
            '2011' => [
                'description' => 'Psychologist professional exam<br>University of Colorado',
                'order' => $i++
            ],
            '2015-2019' => [
                'description' => 'Psychologist diploma<br>crisis intervention specialization<br>University of Colorado',
                'order' => $i++
            ],
            '2019-2021' => [
                'description' => 'Worked as a kindergarten and<br> school psychologist',
                'order' => $i++
            ],
            '2022-' => [
                'description' => 'Started my psychology private practice',
                'order' => $i
            ],
        ];

        foreach ($qualifications as $key => $value) {
            $qualification = new Qualification(
                [
                    'date' => $key,
                    'description' => $value['description'],
                    'order' => $value['order'],
                ]
            );
            $qualification->save();
        }
    }
}
