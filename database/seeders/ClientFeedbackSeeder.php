<?php

namespace Database\Seeders;

use App\Models\ClientFeedback;
use App\Models\PlanFeature;
use App\Models\SeoPlan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ClientFeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model= ClientFeedback::class;
        $data=[];
        $this->createBasicData($data);
        seed_model($model,$data);

    }

    private function createBasicData(array &$data)
    {
        $data[]=[
            'name'=>'MRS. MANPREET',
            'post'=>'Owner',
            'company'=>'Western Wear',
            'message'=>'I was completely new to this business model and the team was there to guide me in every step, Now I have successfully established my brand on the marketplaces',
            //'link'=>180000,
            //'route'=>0,
        ];

        $data[]=[
            'name'=>'MR. JAYAKUMAR',
            'post'=>'Owner',
            'company'=>'Anti Radiation Chipsets',
            'message'=>'Zepomart team helped me in achieving sales better than I expected, proactive and efficient.',
            //'link'=>180000,
            //'route'=>0,
        ];
        $data[]=[
            'name'=>'MR. ABDUL RAHEEM',
            'post'=>'Owner',
            'company'=>'Men & Women Ethnic Wear',
            'message'=>'Since the time of association we’ve grown and the team has done a great job in managing our online business. I could focus more on my core operations and providing quality products for the customers.',
            //'link'=>180000,
            //'route'=>0,
        ];




    }
}
