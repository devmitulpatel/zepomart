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


        $ouSort=3;
        $ecomSort=4;
        $wdSort=5;
        $dbSort=6;

        $data[]=[
            'display'=>'Home',
            'slug'=>Str::slug('Home'),
            'parent'=>0,
            'route'=>'home',
            'sort'=>1
        ];

        $data[]=[
            'display'=>'About us',
            'slug'=>Str::slug('About us'),
            'parent'=>0,
            'route'=>'about-us',
            'sort'=>2
        ];

        $data[]=[
            'display'=>'Our Services',
            'slug'=>Str::slug('Our Services'),
            'parent'=>0,
            'sort'=>3
        ];

        $data[]=[
            'display'=>'eCommerce Management',
            'slug'=>Str::slug('eCommerce Management'),
            'parent'=>$ouSort,
        ];

        $data[]=[
            'display'=>'Website Development',
            'slug'=>Str::slug('Website Design & Development'),
            'parent'=>$ouSort,
        ];
        $data[]=[
            'display'=>'Digital Branding',
            'slug'=>Str::slug('Digital Branding'),
            'parent'=>$ouSort,
        ];

        $data[]=[
            'display'=>'Vendor Registration',
            'slug'=>Str::slug('Vendor Registration'),
            'parent'=>$ecomSort,
        ];

        $data[]=[
            'display'=>'Catalogue Listing',
            'slug'=>Str::slug('Catalogue Listing'),
            'parent'=>$ecomSort,
        ];

        $data[]=[
            'display'=>'Price Management',
            'slug'=>Str::slug('Price Management'),
            'parent'=>$ecomSort,
        ];

        $data[]=[
            'display'=>'Order Management',
            'slug'=>Str::slug('Order Management'),
            'parent'=>$ecomSort,
        ];

        $data[]=[
            'display'=>'Order Management',
            'slug'=>Str::slug('Order Management'),
            'parent'=>$ecomSort,
        ];

        $data[]=[
            'display'=>'Marketplace promotion',
            'slug'=>Str::slug('Marketplace promotion'),
            'parent'=>$ecomSort,
        ];

        $data[]=[
            'display'=>'Feedback & Review Management',
            'slug'=>Str::slug('Feedback & Review Management'),
            'parent'=>$ecomSort,
        ];

        $data[]=[
            'display'=>'Marketplace Payment Reconciliations',
            'slug'=>Str::slug('Marketplace Payment Reconciliations'),
            'parent'=>$ecomSort,
        ];

        $data[]=[
            'display'=>'Custom Ecommerce Development',
            'slug'=>Str::slug('Custom Ecommerce Development'),
            'parent'=>$ecomSort,
        ];
        $data[]=[
            'display'=>'E-commerce Account Management',
            'slug'=>Str::slug('E-commerce Account Management'),
            'parent'=>$ecomSort,
        ];

        $data[]=[
            'display'=>'Amazon Account Management Services',
            'slug'=>Str::slug('Amazon Account Management Services'),
            'parent'=>$ecomSort,
        ];


        $data[]=[
            'display'=>'Dynamic Website Design',
            'slug'=>Str::slug('Dynamic Website Design'),
            'parent'=>$wdSort,
        ];

        $data[]=[
            'display'=>'PHP Developer',
            'slug'=>Str::slug('PHP Developer'),
            'parent'=>$wdSort,
        ];

        $data[]=[
            'display'=>'CodeIgniter Developer',
            'slug'=>Str::slug('CodeIgniter Developer'),
            'parent'=>$wdSort,
        ];
        $data[]=[
            'display'=>'Laravel Developer',
            'slug'=>Str::slug('Laravel Developer'),
            'parent'=>$wdSort,
        ];
        $data[]=[
            'display'=>'Magento Developer',
            'slug'=>Str::slug('Magento Developer'),
            'parent'=>$wdSort,
        ];
        $data[]=[
            'display'=>'WordPress Developer',
            'slug'=>Str::slug('WordPress Developer'),
            'parent'=>$wdSort,
        ];
        $data[]=[
            'display'=>'WooCommerce Development Services',
            'slug'=>Str::slug('WooCommerce Development Services'),
            'parent'=>$wdSort,
        ];
        $data[]=[
            'display'=>'Hire Woocommerce Developer',
            'slug'=>Str::slug('Hire Woocommerce Developer'),
            'parent'=>$wdSort,
        ];


        $data[]=[
            'display'=>'Search Engine Optimisation',
            'slug'=>Str::slug('Search Engine Optimisation'),
            'parent'=>$dbSort,
        ];

        $data[]=[
            'display'=>'Social Media Optimisation',
            'slug'=>Str::slug('Social Media Optimisation'),
            'parent'=>$dbSort,
        ];


        $data[]=[
            'display'=>'Search Engine Marketing',
            'slug'=>Str::slug('Search Engine Marketing'),
            'parent'=>$dbSort,
        ];
        $data[]=[
            'display'=>'Social Media Marketing',
            'slug'=>Str::slug('Social Media Marketing'),
            'parent'=>$dbSort,
        ];
        $data[]=[
            'display'=>'Digital Marketing Agency',
            'slug'=>Str::slug('Digital Marketing Agency'),
            'parent'=>$dbSort,
        ];

        $data[]=[
            'display'=>'Packages',
            'slug'=>Str::slug('Packages'),
            'parent'=>0,
            'sort'=>3

        ];

        $data[]=[
            'display'=>'SEO Packages',
            'slug'=>Str::slug('SEO Packages'),
            'parent'=>31,
            'route'=>'seo-packages'

        ];

        $data[]=[
            'display'=>'Our Clients',
            'slug'=>Str::slug('Our Clients'),
            'parent'=>0,
            'sort'=>4

        ];

        $data[]=[
            'display'=>'Blog',
            'slug'=>Str::slug('Blog'),
            'parent'=>0,
            'sort'=>5,
            'route'=>'blog'
        ];

//        $data[]=[
//            'display'=>'Association',
//            'slug'=>Str::slug('Association'),
//            'parent'=>0,
//            'sort'=>6
//        ];


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
