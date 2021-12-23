<?php

namespace Database\Seeders;

use App\Models\MainSite;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MainSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[];
        $this->createDefaultData($data);

        seed_model(MainSite::class,$data);
    }

    private function createDefaultData(&$data)
    {
        $data[]=[
            'name'=>'Sample WebSite',
            'slug'=>Str::slug('Sample WebSite'),
            'domain'=>'zepomart.test',
            'owner_id'=>1,
        ];

        $data[]=[
            'name'=>'Test WebSite',
            'slug'=>Str::slug('Test WebSite'),
            'domain'=>'zepomart.test',
            'owner_id'=>1,
        ];


    }
}
