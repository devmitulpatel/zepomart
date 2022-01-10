<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Crowdtize
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('crowdtize/css/app.css')}}?{{get_css_js_version()}}{{date('s')}}"  >
    <link rel="stylesheet" href="{{asset('crowdtize/css/datepicker.css')}}?{{get_css_js_version()}}"  >
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="w-100">


<div class=" " api-url="{{route('Users.create')}}" id="crowdtize-registration-from-component" inline-template>

    <div class="  ">
        <div class="container-fluid">

            <div class="card mt-2"  v-if="successMessage.length<1">
                <div class="card-header">
                    <h1 class="">Registration Form For User</h1>
                    <p class="">Crowdtize User Form </p>
                </div>
                <div class="card-body">
                    <form class="pt-3 w-full"  method="post">

                        <div class="mb-3 row has-validation">
                                <label for="sponsor_id" class="  col-sm-12 col-md-12 col-lg-2 col-form-label">Sponsor ID</label>
                                <div class=" col-sm-12 col-md-12 col-lg-10 ">
                                    <input :class="{'is-invalid':isValidFromError('sponsor_id')}" type="sponsor_id" aria-describedby="sponsor_id_error" v-model="sponsor_id" class="form-control" id="sponsor_id" placeholder="Valid Sponsor ID">
                                    <div id="sponsor_id_error" class="invalid-feedback">
                                        <span  v-for="er in error.sponsor_id">
                                            @{{ er }}
                                        </span>
                                    </div>
                                </div>



                            </div>
                        <div class="mb-3 row has-validation">
                                <label for="first_name" class="  col-sm-12 col-md-12 col-lg-2 col-form-label">First Name</label>
                                <div class=" col-sm-12 col-md-12 col-lg-10 ">
                                    <input :class="{'is-invalid':isValidFromError('first_name')}" type="text" aria-describedby="first_name_error" v-model="first_name" class="form-control" id="first_name" placeholder="Write your First name here">
                                    <div id="first_name_error" class="invalid-feedback">
                                        <span  v-for="er in error.first_name">
                                            @{{ er }}
                                        </span>
                                    </div>
                                </div>



                            </div>
                        <div class="mb-3 row has-validation">
                                <label for="last_name" class="  col-sm-12 col-md-12 col-lg-2 col-form-label">Last Name</label>
                                <div class=" col-sm-12 col-md-12 col-lg-10 ">
                                    <input :class="{'is-invalid':isValidFromError('last_name')}" type="text" aria-describedby="last_name_error" v-model="last_name" class="form-control" id="last_name" placeholder="Write your Last name here">
                                    <div id="last_name_error" class="invalid-feedback">
                                        <span  v-for="er in error.last_name">
                                            @{{ er }}
                                        </span>
                                    </div>
                                </div>



                            </div>
                        <div class="mb-3 row has-validation">
                            <label for="sponsor_id" class="  col-sm-12 col-md-12 col-lg-2 col-form-label">Birthday</label>
                            <div class=" col-sm-12 col-md-12 col-lg-10 ">
                                <Datepicker auto-apply  :model-value="birthdate"  @update:model-value="setNewDate" :enable-time-picker="false"  :format="format" :input-format="format"></Datepicker>
                            </div>



                        </div>
                        <div class="mb-3 row has-validation">
                            <label for="gender" class="  col-sm-12 col-md-12 col-lg-2 col-form-label">Gender</label>
                            <div class=" col-sm-12 col-md-12 col-lg-10 pt-2 ">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" v-model="gender"  id="gender_male" value="male" :checked="(gender=='male')">
                                    <label class="form-check-label" for="gender_male">
                                        Male
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" v-model="gender"  id="gender_female" value="female" :checked="(gender=='female')">
                                    <label class="form-check-label" for="gender_female">
                                        Female
                                    </label>
                                </div>

                            </div>
                        </div>


                        <div class="mb-3 row has-validation">
                            <label for="sponsor_id" class="  col-sm-12 col-md-12 col-lg-2 col-form-label">City</label>
                            <div class=" col-sm-12 col-md-12 col-lg-10 ">
                                <input :class="{'is-invalid':isValidFromError('city')}" type="text" aria-describedby="city_error" v-model="city" class="form-control" id="city" placeholder="City">
                                <div id="city_error" class="invalid-feedback">
                                        <span  v-for="er in error.city">
                                            @{{ er }}
                                        </span>
                                </div>
                            </div>



                        </div>
                        <div class="mb-3 row has-validation">
                            <label for="sponsor_id" class="  col-sm-12 col-md-12 col-lg-2 col-form-label">State</label>
                            <div class=" col-sm-12 col-md-12 col-lg-10 ">
                                <input :class="{'is-invalid':isValidFromError('state')}" type="text" aria-describedby="state_error" v-model="state" class="form-control" id="state" placeholder="State">
                                <div id="state_error" class="invalid-feedback">
                                        <span  v-for="er in error.state">
                                            @{{ er }}
                                        </span>
                                </div>

                            </div>



                        </div>
                        <div class="mb-3 row has-validation">
                            <label for="sponsor_id" class="  col-sm-12 col-md-12 col-lg-2 col-form-label">Area</label>
                            <div class=" col-sm-12 col-md-12 col-lg-10 ">
                                <input :class="{'is-invalid':isValidFromError('area')}" type="text" aria-describedby="area_error" v-model="area" class="form-control" id="area" placeholder="Area">
                                <div id="area_error" class="invalid-feedback">
                                        <span  v-for="er in error.area">
                                            @{{ er }}
                                        </span>
                                </div>
                            </div>



                        </div>
                        <div class="mb-3 row has-validation">
                            <label for="sponsor_id" class="  col-sm-12 col-md-12 col-lg-2 col-form-label">Payment Gateway</label>
                            <div class=" col-sm-12 col-md-12 col-lg-10 ">
                                <select v-model="payment_gateway" :class="{'is-invalid':isValidFromError('payment_gateway')}" aria-describedby="payment_gateway_error" class="form-select" >
                                    <option v-for="op in payment_gateway_option" :value="op.value" :selected="payment_gateway==op.value">@{{ op.name }}</option>
                                </select>
                                <div id="payment_gateway_error" class="invalid-feedback">
                                        <span  v-for="er in error.payment_gateway">
                                            @{{ er }}
                                        </span>
                                </div>
                            </div>



                        </div>
                        <div class="mb-3 row has-validation">
                            <label for="sponsor_id" class="  col-sm-12 col-md-12 col-lg-2 col-form-label">  Mobile Number For Payment</label>
                            <div class=" col-sm-12 col-md-12 col-lg-10 ">
                                <input :class="{'is-invalid':isValidFromError('mobile_no_payment')}" type="number" aria-describedby="mobile_no_payment_error" v-model="mobile_no_payment" class="form-control" id="mobile_no_payment" placeholder="Payment Mobile Number">
                                <div id="mobile_no_payment_error" class="invalid-feedback">
                                        <span  v-for="er in error.mobile_no_payment">
                                            @{{ er }}
                                        </span>
                                </div>
                            </div>



                        </div>
                        <div class="mb-3 row has-validation">
                            <label for="mobile_no_whatsapp" class="  col-sm-12 col-md-12 col-lg-2 col-form-label">Whatsapp Number</label>
                            <div class=" col-sm-12 col-md-12 col-lg-10 ">
                                <input :class="{'is-invalid':isValidFromError('mobile_no_whatsapp')}" type="number" aria-describedby="mobile_no_whatsapp_error" v-model="mobile_no_whatsapp" class="form-control" id="mobile_no_whatsapp" placeholder="WhatsApp Number">
                                <div id="mobile_no_whatsapp_error" class="invalid-feedback">
                                        <span  v-for="er in error.mobile_no_whatsapp">
                                            @{{ er }}
                                        </span>
                                </div>
                            </div>



                        </div>


                        <div class="mb-3 row has-validation">
                            <div class=" col-12 pl-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="gender" v-model="termsaccepted"  id="termsaccepted" value="male" :checked="(gender=='male')">
                                    <label class="form-check-label" for="termsaccepted">
                                        By signing up, you agree to the <a class="" href="{{route('terms.n.conditions')}}" target="_blank">Terms of Service</a> and <a class="underline hover:overline " target="_blank" href="{{route('terms.n.conditions')}}">Privacy Policy</a>,<includ></includ>ing Cookie Use.
                                    </label>
                                </div>



                            </div>
                        </div>


                    </form>



                </div>

                <div class="card-footer">
                    <div class="d-grid gap-2">
                    <div class="btn border  text-black btn-block" v-on:click="submitForm"

                         :class="{
                                    'btn-success':termsaccepted && allValidInput(),
                                    'text-white':termsaccepted && allValidInput(),
                                    'btn-outline-success':!termsaccepted || allValidInput(),

                                    }"

                         :disabled="!termsaccepted || allValidInput() "

                    >Register</div>
                    </div>
                </div>

            </div>


            <div class="card mt-2" v-if="successMessage.length>1">
                <div class="card-header">
                    <h1 class="">Registered User Info</h1>
                    <p>
                        <small>@{{ successMessage }}</small>
                    </p>
                </div>
                <div class="card-body">

                    <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                        <ul>
                            <li >
                                Name: @{{ createdUser.first_name }} @{{ createdUser.last_name }}
                            </li>
                            <li >
                                Sponsor ID: <span class="text-uppercase">@{{ createdUser.ref_code }}</span>
                            </li>
                            <li >
                                Payment Mode: @{{ getPaymentGatewayName(createdUser.payment_gateway) }}
                            </li>
                            <li >
                                Payment No: @{{ createdUser.mobile_no_payment }}
                            </li>
                            <li >
                                Whatsapp No: @{{ createdUser.mobile_no_whatsapp }}
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="card-footer">

                    <div class="d-grid gap-2">
                        <div class="btn  btn-block btn-info" v-on:click="resetUserForm">Create another User</div>
                    </div>
                </div>

            </div>



        </div>
    </div>

</div>


<script src="{{asset('crowdtize/js/app.js')}}?{{get_css_js_version()}}"></script>
</body>

</html>
