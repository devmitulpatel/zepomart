@extends('layouts.root')
@section('content')

<section class="wrapper bg-gray">
    <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <h1 class="display-1 mb-4">{!!get_dynamic('Page About Us Display Text')!!}</h1>
                <p class="lead fs-lg mb-0">{!!get_dynamic('Page About Us Sub Title Text')!!}</p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="assets/img/photos/bg12.jpg" alt="" /></figure>
</section>
<!-- /section -->
<section class="wrapper bg-light angled upper-end lower-end">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
            <div class="col-lg-6 position-relative order-lg-2">
                <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                <div class="overlap-grid overlap-grid-2">
                    <div class="item">
                        <figure class="rounded shadow"><img src="assets/img/photos/about2.jpg"  alt=""></figure>
                    </div>
                    <div class="item">
                        <figure class="rounded shadow"><img src="assets/img/photos/about3.jpg"  alt=""></figure>
                    </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <img src="assets/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                <h2 class="display-4 mb-3">{!! get_dynamic('Page About Us Section Display Text') !!}</h2>
                <p class="lead fs-lg">{!! get_dynamic('Page About Us Section Sub Title Text') !!}</p>
                <p class="mb-6">{!! get_dynamic('Page About Us Section Description Text') !!}</p>
                <div class="d-none row gy-3 gx-xl-8">
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur blandit tempus.</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare donec elit.</span></li>
                        </ul>
                    </div>
                    <!--/column -->
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis euismod.</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus faucibus amet euismod.</span></li>
                        </ul>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="row mb-5">
            <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
                <img src="assets/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                <h2 class="display-4 mb-4 px-lg-14">{!! get_dynamic('Page About Us Section Process Title Text 1') !!}.</h2>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="card me-lg-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">01</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Collect Ideas</h4>
                                <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card ms-lg-13 mt-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">02</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Data Analysis</h4>
                                <p class="mb-0">Vivamus sagittis lacus vel augue laoreet.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card mx-lg-6 mt-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">03</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Finalize Product</h4>
                                <p class="mb-0">Cras mattis consectetur purus sit amet.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="display-6 mb-3">How It Works?</h2>
                <p class="lead fs-lg pe-lg-5">{!! get_dynamic('Page About Us Section Process Sub Description Text') !!}</p>
                <p>{!! get_dynamic('Page About Us Section Process Description Text 1') !!}</p>
                <p class="mb-6 d-none">Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis.</p>
                <a href="{{route('contact-us')}}" class="btn btn-primary rounded-pill mb-0 text-capitalize">{!! get_dynamic('Page About Us Section Process action Text') !!}</a>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-soft-primary">
    <div class="container pt-16 pb-14 pb-md-0">
        <div class="row gx-lg-8 gx-xl-0 align-items-center">
            <div class="col-md-5 col-lg-4 offset-lg-1 d-none d-md-flex position-relative">
                <div class="shape rounded-circle bg-pale-primary rellax w-21 h-21" data-rellax-speed="1" style="top: 7rem; left: 1rem"></div>
                <figure><img src="assets/img/photos/co1.png" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-md-7 col-lg-6 col-xl-6 col-xxl-5 offset-xl-1">
                <div class="basic-slider owl-carousel dots-start gap-small mt-6" data-margin="30">
                    <div class="item">
                        <blockquote class="icon fs-lg">
                            <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur nulla dapibus curabitur blandit.”</p>
                            <div class="blockquote-details">
                                <div class="info ps-0">
                                    <h5 class="mb-1">Coriss Ambady</h5>
                                    <p class="mb-0">Financial Analyst</p>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <blockquote class="icon fs-lg">
                            <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus curabitur blandit.”</p>
                            <div class="blockquote-details">
                                <div class="info ps-0">
                                    <h5 class="mb-1">Cory Zamora</h5>
                                    <p class="mb-0">Marketing Specialist</p>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <blockquote class="icon fs-lg">
                            <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus curabitur blandit.”</p>
                            <div class="blockquote-details">
                                <div class="info ps-0">
                                    <h5 class="mb-1">Nikolas Brooten</h5>
                                    <p class="mb-0">Sales Manager</p>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.owl-carousel -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row mb-3">
            <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
                <img src="assets/img/icons/lineal/team.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                <h2 class="display-4 mb-3 px-lg-14">Save your time and money by choosing our professional team.</h2>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="position-relative">
            <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem;"></div>
            <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1" style="top: 0.5rem; left: -1.7rem;"></div>
            <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1400":{"items": "4"}}'>
                @include('Sections.team')
            </div>
            <!-- /.owl-carousel -->
        </div>
        <!-- /.position-relative -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-soft-primary">
    <div class="container py-14 py-md-16">
        <div class="row mb-10">
            <div class="col-xl-10 mx-auto">
                <div class="row align-items-center counter-wrapper gy-6 text-center">
                    <div class="col-md-3">
                        <img src="assets/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">7518</h3>
                        <p>Completed Projects</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="assets/img/icons/lineal/user.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">3472</h3>
                        <p>Satisfied Customers</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">2184</h3>
                        <p>Expert Employees</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">4523</h3>
                        <p>Awards Won</p>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->


@include('Sections.contact',['display_image'=>'assets/img/photos/about4.jpg'])

<!-- /section -->
@endsection
