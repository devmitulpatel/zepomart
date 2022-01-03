<?php

namespace App\Models;

use App\Traits\HasCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Featureable extends Model
{
    use HasFactory,HasCategory;
}
