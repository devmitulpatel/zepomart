<?php

use App\Http\Resources\PlanResource;
use App\Models\Categories;
use App\Models\PackagePlans;
use App\Models\SeoPlanFeatureCat;
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

$zepomartTestWebsite='zepomart.test';
$zepomartProductionWebsite='www.zepomart.com';
$crowdtizeTestWebsite='customerform.crowdtize.test';
$crowdtizeProductionWebsite='userform.crowdtize.com';


$zepoMartWebsiteRoutes=function (){
    Route::get('/packages/{slug?}',function ($slug='seo-packages'){

        $data= PackagePlans::with(['features','cost'])->whereHas('type',function (Builder $query)use($slug){
            $query->where('slug',$slug);
        })->get();

        // dd($data->toArray());

        goto finalOutput;

        return PlanResource::collection(
            \App\Models\SeoPlan::
            with(['features'])
                ->get()
                ->sortBy('sort'))
            ->additional(['categories'=> SeoPlanFeatureCat::all()]
            );



        finalOutput:
        return PlanResource::collection(
            $data
        )
            ->additional(['categories'=> Categories::all()]
            );



    })->name('packages');
};


Route::group(['domain' => $zepomartTestWebsite], function()use ($zepoMartWebsiteRoutes)
{

  $zepoMartWebsiteRoutes();

});

