<?php


use App\Models\TableUpdate;

if(!function_exists('seed_model')){

    function seed_model($model,$data):void{
        foreach ($data as $value){
            $model::create($value);
        }
    }

}


if(!function_exists('update_model')){

    function update_model($model){
      //  $model=get_class($model);

       // dd(TableUpdate::where('type',$model)->update(['version'=>\Illuminate\Support\Str::uuid()->toString()]));
    }

}
