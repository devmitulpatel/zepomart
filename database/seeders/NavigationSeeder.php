<?php

namespace Database\Seeders;

use App\Models\DynamicSiteData;
use App\Models\MainSite;
use App\Models\Navigation;
use App\Models\SocialNetwork;
use App\Models\TableUpdate;
use Faker\Generator;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model= Navigation::class;
        $data=[];
        $this->createBasicData($data);

        $this->makeSocialEntry();
        seed_model($model,$data);
    }

    private function createBasicData(array &$data)
    {
        $faker = Container::getInstance()->make(Generator::class);

        $data[]=[
            'display'=>'Home',
            'slug'=>Str::slug('Home'),
            'parent'=>0,
            'route'=>'home',
        ];

        $data[]=[
            'display'=>'Our Services',
            'slug'=>Str::slug('Our Services'),
            'parent'=>0,
        ];

        $data[]=[
            'display'=>'eCommerce Management',
            'slug'=>Str::slug('eCommerce Management'),
            'parent'=>2,
        ];

        $data[]=[
            'display'=>'Website Development',
            'slug'=>Str::slug('Website Design & Development'),
            'parent'=>2,
        ];
        $data[]=[
            'display'=>'Digital Branding',
            'slug'=>Str::slug('Digital Branding'),
            'parent'=>2,
        ];

        $data[]=[
            'display'=>'Vendor Registration',
            'slug'=>Str::slug('Vendor Registration'),
            'parent'=>3,
        ];

        $data[]=[
            'display'=>'Catalogue Listing',
            'slug'=>Str::slug('Catalogue Listing'),
            'parent'=>3,
        ];

        $data[]=[
            'display'=>'Price Management',
            'slug'=>Str::slug('Price Management'),
            'parent'=>3,
        ];

        $data[]=[
            'display'=>'Order Management',
            'slug'=>Str::slug('Order Management'),
            'parent'=>3,
        ];

        $data[]=[
            'display'=>'Order Management',
            'slug'=>Str::slug('Order Management'),
            'parent'=>3,
        ];

        $data[]=[
            'display'=>'Marketplace promotion',
            'slug'=>Str::slug('Marketplace promotion'),
            'parent'=>3,
        ];

        $data[]=[
            'display'=>'Feedback & Review Management',
            'slug'=>Str::slug('Feedback & Review Management'),
            'parent'=>3,
        ];

        $data[]=[
            'display'=>'Marketplace Payment Reconciliations',
            'slug'=>Str::slug('Marketplace Payment Reconciliations'),
            'parent'=>3,
        ];

        $data[]=[
            'display'=>'Custom Ecommerce Development',
            'slug'=>Str::slug('Custom Ecommerce Development'),
            'parent'=>3,
        ];
        $data[]=[
            'display'=>'E-commerce Account Management',
            'slug'=>Str::slug('E-commerce Account Management'),
            'parent'=>3,
        ];

        $data[]=[
            'display'=>'Amazon Account Management Services',
            'slug'=>Str::slug('Amazon Account Management Services'),
            'parent'=>3,
        ];
        $data[]=[
            'display'=>'PHP Developer',
            'slug'=>Str::slug('PHP Developer'),
            'parent'=>4,
        ];

        $data[]=[
            'display'=>'CodeIgniter Developer',
            'slug'=>Str::slug('CodeIgniter Developer'),
            'parent'=>4,
        ];
        $data[]=[
            'display'=>'Laravel Developer',
            'slug'=>Str::slug('Laravel Developer'),
            'parent'=>4,
        ];
        $data[]=[
            'display'=>'Magento Developer',
            'slug'=>Str::slug('Magento Developer'),
            'parent'=>4,
        ];
        $data[]=[
            'display'=>'WordPress Developer',
            'slug'=>Str::slug('WordPress Developer'),
            'parent'=>4,
        ];
        $data[]=[
            'display'=>'WooCommerce Development Services',
            'slug'=>Str::slug('WooCommerce Development Services'),
            'parent'=>4,
        ];
        $data[]=[
            'display'=>'Hire Woocommerce Developer',
            'slug'=>Str::slug('Hire Woocommerce Developer'),
            'parent'=>4,
        ];


        $data[]=[
            'display'=>'Search Engine Optimisation',
            'slug'=>Str::slug('Search Engine Optimisation'),
            'parent'=>5,
        ];

        $data[]=[
            'display'=>'Social Media Optimisation',
            'slug'=>Str::slug('Social Media Optimisation'),
            'parent'=>5,
        ];


        $data[]=[
            'display'=>'Search Engine Marketing',
            'slug'=>Str::slug('Search Engine Marketing'),
            'parent'=>5,
        ];
        $data[]=[
            'display'=>'Social Media Marketing',
            'slug'=>Str::slug('Social Media Marketing'),
            'parent'=>5,
        ];
        $data[]=[
            'display'=>'Digital Marketing Agency',
            'slug'=>Str::slug('Digital Marketing Agency'),
            'parent'=>5,
        ];

        $data[]=[
            'display'=>'Packages',
            'slug'=>Str::slug('Packages'),
            'parent'=>0,

        ];

        $data[]=[
            'display'=>'SEO Packages',
            'slug'=>Str::slug('SEO Packages'),
            'parent'=>29,

        ];

        $data[]=[
            'display'=>'Our Clients',
            'slug'=>Str::slug('Our Clients'),
            'parent'=>0,

        ];

        $data[]=[
            'display'=>'Blog',
            'slug'=>Str::slug('Blog'),
            'parent'=>0,
        ];

        $data[]=[
            'display'=>'Association',
            'slug'=>Str::slug('Association'),
            'parent'=>0,
        ];


    }

    private function makeSocialEntry()
    {
        $allSocial=SocialNetwork::all();
        $currentSite=MainSite::where('id',1)->first();

        foreach ($allSocial as $social){

            $link=implode('/',[$social->name,$currentSite->name]);
            $currentSite->createSocialLink($social,$link);

        }
    }
}
