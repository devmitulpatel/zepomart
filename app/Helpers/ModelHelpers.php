<?php


use App\Models\TableUpdate;
use Illuminate\Database\Schema\Blueprint;


if(!function_exists('seed_array')){
    function seed_array($name,$value){
        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'value'=>$value,
        ];
    }
}

if(!function_exists('seed_model')){

    function seed_model($model,$data):void{
        foreach ($data as $value){
            $model::create($value);
        }
    }

}


if(!function_exists('able_model_schema')){
    function able_model_schema(Blueprint $table,$related){
        $type=implode('_',[$related,'type']);

        $related=implode('_',[$related,'id']);

        $table->id();
        $table->unsignedBigInteger($related);
        $table->string($type);
        $table->boolean('status')->default(1);
        $table->timestamps();
    }
}
if(!function_exists('simple_value_model_schema')){
    function simple_value_model_schema(Blueprint $table){
        $table->id();
        $table->string('name')->nullable();
        $table->string('slug')->nullable();
        $table->longText('value')->nullable();
        $table->unsignedBigInteger('sort')->default(0);
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
