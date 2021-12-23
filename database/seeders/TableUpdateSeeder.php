<?php

namespace Database\Seeders;

use App\Models\DynamicSiteData;
use App\Models\SocialNetwork;
use App\Models\TableUpdate;
use App\Models\TeamData;
use Faker\Generator;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model= TableUpdate::class;
        $data=[];
        $this->createBasicData($data);
        seed_model($model,$data);
    }

    private function createBasicData(array &$data)
    {
        $faker = Container::getInstance()->make(Generator::class);

        $data[]=[
            'table_name'=>'dynamic_site_data',
            'type'=>DynamicSiteData::class,
            'version'=>$faker->uuid(),
            ];

    }
}
