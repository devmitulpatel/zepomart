<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\SeoPlanFeatureCat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model= Categories::class;
        $data=[];
        $this->createBasicData($data);
        seed_model($model,$data);

    }

    private function createBasicData(array &$data)
    {

        $data[]=[
            'name'=>'On Page Optimization',
            'slug'=>Str::slug('On Page Optimization'),
        ];

        $data[]=[
            'name'=>'Off-Page Optimization',
            'slug'=>Str::slug('Off-Page Optimization'),
        ];

        $data[]=[
            'name'=>'Other Activities',
            'slug'=>Str::slug('Other Activities'),
        ];

        $data[]=[
            'name'=>'Report',
            'slug'=>Str::slug('Report'),
        ];
        $data[]=[
            'name'=>'Customer Support',
            'slug'=>Str::slug('Customer Support'),
        ];

    }
}
