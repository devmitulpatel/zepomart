<?php

namespace App\Models;

use App\Traits\HasFeature;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagePlans extends Model
{
    use HasFactory,HasFeature;
    public function type(){
        return $this->hasOne(PackageType::class,'id','plan_type');
    }
}
