<?php

namespace Tests\Feature;

use App\Models\Crowdtize\RegistredUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    use RefreshDatabase;

        private $zepomartTestWebsite='zepomart.test';
        private $zepomartProductionWebsite='www.zepomart.com';
        private $crowdtizeTestWebsite='customerform.crowdtize.test';
        private $crowdtizeProductionWebsite='userform.crowdtize.com';
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {




       // $response = $this->get('/');
       // $response->assertStatus(404);
        $response = $this->get(implode('',['http://',$this->crowdtizeTestWebsite,'/']));
        $response->assertStatus(200);
    }

    public function test_crowdtize_api(){

        $this->artisan('migrate:fresh --seed');

        $data=[

            'sponsor_id'=>'test1',
                'first_name'=>'Mitul',
                'last_name'=>'Patel',
                'city'=>'Gandhinagar',
                'state'=>'Gujarat',
                'area'=>'Sector 1c',
                'payment_gateway'=>'1',
                'mobile_no_payment'=>'9662621134',
                'mobile_no_whatsapp'=>'9662621134'
        ];
        $response = $this->postJson(implode('',['http://',$this->crowdtizeTestWebsite,'/api/users/create']),$data);
        $response->assertStatus(201);
//        $new_sponsor_id=RegistredUser::all()->first()->pluck('ref_code');
//        $data['sponsor_id']=$new_sponsor_id;
//       // dd($new_sponsor_id);
//        $response = $this->postJson(implode('',['http://',$this->crowdtizeTestWebsite,'/api/users/create']),$data);
//        $response->assertStatus(422);


    }

    public function test_crowdtize_api_2(){

        $this->artisan('migrate:fresh --seed');



        $data=[

            'sponsor_id'=>'test1',
            'first_name'=>'Mitul',
            'last_name'=>'Patel',
            'city'=>'Gandhinagar',
            'state'=>'Gujarat',
            'area'=>'Sector 1c',
            'payment_gateway'=>'1',
            'mobile_no_payment'=>'9662621134',
            'mobile_no_whatsapp'=>'9662621134'
        ];
        $response = $this->postJson(implode('',['http://',$this->crowdtizeTestWebsite,'/api/users/create']),$data);
        $response ->assertStatus(201);

        $response = $this->postJson(implode('',['http://',$this->crowdtizeTestWebsite,'/api/users/create']),$data);
        $response->assertStatus(422)->assertJsonValidationErrorFor('mobile_no_whatsapp');

        $new_sponsor_id=RegistredUser::all()->first()->pluck('ref_code')->first();
        $data['sponsor_id']=$new_sponsor_id;
        $data['mobile_no_whatsapp']='9662621135';
        $response = $this->postJson(implode('',['http://',$this->crowdtizeTestWebsite,'/api/users/create']),$data);
        $response->assertStatus(201);

        $data['sponsor_id']=$new_sponsor_id."3";
        $data['mobile_no_whatsapp']="1234567890";
        $response = $this->postJson(implode('',['http://',$this->crowdtizeTestWebsite,'/api/users/create']),$data);
        $response->assertStatus(422)->assertJsonValidationErrorFor('sponsor_id');
    }
}
