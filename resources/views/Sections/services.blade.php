<section id="services">
    <div class="wrapper bg-light">
        <div class="container py-4">
            <div class="row gx-lg-8 gx-xl-12 gy-6 mb-10 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <ul class="progress-list">
                        @for ($i = 1; $i < 5; $i++)
                            <li>
                                <p>{!! get_dynamic('Site Service Section Service '.$i.' Title')  !!}</p>
                                <div class="progressbar line {{get_color($i)}}" data-value="100"></div>
                            </li>
                        @endfor
                    </ul>
                    <!-- /.progress-list -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h3 class="display-5 mb-5">{!! get_dynamic('Site Service Section Display Text') !!}</h3>
                    <p>{!! get_dynamic('Site Service Section Tag Text') !!}</p>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-6 gy-md-0 text-center">
                @for ($i = 1; $i < 5; $i++)
                    <div class="col-md-6 col-lg-3">
                        <img src="{{asset(get_dynamic('Site Service Section Service '.$i.' Icon'))}}" class="svg-inject icon-svg icon-svg-md {{get_color($i,'text')}} mb-3" alt="" />
                        <h4>{!! get_dynamic('Site Service Section Service '.$i.' Title')  !!}</h4>
                        <p class="mb-2">{!! get_dynamic('Site Service Section Service '.$i.' Description')  !!}</p>
                    </div>
                @endfor
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
</section>
