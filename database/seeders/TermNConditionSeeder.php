<?php

namespace Database\Seeders;

use App\Models\Crowdtize\TermNCondition;
use App\Models\SocialNetwork;
use App\Models\TeamData;
use Faker\Generator;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class TermNConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model= TermNCondition::class;
        $data=[];
        $this->createBasicData($data);
        seed_model($model,$data);

    }

    private function createBasicData(array &$data)
    {

        $data[]= [
               'sort'=>1,
                'value'=>'CROWDTIZE at its discretion can change its rules, regulations, policies and procedures as amended by the company Zepomart Technologies Private Limited from time to time.',
            ];
        $data[]= [
                'sort'=>2,
                'value'=>'The Subscriber agrees not to enter or participate in any other competitor activity/in any other similar concept company. ',
            ];
        $data[]= [
                'sort'=>3,
                'value'=>'Nothing in this Agreement shall establish an employment relationship or any other labour relationship between the Subscriber and the above-mentioned company. ',
            ];
        $data[]= [
                'sort'=>4,
                'value'=>'CROWDTIZE may in its absolute discretion immediately suspend and/or terminate the SUBSCRIBER by notice without writing to the SUBSCRIBER in the event that CROWDTIZE has reasonable grounds to believe that the SUBSCRIBER application contains incomplete, inaccurate false or misleading information or breached any provision of this agreement, its rules, regulations, policies or procedures as amended from time to time. ',
            ];
        $data[]= [
                'sort'=>5,
                'value'=>'CROWDTIZE shall not be liable for any incidental or consequential damages caused by its breach cancellation or suspension of this agreement, whether or not the possibility for such damages is known to the company.',
            ];
        $data[]= [
                'sort'=>6,
                'value'=>'CROWDTIZE is not responsible for any payment made through individual but not reaching the company. ',
            ];
        $data[]= [
                'sort'=>7,
                'value'=>'The SUBSCRIBER hereby confirms that he/she has entered into this Agreement as a INDIVIDUAL SUBSCRIBER to sell CROWDTIZE VIEWERSHIP TO OTHER SUBSCRIBERS. ',
            ];
        $data[]= [
                'sort'=>8,
                'value'=>'CROWDTIZE SUBSCRIBER CAN INTRODUCE OTHER VIEWER AS A SUBSCRIBER OF CROWDTIZE.',
            ];
        $data[]= [
                'sort'=>9,
                'value'=>'CROWDTIZE deal exclusively with the SUBSCRIBER in his/her name in all the business matters like VIEWERSHIP payments, recognition and other benefits. ',
            ];
        $data[]= [
                'sort'=>10,
                'value'=>'Statutory dues as and when directed by the Government like TAXES GST etc., along with the service charges and other deduction will be charged by the company. ',
            ];
        $data[]= [
                'sort'=>11,
                'value'=>'The SUBSCRIBER needs to activate the SUBSCRIBERSHIP by Daily update their WhatsApp status with post provide by Crowdtize on their WhatsApp. Failure to activate the SUBSCRIBERSHIP will result in automatic termination of this agreement. ',
            ];
        $data[]= [
                'sort'=>12,
                'value'=>'This SUBSCRIBERSHIP agreement is entered into on a personal basis and may not be assigned or transferred during the SUBSCRIBERS lifetime to a third party without CROWDTIZE written consent and all other necessary legal formalities as per company’s law. ',
            ];
        $data[]= [
                'sort'=>13,
                'value'=>'No other similar VIEWERSHIP should be discussed/promoted by the SUBSCRIBER especially ON SOCIAL MEDIA PLATFORMS. ',
            ];
        $data[]= [
                'sort'=>14,
                'value'=>'The company reserves the right to amend or terminate the marketing policies in part or full with/without prior notice. ',
            ];
        $data[]= [
                'sort'=>15,
                'value'=>'The Distributor shall not sell CROWDTIZE VIEWERSHIP exceeding the SUBSCRIPTION CHARGES fixed by the company from time to time. ',
            ];
        $data[]= [
                'sort'=>16,
                'value'=>'Relation and other activities between SUBSCRIBER & the VIEWER shall be governed by the rules, in addition to this agreement (A) the company brochure (B) rules of conduct policies and procedure which company may amend from time to time, with immediate effect. ',
            ];
        $data[]= [
                'sort'=>17,
                'value'=>'Jurisdiction in respect of any/all disputes arising out of or in relation to this Business Distributor Agreement shall vest exclusively in the Courts at Ahmedabad only. ',
            ];
        $data[]= [
                'sort'=>18,
                'value'=>'Also SUBSCRIBER should not have any objection in receiving any promotional SMS/E-mail/ SOCIAL MEDIA MESSAGES/ POSTS FOR WHATS UP STATUS and other messaging tools from CROWDTIZE.',
            ];
        $data[]= [
                'sort'=>19,
                'value'=>'Company can change payment conditions any time without any prior notice.',
            ];
        $data[]= [
                'sort'=>20,
                'value'=>'SUBSCRIBER will be responsible incase of manipulating the genuine procedure of promotions for earning money and will be penalized for the same.',
            ];

    }
}
