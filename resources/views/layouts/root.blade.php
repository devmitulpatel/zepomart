<!DOCTYPE html>
<html lang="en">


@include('layouts.static.head')

<body class="onepage" data-bs-spy="scroll" data-bs-target=".navbar" style="padding-top:0px " >
<div class="content-wrapper">

    <!-- /header -->
    @include('layouts.static.header_new')
    <!-- /sample-data -->

    @yield('content')


</div>
<!-- /.content-wrapper -->
@include('layouts.static.footer')
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<a class="whatsapp-btn-overfly" target="_blank" href="https://web.whatsapp.com/send?phone={{get_dynamic('Site Contact Number 1')}}&amp;text=">
    <img src="{{asset('images/whatsapp-icon-square.svg')}}">
</a>
</body>

//
@include('layouts.static.js')
</html>
