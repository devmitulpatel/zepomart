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


<div class="flex flex-col min-h-screen bg-gray-100 " inline-template>

    <div class="flex items-center justify-center pt-5 grow  ">
        <div class="containter mx-auto px-20">
            <div class="bg-white p-8 rounded-lg shadow-lg relative hover:shadow-2xl transition duration-500">
                <h1 class="text-2xl text-gray-800 font-semibold mb-3">Export Crowdtize Users</h1>
                <p class="text-gray-600 leading-6 tracking-normal pb-5">click to export in excel </p>


                <div class="inline-flex rounded-md shadow-sm" role="group">

                    <a  href="{{route('Users.export',['for'=>now()->format('d/m/Y')])}}" target="_blank">
                    <button type="button" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Today Registered
                    </button>
                    </a>
                    <a  href="{{route('Users.export')}}" target="_blank">
                    <button type="button"   class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        All User
                    </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="{{asset('crowdtize/js/app.js')}}?{{get_css_js_version()}}"></script>
</body>

</html>
