<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use stdClass;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.';

        $services = [
            'first' => [
                'title' => 'Processing Loss',
                'logo_image_url' => '',
                'description' => $lorem,
                'order' => 1
            ],
            'second' => [
                'title' => 'Councelling',
                'logo_image_url' => '',
                'description' => $lorem,
                'order' => 2
            ],
            'third' => [
                'title' => 'Stress Management',
                'logo_image_url' => '',
                'description' => $lorem,
                'order' => 3
            ]
        ];

        foreach ($services as $key => $value) {
            $service = new Service(
                [
                    'title' => $value['title'],
                    'description' => $value['description'],
                    'logo_image_url' => $value['logo_image_url'],
                    'order' => $value['order']
                ]
            );
            $service->save();
        }
    }
}
