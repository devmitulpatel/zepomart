<?php
//$teams=\App\Models\TeamData::with('socials')->where('id',2)->first();
////$teams->first();
////dd($teams);
//
//
//$socialNetwork=\App\Models\SocialNetwork::all()->last();
//
//
//
//dd($teams->createSocialLink($socialNetwork,'demo324234'));

dd(get_site_social());

dd(\App\Models\Navigation::with(['parent'])->get()->groupBy('parent')->toArray());

dd(replace_with_magic('Hello {!-=name=-!} lives here {!-=address=-!}',['name'=>'Mitul','address'=>'Gnadhinagar']));

use App\Models\DynamicSiteData;
$row=DynamicSiteData::where('id',1)->first();
$row->value=\Illuminate\Support\Str::uuid();
    $row->save();
    //->update(['value'=>]);
