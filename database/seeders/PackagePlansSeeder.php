<?php

namespace Database\Seeders;

use App\Models\PackagePlans;
use App\Models\PackageType;
use App\Traits\HasBasicSeedingMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PackagePlansSeeder extends Seeder
{
    use HasBasicSeedingMethod;
    public $model=PackagePlans::class;
    public $methodsToRun=[];
    public $defaultToRun=['createBasicData'];
    public $afterRun=['afterAll'];

    public function createBasicData(&$data){

        $seoType=1;
        $ecomType=2;

        $data[]=[
            'name'=>'Silver',
            'slug'=>Str::slug('Silver'),
            'plan_type'=>$seoType,
        ];
     $data[]=[
                'name'=>'Gold',
                'slug'=>Str::slug('Gold'),
                'plan_type'=>$seoType,
            ];
     $data[]=[
                'name'=>'Platinum',
                'slug'=>Str::slug('Platinum'),
                'plan_type'=>$seoType,
            ];
     $data[]=[
                'name'=>'Platinum',
                'slug'=>Str::slug('Platinum'),
                'plan_type'=>$ecomType,
            ];


    }

    public function afterAll(){
        foreach ($this->model::all()  as $plan   ){


            switch ($plan->plan_type){
                case 1:
                    foreach ($this->createDefaultFeatureSeo() as $feature){

                        $plan->createFeature($feature['name'],$feature['type']);
                    }

                    break;

                case 2:
                    foreach ($this->createDefaultFeatureMarketing() as $feature){

                        $plan->createFeature($feature['name'],$feature['type']);
                    }

                    break;

            }





        }

    }

    private function createDefaultFeatureSeo()
    {

        $data=[];
        $opd=1;//On Page Optimization
        $ofpd=2;//Off-Page Optimization
        $oa=3;//Other Activities
        $report=4;//Report
        $cs=5;//Customer Support



        $data[]=[
            'name'=>'Keywords Research',
            'slug'=>Str::slug('Keywords Research'),
            'type'=>$opd,
        ];

        $data[]=[
            'name'=>'H1, H2 Optimization',
            'slug'=>Str::slug('H1, H2 Optimization'),
            'type'=>$opd,
        ];




        $data[]=[
            'name'=>'Meta & Title Tag Optimization',
            'slug'=>Str::slug('Meta & Title Tag Optimization'),
            'type'=>$opd,
        ];



        $data[]=[
            'name'=>'Robot.Txt Optimization',
            'slug'=>Str::slug('Robot.Txt Optimization'),
            'type'=>$opd,
        ];


        $data[]=[
            'name'=>'Search Engine Friendly URL Creation',
            'slug'=>Str::slug('Search Engine Friendly URL Creation'),
            'type'=>$opd,
        ];
        $data[]=[
            'name'=>'Sitemap Creation',
            'slug'=>Str::slug('Sitemap Creation'),
            'type'=>$opd,
        ];



        $data[]=[
            'name'=>'Image & Hyperlink Optimization',
            'slug'=>Str::slug('Image & Hyperlink Optimization'),
            'type'=>$opd,
        ];


        $data[]=[
            'name'=>'Implement Schema Markup',
            'slug'=>Str::slug('Implement Schema Markup'),
            'type'=>$opd,
        ];

        $data[]=[
            'name'=>'Implement FOG & Twitter Cards',
            'slug'=>Str::slug('Implement FOG & Twitter Cards'),
            'type'=>$opd,
        ];

        $data[]=[
            'name'=>'Create Google My Business Page',
            'slug'=>Str::slug('Create Google My Business Page'),
            'type'=>$opd,
        ];

        $data[]=[
            'name'=>'Directory Submission',
            'slug'=>Str::slug('Directory Submission'),
            'type'=>$ofpd,
        ];

        $data[]=[
            'name'=>'Social Bookmarking Submission',
            'slug'=>Str::slug('Social Bookmarking Submission'),
            'type'=>$ofpd,
        ];

        $data[]=[
            'name'=>'Article Writing',
            'slug'=>Str::slug('Article Writing'),
            'type'=>$ofpd,
        ];

        $data[]=[
            'name'=>'Article Submission',
            'slug'=>Str::slug('Article Submission'),
            'type'=>$ofpd,
        ];
        $data[]=[
            'name'=>'Blog Writing',
            'slug'=>Str::slug('Blog Writing'),
            'type'=>$ofpd,
        ];

        $data[]=[
            'name'=>'Blog Submission',
            'slug'=>Str::slug('Blog Submission'),
            'type'=>$ofpd,
        ];
        $data[]=[
            'name'=>'Forum Posting',
            'slug'=>Str::slug('Forum Posting'),
            'type'=>$ofpd,
        ];

        $data[]=[
            'name'=>'PPT Creation',
            'slug'=>Str::slug('PPT Creation'),
            'type'=>$ofpd,
        ];
        $data[]=[
            'name'=>'PPT Submission',
            'slug'=>Str::slug('PPT Submission'),
            'type'=>$ofpd,
        ];

        $data[]=[
            'name'=>'Press Release Writing',
            'slug'=>Str::slug('Press Release Writing'),
            'type'=>$ofpd,
        ];

        $data[]=[
            'name'=>'Press Release Submission',
            'slug'=>Str::slug('Press Release Submission'),
            'type'=>$ofpd,
        ];

        $data[]=[
            'name'=>'Video Creation',
            'slug'=>Str::slug('Video Creation'),
            'type'=>$ofpd,
        ];

        $data[]=[
            'name'=>'Video Submission',
            'slug'=>Str::slug('Video Submission'),
            'type'=>$ofpd,
        ];

        $data[]=[
            'name'=>'Google Analytic Set Up',
            'slug'=>Str::slug('Google Analytic Set Up'),
            'type'=>$oa,
        ];

        $data[]=[
            'name'=>'Sitemap Creation',
            'slug'=>Str::slug('Sitemap Creation'),
            'type'=>$oa,
        ];
        $data[]=[
            'name'=>'Google Webmaster Set Up',
            'slug'=>Str::slug('Google Webmaster Set Up'),
            'type'=>$oa,
        ];
        $data[]=[
            'name'=>'Monthly SEO Report',
            'slug'=>Str::slug('Monthly SEO Report'),
            'type'=>$report,
        ];
        $data[]=[
            'name'=>'Keyword Ranking Report',
            'slug'=>Str::slug('Keyword Ranking Report'),
            'type'=>$report,
        ];
        $data[]=[
            'name'=>'Google Analytic Report',
            'slug'=>Str::slug('Google Analytic Report'),
            'type'=>$report,
        ];

        $data[]=[
            'name'=>'Email',
            'slug'=>Str::slug('Email'),
            'type'=>$cs,
        ];
        $data[]=[
            'name'=>'Chat',
            'slug'=>Str::slug('Chat'),
            'type'=>$cs,
        ];
        $data[]=[
            'name'=>'Phone',
            'slug'=>Str::slug('Phone'),
            'type'=>$cs,
        ];
        return $data;

    }

    private function createDefaultFeatureMarketing(){
        $data=[];
        $res=1;//Research
        $opti=2;//Optimization
        $ads=3;//Ads & PPC
        $aproval=3;//Approval
        $data[]=[
            'name'=>'Amazon Initial Process Flow Research',
            'type'=>$res,
        ];
        $data[]=[
            'name'=>'Amazon Product Research',
            'type'=>$res,
        ];
        $data[]=[
            'name'=>'Amazon Product Price Research',
            'type'=>$res,
        ];
        $data[]=[
            'name'=>'Amazon Product Price Research',
            'type'=>$res,
        ];
        $data[]=[
            'name'=>'Keyword research for existing products',
            'type'=>$res,
        ];

        $data[]=[
            'name'=>'Initial Workout on Amazon/Flipkart Profile Creation',
            'type'=>$opti,
        ];
        $data[]=[
            'name'=>'Amazon Product Filtering',
            'type'=>$opti,
        ];
        $data[]=[
            'name'=>'Amazon Product Selection',
            'type'=>$opti,
        ];
        $data[]=[
            'name'=>'Amazon Product Price Calculations',
            'type'=>$opti,
        ];
        $data[]=[
            'name'=>'Amazon Product Content Write Up',
            'type'=>$opti,
        ];
        $data[]=[
            'name'=>'Campaign performance optimization',
            'type'=>$opti,
        ];
        $data[]=[
            'name'=>'Product description update',
            'type'=>$opti,
        ];
        $data[]=[
            'name'=>'Keyword placing in product title and description',
            'type'=>$opti,
        ];
        $data[]=[
            'name'=>'Amazon A+ Content Creation and Update',
            'type'=>$opti,
        ];
        $data[]=[
            'name'=>'Amazon Storefront Creation',
            'type'=>$opti,
        ];
        $data[]=[
            'name'=>'Detailed Analysis and Future planning',
            'type'=>$opti,
        ];
        $data[]=[
            'name'=>'Detailed Analysis and Future planning',
            'type'=>$opti,
        ];

        $data[]=[
            'name'=>'Amazon/Flipkart Sponsored Products Ads',
            'type'=>$ads,
        ];

        $data[]=[
            'name'=>'Amazon/Flipkart Headline Search Ads',
            'type'=>$ads,
        ];
        $data[]=[
            'name'=>'Amazon/Flipkart/Snapdeal Product Display Ads',
            'type'=>$ads,
        ];
        $data[]=[
            'name'=>'Amazon/Flipkart/Snapdeal Brand campaigns',
            'type'=>$ads,
        ];
        $data[]=[
            'name'=>'Amazon Great Indian Festival and Flipkart Big Billion Days sale preparation/other offer/promo code etc generation and participation if any',
            'type'=>$ads,
        ];


        $data[]=[
            'name'=>'GTIN exemption request to list products',
            'type'=>$aproval,
        ];
        $data[]=[
            'name'=>'Brand Name Approval',
            'type'=>$aproval,
        ];
        $data[]=[
            'name'=>'Brand Registry',
            'type'=>$aproval,
        ];
        $data[]=[
            'name'=>'FBA Registration Process ',
            'type'=>$aproval,
        ];
        $data[]=[
            'name'=>'APOB addition in GSTIN – we will take CA’s help from your end.',
            'type'=>$aproval,
        ];

        $data[]=[
            'name'=>'•	APOB addition in FSSAI licence - we will take CA’s help from your end.',
            'type'=>$aproval,
        ];
        $data[]=[
            'name'=>'Ticket raising and monitoring to resolve if any',
            'type'=>$aproval,
        ];
        $data[]=[
            'name'=>'On-time ad campaign reporting',
            'type'=>$aproval,
        ];
        $data[]=[
            'name'=>'Amazon FBA Approval',
            'type'=>$aproval,
        ];
        $data[]=[
            'name'=>'Amazon Product Policy Violation resolutions',
            'type'=>$aproval,
        ];




        return $data;


    }
}
