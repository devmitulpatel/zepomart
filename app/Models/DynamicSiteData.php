<?php

namespace App\Models;

use App\Observers\DynamicSiteDataObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DynamicSiteData extends Model
{
    use HasFactory;
    public static $typeOfValueDisplay=[
        1,//string
        2,//number
        3,//date
        4,//datetime
        5,//time
        6,//array
    ];
    public static $defaultTypeOfValueDisplay=1;

    protected $dispatchesEvents = [
       // 'updating' => DynamicSiteDataObserver::class,
        'updated'  => DynamicSiteDataObserver::class,
       // 'creating' => DynamicSiteDataObserver::class,
       // 'saved'    => DynamicSiteDataObserver::class,
    ];
}
