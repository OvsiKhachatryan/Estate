@extends('frontend.layouts.layout')
@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-bs-image-src="{{asset('assets/frontend/images/banners/banner2.jpg')}}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">Categories</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Categories</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--Categories-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Categories</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/h4.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Farm Houses</h4>
                                    <span class="badge rounded-pill badge-primary w-15">45</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/j3.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Duplex House</h4>
                                    <span class="badge rounded-pill badge-info w-15">23</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/b2.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Modren Flats</h4>
                                    <span class="badge rounded-pill badge-warning w-15">48</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/v2.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Luxury Homes</h4>
                                    <span class="badge rounded-pill badge-success w-15">15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card mb-xl-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/f2.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Apartments</h4>
                                    <span class="badge rounded-pill badge-danger w-15">12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card mb-xl-0">
                        <div class="item-card ">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/e1.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Offices</h4>
                                    <span class="badge rounded-pill badge-pink w-15">05</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card mb-xl-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/pe1.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">2BHK Flats</h4>
                                    <span class="badge rounded-pill badge-secondary w-15">09</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/co1.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Budget Houses</h4>
                                    <span class="badge rounded-pill badge-primary w-15">65</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Categories-->

    <!--Categories-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Categories</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <h3 class="card-title">
                                                    <i class="icon icon-home me-1"></i>
                                                    2BHK Homes
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec  p-1 mb-0">
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Balconies</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        New/Resale</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Age
                                                        of Property</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Price</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Booking Amount</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Security Deposit</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Facing</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Overlooking</a>
                                                </li>
                                                <li class="mb-0">
                                                    <a href="javascript:void(0);" class="text-primary"> View more..</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <h3 class="card-title">
                                                    <i class="icon icon-home me-1"></i>
                                                    Luxury Rooms
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Balconies</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        New/Resale</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Age
                                                        of Property</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Price</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Booking Amount</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Security Deposit</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Facing</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Overlooking</a>
                                                </li>
                                                <li class="mb-0">
                                                    <a href="javascript:void(0);" class="text-primary"> View more..</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <h3 class="card-title">
                                                    <i class="icon icon-home me-1"></i>
                                                    Duplex House
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Balconies</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        New/Resale</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Age
                                                        of Property</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Price</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Booking Amount</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Security Deposit</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Facing</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Overlooking</a>
                                                </li>
                                                <li class="mb-0">
                                                    <a href="javascript:void(0);" class="text-primary"> View more..</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <h3 class="card-title">
                                                    <i class="icon icon-home me-1"></i>
                                                    Modren Flats
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>New/Resal</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Balconies</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Age
                                                        of Property</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Price</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Facing</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Overlooking</a>
                                                </li>
                                                <li class="mb-0">
                                                    <a href="javascript:void(0);" class="text-primary"> View more..</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <h3 class="card-title">
                                                    <i class="icon icon-home me-1"></i>
                                                    Farm House
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>New/Resal</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Balconies</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Age
                                                        of Property</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Price</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Facing</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Overlooking</a>
                                                </li>
                                                <li class="mb-0">
                                                    <a href="javascript:void(0);" class="text-primary"> View more..</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <h3 class="card-title">
                                                    <i class="icon icon-home me-1"></i>
                                                    Office
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>New/Resal</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Balconies</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Age
                                                        of Property</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Price</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Facing</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Overlooking</a>
                                                </li>
                                                <li class="mb-0">
                                                    <a href="javascript:void(0);" class="text-primary"> View more..</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5 mb-lg-0">
                                        <div class="card-header">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <h3 class="card-title">
                                                    <i class="icon icon-home me-1"></i>
                                                    2BHK Rooms
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1 mb-0">
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>New/Resal</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Balconies</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Age
                                                        of Property</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Price</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Facing</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Overlooking</a>
                                                </li>
                                                <li class="mb-0">
                                                    <a href="javascript:void(0);" class="text-primary"> View more..</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5 mb-lg-0">
                                        <div class="card-header">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <h3 class="card-title">
                                                    <i class="icon icon-home me-1"></i>
                                                    3BHK Homes
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body mb-lg-0">
                                            <ul class="list-unstyled widget-spec p-1 mb-0">
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>New/Resal</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Balconies</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Age
                                                        of Property</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Price</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Facing</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Overlooking</a>
                                                </li>
                                                <li class="mb-0">
                                                    <a href="javascript:void(0);" class="text-primary"> View more..</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                                    <div class="card mb-5 mb-lg-0">
                                        <div class="card-header">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <h3 class="card-title">
                                                    <i class="icon icon-home me-1"></i>
                                                    Apartments
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1 mb-0">
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>New/Resal</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Balconies</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Age
                                                        of Property</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Price</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Facing</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Overlooking</a>
                                                </li>
                                                <li class="mb-0">
                                                    <a href="javascript:void(0);" class="text-primary"> View more..</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Categories-->

    <x-frontend.newsletter/>
@endsection
