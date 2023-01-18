@extends('frontend.layouts.layout')
@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-bs-image-src="{{asset('assets/frontend/images/banners/banner2.jpg"')}}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">Blog-Details</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Blog-Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--Add listing-->
    <section class="sptb h-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="item7-card-img br-5">
                                <img src="{{asset('assets/frontend/images/photos/28.jpg')}}" alt="img" class="w-100">
                                <div class="item7-card-text">
                                    <span class="badge badge-info fs-20">2BHK House</span>
                                </div>
                            </div>
                            <div class="item7-card-desc d-flex mb-2 mt-3">
                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-28-2019</a>
                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-user text-muted me-2"></i>Nissy Sten</a>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>2 Comments</a>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="text-dark"><h2 class="font-weight-semibold">Home  For Sale</h2></a>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat
                                Luxury Home  For Sale odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dol et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deser mollitian animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero temporin cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimusomnis voluptas assumenda est, omnis dolor repellendus. </p>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat
                                Luxury Home  For Sale odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dol et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deser mollitian animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero temporin cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimusomnis voluptas assumenda est, omnis dolor repellendus. </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Comments</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="media mt-0 p-5">
                                <div class="d-flex me-3">
                                    <a href="javascript:void(0);"><img class="media-object brround" alt="64x64" src="{{asset('assets/frontend/images/faces/male/1.jpg')}}"></a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
                                        <span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
                                        <span class="fs-14 ms-2"> 4.5 <i class="fa fa-star text-yellow"></i></span>
                                    </h5>
                                    <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ms-3 fa fa-clock-o"></i> 13.00  <i class=" ms-3 fa fa-map-marker"></i> Brezil</small>
                                    <p class="font-13  mb-2 mt-2">
                                        Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
                                    </p>
                                    <a href="javascript:void(0);" class="me-2 btn btn-primary btn-sm"><span class="">Helpful</span></a>
                                    <a href="javascript:void(0);" class="me-2 btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#Comment"><span class="">Comment</span></a>
                                    <a href="javascript:void(0);" class="me-2 btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#report"><span class="">Report</span></a>
                                    <div class="media mt-5">
                                        <div class="d-flex me-3">
                                            <a href="javascript:void(0);"> <img class="media-object brround" alt="64x64" src="{{asset('assets/frontend/images/faces/female/2.jpg')}}"> </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1 font-weight-semibold">Rose Slater <span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span></h5>
                                            <small class="text-muted"><i class="fa fa-calendar"></i> Dec 22st  <i class=" ms-3 fa fa-clock-o"></i> 6.00  <i class=" ms-3 fa fa-map-marker"></i> Brezil</small>
                                            <p class="font-13  mb-2 mt-2">
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris   commodo At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium, nisi ut aliquid ex ea commodi consequatur consequat.
                                            </p>
                                            <a href="javascript:void(0);" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#Comment"><span class="">Comment</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media p-5 border-top mt-0">
                                <div class="d-flex me-3">
                                    <a href="javascript:void(0);"> <img class="media-object brround" alt="64x64" src="{{asset('assets/frontend/images/faces/male/3.jpg')}}"> </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1 font-weight-semibold">Edward
                                        <span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
                                        <span class="fs-14 ms-2"> 4 <i class="fa fa-star text-yellow"></i></span>
                                    </h5>
                                    <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ms-3 fa fa-clock-o"></i> 16.35  <i class=" ms-3 fa fa-map-marker"></i> UK</small>
                                    <p class="font-13  mb-2 mt-2">
                                        Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
                                    </p>
                                    <a href="javascript:void(0);" class="me-2 btn btn-primary btn-sm"><span class="">Helpful</span></a>
                                    <a href="javascript:void(0);" class="me-2 btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#Comment"><span class="">Comment</span></a>
                                    <a href="javascript:void(0);" class="me-2 btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#report"><span class="">Report</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-lg-0">
                        <div class="card-header">
                            <h3 class="card-title">Write Your Comments</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name1" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write Your Comment"></textarea>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary">Submit</a>
                        </div>
                    </div>
                </div>

                <!--Rightside Content-->
                <div class="col-xl-4 col-lg-4 col-md-12">
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
                        <div class="card-body p-0">
                            <div class="list-catergory">
                                <div class="item-list">
                                    <ul class="list-group mb-0">
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <i class="fa fa-building bg-primary text-primary"></i>
                                                <span>Apartments</span>
                                                <span class="badgetext badge rounded-pill badge-light mb-0 mt-1 mt-1">14</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <i class="fa fa-bed bg-success text-success"></i>
                                                <span>Hostel & 2BHK Flats</span>
                                                <span class="badgetext badge rounded-pill badge-light mb-0 mt-1">63</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <i class="fa fa-building-o bg-info text-info"></i>
                                                <span>2BHK Homes</span>
                                                <span class="badgetext badge rounded-pill badge-light mb-0 mt-1">25</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <i class="fa fa-home bg-warning text-warning"></i>
                                                <span>RealEstate</span>
                                                <span class="badgetext badge rounded-pill badge-light mb-0 mt-1">74</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <i class="fa fa-building bg-danger text-danger"></i>
                                                <span>Apartments</span>
                                                <span class="badgetext badge rounded-pill badge-light mb-0 mt-1">18</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <i class="fa fa-home bg-blue text-blue"></i>
                                                <span>Duplex Houses</span>
                                                <span class="badgetext badge rounded-pill badge-light mb-0 mt-1">32</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item border-bottom-0">
                                            <a href="javascript:void(0);" class="text-dark">
                                                <i class="fa fa-building-o  bg-secondary text-pink"></i>
                                                <span>Flats</span>
                                                <span class="badgetext badge rounded-pill badge-light mb-0 mt-1">08</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Latest Seller Ads</h3>
                        </div>
                        <div class="card-body pb-3">
                            <div class="rated-products">
                                <ul class="vertical-scroll">
                                    <li class="item">
                                        <div class="media m-0 mt-0 p-5">
                                            <img class="me-4" src="{{asset('assets/frontend/images/products/toys.png')}}" alt="img">
                                            <div class="media-body">
                                                <h4 class="mt-2 mb-1">Apartment</h4>
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
                                                <h4 class="mt-2 mb-1">Modren Apartment</h4>
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
                                                <h4 class="mt-2 mb-1">3BHK Flat</h4>
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
                                                <h4 class="mt-2 mb-1">2BHK Flat</h4>
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
                                                <h4 class="mt-2 mb-1">Luxury House</h4>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Popular Tags</h3>
                        </div>
                        <div class="card-body">
                            <div class="product-tags clearfix">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="javascript:void(0);">RealEstate</a></li>
                                    <li><a href="javascript:void(0);">Homes</a></li>
                                    <li><a href="javascript:void(0);">3BHK Flatss</a></li>
                                    <li><a href="javascript:void(0);">2BHK Homes</a></li>
                                    <li><a href="javascript:void(0);">Luxury Rooms</a></li>
                                    <li><a href="javascript:void(0);">Apartments</a></li>
                                    <li><a href="javascript:void(0);">3BHK Flatss</a></li>
                                    <li><a href="javascript:void(0);">Homes</a></li>
                                    <li><a href="javascript:void(0);">Luxury House For Sale</a></li>
                                    <li><a href="javascript:void(0);">Apartments</a></li>
                                    <li><a href="javascript:void(0);" class="mb-0">Luxury Rooms</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0">
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
                </div>
                <!--/Rightside Content-->
            </div>
        </div>
    </section>
    <!--/Add listing-->
    <x-frontend.newsletter/>
@endsection
