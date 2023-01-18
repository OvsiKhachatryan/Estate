<!doctype html>

<html class="no-js" lang="en">
<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta
        content="Reallist- Bootstrap Responsive Real estate Classifieds, Dealer, Rentel, Builder and Agent Multipurpose HTML Template"
        name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords"
          content="html template, real estate websites, real estate html template, property websites, premium html templates, real estate company website, bootstrap real estate template, real estate marketplace html template, listing website template, property listing html template, real estate bootstrap template, real estate html5 template, real estate listing template, property template, property dealer website"/>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/frontend/images/favicon.ico')}}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/frontend/images/favicon.ico')}}"/>

    <!-- Title -->
    <title>Reallist- Bootstrap Responsive Real estate Classifieds, Dealer, Rentel, Builder and Agent Multipurpose HTML
        Template</title>

    <!-- Bootstrap Css -->
    <link id="style" href="{{asset('assets/frontend/plugins/bootstrap-5/css/bootstrap.min.css')}}" rel="stylesheet"/>

    <!-- Dashboard Css -->
    <link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet"/>

    <!-- Font-awesome  Css -->
    <link href="{{asset('assets/frontend/css/icons.css')}}" rel="stylesheet"/>

    <!--Select2 Plugin -->
    <link href="{{asset('assets/frontend/plugins/select2/select2.min.css')}}" rel="stylesheet"/>

    <!-- p-scroll bar css-->
    <link href="{{asset('assets/frontend/plugins/pscrollbar/pscrollbar.css')}}" rel="stylesheet"/>

    <!-- Owl Theme css-->
    <link href="{{asset('assets/frontend/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet"/>

</head>

<body class="main-body">

<!--Loader-->
<div id="global-loader">
    <img src="{{asset('assets/frontend/images/loader.svg')}}" class="loader-img" alt="">
</div>

