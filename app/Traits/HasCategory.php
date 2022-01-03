<?php

namespace App\Traits;

use App\Models\Categorizable;
use App\Models\Featureable;
use Illuminate\Support\Str;
use Laravel\Sanctum\NewAccessToken;

trait HasCategory
{


    public function categories()
    {
        return $this->morphMany(Categorizable::class, 'categorizable');
    }

    public function createCategory(string $name)
    {
        $feature=new Categorizable();
        $feature->name=$name;
        $feature->slug=Str::slug($name);
        $this->categories()->save($feature);
        return $feature;
    }

}
