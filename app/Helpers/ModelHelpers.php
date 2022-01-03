<?php


use App\Models\TableUpdate;

if(!function_exists('seed_model')){

    function seed_model($model,$data):void{
        foreach ($data as $value){
            $model::create($value);
        }
    }

}


if(!function_exists('able_model_schema')){
    function able_model_schema($table,$related){
        $type=implode('_',[$related,'type']);

        $related=implode('_',[$related,'id']);

        $table->id();
        $table->unsignedBigInteger($related);
        $table->string($type);
        $table->boolean('status')->default(1);
        $table->timestamps();
    }
}
if(!function_exists('update_model')){

    function update_model($model){
      //  $model=get_class($model);

       // dd(TableUpdate::where('type',$model)->update(['version'=>\Illuminate\Support\Str::uuid()->toString()]));
    }

}
