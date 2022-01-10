<?php

namespace App\Traits;

use App\Models\Categorizable;
use App\Models\Costable;
use Illuminate\Support\Str;

trait HasCost
{
    public function cost()
    {
        return $this->morphMany(Costable::class, 'costable');
    }

    public function createCost(int $cost,int $type=1)
    {
        $costModel=new Costable();
        $costModel->cost=$cost;
        $costModel->type=$type;
        $this->cost()->save($costModel);
        return $costModel;
    }
}
