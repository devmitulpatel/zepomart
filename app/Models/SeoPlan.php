<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoPlan extends Model
{
    use HasFactory;


    public function features(){
        return $this->belongsToMany(PlanFeature::class,'plan_feature_pivot','plan_id','feature_id')->withPivot(['value','status']);
    }
}
