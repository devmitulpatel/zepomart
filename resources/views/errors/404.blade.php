@extends('layouts.root')
@section('content')

    <section class="wrapper bg-gray">
        <div class="container pt-10 pt-md-14 text-center">
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h1 class="display-5 mb-4">Error Found 404 </h1>
                    <h1 class="display-5 mb-4">Opps.. We think your having some trouble to find somethin</h1>
                    <p class="lead fs-lg mb-0">We are Here to help you</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="assets/img/photos/bg12.jpg" alt="" /></figure>
    </section>

    @if(false)@include('Sections.contact-partial')@endif
    @include('Sections.contact')
@endsection
