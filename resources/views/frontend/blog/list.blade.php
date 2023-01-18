@extends('frontend.layouts.layout')
@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-bs-image-src="{{asset('assets/frontend/images/banners/banner2.jpg')}}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">Blog-List</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Blog-List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--Add listing-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <!--Add lists-->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card overflow-hidden">
                                <div class="row no-gutters blog-list">
                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="item7-card-img">
                                            <a href="{{route('blog_detail')}}"></a>
                                            <img src="{{asset('assets/frontend/images/products/f1.png')}}" alt="img" class="cover-image">
                                            <div class="item7-card-text">
                                                <span class="badge badge-success">Apartments</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-12 col-md-12">
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-1">
                                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>Dec-03-2019</a>
                                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-user text-muted me-2"></i>Nissy Sten</a>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>4 Comments</a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold mb-3">Apartment For Sale</h4></a>
                                            <p class="">Ut enim ad minima veniam, quis nostrum exercitationem,Ut enim minima veniam, quis nostrum exercitationem
                                            </p>
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Read More<i class="fe fe-chevrons-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card overflow-hidden">
                                <div class="row no-gutters blog-list">
                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="item7-card-img">
                                            <a href="{{route('blog_detail')}}"></a>
                                            <img src="{{asset('assets/frontend/images/products/j2.png')}}" alt="img" class="cover-image">
                                            <div class="item7-card-text">
                                                <span class="badge badge-info">Homes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-12 col-md-12">
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-1">
                                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-28-2019</a>
                                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-user text-muted me-2"></i>Nissy Sten</a>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>2 Comments</a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold mb-4">Home  For Sale</h4></a>
                                            <p class="">Ut enim ad minima veniam, quis nostrum exercitationem,Ut enim minima veniam, quis nostrum exercitationem
                                            </p>
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Read More<i class="fe fe-chevrons-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card overflow-hidden">
                                <div class="row no-gutters blog-list">
                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="item7-card-img">
                                            <a href="{{route('blog_detail')}}"></a>
                                            <img src="{{asset('assets/frontend/images/products/b2.png')}}" alt="img" class="cover-image">
                                            <div class="item7-card-text">
                                                <span class="badge badge-success">Luxury Homes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-12 col-md-12">
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-1">
                                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-19-2019</a>
                                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-user text-muted me-2"></i>Nissy Sten</a>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>8 Comments</a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold mb-4">Luxury Home  For Sale</h4></a>
                                            <p class="">Ut enim ad minima veniam, quis nostrum exercitationem,Ut enim minima veniam, quis nostrum exercitationem
                                            </p>
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Read More<i class="fe fe-chevrons-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card overflow-hidden">
                                <div class="row no-gutters blog-list">
                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="item7-card-img">
                                            <a href="{{route('blog_detail')}}"></a>
                                            <img src="{{asset('assets/frontend/images/products/h3.png')}}" alt="img" class="cover-image">
                                            <div class="item7-card-text">
                                                <span class="badge badge-info">2BHK Homes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-12 col-md-12">
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-1">
                                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-13-2019</a>
                                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-user text-muted me-2"></i>Nissy Sten</a>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>7 Comments</a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold mb-4">House For Sale</h4> </a>
                                            <p class="">Ut enim ad minima veniam, quis nostrum exercitationem,Ut enim minima veniam, quis nostrum exercitationem
                                            </p>
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Read More<i class="fe fe-chevrons-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card overflow-hidden">
                                <div class="row no-gutters blog-list">
                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="item7-card-img">
                                            <a href="{{route('blog_detail')}}"></a>
                                            <img src="{{asset('assets/frontend/images/products/v4.png')}}" alt="img" class="cover-image">
                                            <div class="item7-card-text">
                                                <span class="badge badge-success"> Homes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-12 col-md-12">
                                        <div class="card-body ">
                                            <div class="item7-card-desc d-flex mb-1">
                                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>Dec-10-2019</a>
                                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-user text-muted me-2"></i>Nissy Sten</a>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>1 Comments</a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold mb-4">Deluxe House For Rent</h4></a>
                                            <p class="">Ut enim ad minima veniam, quis nostrum exercitationem,Ut enim minima veniam, quis nostrum exercitationem
                                            </p>
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Read More<i class="fe fe-chevrons-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card overflow-hidden">
                                <div class="row no-gutters blog-list">
                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="item7-card-img">
                                            <a href="{{route('blog_detail')}}"></a>
                                            <img src="{{asset('assets/frontend/images/products/pe1.png')}}" alt="img" class="cover-image">
                                            <div class="item7-card-text">
                                                <span class="badge badge-info">2BHk Homes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-12 col-md-12">
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-1">
                                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-01-2019</a>
                                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-user text-muted me-2"></i>Nissy Sten</a>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>5 Comments</a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold mb-4">House For Rent</h4></a>
                                            <p class="">Ut enim ad minima veniam, quis nostrum exercitationem,Ut enim minima veniam, quis nostrum exercitationem
                                            </p>
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Read More<i class="fe fe-chevrons-right ms-1"></i></a>
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
                    <!--/Add lists-->
                </div>

                <!--Right Side Content-->
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
                <!--/Right Side Content-->
            </div>
        </div>
    </section>
    <!--All Listing-->

    <x-frontend.newsletter/>
@endsection
