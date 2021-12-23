@extends('layouts.root')
@section('content')

    <div style="
        background: #fff url({{asset(get_dynamic('Site Landing Picture'))}}) center center/cover no-repeat local ;
        min-height: 115vh;
        position: absolute;
        min-width: 100vw;
        margin-top: -135px;
        moz-transform: scaleX(-1);
        -o-transform: scaleX(-1);
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
        filter: FlipH;
        -ms-filter: "FlipH";

        ">

    </div>

    <div style="z-index: 1980!important;">
        @include('Sections.landing')
        @include('Sections.services')
        @include('Sections.process')
        @include('Sections.about')
        @include('Sections.clients')
        @include('Sections.contact')
    </div>

@endsection
