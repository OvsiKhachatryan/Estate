@extends('frontend.layouts.layout')
@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-bs-image-src="{{asset('assets/frontend/images/banners/banner2.jpg')}}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">Safety Tips</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">My Dashboard</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page"> Safety Tips</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--user dashboard-->
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
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> Meet Seller at public Place
                                </li>
                                <li class="">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> Check item before you buy
                                </li>
                                <li class="">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> Pay only after collecting item
                                </li>
                                <li class="ms-5 mb-0">
                                    <a href="tips.html"> View more..</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">1. Watch out for email scams</h3>
                            <div class="card-options">
                                <a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2"><i class="icon icon-pencil me-1"></i> Edit</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <label class="form-label">Select Color Theme</label>
                            <div class="row gutters-xs mb-3">
                                <div class="col-auto">
                                    <label class="colorinput">
                                        <input name="color" type="radio" value="azure" class="colorinput-input" checked="">
                                        <span class="colorinput-color bg-azure"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                        <input name="color" type="radio" value="indigo" class="colorinput-input">
                                        <span class="colorinput-color bg-indigo"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                        <input name="color" type="radio" value="purple" class="colorinput-input">
                                        <span class="colorinput-color bg-purple"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                        <input name="color" type="radio" value="pink" class="colorinput-input">
                                        <span class="colorinput-color bg-secondary"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                        <input name="color" type="radio" value="red" class="colorinput-input">
                                        <span class="colorinput-color bg-red"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                        <input name="color" type="radio" value="orange" class="colorinput-input">
                                        <span class="colorinput-color bg-orange"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                        <input name="color" type="radio" value="yellow" class="colorinput-input">
                                        <span class="colorinput-color bg-yellow"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                        <input name="color" type="radio" value="lime" class="colorinput-input">
                                        <span class="colorinput-color bg-lime"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                        <input name="color" type="radio" value="green" class="colorinput-input">
                                        <span class="colorinput-color bg-green"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                        <input name="color" type="radio" value="teal" class="colorinput-input">
                                        <span class="colorinput-color bg-teal"></span>
                                    </label>
                                </div>
                            </div>
                            <ul class="list-unstyled widget-spec mb-0">
                                <li class="">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> usantium doloremque laudantium
                                </li>
                                <li class="">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> Luxury Home  For Sale odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
                                </li>
                                <li class="">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
                                </li>
                                <li class="mb-0">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> usantium doloremque laudantium
                                </li>

                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="javascript:void(0);" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">2. Pay with a credit card</h3>
                            <div class="card-options">
                                <a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2"><i class="icon icon-pencil me-1"></i> Edit</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled widget-spec mb-0">
                                <li class="">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> usantium doloremque laudantium
                                </li>
                                <li class="">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> Luxury Home  For Sale odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
                                </li>
                                <li class="">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
                                </li>
                                <li class="mb-0">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> usantium doloremque laudantium
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="javascript:void(0);" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">3. Check your statements</h3>
                            <div class="card-options">
                                <a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2"><i class="icon icon-pencil me-1"></i> Edit</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">Select Images</label>
                                <div class="row gutters-sm">
                                    <div class="col-6 col-sm-2">
                                        <label class="imagecheck mb-4">
                                            <input name="imagecheck" type="checkbox" value="1" class="imagecheck-input">
                                            <span class="imagecheck-figure">
													<img src="{{asset('assets/frontend/images/photos/1.jpg')}}" alt="}" class="imagecheck-image cover-image">
												</span>
                                        </label>
                                    </div>
                                    <div class="col-6 col-sm-2">
                                        <label class="imagecheck mb-4">
                                            <input name="imagecheck" type="checkbox" value="2" class="imagecheck-input" checked="">
                                            <span class="imagecheck-figure">
													<img src="{{asset('assets/frontend/images/photos/2.jpg')}}" alt="}" class="imagecheck-image cover-image">
												</span>
                                        </label>
                                    </div>
                                    <div class="col-6 col-sm-2">
                                        <label class="imagecheck mb-4">
                                            <input name="imagecheck" type="checkbox" value="3" class="imagecheck-input">
                                            <span class="imagecheck-figure">
													<img src="{{asset('assets/frontend/images/photos/3.jpg')}}" alt="}" class="imagecheck-image cover-image">
												</span>
                                        </label>
                                    </div>
                                    <div class="col-6 col-sm-2">
                                        <label class="imagecheck mb-4">
                                            <input name="imagecheck" type="checkbox" value="4" class="imagecheck-input" checked="">
                                            <span class="imagecheck-figure">
													<img src="{{asset('assets/frontend/images/photos/4.jpg')}}" alt="}" class="imagecheck-image cover-image">
												</span>
                                        </label>
                                    </div>
                                    <div class="col-6 col-sm-2">
                                        <label class="imagecheck mb-4">
                                            <input name="imagecheck" type="checkbox" value="5" class="imagecheck-input">
                                            <span class="imagecheck-figure">
													<img src="{{asset('assets/frontend/images/photos/5.jpg')}}" alt="}" class="imagecheck-image cover-image">
												</span>
                                        </label>
                                    </div>
                                    <div class="col-6 col-sm-2">
                                        <label class="imagecheck mb-4">
                                            <input name="imagecheck" type="checkbox" value="6" class="imagecheck-input">
                                            <span class="imagecheck-figure">
													<img src="{{asset('assets/frontend/images/photos/6.jpg')}}" alt="}" class="imagecheck-image cover-image">
												</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-unstyled widget-spec mb-0">
                                <li class="">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> Nemo enim ipsam voluptatem voluptas sit aspernatur ratione voluptatem sequi nesciunt. laudantium
                                </li>
                                <li class="">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
                                </li>
                                <li class="mb-0">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="javascript:void(0);" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">4. Report the company</h3>
                            <div class="card-options">
                                <a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2"><i class="icon icon-pencil me-1"></i> Edit</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled widget-spec mb-0">
                                <li class="">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> usantium doloremque laudantium
                                </li>
                                <li class="">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> Luxury Home  For Sale odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
                                </li>
                                <li class="mb-0">
                                    <i class="fa fa-caret-right text-success" aria-hidden="true"></i> On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
                                </li>

                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="javascript:void(0);" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-frontend.newsletter/>
@endsection
