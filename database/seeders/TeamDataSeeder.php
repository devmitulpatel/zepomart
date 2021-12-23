<?php

namespace Database\Seeders;

use App\Models\SocialNetwork;
use App\Models\TeamData;
use Faker\Generator;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeamDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model= TeamData::class;
        $data=[];
        $this->createBasicData($data);
        seed_model($model,$data);
        $teams=TeamData::all();
        $socials=SocialNetwork::all();

        foreach ($teams as $team){
            foreach ($socials as $social){
               // var_dump($social->name);
                $link=implode('/',[$social->name,$team->name]);
                $team->createSocialLink($social,$link);
            }
        }
    }

    private function createBasicData(array &$data)
    {

        $faker = Container::getInstance()->make(Generator::class);



        $data[]=
            [
            'name'=>$faker->name('male'),
            'position'=>'Marketing Specialist',
            'quot'=>$faker->sentence,
            'image'=>'assets/img/avatars/t1.jpg',
        ];

        $data[]=
            [
            'name'=>$faker->name('female'),
            'position'=>'Financial Analyst',
            'quot'=>$faker->sentence,
            'image'=>'assets/img/avatars/t2.jpg',
        ];

        $data[]=
            [
                'name'=>$faker->name('male'),
                'position'=>'Sales Manager',
                'quot'=>$faker->sentence,
                'image'=>'assets/img/avatars/t3.jpg',
            ];
        $data[]=
            [
                'name'=>$faker->name('female'),
                'position'=>'Investment Planner',
                'quot'=>$faker->sentence,
                'image'=>'assets/img/avatars/t4.jpg',
            ];
        $data[]=
            [
                'name'=>$faker->name('female'),
                'position'=>'Assistant Buyer',
                'quot'=>$faker->sentence,
                'image'=>'assets/img/avatars/t5.jpg',
            ];


    }
}
