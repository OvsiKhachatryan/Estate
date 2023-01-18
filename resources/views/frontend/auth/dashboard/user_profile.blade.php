@extends('frontend.layouts.layout')
@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-bs-image-src="{{asset('assets/frontend/images/banners/banner2.jpg')}}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">UserProfile</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page"> UserProfile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--User Profile-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body pattern-1">
                            <div class="wideget-user">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="wideget-user-desc text-center">
                                            <div class="wideget-user-img">
                                                <img class="brround" src="{{asset('assets/frontend/images/faces/male/25.jpg')}}" alt="img">
                                            </div>
                                            <div class="user-wrap wideget-user-info">
                                                <a href="javascript:void(0);" class="text-white"><h4 class="font-weight-semibold">Robert	McLean</h4></a>
                                                <span class="text-white">Member Since November 2008</span>
                                                <div class="wideget-user-rating">
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star-o text-warning me-1"></i></a> <span class="text-white">5 (3876 Reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <div class="wideget-user-info ">
                                            <div class="wideget-user-icons mt-2">
                                                <a href="javascript:void(0);" class="facebook-bg mt-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                                                <a href="javascript:void(0);" class="twitter-bg" data-bs-toggle="tooltip" data-bs-placement="top" title="twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="javascript:void(0);" class="google-bg" data-bs-toggle="tooltip" data-bs-placement="top" title="Google"><i class="fa fa-google"></i></a>
                                                <a href="javascript:void(0);" class="dribbble-bg" data-bs-toggle="tooltip" data-bs-placement="top" title="Dribble"><i class="fa fa-dribbble"></i></a>
                                                <a href="javascript:void(0);" class="share-bg" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share text-white"></i></a>
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
                                            <li class=""><a href="#tab-5" class="active" data-bs-toggle="tab">Profile</a></li>
                                            <li><a href="#tab-6" data-bs-toggle="tab" class="">Edit Profile</a></li>
                                            <li><a href="#tab-7" data-bs-toggle="tab" class="">My Ads <span class="badge badge-primary rounded-pill">20</span></a></li>
                                            <li><a href="#tab-8" data-bs-toggle="tab" class="">Featured Ads <span class="badge badge-primary rounded-pill">08</span></a></li>
                                            <li><a href="#tab-9" data-bs-toggle="tab" class="">Published Ads <span class="badge badge-primary rounded-pill">05</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-5">
                                        <div class="profile-log-switch">
                                            <div class="media-heading">
                                                <h3 class="card-title mb-3 font-weight-bold">Personal Details</h3>
                                            </div>
                                            <ul class="usertab-list mb-0">
                                                <li><a href="javascript:void(0);" class="text-dark"><span class="font-weight-semibold">Full Name :</span> Rubin Carmody</a></li>
                                                <li><a href="javascript:void(0);" class="text-dark"><span class="font-weight-semibold">Location :</span> USA</a></li>
                                                <li><a href="javascript:void(0);" class="text-dark"><span class="font-weight-semibold">Languages :</span> English, German, Japanese.</a></li>
                                                <li><a href="javascript:void(0);" class="text-dark"><span class="font-weight-semibold">Website :</span>Reallist.com</a></li>
                                                <li><a href="javascript:void(0);" class="text-dark"><span class="font-weight-semibold">Email :</span> georgemestayer@Reallist.com</a></li>
                                                <li><a href="javascript:void(0);" class="text-dark"><span class="font-weight-semibold">Phone :</span> +125 254 3562 </a></li>
                                            </ul>
                                            <div class="row profie-img">
                                                <div class="col-md-12">
                                                    <div class="media-heading">
                                                        <h3 class="card-title mb-3 font-weight-bold">Biography</h3>
                                                    </div>
                                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus how to pursue pleasure rationally encounter but because those who do not know how to pursue consequences that are extremely</p>
                                                    <p class="mb-0">because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter but because those who do not know how to pursue consequences the extre painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-6">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">First Name</label>
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Email address</label>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Phone Number</label>
                                                    <input type="number" class="form-control" placeholder="Number">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" class="form-control" placeholder="Home Address">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">City</label>
                                                    <input type="text" class="form-control" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label">Postal Code</label>
                                                    <input type="number" class="form-control" placeholder="ZIP Code">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="form-label">Country</label>
                                                    <select class="form-control border-bottom-0 w-100 select2" data-placeholder="Select">
                                                        <optgroup label="Categories">
                                                            <option>--Select--</option>
                                                            <option value="1">Germany</option>
                                                            <option value="2">2BHK Homes</option>
                                                            <option value="3">Canada</option>
                                                            <option value="4">Usa</option>
                                                            <option value="5">Afghanistan</option>
                                                            <option value="6">Albania</option>
                                                            <option value="7">China</option>
                                                            <option value="8">Denmark</option>
                                                            <option value="9">Finland</option>
                                                            <option value="10">India</option>
                                                            <option value="11">Kiribati</option>
                                                            <option value="12">Kuwait</option>
                                                            <option value="13">Mexico</option>
                                                            <option value="14">Pakistan</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">About Me</label>
                                                    <textarea rows="5" class="form-control" placeholder="Enter About your description"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Upload Image</label>
                                                    <div class="form-file">
                                                        <input type="file" class="form-control example-file-input-custom" name="example-file-input-custom">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane userprof-tab" id="tab-7">
                                        <div class="table-responsive">
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
                                                                    <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
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
                                                                    <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">2BHk Rooms</h4></a>
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
                                                                <img src="{{asset('assets/frontend/images/products/f1.png')}}" alt="img">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="card-item-desc ms-4 p-0 mt-2">
                                                                    <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Luxury Rooms</h4></a>
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
                                                                <img src="{{asset('assets/frontend/images/products/l1.png')}}" alt="img">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="card-item-desc ms-4 p-0 mt-2">
                                                                    <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Garden House</h4></a>
                                                                    <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Feb-21-2019 , 16:54</a><br>
                                                                    <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i>Sale</a>
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
                                                                    <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Graden House</h4></a>
                                                                    <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-22-2019 , 9:18</a><br>
                                                                    <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
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
                                                                    <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
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
                                                                    <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
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
                                                                    <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-25-2019 , 16:54</a><br>
                                                                    <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
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
                                                                    <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Budget House</h4></a>
                                                                    <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-03-2019 , 12:50</a><br>
                                                                    <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Sale</a>
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
                                                                    <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Luxury Rooms</h4></a>
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
                                                                    <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Garden House</h4></a>
                                                                    <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-15-2019 , 08:54</a><br>
                                                                    <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Buy</a>
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
                                                                    <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">We need Hr Recruiter</h4></a>
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
                                    </div>
                                    <div class="tab-pane userprof-tab" id="tab-8">
                                        <div class="table-responsive">
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
                                                                    <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Buy</a>
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
                                                                    <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Luxury Rooms</h4></a>
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
                                                                    <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
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
                                    </div>
                                    <div class="tab-pane userprof-tab" id="tab-9">
                                        <div class="table-responsive">
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
                                                                    <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
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
                                                                    <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">2BHK House</h4></a>
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
                                                                <img src="{{asset('assets/frontend/images/products/f3.png')}}" alt="img">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="card-item-desc ms-4 p-0 mt-2">
                                                                    <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">Luxury House</h4></a>
                                                                    <a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i> Nov-20-2019 , 16:54</a><br>
                                                                    <a href="javascript:void(0);"><i class="fa fa-tag me-1"></i> Rent</a>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-frontend.newsletter/>
@endsection
