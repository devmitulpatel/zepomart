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

<div class="whatsapp-btn-overfly" id="whatsapp-vue-component" v-cloak phone-no="{{only_numbers(get_dynamic('Site Contact Number 1'))}}" message="{!! get_dynamic('Site WhatsApp Message') !!}}">

    <div class="whatsapp-btn-overfly-popup" :class="{'whatsapp-btn-overfly-popup-hidden':!popUpOpened}">
        <div class="card">
            <div class="card-body px-1 py-1 pt-2">
                <div style="text-align: center;"><h2 data-cy="chat-widget-greetings"
                                                     style="font-size: 24px; font-weight: bold; font-family: &quot;Proxima Nova&quot;, &quot;Open Sans&quot;, Helvetica, Arial, sans-serif;">
                        Hey, there! 👋</h2>
                    <p data-cy="chat-widget-intro-message px-1 py-1 "
                       style="margin-bottom:10px;font-size: 14px; white-space: break-spaces; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif;">
                        Have Questions? <br>Chat with our experts.</p></div>
            </div>
            <div class="card-footer px-5 py-1 pb-3">
                <div class="btn btn-whatsapp" v-on:click="goToWhatsapp">
                    <i class="uil uil-whatsapp"></i> Start Chat
                </div>
            </div>
        </div>



    </div>

    <span :class="{'whatsapp-btn-overfly-popup-hidden':popUpOpened}" v-on:click="togglePopup"  >
        <img src="{{asset('images/whatsapp-icon-square.svg')}}">
    </span>

    <span :class="{'whatsapp-btn-overfly-popup-hidden':!popUpOpened}" v-on:click="togglePopup" class="whatsapp-btn-overfly-popup-close" >
        <i class="uil uil-times"></i>
    </span>





</div>

</body>

//
@include('layouts.static.js')
</html>
