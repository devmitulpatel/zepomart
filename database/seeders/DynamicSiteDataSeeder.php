<?php

namespace Database\Seeders;

use App\Models\DynamicSiteData;
use App\Models\MainSite;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DynamicSiteDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $model= DynamicSiteData::class;

        $data=[];

        $this->createBasicData($data);
        $this->createRootUserData($data);
        $this->createHomeData($data);
        $this->createServiceData($data);
        $this->createContactData($data);
        $this->createAboutData($data);
        $this->createSeoPackageData($data);

        seed_model($model,$data);
        $allData=DynamicSiteData::all();


        foreach (MainSite::all() as $site){
            $site->siteData()->attach($allData->pluck('id'));
        }


    }

    public function createSeoPackageData(&$data){

        $data[]=[
            'name'=>'Site Seo Page Heading Text',
            'slug'=>Str::slug('Site Seo Page Heading Text'),
            'value'=>'BEST SEO PLANS AND AFFORDABLE SEO PACKAGES IN INDIA',
        ];

        $data[]=[
            'name'=>'Site Seo Page decription Text',
            'slug'=>Str::slug('Site Seo Page decription Text'),
            'value'=>'
			<p align="justify">In the world online business, visibility determines the winner and in order to be visible, every business owner needs to invest in <strong>SEO services</strong> simply because it increases your web exposure in search engines and with the ever increasing level of competition, it’s imperative for you to stay up to date with the latest techniques of being visible.</p>
<p align="justify">Marketing is tough, <strong>digital marketing</strong> is harder, but <strong>FinPlus Business Solution’s</strong> range of <strong>affordable SEO packages</strong> will not only help your company flourish but can also achieve profitable milestones.<br>
Whether you’re a small business or a large corporation, we have one of the <strong>best SEO plans</strong> and prices for you to pick which cater exclusively to your business needs.</p>',
        ];
    }
    public function createBasicData(&$data){

        $data[]=[
            'name'=>'Site Charset',
            'slug'=>Str::slug('Site Charset'),
            'value'=>'utf-8',
        ];
        $data[]=[
            'name'=>'Site Viewport',
            'slug'=>Str::slug('Site Viewport'),
            'value'=>'width=device-width, initial-scale=1.0',
        ];
        $data[]=[
            'name'=>'Site Author',
            'slug'=>Str::slug('Site Author'),
            'value'=>'Mitul Patel',
        ];


        $data[]=[
            'name'=>'Site Name',
            'slug'=>Str::slug('Site Name'),
            'value'=>'Ecommerce Agency Mumbai | Website Design Services | Digital Marketing',
        ];
        $data[]=[
            'name'=>'Site Description',
            'slug'=>Str::slug('Site Description'),
            'value'=>'We are an eCommerce Agency in Mumbai, offering E-commerce service provider, Best Website design & development, Digital Marketing Services, Digital Branding.',
        ];

        $data[]=[
            'name'=>'Site Keywords',
            'slug'=>Str::slug('Site Keywords'),
            'value'=>'bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup',
        ];


        $data[]=[
            'name'=>'Site Copywrite text',
            'slug'=>Str::slug('Site Copywrite text'),
            'value'=>'© '.date('Y').' Zepomart. <br class="d-none d-lg-block" />All rights reserved.</p>',
        ];

    }
    public function createHomeData(&$data){

        $data[]=[
            'name'=>'Site Header Action Button Text',
            'slug'=>Str::slug('Site Header Action Button Text'),
            'value'=>'Contact',
        ];
        $data[]=[
            'name'=>'Site Section 1 Display Text',
            'slug'=>Str::slug('Site Section 1 Display Text'),
            'value'=>'Creative. Smart. Awesome.',
        ];

        $data[]=[
            'name'=>'Site Section 1 Tag Text',
            'slug'=>Str::slug('Site Section 1 Tag Text'),
            'value'=>'We are an award winning web & mobile design agency that strongly believes in the power of creative ideas.',
        ];

        $data[]=[
            'name'=>'Site Section 1 Image 1',
            'slug'=>Str::slug('Site Section 1 Image 1'),
            'value'=>'assets/img/illustrations/i8.png',
        ];

        $data[]=[
            'name'=>'Site Landing Picture',
            'slug'=>Str::slug('Site Landing Picture'),
            'value'=>'assets/img/photos/bg9.jpg',
        ];


    }
    public function createContactData(&$data){

        $data[]=[
            'name'=>'Site Contact Section Display Text',
            'slug'=>Str::slug('Site Contact Section Display Text'),
            'value'=>"Got any questions? Don't hesitate to get in touch.",
        ];
        $data[]=[
            'name'=>'Site Contact Section Tag Text',
            'slug'=>Str::slug('Site Contact Section Tag Text'),
            'value'=>"Get In Touch",
        ];

        $data[]=[
            'name'=>'Site Contact Section Icon',
            'slug'=>Str::slug('Site Contact Section Icon'),
            'value'=>'assets/img/illustrations/i5.png',
        ];


    }
    public function createAboutData(&$data){

        $data[]=[
            'name'=>'Site About Us Display Text',
            'slug'=>Str::slug('Site About Us Display Text'),
            'value'=>"FEW THINGS ABOUT US?",
        ];

        $data[]=[
            'name'=>'Site About Us Description Text',
            'slug'=>Str::slug('Site About Us Description Text'),
            'value'=>'<p style="text-align: justify; padding: 0 20px 0 20px;">We are a team of like-minded individual who believes eCommerce is the face of new economy. With the fast evolving digital environment, we realised that setting up and growing a business online is a challenging task for any entity. With the intention of serving them and to realise full potential of digital world FinPlus came into existence.&ZeroWidthSpace;</p>
<p style="text-align: justify; padding: 0 20px 0 20px;">We have a young and dynamic team of people with diverse expertise. The team is a combination of Chartered Accountants, Management graduates, online market experts who takes pride in serving partner brands in every step of their online journey and enjoys each other success.</p>
<p style="text-align: justify; padding: 0 20px 0 20px;">Our motivation lies in the appreciation we get from our partner brands which inspires us to excel further.</p>
<p style="text-align: justify; padding: 0 20px 0 20px;">Our philosophy is to create value for Society, employees, customers, and business ethically and diligently.&nbsp;We care deeply about our work and the impact it has on the world. We apply our talent, hustle, and willpower to every challenge we take on. We treat our clients like partners and our team members like family.&nbsp;As a company, we want to create a culture which encourages creativity and innovations. We are a team which is agile loves&nbsp;challenges,&nbsp;keeps evolving, and enjoys each other’s success in the process. We are <strong>#TeamFinPlus.</strong></p>',
        ];


        $data[]=[
            'name'=>'Site About Us Step Title',
            'slug'=>Str::slug('Site About Us Step Title'),
            'value'=>'OUR WORK PROCESS',
        ];

        $data[]=[
            'name'=>'Site About Us Step Description',
            'slug'=>Str::slug('Site About Us Step Description'),
            'value'=>'Ceaser’s Hand and Plato’s brain<br>Just Kidding!<br>',
        ];


        $data[]=[
            'name'=>'Site About Us Step Sub 1 Title',
            'slug'=>Str::slug('Site About Us Step 1 Title'),
            'value'=>'planning & strategy',
        ];
        $data[]=[
            'name'=>'Site About Us Step Sub 1 Description',
            'slug'=>Str::slug('Site About Us Step 1 Description'),
            'value'=>'We analyze the situation to place ourselves in the correct scenario and plan the strategy that will work.',
        ];



        $data[]=[
            'name'=>'Site About Us Step Sub 2 Title',
            'slug'=>Str::slug('Site About Us Step 2 Title'),
            'value'=>'design & develop',
        ];
        $data[]=[
            'name'=>'Site About Us Step Sub 2 Description',
            'slug'=>Str::slug('Site About Us Step 2 Description'),
            'value'=>'We devise the right strategy that best suits your needs and design an outline to develop your brand’s identity.',
        ];

        $data[]=[
            'name'=>'Site About Us Step Sub 3 Title',
            'slug'=>Str::slug('Site About Us Step 3 Title'),
            'value'=>'test & deliver',
        ];
        $data[]=[
            'name'=>'Site About Us Step Sub 3 Description',
            'slug'=>Str::slug('Site About Us Step 3 Description'),
            'value'=>'We don’t want to sell our services, rather we want to give what is right for you. We test our work (unlike any chef) and then deliver it freshly on your table.',
        ];




        $data[]=[
            'name'=>'Page About Us Display Text',
            'slug'=>Str::slug('Page About Us Display Text'),
            'value'=>"Hello! This is Zepomart",
        ];
        $data[]=[
            'name'=>'Page About Us Sub Title Text',
            'slug'=>Str::slug('Page About Us Sub Title Text'),
            'value'=>"A company turning ideas into beautiful real things.",
        ];



        $data[]=[
            'name'=>'Page About Us Section Display Text',
            'slug'=>Str::slug('Page About Us Section Display Text'),
            'value'=>"FEW THINGS ABOUT US?",
        ];
        $data[]=[
            'name'=>'Page About Us Section Sub Title Text',
            'slug'=>Str::slug('Page About Us Section Sub Title Text'),
            'value'=>"Our motivation lies in the appreciation we get from our partner brands which inspires us to excel further.",
        ];

        $data[]=[
            'name'=>'Page About Us Section Description Text',
            'slug'=>Str::slug('Page About Us Section Description Text'),
            'value'=>"We are a team of like-minded individual who believes eCommerce is the face of new economy. With the fast evolving digital environment, we realised that setting up and growing a business online is a challenging task for any entity. With the intention of serving them and to realise full potential of digital world FinPlus came into existence.",
        ];

        $data[]=[
            'name'=>'Page About Us Section Process Description Text 1',
            'slug'=>Str::slug('Page About Us Section Process Description Text 1'),
            'value'=>"Our philosophy is to create value for Society, employees, customers, and business ethically and diligently. We care deeply about our work and the impact it has on the world. We apply our talent, hustle, and willpower to every challenge we take on. We treat our clients like partners and our team members like family. As a company, we want to create a culture which encourages creativity and innovations. We are a team which is agile loves challenges, keeps evolving, and enjoys each other’s success in the process",
        ];
        $data[]=[
            'name'=>'Page About Us Section Process Sub Description Text',
            'slug'=>Str::slug('Page About Us Section Process Sub Description Text'),
            'value'=>"
We are the owners of the sphere, Of the seven stars and the Solar years, Of Ceaser’s Hand and Plato’s brain
Just Kidding!",
        ];
        $data[]=[
            'name'=>'Page About Us Section Process Title Text 1',
            'slug'=>Str::slug('Page About Us Section Process Title Text 1'),
            'value'=>"OUR WORK PROCESS",
        ];
        $data[]=[
            'name'=>'Page About Us Section Process action Text',
            'slug'=>Str::slug('Page About Us Section Process action Text'),
            'value'=>"Reach us to know more about us",
        ];



    }
    public function createServiceData(&$data){
        $data[]=[
            'name'=>'Site Service Section Display Text',
            'slug'=>Str::slug('Site Service Section Display Text'),
            'value'=>'OUR SERVICES',
        ];
        $data[]=[
            'name'=>'Site Service Section Tag Text',
            'slug'=>Str::slug('Site Service Section Tag Text'),
            'value'=>'Integer posuere erat a ante venenatis dapibus posuere velit aliquet. ',
        ];

        $data[]=[
            'name'=>'Site Service Section Service 1 Title',
            'slug'=>Str::slug('Site Service Section Service 1 Title'),
            'value'=>'Marketing',
        ];

        $data[]=[
            'name'=>'Site Service Section Service 1 Icon',
            'slug'=>Str::slug('Site Service Section Service 1 Icon'),
            'value'=>'assets/img/icons/lineal/megaphone.svg',
        ];

        $data[]=[
            'name'=>'Site Service Section Service 1 Description',
            'slug'=>Str::slug('Site Service Section Service 1 Description'),
            'value'=>'Start Selling on multiple eCommerce marketplaces like amazon, flipkart, paytm, myntra and many more.',
        ];



        $data[]=[
            'name'=>'Site Service Section Service 2 Title',
            'slug'=>Str::slug('Site Service Section Service 2 Title'),
            'value'=>'Strategy',
        ];

        $data[]=[
            'name'=>'Site Service Section Service 2 Icon',
            'slug'=>Str::slug('Site Service Section Service 2 Icon'),
            'value'=>'assets/img/icons/lineal/target.svg',
        ];

        $data[]=[
            'name'=>'Site Service Section Service 2 Description',
            'slug'=>Str::slug('Site Service Section Service 2 Description'),
            'value'=>'
Give your business an online identity. FinPlus code ninjas create the best website design for your brand. ',
        ];


        $data[]=[
            'name'=>'Site Service Section Service 3 Title',
            'slug'=>Str::slug('Site Service Section Service 3 Title'),
            'value'=>'Development',
        ];

        $data[]=[
            'name'=>'Site Service Section Service 3 Icon',
            'slug'=>Str::slug('Site Service Section Service 3 Icon'),
            'value'=>'assets/img/icons/lineal/settings-3.svg',
        ];

        $data[]=[
            'name'=>'Site Service Section Service 3 Description',
            'slug'=>Str::slug('Site Service Section Service 3 Description'),
            'value'=>'It is all about being different and unique. Unless you speak, people won’t know you.',
        ];


        $data[]=[
            'name'=>'Site Service Section Service 4 Title',
            'slug'=>Str::slug('Site Service Section Service 4 Title'),
            'value'=>'Data Analysis',
        ];

        $data[]=[
            'name'=>'Site Service Section Service 4 Icon',
            'slug'=>Str::slug('Site Service Section Service 4 Icon'),
            'value'=>'assets/img/icons/lineal/bar-chart.svg',
        ];

        $data[]=[
            'name'=>'Site Service Section Service 4 Description',
            'slug'=>Str::slug('Site Service Section Service 4 Description'),
            'value'=>'The Indian Ecommerce is seeing +ve growth trajectory and is expected to become the second largest Ecommerce market in the world',
        ];


    }

    public function createRootUserData(&$data){

        $data[]=[
            'name'=>'Site Contact Email',
            'slug'=>Str::slug('Site Contact Email'),
            'value'=>'support@zepomart.com',
        ];

        $data[]=[
            'name'=>'Site Contact Number 1',
            'slug'=>Str::slug('Site Contact Number 1'),
            'value'=>'+91 9104046593',
        ];
        $data[]=[
            'name'=>'Site Short Address',
            'slug'=>Str::slug('Site Short Address'),
            'value'=>'F-713, 7<sup>th</sup> Floor, Titanium City Center Corporate Office,100 feet AnandNagar Road, Ahmedabad,Gujarat-380015',
        ];

        $data[]=[
            'name'=>'Site Logo',
            'slug'=>Str::slug('Site Logo'),
            //'value'=>'assets/img/logo.png',
            'value'=>'images/logo.png',
        ];
        $data[]=[
            'name'=>'Site Logo Light',
            'slug'=>Str::slug('Site Logo Light'),
            //'value'=>'assets/img/logo-light.png',
            'value'=>'images/logo.png',
        ];

        $data[]=[
            'name'=>'Site Footer Logo',
            'slug'=>Str::slug('Site Footer Logo'),
           // 'value'=>'assets/img/logo-light.png',
            'value'=>'images/logo.png',
        ];

        $data[]=[
            'name'=>'Site Current Currency Symbol',
            'slug'=>Str::slug('Site Current Currency Symbol'),
            // 'value'=>'assets/img/logo-light.png',
            'value'=>'₹',
        ];

    }
}
