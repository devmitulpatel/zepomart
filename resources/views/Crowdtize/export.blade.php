<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Crowdtize:Export
    </title>

    <link rel="stylesheet" href="{{asset('crowdtize/css/app.css')}}?{{get_css_js_version()}}"  >
    <link rel="stylesheet" href="{{asset('crowdtize/css/datepicker.css')}}?{{get_css_js_version()}}"  >
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="w-100">


<div class="card mt-2">
    <div class="card-header">
        <h1 class="">Export Crowdtize Users</h1>
        <p class="">click to export in excel </p>
    </div>
    <div class="card-footer">


        <div class="d-grid gap-2">
        <div class="btn-group" role="group" aria-label="Basic example">


            <a  href="{{route('Users.export',['for'=>now()->format('d/m/Y')])}}" target="_blank" class="btn btn-primary">
                Today Registered
            </a>
            <a  href="{{route('Users.export')}}" target="_blank" class="btn btn-primary">
                All User
            </a>


        </div>

        </div>



    </div>
</div>






<script src="{{asset('crowdtize/js/app.js')}}?{{get_css_js_version()}}"></script>
</body>

</html>
