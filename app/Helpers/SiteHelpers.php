<?php

use App\Models\ClientFeedback;
use App\Models\DynamicSiteData;
use App\Models\MainSite;
use App\Models\StaticPage;
use App\Models\TeamData;
use Illuminate\Support\Str;

const DEFAULT_DB_CATCH_TIME = 1;
const DEFAULT_DB_CATCH_VERY_FEW_TIME = 150;









if(!function_exists('seed_array')){
    function only_numbers($string){
        return preg_replace('/[^0-9]/', '', $string);
    }
}
if(!function_exists('get_css_js_version')){
    function get_css_js_version(){
        return 'v='.env('APP_CSS_JS_VERSION',now()->toString());
    }
}
if(!function_exists('seed_array')){
    function seed_array($name,$value){
        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'value'=>$value,
        ];
    }
}
if(!function_exists('get_client_feedbacks')){
    function get_client_feedbacks(){
        $model= ClientFeedback::query()->inRandomOrder()->take(3)->get();
        return $model;
    }
}
if(!function_exists('get_valid_link')){
    function get_valid_link($data):string{
        $url='';
        if($data->link!=null){
            $url=$data->link;
        }else if($data->route!=null){
            $url=route($data->route);
        }
        if($url=='')$url=implode('',['#',$data->slug]);
        return $url;

    }
}

if(!function_exists('check_valid_domain')){

    function check_valid_domain(){
        $host=request()->getHost();
        $foundDomain=MainSite::where('domain',$host);
        if($foundDomain->count()<1)abort(404);
        remember_domain();
    }


}
if(!function_exists('get_static_page_content')){
    function get_static_page_content($slug){
        $foundPage= StaticPage::where('slug',$slug)->first();
        if($foundPage==null)abort(404);
        return $foundPage->content;
    }
}
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


        $roots->sortBy('sort');

        foreach ($roots as $root){

           $foundSub=$allNavs->where('parent',$root->id);
           $hasSubMenu=$allNavs->where('parent',$foundSub->pluck('id'));
           $nav[]=[
               'root'=>$root,
               'sub'=>get_sub_navigation($hasSubMenu,$foundSub,$allNavs),
               'haveSub'=>($foundSub->count()>0),
               'sort'=>$root->sort
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

            cache()->remember('mainRoot',DEFAULT_DB_CATCH_VERY_FEW_TIME,function (){
                return MainSite::where('domain',request()->getHost())->first();
            });
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
                if(!$domainBase->where('slug',Str::slug($slug))->first())return null;
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
        if($domain==null)$domain=cache('mainRoot');
        $domain->load(['socials']);
        return $domain->socials->take(3);
    }
}
