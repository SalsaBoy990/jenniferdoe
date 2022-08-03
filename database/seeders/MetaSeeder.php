<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Meta;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siteMetaData = new Meta(
            [
                'title' => 'Jennifer Doe: Welcome!',
                'seo_title' => 'Jane Doe Psychologist',
                'subtitle' => 'Psychologist',
                'description' => '<p>You are the expert in your life—your emotions, dilemmas, and questions. In psychological counseling, I use my professional knowledge and experience to help You, lead You to find your own coping skills to solve your psychological problem. This means a working together on both sides.</p><p>As a professional psychologist, I am bound by secrecy, so I will not divulge anything what You have said on the occasions. I will give You more information about privacy at our very first meeting.</p>',
                'seo_description' => 'Jane Doe Psychologist Helper - Processing Loss, Councelling, Stress Management',
                'email_address' => 'psychology@example.com',
                'phone_number' => '+36/20/333-4455',
                'profile_image_url' => '',
                'seo_image_url' => '',
                'location' => '45 Boldogasszony Avenue, Szeged 6725',
                'facebook_link' => 'https://facebook.com/',
                'youtube_link' => 'https://youtube.com/'
            ]
        );

        $siteMetaData->save();
    }
}
