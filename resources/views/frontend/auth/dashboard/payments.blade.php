@extends('frontend.layouts.layout')
@section('content')

    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-bs-image-src="{{asset('assets/frontend/images/banners/banner2.jpg')}}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">Payments</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">My Dashboard</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Managed Ads</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--User dashboard-->
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
                                <a href="{{route('user_profile')}}" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">Robert McLean</h4></a>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Payment Method</h3>
                        </div>
                        <div class="card-body">
                            <div class="card-pay">
                                <ul class="tabs-menu nav">
                                    <li class=""><a href="#tab1" class="active" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Credit Card</a></li>
                                    <li><a href="#tab2" data-bs-toggle="tab" class=""><i class="fa fa-paypal"></i>  Paypal</a></li>
                                    <li><a href="#tab3" data-bs-toggle="tab" class=""><i class="fa fa-university"></i>  Bank Transfer</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="tab1">
                                        <div class="form-group">
                                            <label class="form-label">CardHolder Name</label>
                                            <input type="text" class="form-control" id="name1" placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Card number</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for...">
                                                <button class="btn btn-info" type="button"><i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
                                                    <i class="fa fa-cc-mastercard"></i></button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label class="form-label">Expiration</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control border-end-0" placeholder="MM" name="expire-month">
                                                        <input type="number" class="form-control" placeholder="YY" name="expire-year">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="form-label">CVV <i class="fa fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Please Enter last 3 digits"></i></label>
                                                    <input type="number" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-primary">Submit</a>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <h6 class="font-weight-semibold">Paypal is easiest way to pay online</h6>
                                        <p><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-paypal"></i> Log in my Paypal</a></p>
                                        <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <h6 class="font-weight-semibold">Bank account details</h6>
                                        <dl class="card-text">
                                            <dt>BANK: </dt>
                                            <dd> THE UNION BANK 0456</dd>
                                        </dl>
                                        <dl class="card-text">
                                            <dt>Account number: </dt>
                                            <dd> 67542897653214</dd>
                                        </dl>
                                        <dl class="card-text">
                                            <dt>IBAN: </dt>
                                            <dd>543218769</dd>
                                        </dl>
                                        <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Payments</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Invoice ID</th>
                                        <th>Category</th>
                                        <th>Purchase Date</th>
                                        <th>Price</th>
                                        <th>Due Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#INV-348</td>
                                        <td>Apartments</td>
                                        <td>07-12-2019</td>
                                        <td class="font-weight-semibold fs-16">$89</td>
                                        <td>17-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-186</td>
                                        <td>Rela Reallist</td>
                                        <td>02-12-2019</td>
                                        <td class="font-weight-semibold fs-16">$14,276</td>
                                        <td>14-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-831</td>
                                        <td>Homes</td>
                                        <td>30-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$25,000</td>
                                        <td>04-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-672</td>
                                        <td>Duplex House</td>
                                        <td>25-18-2019</td>
                                        <td class="font-weight-semibold fs-16">$50.00</td>
                                        <td>07-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-428</td>
                                        <td>Electornics</td>
                                        <td>24-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$99.99</td>
                                        <td>11-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-543</td>
                                        <td> Homes</td>
                                        <td>22-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$145</td>
                                        <td>12-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-986</td>
                                        <td>Pet & Flats</td>
                                        <td>18-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$378</td>
                                        <td>07-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-867</td>
                                        <td>Cloting</td>
                                        <td>17-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$509.00</td>
                                        <td>06-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-893</td>
                                        <td>Apartments</td>
                                        <td>16-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$347</td>
                                        <td>30-11-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-267</td>
                                        <td>Offices & Fitness</td>
                                        <td>12-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$895</td>
                                        <td>27-11-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-931</td>
                                        <td>Luxury Homes</td>
                                        <td>11-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$765</td>
                                        <td>25-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <ul class="pagination">
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
            </div>
        </div>
    </section>
    <!--/User dashboard-->
    <x-frontend.newsletter/>
@endsection
