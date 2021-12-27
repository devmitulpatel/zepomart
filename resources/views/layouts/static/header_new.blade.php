
<nav class="navbar navbar-expand-lg navbar-light d-flex flex-column navbar-light">

    <div class="d-flex flex-column justify-content-between vw-100  infobar-top d-none d-lg-block d-xl-block">
        <div class=" ">
            <div class="container">

                <div class="d-flex justify-content-between">
                    <div class="d-flex justify-content-around">
                        <div class="py-1 px-2">
                            <a href="mailto:{{get_dynamic('Site Contact Email')}}" class="disabled">
                                <i class="uil uil-mailbox p-1"></i>  {{get_dynamic('Site Contact Email')}}
                        </div>
                        <div class="py-1 px-2">
                            <a href="tel:{{get_dynamic('Site Contact Number 1')}}">
                                <i class="uil uil-phone  p-1"></i>  {{get_dynamic('Site Contact Number 1')}}
                            </a>

                        </div>
                    </div>

                    <div>
                        <nav class="nav social justify-content-center text-center mb-0">

                            @foreach(get_site_social() as $links)
                                <a href="{{$links->pivot->link}}"><i class="{{$links->icon_class}} infobar-icon"></i></a>
                            @endforeach
                            <a href="https://web.whatsapp.com/send?phone={{get_dynamic('Site Contact Number 1')}}&amp;text="><i class="uil uil-whatsapp infobar-icon"></i></a>

                        </nav>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="container">


        <div class="navbar-brand">
            <a href="{{route('home')}}">
                <img src="{{asset(get_dynamic('Site Logo'))}}" alt="" style="max-height: 70px;padding: 15px;" />
            </a>
        </div>

        <div class="navbar-collapse w-100 offcanvas-nav" id="navbarExample01">
            <div class="offcanvas-header d-lg-none d-xl-none">
                <a href="{{route('home')}}"><img src="{{asset(get_dynamic('Site Logo Light'))}}"  alt="" style="max-height: 40px;
background-color: white;
    padding: 13px 15px;
    border-style: groove;
    max-height: 70px;
    border-radius: 17px;
    box-shadow: -5px 5px 14px rgb(0,0, 0 ,0.9);
" /></a>
                <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
            </div>
            <ul class="navbar-nav py-1 " style=" text-transform: capitalize;">

                @foreach(get_navigation() as $nav)
                    @if(!$nav['haveSub'])

                        @php
                            $url=['#',$nav['root']->slug];
                            $derivedUrl=$nav['root']->route??$nav['root']->link;
                            if($nav['root']->route!=null){
                                $derivedUrl=route($derivedUrl);
                                $url=[$derivedUrl];
                            }

                        $url=implode('',$url);
                        @endphp

                        <li class="nav-item py-1"><a class="nav-link scroll" href="{{$url}}">{{$nav['root']->display}}</a></li>
                    @else

                        <li class="nav-item dropdown py-1">
                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  {{$nav['root']->display}}  </a>
                            <ul class="dropdown-menu" >

                               @foreach($nav['sub'] as $subnav)

                                   @if($subnav['haveSub'])
                                        <li class="nav-item  py-1">
                                            <a class="nav-link dropdown-toggle py-1" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                                > {{$subnav['root']->display}}</a>
                                            <ul class="dropdown-menu text-white ">
                                                @foreach($subnav['sub'] as $supersub)
                                                    <li><a class="dropdown-item" href="#scrollspyHeading3">> {{$supersub->display}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li class="nav-item  py-1">
                                            <a class="nav-link py-1">> {{$subnav['root']->display}}</a>

                                        </li>
                                    @endif



                                @endforeach





                            </ul>
                        </li>
                    @endif
                @endforeach

            </ul>



        </div>
        <div>
            <a href="{{route('contact-us')}}"><div class="btn contact-btn btn-sm ">Contact</div></a>
        </div>
        <div class="navbar-hamburger  navbar-toggler"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
    </div>
</nav>
