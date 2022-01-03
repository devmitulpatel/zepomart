<?php

namespace Database\Seeders;

use App\Models\PackageType;
use App\Traits\HasBasicSeedingMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PackageTypeSeeder extends Seeder
{

    use HasBasicSeedingMethod;
    public $model=PackageType::class;
    public $methodsToRun=[];
    public $defaultToRun=['createBasicData'];
    public $afterRun=['afterAll'];

    public function createBasicData(&$data){
        $data[]=[
            'name'=>'Seo Packages',
            'slug'=>Str::slug('Seo Packages'),
        ];

        $data[]=[
            'name'=>'eCommerce Marketing',
            'slug'=>Str::slug('eCommerce Marketing'),
        ];

    }

}
