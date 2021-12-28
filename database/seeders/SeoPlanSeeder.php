<?php

namespace Database\Seeders;

use App\Models\PlanFeature;
use App\Models\SeoPlan;
use App\Models\SocialNetwork;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SeoPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model= SeoPlan::class;
        $data=[];
        $this->createBasicData($data);
        seed_model($model,$data);

        $allFetaures=PlanFeature::all()->pluck('id')->toArray();
        foreach ($model::all() as $plan){
            $plan->features()->attach($allFetaures);

        }

    }

    private function createBasicData(array &$data)
    {
        $data[]=[
            'name'=>'Silver',
            'slug'=>Str::slug('Silver'),
            'description'=>'10 keywords',
            'monthly_cost'=>15000,
            'yearly_cost'=>180000,
            'featured'=>0,
            'sort'=>1
        ];

        $data[]=[
            'name'=>'Gold',
            'slug'=>Str::slug('Gold'),
            'description'=>'15 keywords',
            'monthly_cost'=>20000,
            'yearly_cost'=>240000,
            'featured'=>1,
            'sort'=>2
        ];

        $data[]=[
            'name'=>'Platinum',
            'slug'=>Str::slug('Platinum'),
            'description'=>'25 keywords',
            'monthly_cost'=>25000,
            'yearly_cost'=>300000,
            'featured'=>0,
            'sort'=>3
        ];


    }
}
