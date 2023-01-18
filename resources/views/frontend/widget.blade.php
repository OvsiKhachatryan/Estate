@extends('frontend.layouts.layout')
@section('content')
    <!--Breadcrumbs Section-->
    <div class="bannerimg cover-image bg-background3" data-bs-image-src="{{asset('assets/frontend/images/banners/banner2.jpg')}}">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">Widgets</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Widgets</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <hr>
        <h3>Task Widgets</h3>
        <hr>
        <div class="row">
            <div class="col-xl-4  col-md-12">
                <div class="card">
                    <div class="item-card">
                        <div class="item-card-desc">
                            <a href="javascript:void(0);"></a>
                            <div class="item-card-img">
                                <img src="{{asset('assets/frontend/images/products/j1.png')}}" alt="img" class="br-tr-3 br-tl-3">
                            </div>
                            <div class="item-card-text">
                                <h4 class="mb-0">Luxury Homes</h4>
                            </div>
                        </div>
                        <div class="item-card-btn">
                            <a href="javascript:void(0);" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4  col-md-12">
                <div class="card">
                    <div class="item-card">
                        <div class="item-card-desc">
                            <a href="javascript:void(0);"></a>
                            <div class="item-card-img">
                                <img src="{{asset('assets/frontend/images/products/h4.png')}}" alt="img" class="br-tr-3 br-tl-3">
                            </div>
                            <div class="item-card-text">
                                <h4 class="mb-0">Flats</h4>
                            </div>
                        </div>
                        <div class="item-card-btn">
                            <a href="javascript:void(0);" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4  col-md-12">
                <div class="card">
                    <div class="item-card">
                        <div class="item-card-desc data1">
                            <a href="javascript:void(0);"></a>
                            <div class="item-card-img">
                                <img src="{{asset('assets/frontend/images/products/v2.png')}}" alt="img" class="br-tr-3 br-tl-3">
                            </div>
                            <div class="item-card-text">
                                <h4 class="mb-0">Apartments</h4>
                            </div>
                        </div>
                        <div class="item-card-btn">
                            <a href="javascript:void(0);" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <h3>Product Cards</h3>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="card card-aside">
                    <div class="card-body ">
                        <div class="card-item d-flex">
                            <img src="{{asset('assets/frontend/images/products/7.png')}}" alt="img" class="w-8 h-8 br-3">
                            <div class="ms-4">
                                <h6 class="font-weight-bold mt-2">Duplex House Model</h6>
                                <a href="javascript:void(0);">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card card-aside">
                    <div class="card-body ">
                        <div class="card-item d-flex">
                            <img src="{{asset('assets/frontend/images/products/8.png')}}" alt="img" class="w-8 h-8 br-3">
                            <div class="ms-4">
                                <h6 class="font-weight-bold mt-2">Duplex House Model</h6>
                                <a href="javascript:void(0);">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card card-aside">
                    <div class="card-body ">
                        <div class="card-item d-flex">
                            <img src="{{asset('assets/frontend/images/products/9.png')}}" alt="img" class="w-8 h-8 br-3">
                            <div class="ms-4">
                                <h6 class="font-weight-bold mt-2">Duplex House Model</h6>
                                <a href="javascript:void(0);">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="product-item text-center">
                            <span class="badge badge-danger"> NEW </span>
                            <img src="{{asset('assets/frontend/images/products/widgets/1.png')}}" alt="img">
                        </div>
                    </div>
                    <div class="card-footer">
                        <h5 class="text-center mb-0 font-weight-semibold">Luxury Home</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="card">
                    <div class="badge-offer bg-danger">
                        <span>50%</span>
                    </div>
                    <div class="card-body">
                        <div class="product-item text-center">
                            <img src="{{asset('assets/frontend/images/products/widgets/2.png')}}" alt="img">
                        </div>
                    </div>
                    <div class="card-footer">
                        <h5 class="text-center mb-0 font-weight-semibold">Apartments</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="product-item text-center">
                            <img src="{{asset('assets/frontend/images/products/widgets/3.png')}}" alt="img">
                        </div>
                    </div>
                    <div class="card-footer">
                        <h5 class="text-center mb-0 font-weight-semibold">Duplex House</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="product-item text-center">
                            <img src="{{asset('assets/frontend/images/products/widgets/4.png')}}" alt="img">
                        </div>
                    </div>
                    <div class="card-footer">
                        <h5 class="text-center mb-0 font-weight-semibold">Deluxe Flat</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="arrow-ribbon bg-primary">Sale</div>
                    <div class="bg-white h-100">
                        <img class="card-img-top br-tr-3 br-tl-3" src="{{asset('assets/frontend/images/products/mensjackets.png')}}" alt="">
                    </div>
                    <div class="card-body border-top">
                        <div class="product-5 d-flex">
                            <div class="product-5-rating">
                                <a href="javascript:void(0);" class=""><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);" class=""><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);" class=""><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);" class=""><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);" class=""><i class="fa fa-star text-warning"></i></a>
                                <h4 class="font-weight-semibold mt-2 mb-0"><a href="javascript:void(0);">Mens Jacket</a></h4>
                            </div>
                            <div class="product-5-desc ms-auto ">
                                <h4 class="mb-2 font-weight-semibold fs-20">$19.0<del class="h4 text-muted ms-2">$39.0</del></h4>
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card overflow-hidden">
                    <div class="product-item2">
                        <div class="product-item2-img text-center">
                            <img src="{{asset('assets/frontend/images/products/widgets/1.png')}}" alt="img">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="product-item2-desc ">
                            <h4 class="font-weight-semibold text-dark"><a href="javascript:void(0);">Home For Sale</a></h4>
                            <p class="text-muted">usantium doloremque laudantium</p>
                            <ul class="product-item2-rating">
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-star-o text-warning"></i></a>
                                </li>
                            </ul>
                            <div class="label-rating text-muted">793 reviews</div>
                            <div class="label-rating text-muted float-end"><i class="fa fa-shopping-cart text-muted me-2"></i> 284 orders </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="product-item-wrap d-flex">
                            <div class="product-item-price">
                                <span class="newprice text-dark">$83</span>
                                <del class="oldprice text-muted">$195</del>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-info btn-sm ms-auto">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card overflow-hidden">
                    <div class="product-item2">
                        <div class="product-item2-img text-center">
                            <img src="{{asset('assets/frontend/images/products/widgets/5.png')}}" alt="img">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="product-item2-desc ">
                            <h4 class="font-weight-semibold text-dark"><a href="javascript:void(0);">Luxury House For Rent</a></h4>
                            <p class="text-muted">usantium doloremque laudantium</p>
                            <ul class="product-item2-rating">
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-star-o text-warning"></i></a>
                                </li>
                            </ul>
                            <div class="label-rating text-muted">176 reviews</div>
                            <div class="label-rating text-muted float-end"><i class="fa fa-shopping-cart text-muted me-2"></i> 99 orders </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="product-item-wrap d-flex">
                            <div class="product-item-price">
                                <span class="newprice text-dark">$63.00</span>
                                <del class="oldprice text-muted">$87.00</del>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-info btn-sm ms-auto">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <h3 class="">Product shopping cards</h3>
        <hr>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-4">
                <div class="card">
                    <div class="item-card2-img">
                        <a href="widgets.html"></a>
                        <img src="{{asset('assets/frontend/images/products/v1.png')}}" alt="img" class="cover-image">
                    </div>
                    <div class="item-card2-icons">
                        <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"> <i class="fa fa fa-heart"></i></a>
                        <a href="javascript:void(0);" class="item-card2-icons-l bg-primary"> <i class="fa fa-building-o"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="item-card2">
                            <div class="item-card2-desc">
                                <h4 class="font-weight-semibold">Deluxe House For Rent</h4>
                                <p>Ut enim ad minima veniam, quis nostrum exercieds ullam corporis suscipit laboriosam</p>
                                <a href="javascript:void(0);" class="btn btn-primary">Duplex House</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="item-card2-footer d-flex">
                            <div class="item-card2-rating">
                                <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star-half-o text-warning me-1"></i>(46 reviews)</a>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="location"><i class="fa fa-map-marker text-muted me-1"></i> San Francisco</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xl-4">
                <div class="card">
                    <div class="item-card2-img">
                        <a href="widgets.html"></a>
                        <img src="{{asset('assets/frontend/images/products/h6.png')}}" alt="img" class="cover-image">
                    </div>
                    <div class="item-card2-icons">
                        <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"> <i class="fa fa fa-heart"></i></a>
                        <a href="javascript:void(0);" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="item-card2">
                            <div class="item-card2-desc">
                                <h4 class="font-weight-semibold">House for sale</h4>
                                <p>Ut enim ad minima veniam, quis nostrum exercieds ullam corporis suscipit laboriosam</p>
                                <a href="javascript:void(0);" class="btn btn-primary">Villa</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="item-card2-footer d-flex">
                            <div class="item-card2-rating">
                                <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star text-warning me-1"></i>(145 reviews)</a>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="location"><i class="fa fa-map-marker text-muted me-1"></i> Los Angles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xl-4">
                <div class="card">
                    <div class="item-card2-img">
                        <a href="widgets.html"></a>
                        <img src="{{asset('assets/frontend/images/products/f1.png')}}" alt="img" class="cover-image">
                    </div>
                    <div class="item-card2-icons">
                        <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"> <i class="fa fa fa-heart"></i></a>
                        <a href="javascript:void(0);" class="item-card2-icons-l bg-primary"> <i class="fa fa-building"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="item-card2">
                            <div class="item-card2-desc">
                                <h4 class="font-weight-semibold">Luxury Reallist For Sale</h4>
                                <p>Ut enim ad minima veniam, quis nostrum exercieds ullam corporis suscipit laboriosam</p>
                                <a href="javascript:void(0);" class="btn btn-primary">Luxury Room</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="item-card2-footer d-flex">
                            <div class="item-card2-rating">
                                <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-star-half-o text-warning me-1"></i>(78 reviews)</a>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="location"><i class="fa fa-map-marker text-muted me-1"></i> USA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body items-gallery">
                        <div class="items-blog-tab text-center">
                            <h2 class="">Best Property Collections</h2>
                            <div class="items-blog-tab-heading row">
                                <div class="col-12">
                                    <ul class="nav items-blog-tab-menu">
                                        <li class=""><a href="#tab-1" class="active show" data-bs-toggle="tab">All</a></li>
                                        <li><a href="#tab-2" data-bs-toggle="tab" class="">Homes</a></li>
                                        <li><a href="#tab-3" data-bs-toggle="tab" class="">Apartments</a></li>
                                        <li><a href="#tab-4" data-bs-toggle="tab" class="">Offices</a></li>
                                        <li><a href="#tab-5" data-bs-toggle="tab" class="">Villas</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-6 col-md-12">
                                            <div class="card mb-xl-0">
                                                <div class="item-card8-img  br-tr-3 br-tl-3">
                                                    <img src="{{asset('assets/frontend/images/products/f3.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">16 November 2019.</p>
                                                        <h4 class="font-weight-semibold">Home For Sale</h4>
                                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-12">
                                            <div class="card mb-xl-0">
                                                <div class="item-card8-img  br-tr-3 br-tl-3">
                                                    <img src="{{asset('assets/frontend/images/products/h2.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">16 November 2019.</p>
                                                        <h4 class="font-weight-semibold">Deluxe House For Sale </h4>
                                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-12">
                                            <div class="card mb-lg-0">
                                                <div class="item-card8-img  br-tr-3 br-tl-3">
                                                    <img src="{{asset('assets/frontend/images/products/j1.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">16 November 2019.</p>
                                                        <h4 class="font-weight-semibold">House For Rent</h4>
                                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-12">
                                            <div class="card mb-0">
                                                <div class="item-card8-img  br-tr-3 br-tl-3">
                                                    <img src="{{asset('assets/frontend/images/products/b1.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">16 November 2019.</p>
                                                        <h4 class="font-weight-semibold">Modren House For Rent</h4>
                                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-2">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-12 col-md-12">
                                            <div class="card mb-xl-0">
                                                <div class="item-card8-img  br-tr-3 br-tl-3">
                                                    <img src="{{asset('assets/frontend/images/products/j1.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">16 November 2019.</p>
                                                        <h4 class="font-weight-semibold">Food &amp; BarRealEstate</h4>
                                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-12 col-md-12">
                                            <div class="card mb-xl-0">
                                                <div class="item-card8-img">
                                                    <img src="{{asset('assets/frontend/images/products/j2.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">16 November 2019.</p>
                                                        <h4 class="font-weight-semibold">Food &amp; BarRealEstate</h4>
                                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-12 col-md-12">
                                            <div class="card mb-0">
                                                <div class="item-card8-img">
                                                    <img src="{{asset('assets/frontend/images/products/f3.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">16 November 2019.</p>
                                                        <h4 class="font-weight-semibold">Food &amp; BarRealEstate</h4>
                                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-3">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-12 col-md-12">
                                            <div class="card mb-xl-0">
                                                <div class="item-card8-img  br-tr-3 br-tl-3">
                                                    <img src="{{asset('assets/frontend/images/products/b1.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">16 November 2019.</p>
                                                        <h4 class="font-weight-semibold">Food &amp; BarRealEstate</h4>
                                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-12 col-md-12">
                                            <div class="card mb-0">
                                                <div class="item-card8-img">
                                                    <img src="{{asset('assets/frontend/images/products/b2.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">16 November 2019.</p>
                                                        <h4 class="font-weight-semibold">Food &amp; BarRealEstate</h4>
                                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-4">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-12 col-md-12">
                                            <div class="card mb-xl-0">
                                                <div class="item-card8-img  br-tr-3 br-tl-3">
                                                    <img src="{{asset('assets/frontend/images/products/h4.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">16 November 2019.</p>
                                                        <h4 class="font-weight-semibold">Food &amp; BarRealEstate</h4>
                                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-12 col-md-12">
                                            <div class="card mb-xl-0">
                                                <div class="item-card8-img">
                                                    <img src="{{asset('assets/frontend/images/products/h2.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">16 November 2019.</p>
                                                        <h4 class="font-weight-semibold">Food &amp; BarRealEstate</h4>
                                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-12 col-md-12">
                                            <div class="card mb-0">
                                                <div class="item-card8-img">
                                                    <img src="{{asset('assets/frontend/images/products/h3.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">16 November 2019.</p>
                                                        <h4 class="font-weight-semibold">Food &amp; BarRealEstate</h4>
                                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-5">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-12 col-md-12">
                                            <div class="card mb-xl-0">
                                                <div class="item-card8-img  br-tr-3 br-tl-3">
                                                    <img src="{{asset('assets/frontend/images/products/f4.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">16 November 2019.</p>
                                                        <h4 class="font-weight-semibold">Food &amp; BarRealEstate</h4>
                                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-12 col-md-12">
                                            <div class="card mb-xl-0">
                                                <div class="item-card8-img">
                                                    <img src="{{asset('assets/frontend/images/products/f3.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">16 November 2019.</p>
                                                        <h4 class="font-weight-semibold">Food &amp; BarRealEstate</h4>
                                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-12 col-md-12">
                                            <div class="card mb-0">
                                                <div class="item-card8-img">
                                                    <img src="{{asset('assets/frontend/images/products/f2.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">16 November 2019.</p>
                                                        <h4 class="font-weight-semibold">Food &amp; BarRealEstate</h4>
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="item2-gl ">
                            <div class="item2-gl-nav d-flex">
                                <ul class="nav item2-gl-menu ms-auto my-auto">
                                    <li class=""><a href="#tab-11" class="active show" data-bs-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
                                    <li><a href="#tab-12" data-bs-toggle="tab" class="" title="Grid"><i class="fa fa-th"></i></a></li>
                                </ul>
                                <select name="item" class="form-control select-sm select2">
                                    <option value="0">Selected items</option>
                                    <option value="1">1-50 items</option>
                                    <option value="2">51-100 items</option>
                                    <option value="3">101-150 items</option>
                                    <option value="5">151-200 items</option>
                                </select>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-11">
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="arrow-ribbon bg-primary">Rent</div>
                                                <div class="item-card9-imgs">
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="{{asset('assets/frontend/images/products/h4.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <div class="item-card9">
                                                        <a href="javascript:void(0);">RealEstate</a>
                                                        <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold mt-1">2BHK flat </h4></a>
                                                        <p class="mb-0 leading-tight">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer pt-4 pb-4">
                                                    <div class="item-card9-footer d-flex">
                                                        <div class="item-card9-cost">
                                                            <h4 class="text-dark font-weight-semibold mb-0 mt-0">$263.99</h4>
                                                        </div>
                                                        <div class="ms-auto">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                        <div class="mb-2">
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
                                                <div class="item-card2-img ">
                                                    <div class="arrow-ribbon bg-primary">$42</div>
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="{{asset('assets/frontend/images/products/h6.png')}}" alt="img" class="cover-image">
                                                </div>
                                                <div class="item-card2-icons">
                                                    <a href="javascript:void(0);" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <div class="item-card2">
                                                        <div class="item-card2-desc">
                                                            <a href="javascript:void(0);">Apartments</a>
                                                            <a href="javascript:void(0);" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1">Apartment For Sale</h4></a>
                                                            <p class="mb-0 leading-tight">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer pt-4 pb-4">
                                                    <div class="item-card2-footer d-sm-flex">
                                                        <div class="rating-stars d-inline-flex">
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
                                                                <span class="fs-13 text-dark mx-2">(145reviews)</span>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="location"><i class="fa fa-map-marker text-muted me-1"></i> Los Angles</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden mb-0">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="arrow-ribbon bg-secondary">$987.88</div>
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
                                                        <a href="col-left.html" class="text-muted"><i class="fa fa-tag me-1"></i> Deluxe House</a>
                                                        <a href="col-left.html" class="text-dark"><h4 class="font-weight-bold mt-1">Luxury Home For Sale</h4></a>
                                                        <div class="mb-2">
                                                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-arrows-alt text-muted me-1"></i> 950 Sqft</a>
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
                                                            <a href="javascript:void(0);" class=""><span class=""><i class="fa fa-user text-muted me-1"></i> Agent</span></a>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class=""><span class=""><i class="fa fa-calendar-o text-muted me-1"></i> 15 mins ago</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-xl-3">
                                            <div class="card overflow-hidden mb-lg-0">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-purple">Rent</div>
                                                    <img src="{{asset('assets/frontend/images/products/h4.png')}}" alt="img" class="cover-image">
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-heart-o"></i></a>
                                                        <a href="javascript:void(0);" class="item-card9-icons2 bg-primary"> <i class="fa fa-building-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <h4 class="font-weight-semibold">2BK flat </h4>
                                                        <p>Ut enim ad minima veniam, quis nostrum exercieds ullam corporis suscipit laboriosam</p>
                                                        <div class="item-card9-desc">
                                                            <a href="javascript:void(0);" class="me-3"><span class=""><i class="fa fa-map-marker text-muted me-2"></i> USA</span></a>
                                                            <a href="javascript:void(0);" class="me-3"><span class=""><i class="fa fa-user-o text-muted me-2"></i> David</span></a>
                                                            <a href="javascript:void(0);" class=""><span class=""><i class="fa fa-calendar-o text-muted me-2"></i> Nov 15</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="item-card9-footer d-flex">
                                                        <div class="item-card9-cost">
                                                            <h3 class="text-dark font-weight-semibold mb-0">$263</h3>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="btn btn-primary">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-3">
                                            <div class="card overflow-hidden mb-0">
                                                <div class="item-card9-img">
                                                    <img src="{{asset('assets/frontend/images/products/v1.png')}}" alt="img" class="cover-image">
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"> <i class="fa fa fa-heart"></i></a>
                                                        <a href="javascript:void(0);" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card2">
                                                        <div class="item-card2-desc">
                                                            <h4 class="font-weight-semibold">Deluxe House For Rent</h4>
                                                            <p>Ut enim ad minima veniam, quis nostrum exercieds ullam corporis suscipit laboriosam</p>
                                                            <a href="javascript:void(0);" class="btn btn-primary">Homes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="item-card2-footer d-sm-flex">
                                                        <div class="item-card2-rating">
                                                            <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                            <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                            <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                            <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                            <a href="javascript:void(0);"><i class="fa fa-star-half-o text-warning me-1"></i></a>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="location"><i class="fa fa-map-marker text-muted me-1"></i> San Francisco</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-3">
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
                                        <div class="col-lg-6 col-md-12 col-xl-3">
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
                                                        <a href="col-left.html" class="text-muted me-4"><i class="fa fa-tag me-1"></i> Villa</a>
                                                        <a href="javascript:void(0);" class=""><span class="text-muted"><i class="fa fa-user text-muted me-1"></i> Owner</span></a>
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
        <hr>

        <h3 class="">Rooms Widgets</h3>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div id="owl-demo2" class="owl-carousel owl-carousel-icons2">
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('assets/frontend/images/svgs/realestate/balcony.svg')}}" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">2BHK Homes</h4>
                                        <span>(45)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('assets/frontend/images/svgs/realestate/beach-house.svg')}}" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Modren Houses</h4>
                                        <span>(183)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('assets/frontend/images/svgs/realestate/appartment.svg')}}" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Apartments</h4>
                                        <span>(19)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('assets/frontend/images/svgs/realestate/building.svg')}}" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0"> Homes</h4>
                                        <span>(25)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('assets/frontend/images/svgs/realestate/cabin.svg')}}" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Luxury Rooms</h4>
                                        <span>(58)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('assets/frontend/images/svgs/realestate/farm.svg')}}" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">3BHK Flat</h4>
                                        <span>(96)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('assets/frontend/images/svgs/realestate/house.svg')}}" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Duplex House</h4>
                                        <span>(46)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('assets/frontend/images/svgs/realestate/appartment.svg')}}" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Apartments</h4>
                                        <span>(65)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('assets/frontend/images/svgs/realestate/mansion.svg')}}" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Duplex House</h4>
                                        <span>(92)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('assets/frontend/images/svgs/realestate/cabin.svg')}}" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Farm Houses</h4>
                                        <span>(84)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('assets/frontend/images/svgs/realestate/house.svg')}}" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Luxury Rooms</h4>
                                        <span>(74)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('assets/frontend/images/svgs/realestate/beach-house.svg')}}" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">3BHK Flatss</h4>
                                        <span>(23)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="service-card text-center">
                            <div class="bg-purple-transparent icon-bg icon-service text-purple">
                                <i class="fa fa-shopping-cart "></i>
                            </div>
                            <div class="servic-data mt-3">
                                <h4 class="font-weight-semibold mb-2">Buying</h4>
                                <p class="text-muted">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="service-card text-center">
                            <div class="bg-warning-transparent icon-bg icon-service text-warning">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="servic-data mt-3">
                                <h4 class="font-weight-semibold mb-2">Viewers</h4>
                                <p class="text-muted">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="service-card text-center">
                            <div class="bg-secondary-transparent icon-bg icon-service">
                                <i class="fa fa-credit-card"></i>
                            </div>
                            <div class="servic-data mt-3">
                                <h4 class="font-weight-semibold mb-2">Payment</h4>
                                <p class="text-muted">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="item-box text-center">
                            <div class="stamp text-center stamp-lg bg-primary "><i class="fa fa-users"></i></div>
                            <div class="item-box-wrap">
                                <h5 class="mb-2">Creative solutions</h5>
                                <p class="text-muted mb-0">usantium</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="item-box text-center">
                            <div class="stamp text-center stamp-lg bg-success"><i class="fa fa-clock-o"></i></div>
                            <div class="item-box-wrap">
                                <h5 class="mb-2">Trace your time</h5>
                                <p class="text-muted mb-0">usantium</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="item-box text-center">
                            <div class="stamp text-center stamp-lg bg-info"><i class="fa fa-building-o"></i></div>
                            <div class="item-box-wrap">
                                <h5 class="mb-2">Business FrameWork</h5>
                                <p class="text-muted mb-0">usantium</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="item-box text-center">
                            <div class="stamp text-center stamp-lg bg-danger"><i class="fa fa-share"></i></div>
                            <div class="item-box-wrap">
                                <h5 class="mb-2">Shares</h5>
                                <p class="text-muted mb-0">usantium</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card widgets-cards">
                    <div class="card-body d-flex">
                        <div class="widgets-cards-icons">
                            <div class="wrp icon-circle bg-success">
                                <i class="fa fa-search icons"></i>
                            </div>
                        </div>
                        <div class="widgets-cards-data">
                            <div class="wrp text-wrapper">
                                <p>Search New Posts</p>
                                <p class="text-muted mt-1 mb-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card widgets-cards">
                    <div class="card-body d-flex">
                        <div class="widgets-cards-icons">
                            <div class="wrp icon-circle bg-warning">
                                <i class="fa fa-newspaper-o icons"></i>
                            </div>
                        </div>
                        <div class="widgets-cards-data">
                            <div class="wrp text-wrapper">
                                <p>Trend News</p>
                                <p class="text-muted mt-1 mb-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>

        <h3 class="">Support Widgets</h3>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-body">
                        <div class="support">
                            <div class="row text-white">
                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="support-service bg-primary">
                                        <i class="fa fa-phone"></i>
                                        <h6>+68 872-627-9735</h6>
                                        <P>Free Support!</P>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="support-service bg-success">
                                        <i class="fa fa-clock-o"></i>
                                        <h6>Mon-Sat(10:00-19:00)</h6>
                                        <p>Working Hours!</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="support-service bg-danger">
                                        <i class="fa fa-envelope-o"></i>
                                        <h6>yourdomain@gmail.com</h6>
                                        <p>Support us!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="support">
                            <div class="row text-white">
                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="support-service bg-dark">
                                        <i class="fa fa-phone"></i>
                                        <h6>+68 872-627-9735</h6>
                                        <P>Free Support!</P>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="support-service bg-dark">
                                        <i class="fa fa-clock-o"></i>
                                        <h6>Mon-Sat(10:00-19:00)</h6>
                                        <p>Working Hours!</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="support-service bg-dark">
                                        <i class="fa fa-envelope-o"></i>
                                        <h6>yourdomain@gmail.com</h6>
                                        <p>Support us!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <h3 class="">Breadcrumbs</h3>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Breadcrumbs-leftalign</h3>
                    </div>
                    <div class="card-body">
                        <ol class="breadcrumb1">
                            <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item1"><a href="javascript:void(0);">About</a></li>
                        </ol>
                        <ol class="breadcrumb1">
                            <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item1"><a href="javascript:void(0);">Library</a></li>
                            <li class="breadcrumb-item1 active">Data</li>
                        </ol>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Breadcrumbs-Center align</h3>
                    </div>
                    <div class="card-body">
                        <div class="breadcrumb-3">
                            <ol class="breadcrumb1">
                                <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item1 active">about</li>
                            </ol>
                        </div>
                        <div class="breadcrumb-4">
                            <ol class="breadcrumb1">
                                <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item1"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item1 active">Data</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Breadcrumbs-Right align</h3>
                    </div>
                    <div class="card-body">
                        <div class="breadcrumb-1">
                            <ol class="breadcrumb1">
                                <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item1 active">about</li>
                            </ol>
                        </div>
                        <div class="breadcrumb-2">
                            <ol class="breadcrumb1">
                                <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item1"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item1 active">Data</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <h3 class="">Statistics Widgets</h3>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-blog-overlay2 overflow-hidden border-0">
                    <div class="card-body  text-white">
                        <div class="statistics-info">
                            <div class="row text-center">
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter-status">
                                        <div class="counter-icon">
                                            <i class="icon icon-people"></i>
                                        </div>
                                        <h5>Clients</h5>
                                        <h2 class="counter">2569</h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter-status">
                                        <div class="counter-icon">
                                            <i class="icon icon-rocket"></i>
                                        </div>
                                        <h5>Total Sales</h5>
                                        <h2 class="counter">1765</h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter-status">
                                        <div class="counter-icon">
                                            <i class="icon icon-docs"></i>
                                        </div>
                                        <h5>Total Projects</h5>
                                        <h2 class="counter">846</h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter-status">
                                        <div class="counter-icon">
                                            <i class="icon icon-emotsmile"></i>
                                        </div>
                                        <h5>Happy Customers</h5>
                                        <h2 class="counter">7253</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-body  text-dark">
                        <div class="statistics-info">
                            <div class="row text-center">
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter-status">
                                        <div class="counter-icon bg-transparent text-danger">
                                            <i class="icon icon-user"></i>
                                        </div>
                                        <h5>Clients</h5>
                                        <h2 class="counter">2569</h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter-status">
                                        <div class="counter-icon bg-transparent text-warning">
                                            <i class="icon icon-rocket"></i>
                                        </div>
                                        <h5>Total Sales</h5>
                                        <h2 class="counter">1765</h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter-statuss">
                                        <div class="counter-icon bg-transparent text-primary">
                                            <i class="icon icon-docs"></i>
                                        </div>
                                        <h5>Total Projects</h5>
                                        <h2 class="counter">846</h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter-status">
                                        <div class="counter-icon bg-transparent text-success">
                                            <i class="icon icon-emotsmile"></i>
                                        </div>
                                        <h5>Happy Customers</h5>
                                        <h2 class="counter">7253</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <h3 class="">Search widget</h3>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-blog-img minh-210 overflow-hidden spacing border-0">
                    <div class="card-body banner-1">

                        <div class="text-center text-white">
                            <h1 class="mb-1">Find Your Best Property</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                        <div class="search-background bg-transparent">
                            <div class="form row no-gutters">
                                <div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg mb-0">
                                    <select name="country" id="select-Categories12" class="form-control form-select select2 br-tr-md-0 br-br-md-0">
                                        <option value="1" selected>Any Status</option>
                                        <option value="2">Rent</option>
                                        <option value="3">Sale</option>
                                    </select>
                                </div>
                                <div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg mb-0">
                                    <select name="country" id="select-Categories13" class="form-control form-select br-md-0 select2">
                                        <option value="1" selected>All Types</option>
                                        <option value="2">Shops</option>
                                        <option value="3">Apartments</option>
                                        <option value="4">Offices</option>
                                        <option value="4">Villas</option>
                                        <option value="4">Retails</option>
                                        <option value="4">Lands</option>
                                    </select>
                                </div>
                                <div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg mb-0">
                                    <select name="country" id="select-Categories14" class="form-control form-select br-md-0 select2">
                                        <option value="1" selected>location</option>
                                        <option value="2">Brazil</option>
                                        <option value="3">Germany</option>
                                        <option value="4">USA</option>
                                        <option value="5">Califomia</option>
                                        <option value="6">Canada</option>
                                    </select>
                                </div>
                                <div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg mb-0">
                                    <select name="country" id="select-Categories15" class="form-control form-select br-md-0 select2">
                                        <option value="1" selected>BedRooms</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="4">3</option>
                                        <option value="4">4</option>
                                        <option value="4">5</option>
                                        <option value="4">6</option>
                                        <option value="4">7</option>
                                    </select>
                                </div>
                                <div class="form-group col-xl-2 col-lg-2 col-md-12 select2-lg mb-0">
                                    <select name="country" id="select-Categories16" class="form-control form-select br-md-0 select2">
                                        <option value="1" selected>BathRooms</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-12 mb-0">
                                    <a href="javascript:void(0);" class="br-tl-md-0 br-bl-md-0 btn btn-lg btn-block btn-primary">Find Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-blog-overlay2 minh-210 overflow-hidden spacing border-0">
                    <div class="card-body br-2 banner-1">
                        <div class="text-center text-white">
                            <h1 class="mb-1">Find Your Dream House</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                        <div class="search-background bg-transparent">
                            <div class="form row no-gutters ">
                                <div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0">
                                    <input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0" id="text20" placeholder="Find Your Property">
                                </div>
                                <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0">
                                    <input type="text" class="form-control input-lg br-md-0" id="text21" placeholder="Enter Location">
                                    <span><i class="fa fa-map-marker location-gps me-1"></i> </span>									</div>
                                <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg  mb-0">
                                    <select class="form-control select2-show-search" data-placeholder="Select Category">
                                        <optgroup label="Categories">
                                            <option>Select</option>
                                            <option value="1">Delux Houses</option>
                                            <option value="2">Modren Flats</option>
                                            <option value="3">Apartments</option>
                                            <option value="4">Apartments</option>
                                            <option value="5">Offices</option>
                                            <option value="6">Luxury Homes</option>
                                            <option value="7">Home&Homes </option>
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
            <div class="col-md-12">
                <div class="card card-blog-img minh-210 overflow-hidden spacing border-0">
                    <div class="card-body br-2">
                        <div class="text-center text-white">
                            <h1 class="mb-1">Your Property, Our Priority.</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                        <div class="search-background bg-transparent">
                            <div class="form row no-gutters ">
                                <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0">
                                    <input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0" id="text4" placeholder="Find Your Property">
                                </div>
                                <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0">
                                    <input type="text" class="form-control input-lg br-md-0" id="text5" placeholder="Enter Location">
                                    <span><i class="fa fa-map-marker location-gps me-1"></i> </span>
                                </div>
                                <div class="form-group  col-xl-2 col-lg-3 col-md-12 mb-0">
                                    <input class="form-control fc-datepicker input-lg br-md-0" placeholder="start-date" type="text">
                                    <span><i class="fa fa-calendar location-gps me-1"></i> </span>
                                </div>
                                <div class="form-group  col-xl-2 col-lg-3 col-md-12 mb-0">
                                    <input class="form-control fc-datepicker input-lg br-md-0" placeholder="end-date" type="text">
                                    <span><i class="fa fa-calendar location-gps me-1"></i> </span>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                    <a href="javascript:void(0);" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Search Here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="banner-1 pt-0 card cover-image spacing border-0 pb-10 bg-background2 overflow-hidden" data-bs-image-src="{{asset('assets/frontend/images/banners/banner1.jpg')}}">
                    <div class="header-text mb-0">
                        <div class="container">
                            <div class="text-center text-white ">
                                <h1 class="mb-1">Find The Best Deals BUY &amp; SELL Near By Now</h1>
                                <p class="distracted">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                            <div class="row">
                                <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
                                    <div class="item-search-tabs">
                                        <div class="item-search-menu">
                                            <ul class="nav">
                                                <li class=""><a href="#tab1" class="active" data-bs-toggle="tab">RealEstate</a></li>
                                                <li><a href="#tab2" data-bs-toggle="tab">Homes</a></li>
                                                <li><a href="#tab3" data-bs-toggle="tab">Luxury Flats</a></li>
                                                <li><a href="#tab4" data-bs-toggle="tab">Apartments</a></li>
                                                <li><a href="#tab5" data-bs-toggle="tab">Duplex House</a></li>
                                                <li><a href="#tab6" data-bs-toggle="tab">Duplex House</a></li>
                                                <li><a href="#tab7" data-bs-toggle="tab">Offices</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab1">
                                                <div class="form row">
                                                    <div class="form-group col-xl-6 col-lg-5 col-md-12 mb-0">
                                                        <input type="text" class="form-control  " id="text6" placeholder="Find Your Property">
                                                    </div>
                                                    <div class="col-xl-6 col-lg-7 col-md-12 mb-0">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="text7" placeholder="Location">
                                                            <button class="btn btn-primary" type="button">Search Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <div class="form row">
                                                    <div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
                                                        <input type="text" class="form-control  " id="text8" placeholder="Looking For Home">
                                                    </div>
                                                    <div class="col-xl-6 col-lg-7 col-md-12 mb-0">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="text7" placeholder="Location">
                                                            <button class="btn btn-primary" type="button">Search Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <div class="form row">
                                                    <div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
                                                        <input type="text" class="form-control  " id="text9" placeholder="Looking For Luxury Rooms">
                                                    </div>
                                                    <div class="col-xl-6 col-lg-7 col-md-12 mb-0">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="text7" placeholder="Location">
                                                            <button class="btn btn-primary" type="button">Search Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab4">
                                                <div class="form row">
                                                    <div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
                                                        <input type="text" class="form-control  " id="text10" placeholder="Looking For 2BHK Homes">
                                                    </div>
                                                    <div class="col-xl-6 col-lg-7 col-md-12 mb-0">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="text7" placeholder="Location">
                                                            <button class="btn btn-primary" type="button">Search Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab5">
                                                <div class="form row">
                                                    <div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
                                                        <input type="text" class="form-control  " id="text11" placeholder="Looking For Offices">
                                                    </div>
                                                    <div class="col-xl-6 col-lg-7 col-md-12 mb-0">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="text7" placeholder="Location">
                                                            <button class="btn btn-primary" type="button">Search Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab6">
                                                <div class="form row">
                                                    <div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
                                                        <input type="text" class="form-control  " id="text12" placeholder="Looking ForHomes">
                                                    </div>
                                                    <div class="col-xl-6 col-lg-7 col-md-12 mb-0">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="text7" placeholder="Location">
                                                            <button class="btn btn-primary" type="button">Search Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab7">
                                                <div class="form row">
                                                    <div class="form-group  col-xl-6 col-lg-7 col-md-12 mb-0">
                                                        <input type="text" class="form-control  " id="text13" placeholder="Looking ForFlats">
                                                    </div>
                                                    <div class="col-xl-6 col-lg-7 col-md-12 mb-0">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="text7" placeholder="Location">
                                                            <button class="btn btn-primary" type="button">Search Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab8">
                                                <div class="form row">
                                                    <div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
                                                        <input type="text" class="form-control  " id="text14" placeholder="Looking For Modren Houses">
                                                    </div>
                                                    <div class="col-xl-6 col-lg-7 col-md-12 mb-0">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="text7" placeholder="Location">
                                                            <button class="btn btn-primary" type="button">Search Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab9">
                                                <div class="form row">
                                                    <div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
                                                        <input type="text" class="form-control  " id="text15" placeholder="Looking For2BHK Homes">
                                                    </div>
                                                    <div class="col-xl-6 col-lg-7 col-md-12 mb-0">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="text7" placeholder="Location">
                                                            <button class="btn btn-primary" type="button">Search Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /header-text -->
                </div>
            </div>
        </div>
        <hr>
        <h3 class="">Testimonials</h3>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
                        <div class="item text-center">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                        <div class="testimonia">
                                            <div class="testimonia-img mx-auto mb-3">
                                                <img src="{{asset('assets/frontend/images/faces/female/11.jpg')}}" class="img-thumbnail rounded-circle alt=" alt="">
                                            </div>
                                            <p>
                                                <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in cillum dolore eu fugiat nulla pariatur.
                                            </p>
                                            <div class="testimonia-data">
                                                <h4 class="fs-20 mb-1">Heather Bell</h4>
                                                <div class="rating-stars">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                        <div class="testimonia">
                                            <div class="testimonia-img mx-auto mb-3">
                                                <img src="{{asset('assets/frontend/images/faces/male/42.jpg')}}" class="img-thumbnail rounded-circle alt=" alt="">
                                            </div>
                                            <p><i class="fa fa-quote-left"></i> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nor again is there anyone who loves or pursues obtain pain of itself, because laboriosam ex ea commodi consequatur. </p>
                                            <div class="testimonia-data">
                                                <h4 class="fs-20 mb-1">David Blake</h4>
                                                <div class="rating-stars">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                        <div class="testimonia">
                                            <div class="testimonia-img mx-auto mb-3">
                                                <img src="{{asset('assets/frontend/images/faces/female/20.jpg')}}" class="img-thumbnail rounded-circle alt=" alt="">
                                            </div>
                                            <p><i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum exercitation ullamco laboris nisi.</p>
                                            <div class="testimonia-data">
                                                <h4 class="fs-20 mb-1">Sophie Carr</h4>
                                                <div class="rating-stars">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="team-section text-center">
                            <div class="team-img">
                                <img src="{{asset('assets/frontend/images/faces/male/1.jpg')}}" class="img-thumbnail rounded-circle alt=" alt="">
                            </div>
                            <h4 class="font-weight-bold dark-grey-text mt-4">Tracey	Poole</h4>
                            <h6 class="mb-3 blue-text ">RealEstate Agent</h6>
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
                <div class="card">
                    <div class="card-body">
                        <div class="team-section text-center">
                            <div class="team-img">
                                <img src="{{asset('assets/frontend/images/faces/female/1.jpg')}}" class="img-thumbnail rounded-circle alt=" alt="">
                            </div>
                            <h4 class="font-weight-bold dark-grey-text mt-4">Harry	Walker</h4>
                            <h6 class="blue-text mb-3">Apartment Agent</h6>
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
                <div class="card">
                    <div class="card-body">
                        <div class="team-section text-center">
                            <div class="team-img">
                                <img src="{{asset('assets/frontend/images/faces/male/2.jpg')}}" class="img-thumbnail rounded-circle alt=" alt="">
                            </div>
                            <h4 class="font-weight-bold dark-grey-text mt-4">Paul White</h4>
                            <h6 class=" blue-text mb-3">Smart House Agent</h6>
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
        <hr>

        <h3 class="">Users Widgets</h3>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="wideget-user">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="wideget-user-desc">
                                        <div class="wideget-user-img">
                                            <img class="" src="{{asset('assets/frontend/images/faces/male/25.jpg')}}" alt="img">
                                        </div>
                                        <div class="user-wrap">
                                            <h4>Robert	McLean</h4>
                                            <h6 class="text-muted mb-3">Member Since: November 2019</h6>
                                            <a href="javascript:void(0);" class="btn btn-success btn-sm"><i class="fa fa-rss"></i> Follow</a>
                                            <a href="javascript:void(0);" class="btn btn-info btn-sm"><i class="fa fa-envelope"></i> E-mail</a>
                                            <div class="wideget-user-info mt-3">
                                                <div class="wideget-user-rating mb-2">
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star-o text-warning me-1"></i></a> <span>5 (3876 Reviews)</span>
                                                </div>
                                                <div class="wideget-user-icons">
                                                    <a href="javascript:void(0);" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
                                                    <a href="javascript:void(0);" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                                    <a href="javascript:void(0);" class="google-bg"><i class="fa fa-google"></i></a>
                                                    <a href="javascript:void(0);" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="wideget-user-tab">
                            <div class="tab-menu-heading">
                                <div class="tabs-menu1">
                                    <ul class="nav">
                                        <li class=""><a href="#tab-51" class="active" data-bs-toggle="tab">Profile</a></li>
                                        <li><a href="#tab-61" data-bs-toggle="tab" class="">Author Items</a></li>
                                        <li><a href="#tab-71" data-bs-toggle="tab" class="">Followers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="border-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-51">
                                    <div id="profile-log-switch">
                                        <div class="media-heading">
                                            <h5><strong>Personal Information</strong></h5>
                                        </div>
                                        <div class="table-responsive ">
                                            <table class="table row table-borderless">
                                                <tbody class="col-lg-12 col-xl-6 p-0">
                                                <tr>
                                                    <td><strong>Full Name :</strong> Rubin Carmody</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Location :</strong> USA</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Languages :</strong> English, German, Japanese.</td>
                                                </tr>
                                                </tbody>
                                                <tbody class="col-lg-12 col-xl-6 p-0">
                                                <tr>
                                                    <td><strong>Website :</strong>dashr.com</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Email :</strong> georgemestayer@dashr.com</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Phone :</strong> +125 254 3562 </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row profie-img">
                                            <div class="col-md-12 text-justify">
                                                <div class="media-heading">
                                                    <h5><strong>Biography</strong></h5>
                                                </div>
                                                <p>
                                                    Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus</p>
                                                <p class="mb-0">because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter but because those who do not know how to pursue consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-61">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <img class="img-fluid rounded" src="{{asset('assets/frontend/images/photos/8.jpg')}} " alt="banner image">
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <img class="img-fluid rounded" src="{{asset('assets/frontend/images/photos/10.jpg')}}" alt="banner image ">
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <img class="img-fluid rounded" src="{{asset('assets/frontend/images/photos/11.jpg')}}" alt="banner image ">
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <img class="img-fluid rounded " src="{{asset('assets/frontend/images/photos/12.jpg')}}" alt="banner image ">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-71">
                                    <div class="wideget-user-followers">
                                        <div class="media m-0 mt-0 ">
                                            <img class="avatar brround avatar-md me-3" src="{{asset('assets/frontend/images/faces/male/18.jpg')}}" alt="avatar-img">
                                            <div class="media-body">
                                                <a href="javascript:void(0);" class="text-default font-weight-semibold">John Paige</a>
                                                <p class="text-muted ">johan@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="media mt-2 ">
                                            <span class="avatar cover-image avatar-md brround bg-secondary me-3">LQ</span>
                                            <div class="media-body">
                                                <a href="javascript:void(0);" class="text-default font-weight-semibold">Lillian Quinn</a>
                                                <p class="text-muted">lilliangore</p>
                                            </div>
                                        </div>
                                        <div class="media mt-2 ">
                                            <span class="avatar cover-image avatar-md brround me-3">IH</span>
                                            <div class="media-body">
                                                <a href="javascript:void(0);" class="text-default font-weight-semibold">Irene Harris</a>
                                                <p class="text-muted">ireneharris@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="media mt-2 ">
                                            <img class="avatar brround avatar-md me-3" src="{{asset('assets/frontend/images/faces/female/22.jpg')}}" alt="avatar-img">
                                            <div class="media-body">
                                                <a href="javascript:void(0);" class="text-default font-weight-semibold">Harry Fisher</a>
                                                <p class="text-muted mb-0">harryuqt</p>
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

        <!--Statistics-->
        <div class="row text-center">
            <div class="col-lg-3 col-md-4 item-all-cat  ">
                <div class="item-all-card text-dark text-center card mb-5">
                    <a href="javascript:void(0);"></a>
                    <div class="iteam-all-icon">
                        <img src="{{asset('assets/frontend/images/svgs/jobs/user.svg')}}" class="imag-service" alt="Sales">
                        <h5 class="text-body font-weight-bold mb-2 mt-2">Agent profile</h5>
                    </div>
                    <div class="item-all-text mt-2">
                        <button class="btn btn-primary btn-pill" >Create your Profile</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 item-all-cat  ">
                <div class="item-all-card text-dark text-center card mb-5">
                    <a href="javascript:void(0);"></a>
                    <div class="iteam-all-icon">
                        <img src="{{asset('assets/frontend/images/svgs/jobs/house.svg')}}" class="imag-service" alt="Sales">
                        <h5 class="text-body font-weight-bold mb-2 mt-2">Upload Your Property</h5>
                    </div>
                    <div class="item-all-text mt-2">
                        <button class="btn btn-secondary btn-pill" >Upload</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 item-all-cat  ">
                <div class="item-all-card text-dark text-center card mb-5">
                    <a href="javascript:void(0);"></a>
                    <div class="iteam-all-icon">
                        <img src="{{asset('assets/frontend/images/svgs/jobs/wrench.svg')}}" class="imag-service" alt="Sales">
                        <h5 class="text-body font-weight-bold mb-2 mt-2">Construction Services </h5>
                    </div>
                    <div class="item-all-text mt-2">
                        <button class="btn btn-warning btn-pill" >Pay Premium</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 item-all-cat  ">
                <div class="item-all-card text-dark text-center card mb-5">
                    <a href="javascript:void(0);"></a>
                    <div class="iteam-all-icon">
                        <img src="{{asset('assets/frontend/images/svgs/jobs/buy.svg')}}" class="imag-service" alt="Sales">
                        <h5 class="text-body font-weight-bold mb-2 mt-2">More Earnings</h5>
                    </div>
                    <div class="item-all-text mt-2">
                        <button class="btn btn-info btn-pill" >Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card overflow-hidden">
                    <div class="arrow-ribbon bg-secondary">For Rent</div>
                    <div class="item-card7-imgs">
                        <a href="javascript:void(0);"></a>
                        <img src="{{asset('assets/frontend/images/products/products/ed1.jpg')}}" alt="img" class="cover-image">
                    </div>
                    <div class="item-card7-overlaytext">
                        <a href="javascript:void(0);" class="text-white"> 2BHK House</a>
                        <h4 class=" mb-0">$836</h4>
                    </div>
                    <div class="card-body">
                        <div class="item-card7-desc">
                            <div class="item-card7-text">
                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">2BHK House For Sale</h4></a>
                            </div>
                            <ul class="d-flex mb-3">
                                <li class=""><a href="javascript:void(0);" class="icons text-muted"><i class="icon icon-location-pin text-muted me-1"></i> USA</a></li>
                                <li><a href="javascript:void(0);" class="icons text-muted"><i class="icon icon-event text-muted me-1"></i>1 min ago</a></li>
                                <li class=""><a href="javascript:void(0);" class="icons text-muted"><i class="icon icon-phone text-muted me-1"></i> 14 675 65</a></li>
                            </ul>
                            <p class="mb-0">usantium doloremque encounter but because those who do not know how to pursue.</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="javascript:void(0);" class="btn btn-primary btn-block">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card overflow-hidden">
                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                    <div class="item-card7-imgs">
                        <a href="javascript:void(0);"></a>
                        <img src="{{asset('assets/frontend/images/products/products/ed3.jpg')}}" alt="img" class="cover-image">
                    </div>
                    <div class="item-card7-overlaytext">
                        <a href="javascript:void(0);" class="text-white"> Deluxe House</a>
                        <h4 class=" mb-0">$635</h4>
                    </div>
                    <div class="card-body">
                        <div class="item-card7-desc">
                            <div class="item-card7-text">
                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Deluxe House For Rent</h4></a>
                            </div>
                            <ul class="d-flex mb-3">
                                <li class=""><a href="javascript:void(0);" class="icons text-muted"><i class="icon icon-location-pin text-muted me-1"></i> London</a></li>
                                <li><a href="javascript:void(0);" class="icons text-muted"><i class="icon icon-event text-muted me-1"></i>10 mins ago</a></li>
                                <li class=""><a href="javascript:void(0);" class="icons text-muted"><i class="icon icon-phone text-muted me-1"></i> 14 675 65</a></li>
                            </ul>
                            <p class="mb-0">encounter but because those who do not know how to pursue usantium doloremque.</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="javascript:void(0);" class="btn btn-primary btn-block">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card overflow-hidden">
                    <div class="arrow-ribbon bg-primary">For Sale</div>
                    <div class="item-card7-imgs">
                        <a href="javascript:void(0);"></a>
                        <img src="{{asset('assets/frontend/images/products/products/ed2.jpg')}}" alt="img" class="cover-image">
                    </div>
                    <div class="item-card7-overlaytext">
                        <a href="javascript:void(0);" class="text-white"> 3BHK House</a>
                        <h4 class="mb-0">$635</h4>
                    </div>
                    <div class="card-body">
                        <div class="item-card7-desc">
                            <div class="item-card7-text">
                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">3BHK House For Rent</h4></a>
                            </div>
                            <ul class="d-flex mb-3">
                                <li class=""><a href="javascript:void(0);" class="icons text-muted"><i class="icon icon-location-pin text-muted me-1"></i> London</a></li>
                                <li><a href="javascript:void(0);" class="icons text-muted"><i class="icon icon-event text-muted me-1"></i>10 mins ago</a></li>
                                <li class=""><a href="javascript:void(0);" class="icons text-muted"><i class="icon icon-phone text-muted me-1"></i> 14 675 65</a></li>
                            </ul>
                            <p class="mb-0">usantium doloremque encounter but because those who do not know how to pursue.</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="javascript:void(0);" class="btn btn-primary btn-block">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card overflow-hidden">
                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                    <div class="item-card7-imgs">
                        <a href="javascript:void(0);"></a>
                        <img src="{{asset('assets/frontend/images/products/marketplace/1.jpg')}}" alt="img" class="cover-image">
                    </div>
                    <div class="item-card7-overlaytext">
                        <a href="javascript:void(0);" class="text-white badge badge-primary"> Luxury Rooms</a>
                        <h4 class="mb-0">$15</h4>
                    </div>
                    <div class="card-body">
                        <div class="item-card7-desc">
                            <div class="item-card7-text">
                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Flat For Sale</h4></a>
                            </div>
                            <div class=" d-flex ">
                                <div class="rating-stars d-flex me-5">
                                    <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
                                    <div class="rating-stars-container me-2">
                                        <div class="rating-star sm ">
                                            <i class="fa fa-star"></i>
                                        </div>
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
                                        <span class="fs-13 text-dark mx-2">(253 ratings)</span>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <div class="item-card9-cost">
                                        <h5 class="text-muted font-weight-semibold mb-0 mt-0 "><i class="fa fa-shopping-cart"></i> 36 Sales</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="footerimg d-flex mt-0 mb-0">
                            <div class="d-flex footerimg-l mb-0">
                                <img src="{{asset('assets/frontend/images/faces/female/17.jpg')}}" alt="image" class="avatar brround  me-2">
                                <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Victoria<i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></h5>
                            </div>
                            <div class="mt-2 footerimg-r ms-auto">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Comments"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 16</span></a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Views"><span class="text-muted"><i class="fa fa-eye"></i> 36</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card overflow-hidden">
                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                    <div class="item-card7-imgs">
                        <a href="javascript:void(0);"></a>
                        <img src="{{asset('assets/frontend/images/products/marketplace/2.jpg')}}" alt="img" class="cover-image">
                    </div>
                    <div class="item-card7-overlaytext">
                        <a href="javascript:void(0);" class="text-white badge badge-info"> 3BHK House</a>
                        <h4 class=" mb-0">$25</h4>
                    </div>
                    <div class="card-body">
                        <div class="item-card7-desc">
                            <div class="item-card7-text">
                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">House For Rent</h4></a>
                            </div>
                            <div class=" d-flex">
                                <div class="rating-stars d-flex me-5">
                                    <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
                                    <div class="rating-stars-container me-2">
                                        <div class="rating-star sm ">
                                            <i class="fa fa-star"></i>
                                        </div>
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
                                        <span class="fs-13 text-dark mx-2">(253 ratings)</span>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <div class="item-card9-cost">
                                        <h5 class="text-muted font-weight-semibold mb-0 mt-0 "><i class="fa fa-shopping-cart"></i> 36 Sales</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="footerimg d-flex mt-0 mb-0">
                            <div class="d-flex footerimg-l mb-0">
                                <img src="{{asset('assets/frontend/images/faces/female/17.jpg')}}" alt="image" class="avatar brround  me-2">
                                <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Victoria<i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"></i></h5>
                            </div>
                            <div class="mt-2 footerimg-r ms-auto">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Comments"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 16</span></a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Views"><span class="text-muted"><i class="fa fa-eye"></i> 36</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card overflow-hidden">
                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                    <div class="item-card7-imgs">
                        <a href="javascript:void(0);"></a>
                        <img src="{{asset('assets/frontend/images/products/marketplace/3.jpg')}}" alt="img" class="cover-image">
                    </div>
                    <div class="item-card7-overlaytext">
                        <a href="javascript:void(0);" class="text-white badge badge-danger"> Duplex</a>
                        <h4 class="font-weight-semibold mb-0">$23</h4>
                    </div>
                    <div class="card-body">
                        <div class="item-card7-desc">
                            <div class="item-card7-text">
                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Apartment For Sale</h4></a>
                            </div>
                            <div class=" d-flex">
                                <div class="rating-stars d-flex me-5">
                                    <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
                                    <div class="rating-stars-container me-2">
                                        <div class="rating-star sm ">
                                            <i class="fa fa-star"></i>
                                        </div>
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
                                        <span class="fs-13 text-dark mx-2">(253 ratings)</span>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <div class="item-card9-cost">
                                        <h5 class="text-muted font-weight-semibold mb-0 mt-0 "><i class="fa fa-shopping-cart"></i> 36 Sales</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="footerimg d-flex mt-0 mb-0">
                            <div class="d-flex footerimg-l mb-0">
                                <img src="{{asset('assets/frontend/images/faces/female/17.jpg')}}" alt="image" class="avatar brround  me-2">
                                <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Victoria<i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"></i></h5>
                            </div>
                            <div class="mt-2 footerimg-r ms-auto">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Comments"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 16</span></a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Views"><span class="text-muted"><i class="fa fa-eye"></i> 36</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Recent</h3>
                    </div>
                    <div class="card-body pb-3">
                        <ul class="vertical-scroll">
                            <li class="item">
                                <div class="p-3">
                                    <div class="mb-2"><a href="javascript:void(0);"><span class="fs-16"><i class="fa fa-question-circle-o" aria-hidden="true"></i> How Can I Add another page in Template?</span></a></div>
                                    <span class="badge badge-primary"><i class="fa fa-eye"></i> 522</span>
                                    <span class="badge badge-success"><i class="fa fa-thumbs-up"></i> 23</span>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-3">
                                    <div class="mb-2"><a href="javascript:void(0);"><span class="fs-16"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Move Detials From One Page to Another Page?</span></a></div>
                                    <span class="badge badge-primary"><i class="fa fa-eye"></i> 652</span>
                                    <span class="badge badge-success"><i class="fa fa-thumbs-up"></i> 54</span>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-3">
                                    <div class="mb-2"><a href="javascript:void(0);"><span class="fs-16"><i class="fa fa-question-circle-o" aria-hidden="true"></i> How Can I Change My Details of My Post Add?</span></a></div>
                                    <span class="badge badge-primary"><i class="fa fa-eye"></i> 147</span>
                                    <span class="badge badge-success"><i class="fa fa-thumbs-up"></i> 14</span>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-3">
                                    <div class="mb-2"><a href="javascript:void(0);"><span class="fs-16">Can I use this Plugins in Another Template?</span></a></div>
                                    <span class="badge badge-primary"><i class="fa fa-eye"></i> 965</span>
                                    <span class="badge badge-success"><i class="fa fa-thumbs-up"></i> 35</span>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-3">
                                    <div class="mb-2"><a href="javascript:void(0);"><span class="fs-16">How can I Delete My Free Advertisement in website?</span></a></div>
                                    <span class="badge badge-primary"><i class="fa fa-eye"></i> 654</span>
                                    <span class="badge badge-success"><i class="fa fa-thumbs-up"></i> 17</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Benefits Of Premium Ad</h3>
                    </div>
                    <div class="card-body pb-2">
                        <ul class="list-unstyled widget-spec vertical-scroll mb-0">
                            <li>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
                            </li>
                            <li>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
                            </li>
                            <li>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
                            </li>
                            <li>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
                            </li>
                            <li>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
                            </li>
                            <li>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
                            </li>
                            <li>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
                            </li>
                            <li>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
                            </li>
                            <li>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
                            </li>
                            <li>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
                            </li>
                            <li>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
                            </li>
                            <li>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
                            </li>
                            <li>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
                            </li>
                            <li>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
                            </li>
                            <li>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Blog Authors</h3>
                    </div>
                    <div class="card-body p-0">
                        <ul class="vertical-scroll">
                            <li class="item2">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="{{asset('assets/frontend/images/faces/female/18.jpg')}}" alt="image" class="avatar brround  me-2">
                                        <a href="javascript:void(0);" class="time-title p-0 leading-normal mt-2">Boris	Nash <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
                                    </div>
                                    <div class="mt-2 footerimg-r ms-auto">
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 16</span></a>
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 36</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="item2">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="{{asset('assets/frontend/images/faces/female/10.jpg')}}" alt="image" class="avatar brround  me-2">
                                        <a href="javascript:void(0);" class="time-title p-0 leading-normal mt-2">Lorean Mccants <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
                                    </div>
                                    <div class="mt-2 footerimg-r ms-auto">
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 43</span></a>
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 23</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="item2">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="{{asset('assets/frontend/images/faces/male/18.jpg')}}" alt="image" class="avatar brround  me-2">
                                        <a href="javascript:void(0);" class="time-title p-0 leading-normal mt-2">Dewitt Hennessey <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
                                    </div>
                                    <div class="mt-2 footerimg-r ms-auto">
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 34</span></a>
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 12</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="item2">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="{{asset('assets/frontend/images/faces/male/8.jpg')}}" alt="image" class="avatar brround  me-2">
                                        <a href="javascript:void(0);" class="time-title p-0 leading-normal mt-2">Archie Overturf <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
                                    </div>
                                    <div class="mt-2 footerimg-r ms-auto">
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 12</span></a>
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="item2">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="{{asset('assets/frontend/images/faces/female/21.jpg')}}" alt="image" class="avatar brround  me-2">
                                        <a href="javascript:void(0);" class="time-title p-0 leading-normal mt-2">Barbra Flegle <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
                                    </div>
                                    <div class="mt-2 footerimg-r ms-auto">
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 21</span></a>
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Latest Propertys</h3>
                    </div>
                    <div class="card-body pb-3">
                        <ul class="vertical-scroll">
                            <li class="news-item">
                                <table>
                                    <tr>
                                        <td><img src="{{asset('assets/frontend/images/products/1.png')}}" alt="img" class="w-8 border"/></td>
                                        <td class="ps-4"><h5 class="mb-1 ">Best New Model House</h5><a href="javascript:void(0);" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
                                    </tr>
                                </table>
                            </li>
                            <li class="news-item">
                                <table>
                                    <tr>
                                        <td><img src="{{asset('assets/frontend/images/products/2.png')}}" alt="img" class="w-8 border"/></td>
                                        <td class="ps-4"><h5 class="mb-1 ">Trending New Model Flats</h5><a href="javascript:void(0);" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
                                    </tr>
                                </table>
                            </li>
                            <li class="news-item">
                                <table>
                                    <tr>
                                        <td><img src="{{asset('assets/frontend/images/products/3.png')}}" alt="img" class="w-8 border" /></td>
                                        <td class="ps-4"><h5 class="mb-1 "> New Model Offices</h5><a href="javascript:void(0);" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
                                    </tr>
                                </table>
                            </li>
                            <li class="news-item">
                                <table>
                                    <tr>
                                        <td><img src="{{asset('assets/frontend/images/products/4.png')}}" alt="img" class="w-8 border" /></td>
                                        <td class="ps-4"><h5 class="mb-1 ">Trending  Apartments</h5><a href="javascript:void(0);" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
                                    </tr>
                                </table>
                            </li>
                            <li class="news-item">
                                <table>
                                    <tr>
                                        <td><img src="{{asset('assets/frontend/images/products/5.png')}}" alt="img" class="w-8 border" /></td>
                                        <td class="ps-4"><h5 class="mb-1 ">Best New Model BedRooms</h5><a href="javascript:void(0);" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
                                    </tr>
                                </table>
                            </li>
                            <li class="news-item">
                                <table>
                                    <tr>
                                        <td><img src="{{asset('assets/frontend/images/products/6.png')}}" alt="img" class="w-8 border" /></td>
                                        <td class="ps-4"><h5 class="mb-1 ">New Model Houses</h5><a href="javascript:void(0);" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
                                    </tr>
                                </table>
                            </li>
                            <li class="news-item">
                                <table>
                                    <tr>
                                        <td><img src="{{asset('assets/frontend/images/products/7.png')}}" alt="img" class="w-8 border" /></td>
                                        <td class="ps-4"><h5 class="mb-1 ">Trending New Model Apartments</h5><a href="javascript:void(0);" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
                                    </tr>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Latest Seller propertys</h3>
                    </div>
                    <div class="card-body pb-3 pt-2">
                        <div class="rated-products">
                            <ul class="vertical-scroll">
                                <li class="item">
                                    <div class="media m-0 mt-0 p-5">
                                        <img class="me-4" src="{{asset('assets/frontend/images/products/toys.png')}}" alt="img">
                                        <div class="media-body">
                                            <h4 class="mt-2 mb-1">Houses</h4>
                                            <span class="rated-products-ratings">
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star text-warning"> </i>
												</span>
                                            <div class="h5 mb-0 font-weight-semibold mt-1">$17 - $29</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="media p-5 mt-0">
                                        <img class="me-4" src="{{asset('assets/frontend/images/products/1.png')}}" alt="img">
                                        <div class="media-body">
                                            <h4 class="mt-2 mb-1">Apartments</h4>
                                            <span class="rated-products-ratings">
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star-o text-warning"> </i>
												</span>
                                            <div class="h5 mb-0 font-weight-semibold mt-1">$22 - $45</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="media p-5 mt-0">
                                        <img class=" me-4" src="{{asset('assets/frontend/images/products/4.png')}}" alt="img">
                                        <div class="media-body">
                                            <h4 class="mt-2 mb-1">Flats</h4>
                                            <span class="rated-products-ratings">
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star-half-o text-warning"> </i>
												</span>
                                            <div class="h5 mb-0 font-weight-semibold mt-1">$35 - $72</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="media p-5 mt-0">
                                        <img class=" me-4" src="{{asset('assets/frontend/images/products/6.png')}}" alt="img">
                                        <div class="media-body">
                                            <h4 class="mt-2 mb-1">Offices</h4>
                                            <span class="rated-products-ratings">
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star-half-o text-warning"> </i>
													<i class="fa fa-star-o text-warning"> </i>
												</span>
                                            <div class="h5 mb-0 font-weight-semibold mt-1">$12 - $21</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="media  mb-0 p-5 mt-0">
                                        <img class=" me-4" src="{{asset('assets/frontend/images/products/8.png')}}" alt="img">
                                        <div class="media-body">
                                            <h4 class="mt-2 mb-1">Apartments</h4>
                                            <span class="rated-products-ratings">
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star text-warning"> </i>
													<i class="fa fa-star-o text-warning"> </i>
													<i class="fa fa-star-o text-warning"> </i>
												</span>
                                            <div class="h5 mb-0 font-weight-semibold mt-1">$89 - $97</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-frontend.newsletter/>
@endsection
