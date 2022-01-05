<?php

use App\Http\Resources\PlanResource;
use App\Models\PackagePlans;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('/packages/{slug?}',function ($slug='seo-packages'){

    $data= PackagePlans::whereHas('type',function (Builder $query)use($slug){
        $query->where('slug',$slug);
    })->get()->load(['features']);

    goto finalOutput;

    return PlanResource::collection(
        \App\Models\SeoPlan::
        with(['features'])
            ->get()
            ->sortBy('sort'))
        ->additional(['categories'=>\App\Models\SeoPlanFeatureCat::all()]
        );

    finalOutput:
    return PlanResource::collection(
      $data
    )
        ->additional(['categories'=>\App\Models\SeoPlanFeatureCat::all()]
    );



})->name('packages');