<!--Topbar-->
<div class="header-main">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-sm-4 col-7">
                    <div class="top-bar-left d-flex">
                        <div class="clearfix">
                            <ul class="socials">
                                <li>
                                    <a class="social-icon text-dark" href="javascript:void(0);"><i
                                            class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon text-dark" href="javascript:void(0);"><i
                                            class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon text-dark" href="javascript:void(0);"><i
                                            class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon text-dark" href="javascript:void(0);"><i
                                            class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix">
                            <ul class="contact">
                                <li class="me-5 d-lg-none">
                                    <a href="javascript:void(0);" class="callnumber text-dark"><span><i
                                                class="fa fa-phone me-1"></i>: +425 345 8765</span></a>
                                </li>
                                <li class="select-country me-5">
                                    <select class="form-control select2-flag-search" data-placeholder="Select Country">
                                        <option value="UM">United States of America</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AU">Australia</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AO">Angola</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BY">Belarus</option>
                                        <option value="CD">Congo</option>
                                        <option value="CA">Canada</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="CI">Cote d'Ivoire</option>
                                        <option value="CL">Chile</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CN">China</option>
                                        <option value="CO">Colombia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CV">Cabo Verde</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FI">Finland</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FR">France</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GE">Georgia</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GH">Ghana</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HU">Hungary</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IL">Israel</option>
                                        <option value="IN">India</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IR">Iran</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JO">Jordan</option>
                                        <option value="JP">Japan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LB">Lebanons</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LY">Libya</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MD">Moldova</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MK">Macedonia (FYROM)</option>
                                        <option value="ML">Mali</option>
                                        <option value="MM">Myanmar (formerly Burma)</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MT">Malta</option>
                                        <option value="MV">Maldives</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MX">Mexico</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NO">Norway</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="OM">Oman</option>
                                        <option value="PA">Panama</option>
                                        <option value="PF">Paraguay</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PL">Poland</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SE">Sweden</option>
                                        <option value="SG">Singapore</option>
                                        <option value="TG">Togo</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VA">Vatican City (Holy See)</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </li>
                                <li class="dropdown me-5">
                                    <a href="javascript:void(0);" class="text-dark" data-bs-toggle="dropdown"><span> Language <i
                                                class="fa fa-caret-down text-muted"></i></span> </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            English
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            Arabic
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            German
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            Greek
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            Japanese
                                        </a>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="text-dark" data-bs-toggle="dropdown"><span>Currency <i
                                                class="fa fa-caret-down text-muted"></i></span></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            USD
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            EUR
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            INR
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            GBP
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-8 col-5">
                    <div class="top-bar-right">
                        <ul class="custom">
                            <li>
                                <a href="{{route('register')}}" class="text-dark"><i class="fa fa-user me-1"></i>
                                    <span>Register</span></a>
                            </li>
                            <li>
                                <a href="{{route('login')}}" class="text-dark"><i class="fa fa-sign-in me-1"></i>
                                    <span>Login</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="text-dark" data-bs-toggle="dropdown"><i
                                        class="fa fa-home me-1"></i><span> My Dashboard</span></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <a href="{{route('my_dash')}}" class="dropdown-item">
                                        <i class="dropdown-icon icon icon-user"></i> My Profile
                                    </a>
                                    <a href="{{route('add_list')}}" class="dropdown-item">
                                        <i class="dropdown-icon icon icon-speech"></i> Ads
                                    </a>
                                    <a href="{{route('setting')}}" class="dropdown-item">
                                        <i class="dropdown-icon icon icon-bell"></i> Notifications
                                    </a>
                                    <a href="{{route('my_dash')}}" class="dropdown-item">
                                        <i class="dropdown-icon  icon icon-settings"></i> Account Settings
                                    </a>
                                    <a href="{{route('login')}}" class="dropdown-item">
                                        <i class="dropdown-icon icon icon-power"></i> Log out
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Duplex Houses Header -->
    <div class="sticky">
        <div class="horizontal-header clearfix ">
            <div class="container">
                <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                <span class="smllogo">
							<a href="{{route('home')}}">
								<img src="{{asset('assets/frontend/images/brand/logo.png')}}" class="mobile-light-logo" width="120"
                                     alt=""/>
								<img src="{{asset('assets/frontend/images/brand/logo1.png')}}" class="mobile-dark-logo" width="120"
                                     alt=""/>
							</a>
						</span>
                <a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- /Duplex Houses Header -->

    <div class="horizontal-main bg-dark-transparent clearfix">
        <div class="horizontal-mainwrapper container clearfix">
            <div class="desktoplogo">
                <a href="{{route('home')}}"><img src="{{asset('assets/frontend/images/brand/logo1.png')}}" alt=""></a>
            </div>
            <div class="desktoplogo-1">
                <a href="{{route('home')}}"><img src="{{asset('assets/frontend/images/brand/logo1.png')}}" alt=""></a>
            </div>
            <!--Nav-->
            <nav class="horizontalMenu clearfix d-md-flex">
                <ul class="horizontalMenu-list">
                    <li aria-haspopup="true"><a href="{{route('home')}}" class="active">Home</a>
                    </li>
                    <li aria-haspopup="true"><a href="{{route('about')}}">About Us </a></li>
                    <li aria-haspopup="true"><a href="{{route('widget')}}">Widgets</a></li>
                    <li aria-haspopup="true"><a href="{{route('property')}}">Property</a></li>
                    <li aria-haspopup="true"><a href="{{route('blog_list')}}">Blog </a></li>
                    <li aria-haspopup="true"><a href="{{route('category')}}">Categories</a></li>
                    <li aria-haspopup="true"><a href="{{route('contact')}}"> Contact Us <span
                                class="hmarrow"></span></a></li>
                    <li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0">
                        <span><a class="btn btn-secondary" href="javascript:void(0);">Post Property Ad</a></span>
                    </li>
                </ul>
                <ul class="mb-0">
                    <li aria-haspopup="true" class="mt-3 d-none d-lg-block top-postbtn">
                        <span><a class="btn btn-secondary ad-post "
                                 href="{{route('add_post')}}">Post Property Ad</a></span>
                    </li>
                </ul>
            </nav>
            <!--Nav-->
        </div>
    </div>
</div>

@yield('content')

