<section id="about">
    <div class="wrapper bg-light">
        <div class="container py-14 py-md-17">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-4">
                    <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Meet the Team</h2>
                    <h3 class="display-5 mb-5">Save your time and money by choosing our professional team.</h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros tempus porttitor.</p>
                    <a href="#" class="btn btn-primary rounded-pill mt-3">See All Members</a>
                </div>
                <!--/column -->
                <div class="col-lg-8">
                    <div class="carousel owl-carousel text-center" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                        @foreach(get_teams() as $member)
                            <div class="item">
                                <img class="rounded-circle w-20 mx-auto mb-4" src="{{asset($member->image)}}"  alt="{{$member->name}}" />
                                <h4 class="mb-1">{!! $member->name !!}</h4>
                                <div class="meta mb-2">{!! $member->position !!}</div>
                                <p class="mb-2">{!! $member->quot !!}</p>
                                <nav class="nav social justify-content-center text-center mb-0">



                                    @foreach($member->socials->take(\App\Models\TeamData::DefaultNoOfDisplay) as $links)
                                        <a href="{{$links->pivot->link}}"><i class="{{$links->icon_class}}"></i></a>
                                    @endforeach

                                </nav>
                                <!-- /.social -->
                            </div>
                        @endforeach
                    </div>
                    <!-- /.owl-carousel -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
</section>
