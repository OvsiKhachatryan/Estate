@extends('frontend.layouts.layout')
@section('content')
    <!--Sliders Section-->
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background2" data-bs-image-src="{{asset('assets/frontend/images/banners/banner1.jpg')}}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white mb-7">
                        <h1 class="mb-1">Find Your Best Property</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable.</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="search-background bg-transparent">
                                <div class="form row no-gutters ">
                                    <div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0">
                                        <input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0" id="text4" placeholder="Enter Loaction, Landmark">
                                        <span><i class="fa fa-map-marker location-gps me-1"></i></span>
                                    </div>
                                    <div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg mb-0">
                                        <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Property Type">
                                            <optgroup label="Categories">
                                                <option>Property Type</option>
                                                <option value="1">Deluxe Houses</option>
                                                <option value="2">Modren Flats</option>
                                                <option value="3">Apartments</option>
                                                <option value="4">Stylish Houses</option>
                                                <option value="5">Offices Houses</option>
                                                <option value="6">Luxury Houses</option>
                                                <option value="7">Nature Houses</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg mb-0">
                                        <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Min Value">
                                            <option value="1" selected>Min Price</option>
                                            <option value="2">$50</option>
                                            <option value="3">$60</option>
                                            <option value="4">$70</option>
                                            <option value="5">$80</option>
                                            <option value="5">$90</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg mb-0">
                                        <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Max Value">
                                            <option value="1" selected>Max Price</option>
                                            <option value="2">$100</option>
                                            <option value="3">$110</option>
                                            <option value="4">$120</option>
                                            <option value="5">$130</option>
                                            <option value="5">$140</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                        <a href="javascript:void(0);" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Search Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /header-text -->
        </div>
    </section>
    <!--Sliders Section-->

    <!--Categories-->
    <section class="categories">
        <div class="container">
            <div class="card mb-0 box-shadow-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 d-catmb mb-4 mb-lg-0">
                            <div class="d-flex">
                                <div>
									<span class="bg-primary-transparent icon-service1 text-primary">
										<i class="fa fa-map-o"></i>
									</span>
                                </div>
                                <div class="ms-4 mt-1">
                                    <h3 class=" mb-0 font-weight-bold">1,200</h3>
                                    <p class="mb-0 text-muted">Commercial Lands</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 d-catmb mb-4 mb-lg-0">
                            <div class="d-flex">
                                <div>
									<span class="bg-secondary-transparent icon-service1 text-secondary">
										<i class="fa fa-home"></i>
									</span>
                                </div>
                                <div class="ms-4 mt-1">
                                    <h3 class=" mb-0 font-weight-bold">894</h3>
                                    <p class="mb-0 text-muted">Showrooms & Shops</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 d-catmb mb-4 mb-sm-0">
                            <div class="d-flex">
                                <div>
									<span class="bg-warning-transparent icon-service1 text-warning">
										<i class="fa fa-object-group"></i>
									</span>
                                </div>
                                <div class="ms-4 mt-1">
                                    <h3 class=" mb-0 font-weight-bold">1,089</h3>
                                    <p class="mb-0 text-muted">Office rooms</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <div class="d-flex">
                                <div>
									<span class="bg-info-transparent icon-service1 text-info">
										<i class="fa fa-building-o"></i>
									</span>
                                </div>
                                <div class="ms-4 mt-1">
                                    <h3 class=" mb-0 font-weight-bold ">789</h3>
                                    <p class="mb-0 text-muted">Residential</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Categories-->

    <!--Categories-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Categories</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div id="small-categories" class="owl-carousel owl-carousel-icons2">
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/1.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Stylish Houses</h4>
                                    <span class="badge rounded-pill badge-primary w-15">45</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/2.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Luxury Houses</h4>
                                    <span class="badge rounded-pill badge-secondary w-15">23</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/3.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Apartments</h4>
                                    <span class="badge rounded-pill badge-warning w-15">48</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/9.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Deluxe Houses</h4>
                                    <span class="badge rounded-pill badge-info w-15">15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/10.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Nature Houses</h4>
                                    <span class="badge rounded-pill badge-success w-15">12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card ">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/11.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">2BHK Houses</h4>
                                    <span class="badge rounded-pill badge-pink w-15">05</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0 mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/3.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">3BK Houses</h4>
                                    <span class="badge rounded-pill badge-primary w-15">09</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/12.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Duplex House</h4>
                                    <span class="badge rounded-pill badge-secondary w-15">65</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/13.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Office Houses</h4>
                                    <span class="badge rounded-pill badge-warning w-15">45</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/14.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">KidsFriendly Houses</h4>
                                    <span class="badge rounded-pill badge-info w-15">36</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="{{asset('assets/frontend/images/products/4.png')}}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Budget Homes</h4>
                                    <span class="badge rounded-pill badge-success w-15">59</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Categories-->

    <!--Latest Ads-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Latest Properties</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
                <div class="item">
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="col-left.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/f1.jpg')}}" alt="img" class="cover-image">
                            <div class="tag-text">
                                <span class="bg-danger tag-option">For Sale </span>
                                <span class="bg-pink tag-option">Open</span>
                            </div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="col-left.html" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
                            <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Deluxe Houses</h4></a>
                                    <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i> Preston Street Wichita , USA </p>
                                    <h5 class="font-weight-bold mb-3">$89,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                                </div>
                                <ul class="item-card2-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 256 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 3 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 2 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="{{asset('assets/frontend/images/faces/male/18.jpg')}}" alt="image" class="avatar brround  me-2">
                                    <h5 class="time-title text-muted p-0 leading-normal my-auto">Wendy Peake<i class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="my-auto footerimg-r ms-auto">
                                    <small class="text-muted">1 day ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="col-left.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/h4.jpg')}}" alt="img" class="cover-image">
                            <div class="tag-text"><span class="bg-danger tag-option">For Rent </span></div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="javascript:void(0);" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
                            <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">2BK Houses</h4></a>
                                    <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i> Preston Street Wichita , USA </p>
                                    <h5 class="font-weight-bold mb-3">$12,890 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                                </div>
                                <ul class="item-card2-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 150 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 2 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="{{asset('assets/frontend/images/faces/female/12.jpg')}}" alt="image" class="avatar brround  me-2">
                                    <h5 class="time-title text-muted p-0 leading-normal my-auto">Ryan Lyman<i class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="my-auto footerimg-r ms-auto">
                                    <small class="text-muted">55 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card2-img">
                            <a href="col-left.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/b1.jpg')}}" alt="img" class="cover-image">
                            <div class="tag-text">
                                <span class="bg-danger tag-option">For Rent </span>
                                <span class="bg-pink tag-option">Hot</span>
                            </div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="javascript:void(0);" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
                            <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Office Rooms</h4></a>
                                    <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i> Preston Street Wichita , USA </p>
                                    <h5 class="font-weight-bold mb-3">$25,784 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                                </div>
                                <ul class="item-card2-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 256 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 8 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 4 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 4 Car</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="{{asset('assets/frontend/images/faces/male/8.jpg')}}" alt="image" class="avatar brround  me-2">
                                    <h5 class="time-title text-muted p-0 leading-normal my-auto">Joan Hunter<i class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="my-auto footerimg-r ms-auto">
                                    <small class="text-muted">2 day ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="col-left.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/v1.jpg')}}" alt="img" class="cover-image">
                            <div class="tag-text"><span class="bg-danger tag-option">For Sale </span></div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="javascript:void(0);" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
                            <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Apartments</h4></a>
                                    <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i> Preston Street Wichita , USA </p>
                                    <h5 class="font-weight-bold mb-3">$89,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                                </div>
                                <ul class="item-card2-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 700 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 20 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 10 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 10 Car</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="{{asset('assets/frontend/images/faces/female/19.jpg')}}" alt="image" class="avatar brround  me-2">
                                    <h5 class="time-title text-muted p-0 leading-normal my-auto">Elizabeth<i class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="my-auto footerimg-r ms-auto">
                                    <small class="text-muted">50 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item sold-out">
                    <div class="ribbon sold-ribbon ribbon-top-left text-danger"><span class="bg-danger">Sold Out</span></div>
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="col-left.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/f3.jpg')}}" alt="img" class="cover-image">
                            <div class="tag-text">
                                <span class="bg-danger tag-option">For Sale </span>
                                <span class="bg-pink tag-option">New</span>
                            </div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="javascript:void(0);" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
                            <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Duplex House</h4></a>
                                    <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i> Preston Street Wichita , USA </p>
                                    <h5 class="font-weight-bold mb-3">$23,789 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                                </div>
                                <ul class="item-card2-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="{{asset('assets/frontend/images/faces/female/18.jpg')}}" alt="image" class="avatar brround  me-2">
                                    <h5 class="time-title text-muted p-0 leading-normal my-auto">Boris Nash<i class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="my-auto footerimg-r ms-auto">
                                    <small class="text-muted">12 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Latest Ads-->

    <!--Featured Ads-->
    <section class="sptb bg-patterns">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Featured Properties</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div id="myCarousel2" class="owl-carousel owl-carousel-icons2">
                <!-- Wrapper for carousel items -->
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-primary">For Sale</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/b3.jpg')}}" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="col-left.html" class="text-white"> Featured </a>
                            <span class="mb-0 fs-13 active"><i class="fa fa fa-heart"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Deluxe Flat</h4></a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> New York, NY 10012, US </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">$89,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event me-2 mt-1"></i>Jul 10 2019 </span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-purple">For Buy</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/h3.jpg')}}" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="col-left.html" class="text-white">Featured</a>
                            <span class="mb-0 fs-13"><i class="fa fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">2BHk Deluxe Flat</h4></a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> New York, NY 10012, US </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">$89,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event me-2 mt-1"></i>Jul 05 2019 </span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-secondary">For Rent</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/v4.jpg')}}" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="col-left.html" class="text-white">Featured</a>
                            <span class="mb-0 fs-13 active"><i class="fa fa fa-heart"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">House For Sale</h4></a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> New York, NY 10012, US </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">$89,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event me-2 mt-1"></i>June 29 2019 </span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-primary">For Sale</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/f2.jpg')}}" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="col-left.html" class="text-white"> Featured</a>
                            <span class="mb-0 fs-13"><i class="fa fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Office For Rent</h4></a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> New York, NY 10012, US </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">$89,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event me-2 mt-1"></i>June 25 2019 </span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item sold-out">
                    <div class="ribbon sold-ribbon ribbon-top-left text-danger"><span class="bg-danger">Sold Out</span></div>
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-secondary">For Rent</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/j3.jpg')}}" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="col-left.html" class="text-white">Featured</a>
                            <span class="mb-0 fs-13 active"><i class="fa fa fa-heart"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text ">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Modern House For Sale</h4></a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> New York, NY 10012, US </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">$89,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event me-2 mt-1"></i>June 19 2019 </span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Featured Ads-->

    <!--Statistics-->
    <section>
        <div class="about-1 cover-image sptb bg-background2" data-bs-image-src="{{asset('assets/frontend/images/banners/banner5.jpg')}}">
            <div class="content-text mb-0 text-white info">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status md-mb-0">
                                <div class="counter-icon">
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
                                <h2 class="counter font-weight-bold mb-0">7253</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Statistics-->

    <!--Property-->
    <section class="sptb">
        <div class="container">
            <div class="col-md-12">
                <div class="items-gallery">
                    <div class="items-blog-tab text-center">
                        <h2 class="">Best Property Collections</h2>
                        <div class="items-blog-tab-heading">
                            <div class="">
                                <ul class="nav items-blog-tab-menu">
                                    <li class=""><a href="#tab-1" class="active show" data-bs-toggle="tab">All</a></li>
                                    <li><a href="#tab-2" data-bs-toggle="tab" class="">2BHK Homes</a></li>
                                    <li><a href="#tab-3" data-bs-toggle="tab" class="">Villas</a></li>
                                    <li><a href="#tab-4" data-bs-toggle="tab" class="">Apartments</a></li>
                                    <li><a href="#tab-5" data-bs-toggle="tab" class="">Deplux Houses</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content p-0">
                            <div class="tab-pane active" id="tab-1">
                                <div class="row pt-2" id="container3">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
											    <span class="ribbon-2">
													<span><i class="fa fa-home"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/f1.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Luxury Room</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 June 2019.</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
												<span class="ribbon-3">
													<span><i class="fa fa-building"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/b1.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info  mb-0">Villa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">05 June 2019</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
											    <span class="ribbon-2">
													<span><i class="fa fa-home"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/h4.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Apartments</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">21 June 2019</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
												<span class="ribbon-3">
													<span><i class="fa fa-building"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/f4.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info  mb-0">Deplux Rooms</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">20 June 2019</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
											    <span class="ribbon-1">
													<span><i class="fa fa-home"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/j2.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary mb-0">2BHK House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">11 June 2019 </p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
											    <span class="ribbon-2">
													<span><i class="fa fa-building-o"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/b2.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Villa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">26 May 2019.</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
											    <span class="ribbon-3">
													<span><i class="fa fa-home"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/h2.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info mb-0">Apartments</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">18 June 2019</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
											    <span class="ribbon-1">
													<span><i class="fa fa-building"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/f3.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary mb-0">Duplex House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">19 June 2019</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
											    <span class="ribbon-3">
													<span><i class="fa fa-home"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/j3.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info mb-0">2BHK House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">10 June 2019.</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-lg-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-building-o"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/j1.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary  mb-0">Villa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2019.</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-home"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/h3.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary  mb-0">Apartments</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">06 July 2019</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
											    <span class="ribbon-2">
													<span><i class="fa fa-building"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/f2.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Duplex Room</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">13 June 2019</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
											    <span class="ribbon-2">
													<span><i class="fa fa-home"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/f1.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Luxury Room</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 June 2019.</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-home"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/j2.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary mb-0">2BHK House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">11 June 2019 </p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
											    <span class="ribbon-3">
													<span><i class="fa fa-home"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/j3.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info mb-0">Modren Kitchen</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">10 June 2019.</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
												<span class="ribbon-3">
													<span><i class="fa fa-building"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/b1.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info  mb-0">Villa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">05 June 2019</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
											    <span class="ribbon-2">
													<span><i class="fa fa-building-o"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/b2.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Garden House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">26 May 2019.</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-building-o"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/j1.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary  mb-0">Villa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2019.</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
											    <span class="ribbon-2">
													<span><i class="fa fa-home"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/h4.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Apartments</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">21 June 2019</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
											    <span class="ribbon-3">
													<span><i class="fa fa-home"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/h2.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info mb-0">2BHK House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">18 June 2019</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-home"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/h3.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary  mb-0">3BHK House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">06 July 2019</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
											    <span class="ribbon-3">
													<span><i class="fa fa-building"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/f4.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info  mb-0">Deplux Rooms</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">20 June 2019</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-building"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/f3.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary mb-0">Duplex House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">19 June 2019</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
											    <span class="ribbon-2">
													<span><i class="fa fa-building"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="{{asset('assets/frontend/images/products/f2.png')}}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Duplex Room</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">13 June 2019</p>
                                                    <a href="ad-details.html"><h4 class="font-weight-semibold">Food &amp; Bar Apartments</h4></a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
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
    <!--/Property-->

    <!--Testimonials-->
    <section class="sptb position-relative pattern">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1 class="text-white position-relative">Testimonials</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia">
                                        <div class="owl-controls clickable">
                                            <div class="owl-pagination">
                                                <div class="owl-page active">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page ">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page">
                                                    <span class=""></span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-white-80">
                                            <i class="fa fa-quote-left text-white-80"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in cillum dolore eu fugiat nulla pariatur.
                                        </p>
                                        <h3 class="title">Elizabeth</h3>
                                        <div class="rating-stars mb-2 d-block">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm ">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm ">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm ">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="testimonial.html" class="btn btn-secondary btn-lg">View all Testimonials</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia">
                                        <div class="owl-controls clickable">
                                            <div class="owl-pagination">
                                                <div class="owl-page ">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page active">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page">
                                                    <span class=""></span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-white-80"><i class="fa fa-quote-left"></i> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nor again is there anyone who loves or pursues obtain pain of itself, because laboriosam ex ea commodi consequatur. </p>
                                        <div class="testimonia-data">
                                            <h3 class="title">williamson</h3>
                                            <div class="rating-stars">
                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                                                <div class="rating-stars-container mb-2">
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <a href="testimonial.html" class="btn btn-secondary btn-lg">View all Testimonials</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia">
                                        <div class="owl-controls clickable">
                                            <div class="owl-pagination">
                                                <div class="owl-page ">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page active">
                                                    <span class=""></span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-white-80"><i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum exercitation ullamco laboris nisi.</p>
                                        <div class="testimonia-data">
                                            <h3 class="title">Sophie Carr</h3>
                                            <div class="rating-stars">
                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                                                <div class="rating-stars-container mb-2">
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <a href="testimonial.html" class="btn btn-secondary btn-lg">View all Testimonials</a>
                                            </div>
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
    <!--/Testimonials-->

    <!--Blogs-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Top Lisiting Places</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="{{asset('assets/frontend/images/locations/germany.jpg')}}" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-tags">
                                            <div class="bg-primary tag-option"><i class="fa fa fa-heart-o me-1"></i> 786</div>
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0">44,327<span><i class="fa fa-map-marker me-1 text-primary"></i>GERMANY</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="{{asset('assets/frontend/images/locations/london.jpg')}}" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-tags">
                                            <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o me-1"></i> 89</div>
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0">52,145<span><i class="fa fa-map-marker me-1 text-primary"></i> LONDON</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden mb-lg-0">
                                        <div class="card-img">
                                            <img src="{{asset('assets/frontend/images/locations/austerlia.jpg')}}" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-tags">
                                            <div class="bg-primary tag-option"><i class="fa fa fa-heart-o me-1"></i> 894</div>
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0">63,263<span><i class="fa fa-map-marker text-primary me-1"></i>AUSTERLIA</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden mb-lg-0">
                                        <div class="card-img">
                                            <img src="{{asset('assets/frontend/images/locations/chicago.jpg')}}" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-tags">
                                            <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o me-1"></i> 123 </div>
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0">36,485<span><i class="fa fa-map-marker text-primary me-1"></i>CHICAGO</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xl-6 col-sm-12">
                    <div class="item-card overflow-hidden">
                        <div class="item-card-desc">
                            <div class="card overflow-hidden mb-0">
                                <div class="card-img">
                                    <img src="{{asset('assets/frontend/images/locations/losangels-1.jpg')}}" alt="img" class="cover-image">
                                </div>
                                <div class="item-tags">
                                    <div class="bg-primary tag-option"><i class="fa fa fa-heart-o me-1"></i> 567 </div>
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">64,825<span><i class="fa fa-map-marker text-primary me-1"></i>WASHINGTON</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blogs-->

    <!--Download -->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Download</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center text-wrap">
                        <div class="btn-list">
                            <a href="javascript:void(0);" class="btn btn-primary btn-lg mb-sm-0"><i class="fa fa-apple fa-1x me-2"></i> App Store</a>
                            <a href="javascript:void(0);" class="btn btn-secondary btn-lg mb-sm-0"><i class="fa fa-android fa-1x me-2"></i> Google Play</a>
                            <a href="javascript:void(0);" class="btn btn-info btn-lg mb-sm-0"><i class="fa fa-windows fa-1x me-2"></i> Windows</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Download -->

    <!-- News -->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Recent Posts</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div id="defaultCarousel" class="owl-carousel Card-owlcarousel owl-carousel-icons">
                <div class="item">
                    <div class="card mb-0">
                        <div class="item7-card-img">
                            <a href="blog-details.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/ed1.jpg')}}" alt="img" class="cover-image">
                            <div class="item7-card-text">
                                <span class="badge badge-info">Farm House</span>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="item7-card-desc d-flex mb-2">
                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>July-03-2019</a>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>4 Comments</a>
                                </div>
                            </div>
                            <a href="blog-details.html" class="text-dark"><h4 class="fs-20">Luxury Flat For Rent</h4></a>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                            <div class="d-flex align-items-center pt-2 mt-auto">
                                <img src="{{asset('assets/frontend/images/faces/male/5.jpg')}}" class="avatar brround avatar-md me-3" alt="avatar-img">
                                <div>
                                    <a href="profile.html" class="text-default">Joanne Nash</a>
                                    <small class="d-block text-muted">1 day ago</small>
                                </div>
                                <div class="ms-auto text-muted">
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item7-card-img">
                            <a href="blog-details.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/j2.jpg')}}" alt="img" class="cover-image">
                            <div class="item7-card-text">
                                <span class="badge badge-primary">Luxury Room</span>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="item7-card-desc d-flex mb-2">
                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>June-03-2019</a>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>2 Comments</a>
                                </div>
                            </div>
                            <a href="blog-details.html" class="text-dark"><h4 class="fs-20">Deluxe Flat For Sale</h4></a>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                            <div class="d-flex align-items-center pt-2 mt-auto">
                                <img src="{{asset('assets/frontend/images/faces/male/7.jpg')}}" class="avatar brround avatar-md me-3" alt="avatar-img">
                                <div>
                                    <a href="profile.html" class="text-default">Tanner Mallari</a>
                                    <small class="d-block text-muted">2 days ago</small>
                                </div>
                                <div class="ms-auto text-muted">
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item7-card-img">
                            <a href="blog-details.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/ed2.jpg')}}" alt="img" class="cover-image">
                            <div class="item7-card-text">
                                <span class="badge badge-success">2BHK Flat</span>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="item7-card-desc d-flex mb-2">
                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>June-19-2019</a>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>8 Comments</a>
                                </div>
                            </div>
                            <a href="blog-details.html" class="text-dark"><h4 class="fs-20">Luxury Home  For Sale</h4></a>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                            <div class="d-flex align-items-center pt-2 mt-auto">
                                <img src="{{asset('assets/frontend/images/faces/female/15.jpg')}}" class="avatar brround avatar-md me-3" alt="avatar-img">
                                <div>
                                    <a href="profile.html" class="text-default">Aracely Bashore</a>
                                    <small class="d-block text-muted">5 days ago</small>
                                </div>
                                <div class="ms-auto text-muted">
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item7-card-img">
                            <a href="blog-details.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/h1.jpg')}}" alt="img" class="cover-image">
                            <div class="item7-card-text">
                                <span class="badge badge-primary">Duplex House</span>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="item7-card-desc d-flex mb-2">
                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>June-03-2019</a>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>4 Comments</a>
                                </div>
                            </div>
                            <a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Luxury Flat For Rent</h4></a>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                            <div class="d-flex align-items-center pt-2 mt-auto">
                                <img src="{{asset('assets/frontend/images/faces/male/15.jpg')}}" class="avatar brround avatar-md me-3" alt="avatar-img">
                                <div>
                                    <a href="profile.html" class="text-default">Royal Hamblin</a>
                                    <small class="d-block text-muted">10 days ago</small>
                                </div>
                                <div class="ms-auto text-muted">
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item7-card-img">
                            <a href="blog-details.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/j3.jpg')}}" alt="img" class="cover-image">
                            <div class="item7-card-text">
                                <span class="badge badge-pink">Budget House</span>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="item7-card-desc d-flex mb-2">
                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>May-28-2019</a>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>2 Comments</a>
                                </div>
                            </div>
                            <a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Home  For Sale</h4></a>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                            <div class="d-flex align-items-center pt-2 mt-auto">
                                <img src="{{asset('assets/frontend/images/faces/female/5.jpg')}}" class="avatar brround avatar-md me-3" alt="avatar-img">
                                <div>
                                    <a href="profile.html" class="text-default">Rosita Chatmon</a>
                                    <small class="d-block text-muted">10 days ago</small>
                                </div>
                                <div class="ms-auto text-muted">
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item7-card-img">
                            <a href="blog-details.html"></a>
                            <img src="{{asset('assets/frontend/images/products/products/ed4.jpg')}}" alt="img" class="cover-image">
                            <div class="item7-card-text">
                                <span class="badge badge-success">3BHK Flats</span>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="item7-card-desc d-flex mb-2">
                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>May-19-2019</a>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>8 Comments</a>
                                </div>
                            </div>
                            <a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Luxury Home  For Sale</h4></a>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                            <div class="d-flex align-items-center pt-2 mt-auto">
                                <img src="{{asset('assets/frontend/images/faces/male/6.jpg')}}" class="avatar brround avatar-md me-3" alt="avatar-img">
                                <div>
                                    <a href="profile.html" class="text-default">Loyd Nolf</a>
                                    <small class="d-block text-muted">15 days ago</small>
                                </div>
                                <div class="ms-auto text-muted">
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News -->
@endsection
