<?php

namespace App\Http\Requests\Crowdtize;

use App\Http\Resources\Crowdtize\RegistredUserResource;
use App\Models\Crowdtize\RegistredUser;
use App\Models\Crowdtize\Sponsor;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

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
            'first_name'=>['required'],
            'last_name'=>['required'],
            'sponsor_id'=>['required'],
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
        if(Sponsor::where('slug',$input['sponsor_id'])->count()>0 || RegistredUser::where('ref_code',$input['sponsor_id'])->count()>0 ){
            $model=new RegistredUser ();

            foreach ($input as $k=>$v){
                $model->$k=$v;
            }

          //  if($input['sponsor_id']!='test1')dd($model);

            $model->save();
            //$model->ref_code=implode('',['CR',now()->year,str_pad($model->id, 4, "0", STR_PAD_LEFT)]);
            $model->ref_code= $this->getNewRefCode();
            $model->save();
            return RegistredUserResource::make($model);
        }else{
            throw  ValidationException::withMessages(['sponsor_id' => ['Please enter valid Sponsor ID']]);

        }

    }

    public function getNewRefCode(){
        $ref_code=[];

        $input=$this->validated();
        $ref_code[]=substr(strtolower($input['first_name']), 0, 2);
        $ref_code[]=substr(strtolower($input['last_name']), 0, 2);
        $ref_code[]=now()->format('y');
        $ref_code[]=substr(strtolower($input['city']), 0, 2);
        $ref_code[]=substr(strtolower($input['state']), 0, 2);

        return implode('',$ref_code);
    }

    public function messages()
    {
        return [
            'mobile_no_whatsapp.unique' => 'Whatsapp Number already registered.',
        ];
    }
}
