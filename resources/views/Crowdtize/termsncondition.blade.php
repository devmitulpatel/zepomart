<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Crowdtize : SUBSCRIBER ,VIEWER TERMS & CONDITIONS
    </title>

    <link rel="stylesheet" href="{{asset('crowdtize/css/app.css')}}?{{get_css_js_version()}}"  >
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="w-100">


<div class="flex flex-col min-h-screen bg-gray-100 " api-url="{{route('Users.create')}}" id="crowdtize-registration-from-component" inline-template>

    <div class="flex items-center justify-center pt-5 grow  ">
        <div class="containter mx-auto px-20">
            <div class="bg-white p-8 rounded-lg shadow-lg relative hover:shadow-2xl transition duration-500">
                <h1 class="text-2xl text-gray-800 font-semibold mb-3">AGREEMENT BETWEEN CROWDTIZE & SUBSCRIBER / VIEWER TERMS & CONDITIONS:</h1>
                <p class="text-gray-600 leading-6 tracking-normal pb-5">Crowdtize is a Product of zepomart technologies private limited and here by all contract between crowdtize and subscriber. Zepomart Technologies Pvt. Ltd. is not individually responsible for any dispute. </p>


                <ul class="divide-y-2 divide-gray-100">
                    @foreach(\App\Models\Crowdtize\TermNCondition::all()->sortBy('sort') as $term)
                    <li class="p-3">
                        <div class="flex ">
                            <div class="mr-2">
                                {{$loop->iteration}})
                            </div>
                            <div class="flex-1">
                                {!! $term->value !!}
                            </div>
                        </div>
                        </li>
                    @endforeach
                </ul>



            </div>
        </div>
    </div>

</div>


<script src="{{asset('crowdtize/js/app.js')}}?{{get_css_js_version()}}"></script>
</body>

</html>
