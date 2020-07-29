<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingsTableSeeder extends Seeder
{

    public function run()
    {
        $settings=[
            [
                'title' => 'facebook',
                'value' => 'https://www.facebook.com/',
                'slug' => 'facebook'
            ],
            [
                'title' => 'twitter',
                'value' => 'https://twitter.com/login?lang=en',
                'slug' => 'twitter'
            ],
            [
                'title' => 'instagram',
                'value' => 'https://www.instagram.com/?hl=en',
                'slug' => 'instagram'
            ],
        ];
        foreach ($settings as $key=>$setting){
            Setting::create($setting);
        }
    }
}
