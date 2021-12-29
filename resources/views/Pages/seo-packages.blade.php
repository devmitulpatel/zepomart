@extends('layouts.root')
@section('content')

    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-20 pt-md-14 pb-md-22 text-center">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
                    <h1 class="display-1 mb-3">{!! get_dynamic('Site Seo Page Heading Text') !!}</h1>
                    <p class="lead mb-0 px-xl-10 px-xxl-13">{!! get_dynamic('Site Seo Page decription Text') !!}</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper" v-cloak id="pricing-vue-component" api-url="{{route('packages')}}" inline-template>
        <div class="container pb-14 pb-md-16">
            <div class="pricing-wrapper position-relative mt-n18 mt-md-n21 mb-12 mb-md-15">
                <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1"
                     style="top: 2rem; right: -2.4rem;"></div>
                <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1"
                     style="bottom: 0.5rem; left: -2.5rem;"></div>
                <div class="pricing-switcher-wrapper switcher">
                    <p class="mb-0 pe-3">Monthly</p>
                    <div class="pricing-switchers" v-on:click="toggleTime">
                        <div class="pricing-switcher " :class="{ 'pricing-switcher-active':timeToggle }"></div>
                        <div class="pricing-switcher" :class="{ 'pricing-switcher-active':!timeToggle }"></div>
                        <div class="switcher-button bg-primary"></div>
                    </div>
                    <p class="mb-0 ps-3">Yearly</p>
                </div>
                <div class="row gy-6 mt-3 mt-md-5">


                    <div v-for="plan in plans" class="col-md-6 col-lg-4">
                        <div class="pricing card text-center select-none">
                            <div class="card-body w-100 select-none">

                                <img src="{{asset('assets/img/icons/lineal/plan.svg')}}"
                                     class="icon-svg icon-svg-md text-primary mb-3" alt=""/>
                                <h4 class="card-title ">@{{ plan.name }}
                                <br>
                                    <small class="card-text ">@{{ plan.description }}</small>
                                </h4>

                                <div class="prices text-dark">
                                    <div class="price price-show"><span
                                            class="price-currency">{{get_dynamic('Site Current Currency Symbol')}}</span><span
                                            class="price-value">@{{ (timeToggle)?  plan.monthly_cost : plan.yearly_cost}}</span>
                                        <span class="price-duration">@{{ (timeToggle)?  'month' : 'year'}}</span></div>
                                </div>
                                <!--/.prices -->
                                <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">



                                    <span class="feature-category-span" v-for="(category,key) in featureFilterByCategory(plan.features)" style="">

                                        <li class="categories-head cursor-pointer" v-on:click="toggleCategory(key)" :class="{'categories-head-activated':isCurrentCategoryActive(key)}">
                                            @{{categories[key].name}}
                                            <i :class="{
                                            'uil':true,
                                            'uil-arrow-down':isCurrentCategoryActive(key),
                                            'uil-arrow-right':!isCurrentCategoryActive(key)
                                            }"></i>

                                        </li>

                                        <span v-if="isCurrentCategoryActive(key)"  style="display:block;border:1px solid rgba(0,0,0,0.2);border-top:0;border-bottom: 0; padding: 10px">
                                            <li v-for="feature in category" :class="{'popular':feature.featured}" class="sub-feature">

                                        <i  :class="{
                                        'uil sub-feature-icon':true,
                                        'uil-check':feature.pivot.status,
                                        'uil-times bullet-soft-red':!feature.pivot.status
                                        }"></i>
                                        @{{ feature.name }}
                                    </li>
                                        </span>




                                    </span>


                                </ul>
                                <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>

                    @if(false)
                        <div class="col-md-6 col-lg-4">
                            <div class="pricing card text-center">
                                <div class="card-body">
                                    <img src="assets/img/icons/lineal/shopping-basket.svg"
                                         class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt=""/>
                                    <h4 class="card-title">Basic Plan</h4>
                                    <div class="prices text-dark">
                                        <div class="price price-show"><span class="price-currency">$</span><span
                                                class="price-value">9</span> <span class="price-duration">month</span>
                                        </div>
                                        <div class="price price-hide price-hidden"><span class="price-currency">$</span><span
                                                class="price-value">99</span> <span class="price-duration">year</span>
                                        </div>
                                    </div>
                                    <!--/.prices -->
                                    <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                                        <li><i class="uil uil-check"></i><span><strong>1</strong> Project </span></li>
                                        <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span>
                                        </li>
                                        <li><i class="uil uil-check"></i><span><strong>100MB</strong> Storage </span>
                                        </li>
                                        <li>
                                            <i class="uil uil-times bullet-soft-red"></i><span> Weekly <strong>Reports</strong> </span>
                                        </li>
                                        <li>
                                            <i class="uil uil-times bullet-soft-red"></i><span> 7/24 <strong>Support</strong></span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.pricing -->
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-4 popular">
                            <div class="pricing card text-center">
                                <div class="card-body">
                                    <img src="assets/img/icons/lineal/home.svg"
                                         class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt=""/>
                                    <h4 class="card-title">Premium Plan</h4>
                                    <div class="prices text-dark">
                                        <div class="price price-show"><span class="price-currency">$</span><span
                                                class="price-value">19</span> <span class="price-duration">month</span>
                                        </div>
                                        <div class="price price-hide price-hidden"><span class="price-currency">$</span><span
                                                class="price-value">199</span> <span class="price-duration">year</span>
                                        </div>
                                    </div>
                                    <!--/.prices -->
                                    <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                                        <li><i class="uil uil-check"></i><span><strong>5</strong> Projects </span></li>
                                        <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span>
                                        </li>
                                        <li><i class="uil uil-check"></i><span><strong>200MB</strong> Storage </span>
                                        </li>
                                        <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span>
                                        </li>
                                        <li>
                                            <i class="uil uil-times bullet-soft-red"></i><span> 7/24 <strong>Support</strong></span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.pricing -->
                        </div>
                        <!--/column -->
                        <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                            <div class="pricing card text-center">
                                <div class="card-body">
                                    <img src="assets/img/icons/lineal/briefcase-2.svg"
                                         class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt=""/>
                                    <h4 class="card-title">Corporate Plan</h4>
                                    <div class="prices text-dark">
                                        <div class="price price-show"><span class="price-currency">$</span><span
                                                class="price-value">49</span> <span class="price-duration">month</span>
                                        </div>
                                        <div class="price price-hide price-hidden"><span class="price-currency">$</span><span
                                                class="price-value">499</span> <span class="price-duration">year</span>
                                        </div>
                                    </div>
                                    <!--/.prices -->
                                    <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                                        <li><i class="uil uil-check"></i><span><strong>20</strong> Projects </span></li>
                                        <li><i class="uil uil-check"></i><span><strong>300K</strong> API Access </span>
                                        </li>
                                        <li><i class="uil uil-check"></i><span><strong>500MB</strong> Storage </span>
                                        </li>
                                        <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span>
                                        </li>
                                        <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.pricing -->
                        </div>
                        <!--/column -->
                    @endif
                </div>
                <!--/.row -->
            </div>
            <!--/.pricing-wrapper -->
            <div class="row gx-lg-8 gx-xl-12 gy-6 mb-14 mb-md-19">
                <div class="col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon btn btn-circle disabled btn-primary me-4"><i
                                    class="uil uil-phone-volume"></i></div>
                        </div>
                        <div>
                            <h4>24/7 Support</h4>
                            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta
                                gravida at eget. Fusce dapibus tellus.</p>
                            <a href="#" class="more hover">Learn More</a>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon btn btn-circle disabled btn-primary me-4"><i
                                    class="uil uil-laptop-cloud"></i></div>
                        </div>
                        <div>
                            <h4>Daily Updates</h4>
                            <p class="mb-2">Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet.
                                Sed posuere consectetur.</p>
                            <a href="#" class="more hover">Learn More</a>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon btn btn-circle disabled btn-primary me-4"><i
                                    class="uil uil-chart-line"></i></div>
                        </div>
                        <div>
                            <h4>Market Research</h4>
                            <p class="mb-2">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent
                                commodo cursus magna scelerisque.</p>
                            <a href="#" class="more hover">Learn More</a>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <h2 class="display-4 mb-3 text-center">Pricing FAQ</h2>
            <p class="lead text-center mb-10 px-md-16 px-lg-0">If you don't see an answer to your question, you can send
                us an email from our contact form.</p>
            <div class="row mb-14 mb-md-18">
                <div class="col-lg-6 mb-0">
                    <div id="accordion-1" class="accordion-wrapper">
                        <div class="card accordion-item">
                            <div class="card-header" id="accordion-heading-1-1">
                                <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-1-1" aria-expanded="false"
                                        aria-controls="accordion-collapse-1-1">Can I cancel my subscription?
                                </button>
                            </div>
                            <!-- /.card-header -->
                            <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1"
                                 data-bs-target="#accordion-1">
                                <div class="card-body">
                                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                        fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet
                                        fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.collapse -->
                        </div>
                        <!-- /.card -->
                        <div class="card accordion-item">
                            <div class="card-header" id="accordion-heading-1-2">
                                <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-1-2" aria-expanded="false"
                                        aria-controls="accordion-collapse-1-2">Which payment methods do you accept?
                                </button>
                            </div>
                            <!-- /.card-header -->
                            <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2"
                                 data-bs-target="#accordion-1">
                                <div class="card-body">
                                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                        fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet
                                        fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.collapse -->
                        </div>
                        <!-- /.card -->
                        <div class="card accordion-item">
                            <div class="card-header" id="accordion-heading-1-3">
                                <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-1-3" aria-expanded="false"
                                        aria-controls="accordion-collapse-1-3">How can I manage my Account?
                                </button>
                            </div>
                            <!-- /.card-header -->
                            <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3"
                                 data-bs-target="#accordion-1">
                                <div class="card-body">
                                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                        fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet
                                        fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.collapse -->
                        </div>
                        <!-- /.card -->
                        <div class="card accordion-item">
                            <div class="card-header" id="accordion-heading-1-4">
                                <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-1-4" aria-expanded="false"
                                        aria-controls="accordion-collapse-1-4">Is my credit card information secure?
                                </button>
                            </div>
                            <!-- /.card-header -->
                            <div id="accordion-collapse-1-4" class="collapse" aria-labelledby="accordion-heading-1-4"
                                 data-bs-target="#accordion-1">
                                <div class="card-body">
                                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                        fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet
                                        fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.collapse -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.accordion-wrapper -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <div id="accordion-2" class="accordion-wrapper">
                        <div class="card accordion-item">
                            <div class="card-header" id="accordion-heading-2-1">
                                <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-2-1" aria-expanded="false"
                                        aria-controls="accordion-collapse-2-1">How do I get my subscription receipt?
                                </button>
                            </div>
                            <!-- /.card-header -->
                            <div id="accordion-collapse-2-1" class="collapse" aria-labelledby="accordion-heading-2-1"
                                 data-bs-target="#accordion-2">
                                <div class="card-body">
                                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                        fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet
                                        fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.collapse -->
                        </div>
                        <!-- /.card -->
                        <div class="card accordion-item">
                            <div class="card-header" id="accordion-heading-2-2">
                                <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-2-2" aria-expanded="false"
                                        aria-controls="accordion-collapse-2-2">Are there any discounts for people in
                                    need?
                                </button>
                            </div>
                            <!-- /.card-header -->
                            <div id="accordion-collapse-2-2" class="collapse" aria-labelledby="accordion-heading-2-2"
                                 data-bs-target="#accordion-2">
                                <div class="card-body">
                                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                        fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet
                                        fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.collapse -->
                        </div>
                        <!-- /.card -->
                        <div class="card accordion-item">
                            <div class="card-header" id="accordion-heading-2-3">
                                <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-2-3" aria-expanded="false"
                                        aria-controls="accordion-collapse-2-3">Do you offer a free trial edit?
                                </button>
                            </div>
                            <!-- /.card-header -->
                            <div id="accordion-collapse-2-3" class="collapse" aria-labelledby="accordion-heading-2-3"
                                 data-bs-target="#accordion-2">
                                <div class="card-body">
                                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                        fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet
                                        fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.collapse -->
                        </div>
                        <!-- /.card -->
                        <div class="card accordion-item">
                            <div class="card-header" id="accordion-heading-2-4">
                                <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-2-4" aria-expanded="false"
                                        aria-controls="accordion-collapse-2-4">How do I reset my Account password?
                                </button>
                            </div>
                            <!-- /.card-header -->
                            <div id="accordion-collapse-2-4" class="collapse" aria-labelledby="accordion-heading-2-4"
                                 data-bs-target="#accordion-2">
                                <div class="card-body">
                                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                        fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet
                                        fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.collapse -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.accordion-wrapper -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <h2 class="display-4 mb-3 text-center">Happy Customers</h2>
            <p class="lead text-center mb-6 px-md-16 px-lg-0">Customer satisfaction is our major goal. See what our
                customers are saying about us.</p>
            <div class="position-relative">
                <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1"
                     style="bottom: 0.5rem; right: -1.7rem;"></div>
                <div class="shape bg-dot primary rellax w-16 h-16" data-rellax-speed="1"
                     style="top: -1rem; left: -1.7rem;"></div>
                <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="false"
                     data-autoplay-timeout="5000"
                     data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                    <div class="item">
                        <div class="item-inner">
                            <div class="card">
                                <div class="card-body">
                                    <blockquote class="icon mb-0">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum id ligula porta felis euismod semper. Cras justo odio dapibus
                                            facilisis sociis natoque penatibus.”</p>
                                        <div class="blockquote-details">
                                            <img class="rounded-circle w-12" src="assets/img/avatars/te1.jpg" alt=""/>
                                            <div class="info">
                                                <h5 class="mb-1">Coriss Ambady</h5>
                                                <p class="mb-0">Financial Analyst</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.item-inner -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="item-inner">
                            <div class="card">
                                <div class="card-body">
                                    <blockquote class="icon mb-0">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum id ligula porta felis euismod semper. Cras justo odio dapibus
                                            facilisis sociis natoque penatibus.”</p>
                                        <div class="blockquote-details">
                                            <img class="rounded-circle w-12" src="assets/img/avatars/te2.jpg" alt=""/>
                                            <div class="info">
                                                <h5 class="mb-1">Cory Zamora</h5>
                                                <p class="mb-0">Marketing Specialist</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.item-inner -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="item-inner">
                            <div class="card">
                                <div class="card-body">
                                    <blockquote class="icon mb-0">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum id ligula porta felis euismod semper. Cras justo odio dapibus
                                            facilisis sociis natoque penatibus.”</p>
                                        <div class="blockquote-details">
                                            <img class="rounded-circle w-12" src="assets/img/avatars/te3.jpg" alt=""/>
                                            <div class="info">
                                                <h5 class="mb-1">Nikolas Brooten</h5>
                                                <p class="mb-0">Sales Manager</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.item-inner -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="item-inner">
                            <div class="card">
                                <div class="card-body">
                                    <blockquote class="icon mb-0">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum id ligula porta felis euismod semper. Cras justo odio dapibus
                                            facilisis sociis natoque penatibus.”</p>
                                        <div class="blockquote-details">
                                            <img class="rounded-circle w-12" src="assets/img/avatars/te4.jpg" alt=""/>
                                            <div class="info">
                                                <h5 class="mb-1">Coriss Ambady</h5>
                                                <p class="mb-0">Financial Analyst</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.item-inner -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="item-inner">
                            <div class="card">
                                <div class="card-body">
                                    <blockquote class="icon mb-0">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum id ligula porta felis euismod semper. Cras justo odio dapibus
                                            facilisis sociis natoque penatibus.”</p>
                                        <div class="blockquote-details">
                                            <img class="rounded-circle w-12" src="assets/img/avatars/te5.jpg" alt=""/>
                                            <div class="info">
                                                <h5 class="mb-1">Jackie Sanders</h5>
                                                <p class="mb-0">Investment Planner</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.item-inner -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="item-inner">
                            <div class="card">
                                <div class="card-body">
                                    <blockquote class="icon mb-0">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum id ligula porta felis euismod semper. Cras justo odio dapibus
                                            facilisis sociis natoque penatibus.”</p>
                                        <div class="blockquote-details">
                                            <img class="rounded-circle w-12" src="assets/img/avatars/te6.jpg" alt=""/>
                                            <div class="info">
                                                <h5 class="mb-1">Laura Widerski</h5>
                                                <p class="mb-0">Sales Specialist</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.item-inner -->
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.owl-carousel -->
            </div>
            <!-- /.position-relative -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center mb-14 mb-md-16 bg-map"
             data-image-src="assets/img/map.png">
        <div class="container py-md-18">
            <div class="row">
                <div class="col-lg-6 col-xl-5 mx-auto">
                    <h2 class="display-4 mb-3 text-center">Join Our Community</h2>
                    <p class="lead mb-5 px-md-16 px-lg-3">We are trusted by over 5000+ clients. Join them by using our
                        services and grow your business.</p>
                    <a href="#" class="btn btn-primary rounded-pill">Join Us</a>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
