<?php

use App\Models\PackagePlans;
use Illuminate\Database\Eloquent\Builder;

$slug='seo-packages';
$data= PackagePlans::whereHas('type',function (Builder $query)use ($slug) {
    $query->where('slug', $slug);
})->get()->first();


dd(PackagePlans::first()->whereHas('type',function (Builder $query)use($slug){
    $query->where('slug',$slug);
})->count());





dd($model->features);
