<?php

use App\Http\Controllers\Crowdtize\PageContoller;
use App\Http\Controllers\Crowdtize\User;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});


$zepomartTestWebsite='zepomart.test';
$zepomartProductionWebsite='www.zepomart.com';
$crowdtizeTestWebsite='customerform.crowdtize.test';
$crowdtizeProductionWebsite='userform.crowdtize.com';

$zepoMartWebsiteRoutes=function (){

    Route::view('/','Pages.home')->name('home');
    Route::view('/contact-us','Pages.contact-us')->name('contact-us');
    Route::view('/about-us','Pages.about-us')->name('about-us');
    Route::view('/blog','Pages.about-us')->name('blog');

    Route::get('/page/{slug?}',[StaticPageController::class,'defaultFallback']);
    Route::view('/seo-packages','Pages.seo-packages_new')->name('seo-packages');
    Route::view('/ecommerce-marketing-packages','Pages.ecommerce-marketing-packages')->name('ecommerce-marketing-packages');


};
$crowdtizeWebsiteRoutes=function (){

    Route::view('/','Crowdtize.form');

    Route::post('api/users/create', [User::class,'store'])->name('Users.create');
    Route::view('export','Crowdtize.export')->name('Users.export.page');
    Route::get('export/file', [PageContoller::class,'export'])->name('Users.export');
    Route::view('terms-and-condition', 'Crowdtize.termsncondition')->name('terms.n.conditions');
    Route::fallback(function (){
        return view('errors.404_crowdtize',[],[],404);
    });

};







//Route::group(['domain' => $zepomartProductionWebsite], function()use ($zepoMartWebsiteRoutes)
//{
//$zepoMartWebsiteRoutes();
//
//});
//Route::group(['domain' => $crowdtizeProductionWebsite], function()use ($crowdtizeWebsiteRoutes)
//{
//    $crowdtizeWebsiteRoutes();
//
//});



Route::group(['domain' => $zepomartTestWebsite], function()use ($zepoMartWebsiteRoutes)
{
$zepoMartWebsiteRoutes();

});

Route::group(['domain' => $crowdtizeTestWebsite], function()use ($crowdtizeWebsiteRoutes)
{
    $crowdtizeWebsiteRoutes();

});


Route::get('/debug/export/db/{dbName}',function ($dbName){
    $disk=Storage::disk('database');
    if(!$disk->exists($dbName))return view('errors.404_crowdtize',[],[],404);
    $name=implode('_',[$dbName,now()->format('d_m_y')]);
    return Storage::disk('database')->download($dbName,$name);
});
