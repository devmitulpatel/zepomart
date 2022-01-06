<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Crowdtize
    </title>

    <link rel="stylesheet" href="{{asset('crowdtize/css/app.css')}}?{{get_css_js_version()}}"  >
    <link rel="stylesheet" href="{{asset('crowdtize/css/datepicker.css')}}?{{get_css_js_version()}}"  >
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="w-100">


<div class="flex flex-col min-h-screen bg-gray-100 " api-url="{{route('Users.create')}}" id="crowdtize-registration-from-component" inline-template>

    <div class="flex-1  pt-5 grow  ">
        <div class="container mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-lg relative hover:shadow-2xl transition duration-500">
                <h1 class="text-2xl text-gray-800 font-semibold mb-3">Registration Form For User</h1>
                <p class="text-gray-600 leading-6 tracking-normal pb-5">Crowdtize User Form </p>


                <div v-if="errorMessage.length>1" class="bg-gradient-reverse-aqua" v-cloak>
                    <div role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                            @{{ errorMessage }}
                        </div>
                        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <ul>
                                <li v-for="er in error">
                                <span v-for="e in er">@{{ e }} <br></span>


                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div v-if="successMessage.length>1" class="bg-gradient-reverse-aqua" v-cloak>
                    <div role="alert">
                        <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2">
                            @{{ successMessage }}
                        </div>
                        <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                            <ul>
                                <li >
                                    Name: @{{ createdUser.name }}
                                </li>
                                <li >
                                    Membership No: @{{ createdUser.ref_code }}
                                </li>
                                <li >
                                    Payment Mode: @{{ createdUser.payment_gateway }}
                                </li>
                                <li >
                                    Payment No: @{{ createdUser.mobile_no_payment }}
                                </li>
                                <li >
                                    Whatsapp No: @{{ createdUser.mobile_no_whatsapp }}
                                </li>
                            </ul>
                            <div class="w-100 mt-3 p-2 border rounded bg-blue-200 text-center cursor-pointer" v-on:click="resetUserForm">
                                Create another User
                            </div>
                        </div>
                    </div>
                </div>

                <form v-if="successMessage.length<1" class="pt-5 w-full" action="{{route('Users.create')}}" method="post">
                    <div class="flex flex-wrap -mx-3 mb-3">
                        <div class="w-full px-3 mb-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                Sponsor ID
                            </label>
                            <input v-model="sponsor_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Sponsor ID">
                            <p class="text-gray-500 text-xs italic">Please fill Sponsor ID here.</p>
                        </div>

                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                Full Name
                            </label>
                            <input v-model="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                Birthdate
                            </label>
                            <span class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded p-1 mb-3 leading-tight focus:outline-none focus:bg-white">

                                <Datepicker auto-apply  :model-value="birthdate"  @update:model-value="setNewDate" :enable-time-picker="false"  :format="format" :input-format="format"></Datepicker>
                            </span>

                        </div>

                        <div class="w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                Gender
                            </label>
                            <div class="flex ">
                                <label class="inline-flex items-center mt-3 mr-2 cursor-pointer">
                                    <input v-model="gender" type="radio" class="form-radio h-5 w-5 text-gray-600" value="female"><span class="ml-2 text-gray-700">Male</span>
                                </label>
                                <label class="inline-flex items-center mt-3 cursor-pointer">
                                    <input v-model="gender" type="radio" class="form-radio h-5 w-5 text-gray-600" value="male"><span class="ml-2 text-gray-700">Female</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row flex-wrap -mx-3 mb-6">
                        <div class="w-full sm:w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                City
                            </label>
                            <input v-model="city" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="City">
                        </div>
                        <div class="w-full sm:w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                State
                            </label>
                            <input   v-model="state" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="State">
                        </div>
                        <div class="w-full sm:w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                Area
                            </label>
                            <input v-model="area" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="Area">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="md:w-1/2 sm:w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                Payment Getway
                            </label>
                            <div class="relative">
                                <select v-model="payment_gateway" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    <option value="1">Phone Pay</option>
                                    <option value="2">Google Pay</option>
                                    <option value="3">Paytm</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>

                        </div>
                        <div class="sm:w-full md:w-1/2 sm:w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                Mobile Number For Payment
                            </label>
                            <input v-model="mobile_no_payment" type="number" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="Mobile Number For Payment">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                Whatsapp Number
                            </label>
                            <input v-model="mobile_no_whatsapp" type="number" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Whatsapp Number">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 mb-6 md:mb-0">

                            <label class="block text-gray-500 font-bold">
                                <input v-model="termsaccepted" class="mr-2 leading-tight" type="checkbox">
                                <span class="text-sm " style="display: block;margin-top: -24px;margin-left: 24px;">
                                    By signing up, you agree to the <a class="underline hover:overline " href="{{route('terms.n.conditions')}}" target="_blank">Terms of Service<a> and <a class="underline hover:overline " target="_blank" href="{{route('terms.n.conditions')}}">Privacy Policy</a>,<br>including Cookie Use.
                                </span>
                            </label>



                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <div v-on:click="submitForm"  value="submit"   class="w-full  text-center  text-white font-bold py-2 px-4 rounded-full"

                                    :class="{
                                    'bg-blue-500':termsaccepted && allValidInput(),
                                    'hover:bg-blue-700':termsaccepted && allValidInput(),
                                    'bg-gray-500':!termsaccepted  || !allValidInput(),
                                    'hover:bg-gray-700':!termsaccepted  || !allValidInput()
                                    }"

                                    :disabled="!termsaccepted"
                            >
                                Register
                            </div>

                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>

</div>


<script src="{{asset('crowdtize/js/app.js')}}?{{get_css_js_version()}}"></script>
</body>

</html>
