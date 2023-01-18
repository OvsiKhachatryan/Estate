@extends('frontend.layouts.layout')
@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3 sptb-2" data-bs-image-src="{{asset('assets/frontend/images/banners/banner2.jpg')}}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">About Us</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--section-->
    <section class="sptb">
        <div class="container">
            <div class="text-justify">
                <h2 class="mb-4">Why Reallist?</h2>
                <h4 class="leading-normal">Majority have suffered alteration in some form, by injected humor</h4>
                <p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority have suffered  by injected humour, or randomised words which don't look even slightly believable.
                    If you are going to use a passage of Lorem Ipsum, you need to as necessary All the Lorem Ipsum generators on the Internet tend to repeat</p>
                <p class="leading-normal">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                <p class="leading-normal mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </section>
    <!--/section-->

    <!--How to work-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>How It Works?</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-lg-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg box-shadow icon-service  about">
                                    <img src="{{asset('assets/frontend/images/products/about/employees.png')}}" alt="img">
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">Register</h4>
                                    <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-lg-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg box-shadow icon-service  about">
                                    <img src="{{asset('assets/frontend/images/products/about/megaphone.png')}}" alt="img">
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">Create Account</h4>
                                    <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-sm-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg box-shadow icon-service  about">
                                    <img src="{{asset('assets/frontend/images/products/about/pencil.png')}}" alt="img">
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">Add Posts</h4>
                                    <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg box-shadow icon-service  about">
                                    <img src="{{asset('assets/frontend/images/products/about/coins.png')}}" alt="img">
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">Get Earnings</h4>
                                    <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/How to work-->

    <!--post section-->
    <section>
        <div class="cover-image sptb bg-background-color" data-bs-image-src="{{asset('assets/frontend/images/banners/banner4.jpg')}}">
            <div class="content-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h2 class="mb-2 display-5">Are you ready for the posting you ads on this Site?</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="mt-5">
                            <a href="ad-posts.html" class="btn btn-secondary  btn-lg">Free Property Ad</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/post section-->

    <!--section-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Why Choose Us?</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="row ">
                <div class="col-sm-6 col-lg-4 features">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-success  mb-3">
                                    <i class="fa fa-university  text-white"></i>
                                </div>
                                <h3>Bank Loan Facility</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 features">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-primary mb-3">
                                    <i class="fa fa-pencil-square-o  text-white"></i>
                                </div>
                                <h3>Spot Registration</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 features">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-secondary mb-3">
                                    <i class="fa fa-handshake-o  text-white"></i>
                                </div>
                                <h3>Investment Consulting</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 features">
                    <div class="card mb-lg-0">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-warning mb-3">
                                    <i class="fa fa-cubes   text-white"></i>
                                </div>
                                <h3>Construction Services</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 features">
                    <div class="card mb-lg-0 mb-md-0">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-danger mb-3">
                                    <i class="fa fa-cogs   text-white"></i>
                                </div>
                                <h3>Personalized Service</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 features">
                    <div class="card mb-0">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-info mb-3">
                                    <i class="fa fa-flask  text-white"></i>
                                </div>
                                <h3>Property Maintenance</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/section-->

    <!--Statistics-->
    <section>
        <div class="about-1 cover-image sptb bg-background-color" data-bs-image-src="{{asset('assets/frontend/images/banners/banner5.jpg')}}">
            <div class="content-text mb-0 text-white info">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status md-mb-0">
                                <div class="counter-icon text-danger">
                                    <i class="icon icon-people"></i>
                                </div>
                                <h5>Total Agents</h5>
                                <h2 class="counter mb-0 font-weight-bold">893</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status-1 md-mb-0">
                                <div class="counter-icon text-warning">
                                    <i class="icon icon-rocket"></i>
                                </div>
                                <h5>Total Sales</h5>
                                <h2 class="counter mb-0 font-weight-bold">1765</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status md-mb-0">
                                <div class="counter-icon text-primary">
                                    <i class="icon icon-docs"></i>
                                </div>
                                <h5>Total Projects</h5>
                                <h2 class="counter mb-0 font-weight-bold">846</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status">
                                <div class="counter-icon text-success">
                                    <i class="icon icon-emotsmile"></i>
                                </div>
                                <h5>Happy Customers</h5>
                                <h2 class="counter font-weight-bold">7253</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Statistics-->

    <!--section-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Our Team</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-12">
                    <div class="card mb-xl-0">
                        <div class="card-body">
                            <div class="team-section text-center">
                                <div class="team-img">
                                    <img src="{{asset('assets/frontend/images/faces/male/1.jpg')}}" class="img-thumbnail rounded-circle alt=" alt="">
                                </div>
                                <h4 class="font-weight-bold dark-grey-text mt-4">Tracey	Poole</h4>
                                <h6 class="text-muted mb-3">RealEstate Agent</h6>
                                <p class="font-weight-normal dark-grey-text">
                                    <i class="fa fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                                <div class="text-warning">
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star-half-full"> </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="card mb-xl-0">
                        <div class="card-body">
                            <div class="team-section text-center">
                                <div class="team-img">
                                    <img src="{{asset('assets/frontend/images/faces/female/1.jpg')}}" class="img-thumbnail rounded-circle alt=" alt="">
                                </div>
                                <h4 class="font-weight-bold dark-grey-text mt-4">Harry	Walker</h4>
                                <h6 class="text-muted mb-3">RealEstate Builder</h6>
                                <p class="font-weight-normal dark-grey-text">
                                    <i class="fa fa-quote-left pe-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem ullam quis nostrum  corporis suscipit laboriosam, nisi ut aliquid commodi.</p>
                                <div class="text-warning">
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="team-section text-center">
                                <div class="team-img">
                                    <img src="{{asset('assets/frontend/images/faces/male/2.jpg')}}" class="img-thumbnail rounded-circle alt=" alt="">
                                </div>
                                <h4 class="font-weight-bold dark-grey-text mt-4">Paul White</h4>
                                <h6 class="text-muted mb-3">RealEstate Owner</h6>
                                <p class="font-weight-normal dark-grey-text">
                                    <i class="fa fa-quote-left pe-2"></i>Luxury Home  For Sale odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
                                <div class="text-warning">
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star-o"> </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/section-->
  <x-frontend.newsletter/>
@endsection
