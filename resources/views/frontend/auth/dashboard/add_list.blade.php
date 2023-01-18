@extends('frontend.layouts.layout')
@section('content')
    <!--Sliders Section-->
    <div>
        <div class=" cover-image sptb-1 bg-background" data-bs-image-src="{{asset('assets/frontend/images/banners/banner1.jpg')}}}}">
            <div class="header-text1 mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="text-center text-white text-property">
                                <h1 ><span class="font-weight-bold">16,25,365</span> Properties Available</h1>
                            </div>
                            <div class="search-background bg-transparent">
                                <div class="form row no-gutters ">
                                    <div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0">
                                        <input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0" id="text4" placeholder="Find  Property">
                                    </div>
                                    <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0">
                                        <input type="text" class="form-control input-lg br-md-0" id="text5" placeholder="Enter Location">
                                        <span><i class="fa fa-map-marker location-gps me-1"></i> </span>										</div>
                                    <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg mb-0">
                                        <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category">
                                            <optgroup label="Categories">
                                                <option>Select</option>
                                                <option value="1">Delux Houses</option>
                                                <option value="2">Modren Flats</option>
                                                <option value="3">Apartments</option>
                                                <option value="4">Apartments</option>
                                                <option value="5">Offices</option>
                                                <option value="6">Luxury Homes</option>
                                                <option value="7">Shops</option>
                                                <option value="8">Farm Houses</option>
                                            </optgroup>
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
    </div>
    <!--/Sliders Section-->

    <!--Breadcrumb-->
    <div class="bg-white border-bottom">
        <div class="container">
            <div class="page-header">
                <h4 class="page-title">Ad List</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ad List</li>
                </ol>
            </div>
        </div>
    </div>
    <!--/Breadcrumb-->

    <!--Add listing-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-12">
                    <!--Add lists-->
                    <div class=" mb-lg-0">
                        <div class="">
                            <div class="item2-gl ">
                                <div class=" mb-0">
                                    <div class="">
                                        <div class="p-5 bg-white item2-gl-nav d-flex border br-5">
                                            <h6 class="mb-0 mt-2">Showing 1 to 10 of 30 entries</h6>
                                            <ul class="nav item2-gl-menu ms-auto mt-2">
                                                <li class=""><a href="#tab-11" class="active show" data-bs-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
                                                <li><a href="#tab-12" data-bs-toggle="tab" class="" title="Grid"><i class="fa fa-th"></i></a></li>
                                            </ul>
                                            <div class="d-flex">
                                                <label class="me-2 mt-1 mb-sm-1 pt-2">Sort By:</label>
                                                <select name="item" class="form-control select-sm w-75 select2">
                                                    <option value="1">Latest</option>
                                                    <option value="2">Oldest</option>
                                                    <option value="3">Price:Low-to-High</option>
                                                    <option value="5">Price:Hight-to-Low</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-11">
                                        <div class="card overflow-hidden">
                                            <div class="d-md-flex">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-primary">$263.99</div>
                                                    <div class="item-card9-imgs">
                                                        <a href="col-left.html"></a>
                                                        <img src="{{asset('assets/frontend/images/products/h4.png')}}" alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);" class="item-card9-icons1 wishlist" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o" ></i></a>
                                                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                                                    </div>
                                                    <div class="item-tags">
                                                        <div class="bg-success tag-option">For Sale </div>
                                                        <div class="bg-pink tag-option">Open </div>
                                                    </div>
                                                    <div class="item-trans-rating">
                                                        <div class="rating-stars block">
                                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
                                                            <div class="rating-stars-container">
                                                                <div class="rating-star sm  ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm  ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm  ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="col-left.html" class="text-muted me-4"><i class="fa fa-tag me-1"></i> Villa</a>
                                                            <a href="javascript:void(0);" class=""><span class="text-muted"><i class="fa fa-calendar-o  me-1"></i> 2 days ago</span></a>
                                                            <a href="col-left.html" class="text-dark"><h4 class="font-weight-bold mt-1">2BHK flat </h4></a>
                                                            <div class="mb-1">
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-arrows-alt text-muted me-1"></i> 950 Sqft</a>
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a>
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a>
                                                                <a href="javascript:void(0);" class="icons  text-muted me-4"><i class="fa fa-car text-muted me-1"></i> 2 Car</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pt-4 pb-4">
                                                        <div class="item-card9-footer d-flex">
                                                            <div class="item-card9-cost">
                                                                <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> USA</span></a>
                                                                <a href="javascript:void(0);" class="me-0"><span class=""><i class="fa fa-user text-muted me-1"></i> Owner</span></a>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card overflow-hidden">
                                            <div class="d-md-flex">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-secondary">$987.88</div>
                                                    <div class="item-card9-imgs">
                                                        <a href="col-left.html"></a>
                                                        <div id="carousel-controls" class="carousel slide property-slide" data-bs-ride="carousel" data-interval="false">
                                                            <div class="carousel-inner br-0">
                                                                <div class="carousel-item active">
                                                                    <img src="{{asset('assets/frontend/images/products/j2.png')}}" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src="{{asset('assets/frontend/images/products/f2.png')}}" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src="{{asset('assets/frontend/images/products/f4.png')}}" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src="{{asset('assets/frontend/images/products/b3.png')}}" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src="{{asset('assets/frontend/images/products/e1.png')}}" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                                                                </div>
                                                            </div>
                                                            <a class="carousel-control-prev" href="#carousel-controls" role="button" data-bs-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#carousel-controls" role="button" data-bs-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);" class="item-card9-icons1 wishlist active" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                                                    </div>
                                                    <div class="item-tags">
                                                        <div class="bg-success tag-option">For Sale </div>
                                                    </div>
                                                    <div class="item-trans-rating">
                                                        <div class="rating-stars block">
                                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="2">
                                                            <div class="rating-stars-container">
                                                                <div class="rating-star sm  ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm  ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm  ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="col-left.html" class="text-muted me-4"><i class="fa fa-tag me-1"></i> Deluxe House</a>
                                                            <a href="javascript:void(0);" class=""><span class="text-muted"><i class="fa fa-calendar-o  me-1"></i> 15 mins ago</span></a>
                                                            <a href="col-left.html" class="text-dark"><h4 class="font-weight-bold mt-1">Luxury Home For Sale</h4></a>
                                                            <div class="mb-1">
                                                                <a href="javascript:void(0);" class="me-4 icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 950 Sqft</a>
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a>
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a>
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-car text-muted me-1"></i> 2 Car</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pt-4 pb-4">
                                                        <div class="item-card9-footer d-flex">
                                                            <div class="item-card9-cost">
                                                                <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> USA</span></a>
                                                                <a href="javascript:void(0);" class="me-0"><span class=""><i class="fa fa-user text-muted me-1"></i> Agent</span></a>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sold-out1">
                                            <div class="ribbon sold-ribbon ribbon-top-left text-danger"><span class="bg-danger">Sold Out</span></div>
                                            <div class="card overflow-hidden">
                                                <div class="d-md-flex">
                                                    <div class="item-card9-img">
                                                        <div class="arrow-ribbon bg-success">$567</div>
                                                        <div class="item-card9-imgs">
                                                            <a href="col-left.html"></a>
                                                            <img src="{{asset('assets/frontend/images/products/pe1.png')}}" alt="img" class="cover-image">
                                                        </div>
                                                        <div class="item-card9-icons">
                                                            <a href="javascript:void(0);" class="item-card9-icons1 wishlist" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                            <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                                                        </div>
                                                        <div class="item-tags">
                                                            <div class="bg-danger tag-option">For Buy </div>
                                                        </div>
                                                        <div class="item-trans-rating">
                                                            <div class="rating-stars block">
                                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm  ">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm  ">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm  ">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm ">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm ">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card border-0 mb-0">
                                                        <div class="card-body ">
                                                            <div class="item-card9">
                                                                <a href="col-left.html" class="text-muted me-4"><i class="fa fa-tag me-1"></i> 3BHK Flats</a>
                                                                <a href="javascript:void(0);" class=""><span class="text-muted"><i class="fa fa-calendar-o  me-1"></i> 1 day ago</span></a>
                                                                <a href="col-left.html" class="text-dark"><h4 class="font-weight-bold mt-1">Apartment For Rent </h4></a>
                                                                <div class="mb-1">
                                                                    <a href="javascript:void(0);" class="me-4 icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 400 Sqft</a>
                                                                    <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bed text-muted me-1"></i> 3 Beds</a>
                                                                    <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a>
                                                                    <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-car text-muted me-1"></i> 1 Car</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer pt-4 pb-4">
                                                            <div class="item-card9-footer d-flex">
                                                                <div class="item-card9-cost">
                                                                    <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> USA</span></a>
                                                                    <a href="javascript:void(0);" class="me-0"><span class=""><i class="fa fa-user text-muted me-1"></i> Owner</span></a>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card overflow-hidden">
                                            <div class="d-md-flex">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-pink">$567</div>
                                                    <div class="item-card9-imgs">
                                                        <a href="col-left.html"></a>
                                                        <img src="{{asset('assets/frontend/images/products/b3.png')}}" alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);" class="item-card9-icons1 wishlist active" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                                                    </div>
                                                    <div class="item-tags">
                                                        <div class="bg-success tag-option">For Sale </div>
                                                        <div class="bg-pink tag-option">Hot </div>
                                                    </div>
                                                    <div class="item-trans-rating">
                                                        <div class="rating-stars block">
                                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
                                                            <div class="rating-stars-container">
                                                                <div class="rating-star sm  ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm  ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm  ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="col-left.html" class="text-muted me-4"><i class="fa fa-tag me-1"></i> Office</a>
                                                            <a href="javascript:void(0);" class=""><span class="text-muted"><i class="fa fa-calendar-o  me-1"></i> 35 mins ago</span></a>
                                                            <a href="col-left.html" class="text-dark"><h4 class="font-weight-bold mt-1"> Office rooms.... </h4></a>
                                                            <div class="mb-1">
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-arrows-alt text-muted me-1"></i> 1500 Sqft</a>
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bed text-muted me-1"></i> 5 Beds</a>
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a>
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-car text-muted me-1"></i> 2 Car</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pt-4 pb-4">
                                                        <div class="item-card9-footer d-flex">
                                                            <div class="item-card9-cost">
                                                                <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> USA</span></a>
                                                                <a href="javascript:void(0);" class="me-0"><span class=""><i class="fa fa-user text-muted me-1"></i> Agent</span></a>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card overflow-hidden">
                                            <div class="d-md-flex">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-primary">$839</div>
                                                    <div class="item-card9-imgs">
                                                        <a href="col-left.html"></a>
                                                        <img src="{{asset('assets/frontend/images/products/f4.png')}}" alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);" class="item-card9-icons1 wishlist" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                                                    </div>
                                                    <div class="item-tags">
                                                        <div class="bg-info tag-option">For Rent </div>
                                                    </div>
                                                    <div class="item-trans-rating">
                                                        <div class="rating-stars block">
                                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="1">
                                                            <div class="rating-stars-container">
                                                                <div class="rating-star sm  ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm  ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm  ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="col-left.html" class="text-muted me-4"><i class="fa fa-tag me-1"></i> Luxury rooms</a>
                                                            <a href="javascript:void(0);" class=""><span class="text-muted"><i class="fa fa-calendar-o  me-1"></i> 5 days ago</span></a>
                                                            <a href="col-left.html" class="text-dark"><h4 class="font-weight-bold mt-1">Apartment For Rent</h4></a>
                                                            <div class="mb-1">
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a>
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bed text-muted me-1"></i> 2 Beds</a>
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bath text-muted me-1"></i> 2 Bath</a>
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-car text-muted me-1"></i> 1 Car</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pt-4 pb-4">
                                                        <div class="item-card9-footer d-flex">
                                                            <div class="item-card9-cost">
                                                                <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> USA</span></a>
                                                                <a href="javascript:void(0);" class="me-0"><span class=""><i class="fa fa-user text-muted me-1"></i> Owner</span></a>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card overflow-hidden">
                                            <div class="d-md-flex">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-secondary">$289</div>
                                                    <div class="item-card9-imgs">
                                                        <a href="col-left.html"></a>
                                                        <img src="{{asset('assets/frontend/images/products/v1.png')}}" alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);" class="item-card9-icons1 wishlist active" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                                                    </div>
                                                    <div class="item-tags">
                                                        <div class="bg-success tag-option">For Sale </div>
                                                        <div class="bg-pink tag-option">New </div>
                                                    </div>
                                                    <div class="item-trans-rating">
                                                        <div class="rating-stars block">
                                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="1">
                                                            <div class="rating-stars-container">
                                                                <div class="rating-star sm ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm  ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm  ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="rating-star sm ">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="col-left.html" class="text-muted me-4"><i class="fa fa-tag me-1"></i> Apartments</a>
                                                            <a href="javascript:void(0);" class=""><span class="text-muted"><i class="fa fa-calendar-o  me-1"></i> 3 days ago</span></a>
                                                            <a href="col-left.html" class="text-dark"><h4 class="font-weight-bold mt-1">Apartment For Rent </h4></a>
                                                            <div class="mb-1">
                                                                <a href="javascript:void(0);" class="me-4 icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 2500 Sqft</a>
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bed text-muted me-1"></i> 20 Beds</a>
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bath text-muted me-1"></i> 15 Bath</a>
                                                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-car text-muted me-1"></i> 10 Car</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pt-4 pb-4">
                                                        <div class="item-card9-footer d-flex">
                                                            <div class="item-card9-cost">
                                                                <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> USA</span></a>
                                                                <a href="javascript:void(0);" class="me-0"><span class=""><i class="fa fa-user text-muted me-1"></i> Agent</span></a>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-xl-4">
                                                <div class="card overflow-hidden">
                                                    <div class="item-card9-img">
                                                        <div class="arrow-ribbon bg-primary">$263.99</div>
                                                        <div class="item-card9-imgs">
                                                            <a href="col-left.html"></a>
                                                            <img src="{{asset('assets/frontend/images/products/h4.png')}}" alt="img" class="cover-image">
                                                        </div>
                                                        <div class="item-card9-icons">
                                                            <a href="javascript:void(0);" class="item-card9-icons1 wishlist" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                            <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                                                        </div>
                                                        <div class="item-tags">
                                                            <div class="bg-success tag-option">For Sale </div>
                                                            <div class="bg-pink tag-option">Open </div>
                                                        </div>
                                                        <div class="item-trans-rating">
                                                            <div class="rating-stars block">
                                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                                                                <div class="rating-stars-container">
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="item-card9">
                                                            <a href="col-left.html" class="text-muted me-3"><i class="fa fa-tag me-1"></i> Villa</a>
                                                            <a href="col-left.html" class="text-muted"><i class="fa fa-user me-1"></i> Owner</a>
                                                            <a href="col-left.html" class="text-dark mt-2"><h4 class="font-weight-bold mt-1">2BHK flat </h4></a>
                                                            <ul class="item-card2-list">
                                                                <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 700 Sqft</a></li>
                                                                <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bed text-muted me-1"></i> 5 Beds</a></li>
                                                                <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bath text-muted me-1"></i> 4 Bath</a></li>
                                                                <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-car text-muted me-1"></i> 2 Car</a></li>
                                                            </ul>
                                                            <p class="mb-0">Ut enim ad minima veniamq nostrum exerci </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-card-btn-hover">
                                                        <div class="card-footer">
                                                            <div class="item-card9-footer d-flex">
                                                                <div class="item-card9-cost">
                                                                    <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> USA</span></a>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);" class=""><span class=""><i class="fa fa-calendar-o text-muted me-1"></i> 2 days ago</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-card-btn">
                                                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-xl-4">
                                                <div class="card overflow-hidden">
                                                    <div class="arrow-ribbon bg-secondary">$987.88</div>
                                                    <div class="item-card9-img">
                                                        <div class="item-card9-imgs">
                                                            <a href="col-left.html"></a>
                                                            <div id="carousel-controls1" class="carousel slide property-slide" data-bs-ride="carousel" data-interval="false">
                                                                <div class="carousel-inner br-0">
                                                                    <div class="carousel-item active">
                                                                        <img src="{{asset('assets/frontend/images/products/j2.png')}}" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <img src="{{asset('assets/frontend/images/products/f2.png')}}" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <img src="{{asset('assets/frontend/images/products/f4.png')}}" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <img src="{{asset('assets/frontend/images/products/b3.png')}}" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <img src="{{asset('assets/frontend/images/products/e1.png')}}" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                                                                    </div>
                                                                </div>
                                                                <a class="carousel-control-prev" href="#carousel-controls1" role="button" data-bs-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="carousel-control-next" href="#carousel-controls1" role="button" data-bs-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-card9-icons">
                                                            <a href="javascript:void(0);" class="item-card9-icons1 wishlist active" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                            <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                                                        </div>
                                                        <div class="item-tags">
                                                            <div class="bg-success tag-option">For Sale </div>
                                                        </div>
                                                        <div class="item-trans-rating">
                                                            <div class="rating-stars block">
                                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="2">
                                                                <div class="rating-stars-container">
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="item-card9">
                                                            <a href="col-left.html" class="text-muted me-3"><i class="fa fa-tag me-1"></i> Deluxe House</a>
                                                            <a href="col-left.html" class="text-muted"><i class="fa fa-user me-1"></i> Agent</a>
                                                            <a href="col-left.html" class="text-dark mt-2"><h4 class="font-weight-bold mt-1">Luxury Home For Sale</h4></a>
                                                            <ul class="item-card2-list">
                                                                <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 950 Sqft</a></li>
                                                                <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                                                <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                                                <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-car text-muted me-1"></i> 2 Car</a></li>
                                                            </ul>
                                                            <p class="mb-0">Ut enim ad minima veniamq nostrum exerci ullam</p>
                                                        </div>
                                                    </div>
                                                    <div class="item-card-btn-hover">
                                                        <div class="card-footer">
                                                            <div class="item-card9-footer d-flex">
                                                                <div class="item-card9-cost">
                                                                    <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> USA</span></a>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);" class=""><span class=""><i class="fa fa-calendar-o text-muted me-1"></i> 15 mins ago</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-card-btn">
                                                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-xl-4">
                                                <div class="sold-out1">
                                                    <div class="ribbon sold-ribbon ribbon-top-left text-danger"><span class="bg-danger">Sold Out</span></div>
                                                    <div class="card overflow-hidden">
                                                        <div class="arrow-ribbon bg-success">$567</div>
                                                        <div class="item-card9-img">
                                                            <div class="item-card9-imgs">
                                                                <a href="col-left.html"></a>
                                                                <img src="{{asset('assets/frontend/images/products/pe1.png')}}" alt="img" class="cover-image">
                                                            </div>
                                                            <div class="item-card9-icons">
                                                                <a href="javascript:void(0);" class="item-card9-icons1 wishlist" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                                <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                                                            </div>
                                                            <div class="item-tags">
                                                                <div class="bg-danger tag-option">For Buy </div>
                                                            </div>
                                                            <div class="item-trans-rating">
                                                                <div class="rating-stars block">
                                                                    <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="4">
                                                                    <div class="rating-stars-container">
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="item-card9">
                                                                <a href="col-left.html" class="text-muted me-3"><i class="fa fa-tag me-1"></i> 3BHK Flats</a>
                                                                <a href="col-left.html" class="text-muted"><i class="fa fa-user me-1"></i> Owner</a>
                                                                <a href="col-left.html" class="text-dark mt-2"><h4 class="font-weight-bold mt-1">Apartment For Rent</h4></a>
                                                                <ul class="item-card2-list">
                                                                    <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 400 Sqft</a></li>
                                                                    <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bed text-muted me-1"></i> 3 Beds</a></li>
                                                                    <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                                                    <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                                                </ul>
                                                                <p class="mb-0">Ut enim ad minima veniamq nostrum exerci</p>
                                                            </div>
                                                        </div>
                                                        <div class="item-card-btn-hover">
                                                            <div class="card-footer">
                                                                <div class="item-card9-footer d-flex">
                                                                    <div class="item-card9-cost">
                                                                        <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> USA</span></a>
                                                                    </div>
                                                                    <div class="ms-auto">
                                                                        <a href="javascript:void(0);" class=""><span class=""><i class="fa fa-calendar-o text-muted me-1"></i> 1 days ago</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-card-btn">
                                                                <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-xl-4">
                                                <div class="card overflow-hidden">
                                                    <div class="arrow-ribbon bg-pink">$567</div>
                                                    <div class="item-card9-img">
                                                        <div class="item-card9-imgs">
                                                            <a href="col-left.html"></a>
                                                            <img src="{{asset('assets/frontend/images/products/b3.png')}}" alt="img" class="cover-image">
                                                        </div>
                                                        <div class="item-card9-icons">
                                                            <a href="javascript:void(0);" class="item-card9-icons1 wishlist active" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                            <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                                                        </div>
                                                        <div class="item-tags">
                                                            <div class="bg-success tag-option">For Sale</div>
                                                            <div class="bg-pink tag-option">Hot </div>
                                                        </div>
                                                        <div class="item-trans-rating">
                                                            <div class="rating-stars block">
                                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                                                                <div class="rating-stars-container">
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="item-card9">
                                                            <a href="col-left.html" class="text-muted me-3"><i class="fa fa-tag me-1"></i> Office</a>
                                                            <a href="col-left.html" class="text-muted "><i class="fa fa-user me-1"></i> Owner</a>
                                                            <a href="col-left.html" class="text-dark mt-2"><h4 class="font-weight-bold mt-1">Office rooms..</h4></a>
                                                            <ul class="item-card2-list">
                                                                <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 1500 Sqft</a></li>
                                                                <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bed text-muted me-1"></i> 5 Beds</a></li>
                                                                <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                                                <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-car text-muted me-1"></i> 2 Car</a></li>
                                                            </ul>
                                                            <p class="mb-0">Ut enim ad minima veniamq nostrum exerci</p>
                                                        </div>
                                                    </div>
                                                    <div class="item-card-btn-hover">
                                                        <div class="card-footer">
                                                            <div class="item-card9-footer d-flex">
                                                                <div class="item-card9-cost">
                                                                    <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> USA</span></a>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);" class=""><span class=""><i class="fa fa-calendar-o text-muted me-1"></i> 35 mins ago</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-card-btn">
                                                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-xl-4">
                                                <div class="card overflow-hidden">
                                                    <div class="arrow-ribbon bg-primary">$839</div>
                                                    <div class="item-card9-img">
                                                        <div class="item-card9-imgs">
                                                            <a href="col-left.html"></a>
                                                            <img src="{{asset('assets/frontend/images/products/f4.png')}}" alt="img" class="cover-image">
                                                        </div>
                                                        <div class="item-card9-icons">
                                                            <a href="javascript:void(0);" class="item-card9-icons1 wishlist" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                            <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                                                        </div>
                                                        <div class="item-tags">
                                                            <div class="bg-info tag-option">For Rent </div>
                                                        </div>
                                                        <div class="item-trans-rating">
                                                            <div class="rating-stars block">
                                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="1">
                                                                <div class="rating-stars-container">
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="item-card9">
                                                            <a href="col-left.html" class="text-muted me-3"><i class="fa fa-tag me-1"></i> Luxury rooms</a>
                                                            <a href="col-left.html" class="text-muted "><i class="fa fa-user me-1"></i> Agent</a>
                                                            <a href="col-left.html" class="text-dark mt-2"><h4 class="font-weight-bold mt-1">Apartment For Rent</h4></a>
                                                            <ul class="item-card2-list">
                                                                <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a></li>
                                                                <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bed text-muted me-1"></i> 2 Beds</a></li>
                                                                <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bath text-muted me-1"></i> 2 Bath</a></li>
                                                                <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                                            </ul>
                                                            <p class="mb-0">Ut enim ad minima veniamq nostrum exerci</p>
                                                        </div>
                                                    </div>
                                                    <div class="item-card-btn-hover">
                                                        <div class="card-footer">
                                                            <div class="item-card9-footer d-flex">
                                                                <div class="item-card9-cost">
                                                                    <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> USA</span></a>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);" class=""><span class=""><i class="fa fa-calendar-o text-muted me-1"></i> 5 days ago</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-card-btn">
                                                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-xl-4">
                                                <div class="card overflow-hidden">
                                                    <div class="arrow-ribbon bg-secondary">$289</div>
                                                    <div class="item-card9-img">
                                                        <div class="item-card9-imgs">
                                                            <a href="col-left.html"></a>
                                                            <img src="{{asset('assets/frontend/images/products/v1.png')}}" alt="img" class="cover-image">
                                                        </div>
                                                        <div class="item-card9-icons">
                                                            <a href="javascript:void(0);" class="item-card9-icons1 wishlist active" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                            <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                                                        </div>
                                                        <div class="item-tags">
                                                            <div class="bg-success tag-option">For Sale </div>
                                                            <div class="bg-pink tag-option">New </div>
                                                        </div>
                                                        <div class="item-trans-rating">
                                                            <div class="rating-stars block">
                                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="1">
                                                                <div class="rating-stars-container">
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="item-card9">
                                                            <a href="col-left.html" class="text-muted me-3"><i class="fa fa-tag me-1"></i> Apartments</a>
                                                            <a href="col-left.html" class="text-muted"><i class="fa fa-user me-1"></i> Agent</a>
                                                            <a href="col-left.html" class="text-dark mt-2"><h4 class="font-weight-bold mt-1">Apartment For Rent</h4></a>
                                                            <ul class="item-card2-list">
                                                                <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 2500 Sqft</a></li>
                                                                <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bed text-muted me-1"></i> 20 Beds</a></li>
                                                                <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bath text-muted me-1"></i> 15 Bath</a></li>
                                                                <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-car text-muted me-1"></i> 10 Car</a></li>
                                                            </ul>
                                                            <p class="mb-0">Ut enim ad minima veniamq nostrum exerci</p>
                                                        </div>
                                                    </div>
                                                    <div class="item-card-btn-hover">
                                                        <div class="card-footer">
                                                            <div class="item-card9-footer d-flex">
                                                                <div class="item-card9-cost">
                                                                    <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> USA</span></a>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);" class=""><span class=""><i class="fa fa-calendar-o text-muted me-1"></i> 3 days ago</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-card-btn">
                                                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="center-block text-center">
                                <ul class="pagination mb-5 mb-lg-0">
                                    <li class="page-item page-prev disabled">
                                        <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item page-next">
                                        <a class="page-link" href="javascript:void(0);">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/Add lists-->
                </div>

                <!--Right Side Content-->
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control br-tl-3  br-bl-3" placeholder="Search">
                                <button type="button" class="btn btn-primary br-tr-3  br-br-3">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Categories</h3>
                        </div>
                        <div class="card-body">
                            <div class="" id="container">
                                <div class="filter-product-checkboxs">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
                                        <span class="custom-control-label">
												<span class="text-dark"> Homes<span class="label label-secondary float-end">14</span></span>
											</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
                                        <span class="custom-control-label">
												<span class="text-dark">Apartmenrs<span class="label label-secondary float-end">22</span></span>
											</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" name="checkbox3" value="option3">
                                        <span class="custom-control-label">
												<span class="text-dark">Flats<span class="label label-secondary float-end">78</span></span>
											</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" name="checkbox4" value="option3">
                                        <span class="custom-control-label">
												<span class="text-dark">Offices<span class="label label-secondary float-end">35</span></span>
											</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" name="checkbox5" value="option3">
                                        <span class="custom-control-label">
												<span class="text-dark">2BHK Flats<span class="label label-secondary float-end">23</span></span>
											</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" name="checkbox6" value="option3">
                                        <span class="custom-control-label">
												<span class="text-dark">Home & Garden<span class="label label-secondary float-end">14</span></span>
											</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
                                        <span class="custom-control-label">
												<span class="text-dark">Luxury Homes<span class="label label-secondary float-end">45</span></span>
											</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
                                        <span class="custom-control-label">
												<span class="text-dark">Apartments<span class="label label-secondary float-end">34</span></span>
											</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
                                        <span class="custom-control-label">
												<span class="text-dark">Luxury Rooms<span class="label label-secondary float-end">12</span></span>
											</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
                                        <span class="custom-control-label">
												<span class="text-dark">Deluxe Apartments<span class="label label-secondary float-end">18</span></span>
											</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
                                        <span class="custom-control-label">
												<span class="text-dark">3BHK Homes<span class="label label-secondary float-end">02</span></span>
											</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card-header border-top">
                            <h3 class="card-title">Price Range</h3>
                        </div>
                        <div class="card-body">
                            <h6>
                                <label for="price">Price Range:</label>
                                <input type="text" id="price">
                            </h6>
                            <div id="mySlider"></div>
                        </div>
                        <div class="card-header border-top">
                            <h3 class="card-title">Condition</h3>
                        </div>
                        <div class="card-body">
                            <div class="filter-product-checkboxs">
                                <label class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
                                    <span class="custom-control-label">
											For Rent
										</span>
                                </label>
                                <label class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
                                    <span class="custom-control-label">
											For Sale
										</span>
                                </label>
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="checkbox3" value="option3">
                                    <span class="custom-control-label">
											For Buy
										</span>
                                </label>
                            </div>
                        </div>
                        <div class="card-header border-top">
                            <h3 class="card-title">Posted By</h3>
                        </div>
                        <div class="card-body">
                            <div class="filter-product-checkboxs">
                                <label class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
                                    <span class="custom-control-label">
											Owner
										</span>
                                </label>
                                <label class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
                                    <span class="custom-control-label">
											Agent
										</span>
                                </label>
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
                                    <span class="custom-control-label">
											Builder
										</span>
                                </label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="javascript:void(0);" class="btn btn-primary btn-block">Apply Filter</a>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Shares</h3>
                        </div>
                        <div class="card-body product-filter-desc">
                            <div class="product-filter-icons text-center">
                                <a href="javascript:void(0);" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:void(0);" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="javascript:void(0);" class="google-bg"><i class="fa fa-google"></i></a>
                                <a href="javascript:void(0);" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                                <a href="javascript:void(0);" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Right Side Content-->

            </div>
        </div>
    </section>
    <!--/Add Listings-->
    <x-frontend.newsletter/>
@endsection
