@extends('frontend.layouts.layout')
@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-bs-image-src="{{asset('assets/frontend/images/banners/banner2.jpg')}}">
            <div class="header-text mb-0">
                <div class="text-center text-white">
                    <h1 class="">My Ads</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">My Dashboard </a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">My Ads</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--User Dashboard-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">My Dashboard</h3>
                        </div>
                        <div class="card-body text-center item-user">
                            <div class="profile-pic">
                                <div class="profile-pic-img">
                                    <span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="online"></span>
                                    <img src="{{asset('assets/frontend/images/faces/male/25.jpg')}}" class="brround" alt="user">
                                </div>
                                <a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">Robert McLean</h4></a>
                            </div>
                        </div>
                        <aside class="doc-sidebar my-dash">
                            <div class="app-sidebar__user clearfix">
                                <ul class="side-menu">
                                    <li>
                                        <a class="side-menu__item" href="{{route('my_dash')}}"><i class="icon icon-user"></i><span class="side-menu__label ms-2">Edit Profile</span></a>
                                    </li>
                                    <li class="slide">
                                        <a class="side-menu__item" data-bs-toggle="slide" href="{{route('my_favorite')}}"><i class="icon icon-heart"></i><span class="side-menu__label ms-2">My Favorite</span><i class="angle fa fa-angle-right"></i></a>
                                    </li>
                                    <li class="slide">
                                        <a class="side-menu__item" data-bs-toggle="slide" href="{{route('my_ad')}}"><i class="icon icon-diamond"></i><span class="side-menu__label ms-2">My Ads</span><i class="angle fa fa-angle-right"></i></a>
                                    </li>
                                    <li class="slide">
                                        <a class="side-menu__item" data-bs-toggle="slide" href="{{route('manage')}}"><i class="icon icon-folder-alt"></i><span class="side-menu__label ms-2">Managed Ads</span><i class="angle fa fa-angle-right"></i></a>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="{{route('payment')}}"><i class="icon icon-credit-card"></i><span class="side-menu__label ms-2">Payments</span></a>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="{{route('order')}}"><i class="icon icon-basket"></i><span class="side-menu__label ms-2">Orders</span></a>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="{{route('tip')}}"><i class="icon icon-game-controller"></i><span class="side-menu__label ms-2">Safety Tips</span></a>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="{{route('setting')}}"><i class="icon icon-settings"></i><span class="side-menu__label ms-2">Settings </span></a>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="{{route('login')}}"><i class="icon icon-power"></i><span class="side-menu__label ms-2">Logout</span></a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="card my-select">
                        <div class="card-header">
                            <h3 class="card-title">Search Ads</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="text" placeholder="What are you looking for?">
                            </div>
                            <div class="form-group">
                                <select name="country" id="select-countries" class="form-control form-select select2-show-search">
                                    <option value="1" selected="">All Categories</option>
                                    <option value="2">RealEstate</option>
                                    <option value="3">Apartments</option>
                                    <option value="4">3BHK Flat</option>
                                    <option value="5">Homes</option>
                                    <option value="6">Luxury Rooms</option>
                                    <option value="7">Deluxe Houses</option>
                                    <option value="8">Duplex House</option>
                                    <option value="9">Luxury Rooms</option>
                                    <option value="10">Pets &amp; Flats</option>
                                    <option value="11">Apartments</option>
                                    <option value="12">Duplex Houses</option>
                                    <option value="13">3BHK Flatss</option>
                                    <option value="14">2BHK Flats</option>
                                    <option value="15">Modren Houses</option>
                                </select>
                            </div>
                            <div class="">
                                <a href="javascript:void(0);" class="btn  btn-primary">Search</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-xl-0">
                        <div class="card-header">
                            <h3 class="card-title">Safety Tips For Buyers</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled widget-spec  mb-0">
                                <li class="">
                                    <i class="fa fa-check text-success" aria-hidden="true"></i> Meet Seller at public Place
                                </li>
                                <li class="">
                                    <i class="fa fa-check text-success" aria-hidden="true"></i> Check item before you buy
                                </li>
                                <li class="">
                                    <i class="fa fa-check text-success" aria-hidden="true"></i> Pay only after collecting item
                                </li>
                                <li class="ms-5 mb-0">
                                    <a href="{{route('tip')}}"> View more..</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12 col-md-12">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">My Ads</h3>
                        </div>
                        <div class="card-body">
                            <div class="ads-tabs">
                                <div class="tabs-menus">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li class=""><a href="#tab1" class="active" data-bs-toggle="tab">All Ads (20)</a></li>
                                        <li><a href="#tab2" data-bs-toggle="tab">Published (08)</a></li>
                                        <li><a href="#tab3" data-bs-toggle="tab">Featured (05)</a></li>
                                        <li><a href="#tab4" data-bs-toggle="tab">Sold (03)</a></li>
                                        <li><a href="#tab5" data-bs-toggle="tab">Active (03)</a></li>
                                        <li><a href="#tab6" data-bs-toggle="tab">Expired (01)</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active table-responsive userprof-tab" id="tab1">
                                        <table class="table table-bordered table-hover mb-0 text-nowrap">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Item</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Ad Status</th>
                                                <th >Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/h1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Modren Kitchen</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Feb-21-2019 , 16:54</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i>sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Luxury Rooms</td>
                                                <td class="font-weight-semibold fs-16">$54</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/j2.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Villa</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Oct-23-2019 , 9:18</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Homes</td>
                                                <td class="font-weight-semibold fs-16">$156</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/h2.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">2BHK Rooms</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-15-2019 , 12:45</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Buy</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>RealEstate</td>
                                                <td class="font-weight-semibold fs-16">$22,765</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-primary">Offer</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/f1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Luxury Rooms</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-25-2019 , 16:54</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Apartments</td>
                                                <td class="font-weight-semibold fs-16">$89</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-success">Active</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/l1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Garden House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Feb-21-2019 , 16:54</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i>Rent</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Luxury Rooms</td>
                                                <td class="font-weight-semibold fs-16">$25</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/h4.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Villa</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i>Dec-15-2019 , 12:45 pm</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Homes</td>
                                                <td class="font-weight-semibold fs-16">$22</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/j1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Garden House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-22-2019 , 9:18</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Homes</td>
                                                <td class="font-weight-semibold fs-16">$14,000</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-primary">Offer</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/f2.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">2BHK Rooms</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-30-2019 , 11:54</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Buy</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Apartments</td>
                                                <td class="font-weight-semibold fs-16">$89</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-success">Active</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/v2.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Duplex House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Dec-03-2019 , 16:45</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Deluxe Houses</td>
                                                <td class="font-weight-semibold fs-16">$35,978</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/h2.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">2BHK House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-15-2019 , 12:45</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>RealEstate</td>
                                                <td class="font-weight-semibold fs-16">$22,765</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-danger">Expired</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/v1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Modren House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-03-2019 , 12:50</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Deluxe Houses</td>
                                                <td class="font-weight-semibold fs-16">$35,978</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-success">Active</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/f3.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">3BHK House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-20-2019 , 16:54</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Apartments</td>
                                                <td class="font-weight-semibold fs-16">$129</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/j3.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Modren Kitchen</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Sep-22-2019 , 9:18 </a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Homes</td>
                                                <td class="font-weight-semibold fs-16">$235</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/h3.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Villa</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Dec-21-2019 , 19:45</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>RealEstate</td>
                                                <td class="font-weight-semibold fs-16">$765</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/v1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Modren House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-12-2019 , 16:50</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Deluxe Houses</td>
                                                <td class="font-weight-semibold fs-16">$35,978</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-primary">Offer</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/f1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Luxury House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-25-2019 , 16:54</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Apartments</td>
                                                <td class="font-weight-semibold fs-16">$89</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-info">Sold</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/v1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Modren House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-03-2019 , 12:50</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Buy</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Deluxe Houses</td>
                                                <td class="font-weight-semibold fs-16">$35,978</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-info">Sold</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/h2.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Budget House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-15-2019 , 12:45 pm</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>RealEstate</td>
                                                <td class="font-weight-semibold fs-16">$22,765</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-info">Sold</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/f1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Luxury Room</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-15-2019 , 08:54</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Apartments</td>
                                                <td class="font-weight-semibold fs-16">$89</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-primary">Offer</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/j1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Garden House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-14-2019 , 19:18</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Homes</td>
                                                <td class="font-weight-semibold fs-16">$14,000</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-primary">Offer</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane  table-responsive userprof-tab" id="tab2">
                                        <table class="table table-bordered table-hover mb-0 text-nowrap">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Item</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Ad Status</th>
                                                <th >Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/h1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Modren Kitchen</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Feb-21-2019 , 16:54</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i>sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Luxury Rooms</td>
                                                <td class="font-weight-semibold fs-16">$54</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/j2.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Garden House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Oct-23-2019 , 9:18</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Homes</td>
                                                <td class="font-weight-semibold fs-16">$156</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/l1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Budget House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Feb-21-2019 , 16:54</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i>Buy</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Luxury Rooms</td>
                                                <td class="font-weight-semibold fs-16">$25</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/h4.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">3BHK House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i>Dec-15-2019 , 12:45 pm</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Homes</td>
                                                <td class="font-weight-semibold fs-16">$22</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/v2.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">2BHk House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Dec-03-2019 , 16:45</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Deluxe Houses</td>
                                                <td class="font-weight-semibold fs-16">$35,978</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/f3.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">3BHK Rooms</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-20-2019 , 16:54</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Apartments</td>
                                                <td class="font-weight-semibold fs-16">$129</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/j3.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Modren Kitchen</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Sep-22-2019 , 9:18 </a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Homes</td>
                                                <td class="font-weight-semibold fs-16">$235</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/h3.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Villa</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Dec-21-2019 , 19:45</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>RealEstate</td>
                                                <td class="font-weight-semibold fs-16">$765</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane  table-responsive userprof-tab" id="tab3">
                                        <table class="table table-bordered table-hover  text-nowrap mb-0">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Item</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Ad Status</th>
                                                <th >Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/j1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Garden House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-22-2019 , 9:18</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Buy</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Homes</td>
                                                <td class="font-weight-semibold fs-16">$14,000</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-primary">Offer</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/h2.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">2BHk House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-15-2019 , 12:45</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>RealEstate</td>
                                                <td class="font-weight-semibold fs-16">$22,765</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-primary">Offer</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/v1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Modren House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-12-2019 , 16:50</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Deluxe Houses</td>
                                                <td class="font-weight-semibold fs-16">$35,978</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-primary">Offer</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/f1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Luxury Room</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-15-2019 , 08:54</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Apartments</td>
                                                <td class="font-weight-semibold fs-16">$89</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-primary">Offer</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/j1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Garden House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-14-2019 , 19:18</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Homes</td>
                                                <td class="font-weight-semibold fs-16">$14,000</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-primary">Offer</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane  table-responsive userprof-tab" id="tab4">
                                        <table class="table table-bordered table-hover mb-0 text-nowrap">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Item</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Ad Status</th>
                                                <th >Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/f1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Luxury Room</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-25-2019 , 16:54</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Apartments</td>
                                                <td class="font-weight-semibold fs-16">$89</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-info">Sold</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/v1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Modren House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-03-2019 , 12:50</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Buy</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Deluxe Houses</td>
                                                <td class="font-weight-semibold fs-16">$35,978</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-info">Sold</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/h2.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">2BHk House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-15-2019 , 12:45 pm</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>RealEstate</td>
                                                <td class="font-weight-semibold fs-16">$22,765</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-info">Sold</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane  table-responsive userprof-tab" id="tab5">
                                        <table class="table table-bordered table-hover mb-0 text-nowrap">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Item</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Ad Status</th>
                                                <th >Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/f1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Luxury Room</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-25-2019 , 16:54</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Buy</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Apartments</td>
                                                <td class="font-weight-semibold fs-16">$89</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-success">Active</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/f2.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">2BHK Room</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-30-2019 , 11:54</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Apartments</td>
                                                <td class="font-weight-semibold fs-16">$89</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-success">Active</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/v1.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Modren House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-03-2019 , 12:50</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Deluxe Houses</td>
                                                <td class="font-weight-semibold fs-16">$35,978</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-success">Active</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane  table-responsive userprof-tab" id="tab6">
                                        <table class="table table-bordered table-hover mb-0 text-nowrap">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Item</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Ad Status</th>
                                                <th >Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0);"></a>
                                                            <img src="{{asset('assets/frontend/images/products/h2.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">2BHk House</h4></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-15-2019 , 12:45</a><br>
                                                                <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>RealEstate</td>
                                                <td class="font-weight-semibold fs-16">$22,765</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge badge-danger">Expired</a>
                                                </td>
                                                <td>
                                                    <a href="edit-posts.html" class=" btn btn-success btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--User Dashboard-->
    <x-frontend.newsletter/>
@endsection
