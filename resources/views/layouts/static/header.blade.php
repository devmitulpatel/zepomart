<header class="wrapper bg-gray">
 <nav class="navbar navbar-expand-lg center-logo transparent navbar-light pt-0">
        <div class="d-flex flex-column">
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
            <div class="d-flex container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="{{route('home')}}">
                        <img src="{{asset(get_dynamic('Site Logo'))}}" alt="" style="max-height: 70px;padding: 15px;" />
                    </a>
                </div>
                <div class="navbar-collapse offcanvas-nav">
                    <div class="offcanvas-header d-lg-none d-xl-none">
                        <a href="{{route('home')}}" style="background-color: white;
    padding: 13px 15px;
    border-style: groove;
    max-height: 70px;
    border-radius: 17px;
    box-shadow: -5px 5px 14px rgb(0,0, 0 ,0.9);"><img src="{{asset(get_dynamic('Site Logo Light'))}}"  alt="" style="max-height: 40px" /></a>
                        <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
                    </div>

                    <ul class="navbar-nav">


                        @foreach(get_navigation() as $nav)
                            @if(!$nav['haveSub'])



                                <li class="nav-item"><a class="nav-link scroll" href="#{{$nav['root']->slug}}">{{$nav['root']->display}}</a></li>

                            @else

                                <li class="nav-item dropdown">
                                    <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  {{$nav['root']->display}}  </a>
                                    <ul class="dropdown-menu" >
                                        <li class="dropdown-item-text">
                                            <div class="d-flex justify-content-between">

                                                @foreach($nav['sub'] as $subnav)
                                                    <div class="col px-1">

                                                        @if($subnav['haveSub'])

                                                            <div class="list-group list-group-flush">
                                                                <a href="#" class="list-group-item text-blue list-group-item-action disabled p-0"><i class="uil uil-angle-right"></i>{{$subnav['root']->display}}</a>
                                                                @foreach($subnav['sub'] as $supersubnav)
                                                                    <a href="#" class=" list-group-item-action py-1 small">
                                                                        <i class="uil uil-angle-right"></i>   {{$supersubnav->display}}
                                                                    </a>
                                                                @endforeach
                                                            </div>
                                                        @else
                                                            <div class="list-group list-group-flush">
                                                                <a href="#" class=" list-group-item-action py-1 small">
                                                                    <i class="uil uil-angle-right"></i>   {{$subnav['root']->display}}
                                                                </a>
                                                            </div>
                                                        @endif

                                                    </div>
                                                @endforeach

                                                @if(false)

                                                    <div class="col">
                                                        eCommerce Management
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" href="#">Active</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Link</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Link</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link disabled" href="#">Disabled</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        Website Design & Development
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" href="#">Active</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Link</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Link</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link disabled" href="#">Disabled</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">



                                                        <div class="list-group list-group-flush">
                                                            <a href="#" class="list-group-item list-group-item-action disabled py-1"> Digital Branding</a>
                                                            <a href="#" class="list-group-item list-group-item-action py-1 ">
                                                                Cras justo odio
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action py-1">Dapibus ac facilisis in</a>
                                                            <a href="#" class="list-group-item list-group-item-action py-1">Morbi leo risus</a>
                                                            <a href="#" class="list-group-item list-group-item-action py-1">Porta ac consectetur ac</a>

                                                        </div>
                                                    </div>

                                                @endif
                                            </div>


                                        </li>



                                    </ul>
                                </li>
                            @endif
                        @endforeach

                        @if(false)

                            <li class="nav-item"><a class="nav-link scroll" href="#home">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Our Services  </a>
                                <ul class="dropdown-menu" style="min-width: 80vw!important;">


                                    <li class="dropdown-item-text">
                                        <div class="d-flex justify-content-between">
                                            <div class="col">
                                                eCommerce Management
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Active</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Link</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Link</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link disabled" href="#">Disabled</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                Website Design & Development
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Active</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Link</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Link</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link disabled" href="#">Disabled</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col">



                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item list-group-item-action disabled py-1"> Digital Branding</a>
                                                    <a href="#" class="list-group-item list-group-item-action py-1 ">
                                                        Cras justo odio
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action py-1">Dapibus ac facilisis in</a>
                                                    <a href="#" class="list-group-item list-group-item-action py-1">Morbi leo risus</a>
                                                    <a href="#" class="list-group-item list-group-item-action py-1">Porta ac consectetur ac</a>

                                                </div>
                                            </div>

                                        </div>


                                    </li>



                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link scroll" href="#services">Services</a></li>
                            <li class="nav-item"><a class="nav-link scroll" href="#process">Process</a></li>
                            <li class="nav-item"><a class="nav-link scroll" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link scroll" href="#testimonials">Testimonials</a></li>
                            <li class="nav-item"><a class="nav-link scroll" href="#contact">Contact</a></li>
                        @endif
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                        <li class="nav-item dropdown language-select text-uppercase">
                            <a class="nav-link dropdown-item dropdown-toggle  d-none" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
                            </ul>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a href="{{route('contact-us')}}" class="btn btn-sm rounded-pill contact-btn">{!! get_dynamic('Site Header Action Button Text') !!}</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
        </div>

        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
