<?php

namespace Database\Seeders;

use App\Models\Crowdtize\Sponsor;
use App\Models\Crowdtize\TermNCondition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model= Sponsor::class;
        $data=[];
        $this->createBasicData($data);
        seed_model($model,$data);

    }

    private function createBasicData(array &$data)
    {

        $data[] = [
            'name' => 'test1',
            'slug' => Str::slug('test1'),
        ];
    }
}
