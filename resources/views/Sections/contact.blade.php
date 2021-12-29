<section id="contact">
    <div class="wrapper bg-light">
        <div class="container py-14 py-md-17">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-7">
                    @php
                    $displayImage=(isset($display_image))?$display_image:null;
                    if($displayImage==null)$displayImage=get_dynamic('Site Contact Section Icon');
                    @endphp
                    <figure><img class="w-auto" src="{{asset($displayImage)}}"  alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">{!! get_dynamic('Site Contact Section Tag Text') !!}</h2>
                    <h3 class="display-5 mb-7">{!! get_dynamic('Site Contact Section Display Text') !!}</h3>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Address</h5>
                            <address>{!! get_dynamic('Site Short Address') !!}</address>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Phone</h5>
                            <p>{!! get_dynamic('Site Contact Number 1') !!}</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">E-mail</h5>
                            <p class="mb-0"><a href="mailto:{!! get_dynamic('Site Contact Email') !!}" class="link-body">{!! get_dynamic('Site Contact Email') !!}</a></p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
</section>
