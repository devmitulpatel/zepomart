<?php

namespace Database\Seeders;

use App\Models\PlanFeature;
use App\Models\SocialNetwork;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PlanFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model= PlanFeature::class;
        $data=[];
        $this->createBasicData($data);
        seed_model($model,$data);

    }

    private function createBasicData(array &$data)
    {


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

    }
}
