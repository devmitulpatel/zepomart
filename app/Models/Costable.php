<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costable extends Model
{
    use HasFactory;

    public static $typeOfValueType=[
        1,//monthly
        2,//yearly
    ];
    public static $defaultTypeOfValueType=1;
}
