<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Crowdtize : SUBSCRIBER ,VIEWER TERMS & CONDITIONS
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('crowdtize/css/app.css')}}?{{get_css_js_version()}}"  >
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="w-100">


<div class="container-fluid">
    <div class="card mt-2">
        <div class="card-header">
            <h5>
                AGREEMENT BETWEEN CROWDTIZE & SUBSCRIBER / VIEWER TERMS & CONDITIONS:
            </h5>

        </div>
        <div class="card-body">

            <p>
                <small>Crowdtize is a Product of zepomart technologies private limited and here by all contract between crowdtize and subscriber. Zepomart Technologies Pvt. Ltd. is not individually responsible for any dispute. </small>
            </p>



            <ul class="list-group">
                @foreach(\App\Models\Crowdtize\TermNCondition::all()->sortBy('sort') as $term)
                <li class="list-group-item ">

                    <span class="">
                        {{$loop->iteration}})
                    </span>
                    <span class="">
                        {!! $term->value !!}
                    </span>

                </li>
                @endforeach
            </ul>

        </div>
        <div class="card-footer"></div>

    </div>

</div>



<script src="{{asset('crowdtize/js/app.js')}}?{{get_css_js_version()}}"></script>
</body>

</html>
