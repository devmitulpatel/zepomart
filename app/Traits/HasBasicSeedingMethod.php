<?php

namespace App\Traits;

trait HasBasicSeedingMethod
{

    //public $model=null;
    //public $methodsToRun=[];
    //public $defaultToRun=['createBasicData'];
   // public $afterRun=['afterAll'];


    public function run()
    {
        $model= $this->model;
        $data=[];
        foreach ($this->defaultToRun as $method){
            $this->$method($data);
        }
        foreach ($this->methodsToRun as $method){
            $this->$method($data);
        }
        seed_model($model,$data);
        foreach ($this->afterRun as $method){
            $this->$method();
        }

    }

    public function createBasicData(&$data){
        $data[]=[];
    }
    public function afterAll(){

    }



}
