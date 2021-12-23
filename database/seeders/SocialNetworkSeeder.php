<?php

namespace Database\Seeders;

use App\Models\SocialNetwork;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SocialNetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model= SocialNetwork::class;
        $data=[];
        $this->createBasicData($data);
        seed_model($model,$data);

    }

    private function createBasicData(array &$data)
    {
        $data[]=[
            'name'=>'Facebook',
            'slug'=>Str::slug('Facebook'),
            'icon_class'=>'uil uil-facebook',
        ];

        $data[]=[
            'name'=>'Twitter',
            'slug'=>Str::slug('Twitter'),
            'icon_class'=>'uil uil-twitter',
        ];

        $data[]=[
            'name'=>'Skype',
            'slug'=>Str::slug('Skype'),
            'icon_class'=>'uil uil-skype',
        ];
        $data[]=[
            'name'=>'Linkedin',
            'slug'=>Str::slug('Linkedin'),
            'icon_class'=>'uil uil-linkedin',
        ];
    }
}
