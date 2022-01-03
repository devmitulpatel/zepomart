<?php

namespace App\Traits;

use App\Models\Categorizable;
use App\Models\Featureable;
use Illuminate\Support\Str;
use Laravel\Sanctum\NewAccessToken;

trait HasFeature
{

    public function features()
    {
        return $this->morphMany(Featureable::class, 'featureable');
    }

    public function createFeature(string $name,$type=null)
    {
        $feature=new Featureable();
        $feature->name=$name;
        $feature->type=$type;
        $feature->slug=Str::slug($name);
        //dd($this->features()->save($feature));
        $type=new Categorizable();
        $feature->name="demo";
        $feature->type=$type;

        return $feature;
    }

    public function allFeatures(){

    }

}
