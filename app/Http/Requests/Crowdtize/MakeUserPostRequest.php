<?php

namespace App\Http\Requests\Crowdtize;

use App\Http\Resources\Crowdtize\RegistredUserResource;
use App\Models\Crowdtize\RegistredUser;
use Illuminate\Foundation\Http\FormRequest;

class MakeUserPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     *  name:this.name,
        city:this.city,
        state:this.state,
        area:this.area,
        payment_gateway:this.payment_gateway,
        mobile_no_payment:this.mobile_no_payment,
        mobile_no_whatsapp:this.mobile_no_whatsapp
     */
    public function rules()
    {
        return [
            'name'=>['required'],
            'sponsor_id'=>['required','exists:App\Models\Crowdtize\Sponsor,slug'],
            'city'=>['required'],
            'state'=>['required'],
            'area'=>['required'],
            'payment_gateway'=>['required'],
            'mobile_no_payment'=>['required'],
            'mobile_no_whatsapp'=>['required','unique:App\Models\Crowdtize\RegistredUser,mobile_no_whatsapp'],
         //   'mobile_no_whatsapp3'=>['required'],
            //
        ];
    }


    public function presist(){


        $input=$this->validated();
        $model=new RegistredUser ();
        foreach ($input as $k=>$v){
            $model->$k=$v;
        }

        $model->save();
        //$model->ref_code=implode('',['CR',now()->year,str_pad($model->id, 4, "0", STR_PAD_LEFT)]);
        $model->ref_code=implode('',['CR',str_pad($model->id, 4, "0", STR_PAD_LEFT)]);
        $model->save();
        return RegistredUserResource::make($model);

    }

    public function messages()
    {
        return [
            'mobile_no_whatsapp.unique' => 'Whatsapp Number already registered.',
        ];
    }
}