<!--Footer Section-->
<section class="main-footer">
    <footer class="bg-dark text-white">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <h6>About</h6>
                        <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis exercitation ullamco
                            laboris </p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum .</p>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <h6>Our Quick Links</h6>
                        <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <ul class="list-unstyled mb-0">
                            <li><a href="javascript:;">Our Team</a></li>
                            <li><a href="javascript:;">Contact US</a></li>
                            <li><a href="javascript:;">About</a></li>
                            <li><a href="javascript:;">Luxury Rooms</a></li>
                            <li><a href="javascript:;">Blog</a></li>
                            <li><a href="javascript:;">Terms</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <h6>Contact</h6>
                        <hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-home me-3 text-primary"></i> New York, NY
                                    10012, US</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-envelope me-3 text-primary"></i>
                                    info12323@example.com</a></li>
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-phone me-3 text-primary"></i> + 01 234 567
                                    88</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-print me-3 text-primary"></i> + 01 234 567
                                    89</a>
                            </li>
                        </ul>
                        <ul class="list-unstyled list-inline mt-3">
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                    <i class="fa fa-facebook bg-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                    <i class="fa fa-twitter bg-info"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                    <i class="fa fa-google-plus bg-danger"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                    <i class="fa fa-linkedin bg-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <h6>Subscribe</h6>
                        <hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <div class="clearfix"></div>
                        <div class="input-group w-100">
                            <input type="text" class="form-control br-tl-3  br-bl-3 " placeholder="Email">
                            <button type="button" class="btn btn-primary br-tr-3  br-br-3"> Subscribe</button>
                        </div>
                        <h6 class="mb-0 mt-5">Payments</h6>
                        <hr class="deep-purple  text-primary accent-2 mb-2 mt-3 d-inline-block mx-auto">
                        <div class="clearfix"></div>
                        <ul class="footer-payments">
                            <li class="ps-0"><a href="javascript:;"><i class="fa fa-cc-amex text-muted"
                                                                       aria-hidden="true"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-cc-visa text-muted" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="javascript:;"><i class="fa fa-credit-card-alt text-muted"
                                                          aria-hidden="true"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-cc-mastercard text-muted" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="javascript:;"><i class="fa fa-cc-paypal text-muted" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark text-white p-0">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center ">
                        Copyright © 2022 <a href="javascript:void(0);" class="fs-14 text-primary">Reallist</a>. Designed
                        with <i class="fa fa-heart text-danger"></i> by <a href="javascript:void(0);"
                                                                           class="fs-14 text-primary">Spruko</a> All
                        rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--Footer Section-->

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>

<!-- JQuery js-->
<script src="{{asset('assets/frontend/js/vendors/jquery-3.6.0.min.js')}}"></script>

<!-- Bootstrap js -->
<script src="{{asset('assets/frontend/plugins/bootstrap-5/popper.min.js')}}"></script>
<script src="{{asset('assets/frontend/plugins/bootstrap-5/js/bootstrap.min.js')}}"></script>

<!--JQuery RealEstaterkline Js-->
<script src="{{asset('assets/frontend/js/vendors/jquery.sparkline.min.js')}}"></script>

<!-- Circle Progress Js-->
<script src="{{asset('assets/frontend/js/vendors/circle-progress.min.js')}}"></script>

<!-- Star Rating Js-->
<script src="{{asset('assets/frontend/plugins/rating/jquery.rating-stars.js')}}"></script>

<!--Counters -->
<script src="{{asset('assets/frontend/plugins/counters/counterup.min.js')}}"></script>
<script src="{{asset('assets/frontend/plugins/counters/waypoints.min.js')}}"></script>
<script src="{{asset('assets/frontend/plugins/counters/numeric-counter.js')}}"></script>

<!--Owl Carousel js -->
<script src="{{asset('assets/frontend/plugins/owl-carousel/owl.carousel.js')}}"></script>

<!--Horizontal Menu-->
<script src="{{asset('assets/frontend/plugins/horizontal-menu/horizontal.js')}}"></script>

<!--JQuery TouchSwipe js-->
<script src="{{asset('assets/frontend/js/jquery.touchSwipe.min.js')}}"></script>

<!--Select2 js -->
<script src="{{asset('assets/frontend/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/select2.js')}}"></script>

<!-- sticky Js-->
<script src="{{asset('assets/frontend/js/sticky.js')}}"></script>

<!-- Cookie js -->
<script src="{{asset('assets/frontend/plugins/cookie/jquery.ihavecookies.js')}}"></script>
<script src="{{asset('assets/frontend/plugins/cookie/cookie.js')}}"></script>

<!-- p-scroll bar Js-->
<script src="{{asset('assets/frontend/plugins/pscrollbar/pscrollbar.js')}}"></script>

<!--Showmore Js-->
<script src="{{asset('assets/frontend/js/jquery.showmore.js')}}"></script>
<script src="{{asset('assets/frontend/js/showmore.js')}}"></script>

<!-- Swipe Js-->
<script src="{{asset('assets/frontend/js/swipe.js')}}"></script>

<!-- Scripts Js-->
<script src="{{asset('assets/frontend/js/owl-carousel.js')}}"></script>

<!-- themecolor Js-->
<script src="{{asset('assets/frontend/js/themeColors.js')}}"></script>

<!-- Custom Js-->
<script src="{{asset('assets/frontend/js/custom.js')}}"></script>

<!-- Custom-switcher Js-->
<script src="{{asset('assets/frontend/js/custom-switcher.js')}}"></script>

</body>
</html>
