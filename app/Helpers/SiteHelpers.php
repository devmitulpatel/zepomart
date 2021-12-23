<?php

use App\Models\DynamicSiteData;
use App\Models\MainSite;
use App\Models\TeamData;
use Illuminate\Support\Str;

const DEFAULT_DB_CATCH_TIME = 1;
const DEFAULT_DB_CATCH_VERY_FEW_TIME = 150;


if(!function_exists('get_sub_navigation')){
    function get_sub_navigation($hasSub,$data,$allData){
        $nav=[];
        foreach ($data as $root) {

            $foundSub = $allData->where('parent', $root->id);

            $nav[]=[
                'root'=>$root,
                'sub'=>$foundSub,
                'haveSub'=>($foundSub->count()>0 )
            ];
        }
        return $nav;
    }
}


if(!function_exists('get_navigation')){
    function get_navigation(){

        $allNavs=\App\Models\Navigation::all();
        $roots=$allNavs->where('parent',0);
        $nav=[];

        foreach ($roots as $root){

           $foundSub=$allNavs->where('parent',$root->id);
           $hasSubMenu=$allNavs->where('parent',$foundSub->pluck('id'));
           $nav[]=[
               'root'=>$root,
               'sub'=>get_sub_navigation($hasSubMenu,$foundSub,$allNavs),
               'haveSub'=>($foundSub->count()>0 )
           ];
        }
        return  $nav;


        return \App\Models\Navigation::with(['parent'])->get()->groupBy('parent')->toArray();
    }
}

if(!function_exists('replace_with_magic')){
    function replace_with_magic($str='',$data=[],$prefix='{!-=',$perfix='=-!}'){
        foreach ($data as $k=>$v){
            $key=implode('',[$prefix,$k,$perfix]);
            $str=str_ireplace($key, $v, $str);
        }
        return $str;
    }
}

if(!function_exists('remember_domain')){
    function remember_domain(){
        if(!cache('mainDomain')||true)

            cache()->remember('mainDomain', DEFAULT_DB_CATCH_VERY_FEW_TIME, function () {
            return MainSite::where('domain',request()->getHost())->first()->siteData;
        });
    }
}


if(!function_exists('get_dynamic')){

    function get_dynamic($slug){
        $request=request();
        remember_domain();
        //$mainSite= MainSite::where('domain',$request->getHost())->first();
        //cache()->forget('mainSite'.$slug);
        if(!cache('mainSite'.$slug)||true)
            cache()->remember('mainSite'.$slug, DEFAULT_DB_CATCH_TIME, function ()use ($request,$slug) {
                $domainBase=cache('mainDomain');

                if(!cache('mainDomain')||$domainBase==null){
                    $domainBase=MainSite::where('domain',$request->getHost())->first()->siteData;
                }
                return $domainBase->where('slug',Str::slug($slug))->first()->value;
            });

        $mainSite=cache('mainSite'.$slug);


        return $mainSite;
        $model= DynamicSiteData::where('slug',Str::slug($slug));
        return ($model->first()!=null)?$model->first()->value:null;
    }

}
if(!function_exists('get_color')){

    function get_color($i=1,$preFix=null){

        switch ($i){
            case 1:
                $iconColor='blue';
                break;
            case 2:
                $iconColor='green';
                break;
            case 3:
                $iconColor='yellow';
                break;
            case 4:
                $iconColor='red';
                break;
        }
        if($preFix!=null)$iconColor=implode('-',[$preFix,$iconColor]);
        return $iconColor;
    }

}
if(!function_exists('get_teams')){
    function get_teams(){

       // cache()->forget('teamData');
        if(!cache('teamData'))
            cache()->remember('teamData', DEFAULT_DB_CATCH_TIME, function (){
                return TeamData::all()->load(['socials']);
            });

        return cache('teamData');



        return TeamData::all();
            //->load(['socials']);
    }

}
if(!function_exists('get_site_social')){
    function get_site_social(){

        $domain=null;
        if($domain==null)$domain=MainSite::whereKey(1)->first();
        $domain->load(['socials']);
        return $domain->socials;
    }
}