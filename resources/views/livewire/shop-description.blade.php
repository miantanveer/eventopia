@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                         <!-- PAGE-HEADER -->
                         <div class="page-header">
                            <h1 class="page-title">Product Details</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">E-Commerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row row-sm">
                                            <div class="col-xl-5 col-lg-12 col-md-12">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="product-carousel">
                                                            <div id="Slider" class="carousel slide border" data-bs-ride="false">
                                                                <div class="carousel-inner">
                                                                    <div class="carousel-item active"><img src="{{asset('assets/images/pngs/13.png')}}" alt="img" class="img-fluid mx-auto d-block">
                                                                        <div class="text-center mt-5 mb-5 btn-list">
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item"> <img src="{{asset('assets/images/pngs/14.png')}}" alt="img" class="img-fluid mx-auto d-block">
                                                                        <div class="text-center mb-5 mt-5 btn-list">
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item"> <img src="{{asset('assets/images/pngs/12.png')}}" alt="img" class="img-fluid mx-auto d-block">
                                                                        <div class="text-center  mb-5 mt-5 btn-list">
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item"> <img src="{{asset('assets/images/pngs/11.png')}}" alt="img" class="img-fluid mx-auto d-block">
                                                                        <div class="text-center  mb-5 mt-5 btn-list">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix carousel-slider">
                                                            <div id="thumbcarousel" class="carousel slide" data-bs-interval="t">
                                                                <div class="carousel-inner">
                                                                    <ul class="carousel-item active">
                                                                        <li data-bs-target="#Slider" data-bs-slide-to="0" class="thumb active m-2"><img src="{{asset('assets/images/pngs/13.png')}}" alt="img"></li>
                                                                        <li data-bs-target="#Slider" data-bs-slide-to="1" class="thumb m-2"><img src="{{asset('assets/images/pngs/14.png')}}" alt="img"></li>
                                                                        <li data-bs-target="#Slider" data-bs-slide-to="2" class="thumb m-2"><img src="{{asset('assets/images/pngs/12.png')}}" alt="img"></li>
                                                                        <li data-bs-target="#Slider" data-bs-slide-to="3" class="thumb m-2"><img src="{{asset('assets/images/pngs/11.png')}}" alt="img"></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
                                                <div class="mt-2 mb-4">
                                                    <h3 class=" mb-3">Trending Half Hands Tshirt (Best Fabric Premium made T-shirt for Casual wear.)</h3>
                                                    <p class="text-muted float-start me-3">
                                                        <span class="fa fa-star text-warning"></span>
                                                        <span class="fa fa-star text-warning"></span>
                                                        <span class="fa fa-star text-warning"></span>
                                                        <span class="fa fa-star-half-o text-warning"></span>
                                                        <span class="fa fa-star-o text-warning"></span>
                                                    </p>
                                                    <p class="text-muted mb-4">( 40 Customers Reviews) </p>
                                                    <h4 class="mt-4"><b> Description</b></h4>
                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                                                        similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized .</p>
                                                    <h3 class="mb-4"><span class="me-2 fw-bold fs-25">$299 USD/</span><span><del class="fs-18 text-muted">$599</del></span></h3>
                                                    <div class=" mt-4 mb-5"><span class="fw-bold me-2">Offer :</span><span class="fw-bold text-primary">15% Cashback </span>by using icici bank credit card.<small class="text-muted">Terms and Conditions Applies!</small></div>
                                                    <div class=" mt-4 mb-5"><span class="fw-bold me-2">Availability :</span><span class="fw-bold text-success">In-stock</span></div>
                                                    <div class="colors d-flex me-3 mt-4 mb-5">
                                                        <span class="mt-2 fw-bold">Colors:</span>
                                                        <div class="row gutters-xs ms-4">
                                                            <div class="col-3">
                                                                <label class="colorinput">
                                                                <input name="color" type="radio" value="azure" class="colorinput-input" checked="">
                                                                <span class="colorinput-color bg-danger rounded-10"></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-3">
                                                                <label class="colorinput">
                                                                <input name="color" type="radio" value="indigo" class="colorinput-input">
                                                                <span class="colorinput-color bg-dark rounded-10"></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-3">
                                                                <label class="colorinput">
                                                                <input name="color" type="radio" value="purple" class="colorinput-input">
                                                                <span class="colorinput-color bg-info rounded-10"></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-3">
                                                                <label class="colorinput">
                                                                <input name="color" type="radio" value="pink" class="colorinput-input">
                                                                <span class="colorinput-color bg-success rounded-10"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row row-sm">
                                                        <div class="col">
                                                            <div class="mb-2 me-2 sizes">
                                                                <span class="fw-bold me-4">Quantity:</span>
                                                                <div class="input-group input-indec input-indec1 w-30 w-sm-50 mt-3">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="minus btn btn-white btn-number btn-icon br-7 " >
                                                                            <i class="fa fa-minus text-muted"></i>
                                                                        </button>
                                                                    </span>
                                                                    <input type="text" name="quantity" class="form-control text-center qty" value="1">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="quantity-right-plus btn btn-white btn-number btn-icon br-7 add">
                                                                            <i class="fa fa-plus text-muted"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="btn-list mt-4">
                                                        <a href="{{url('cart')}}" class="btn ripple btn-primary me-2"><i class="fe fe-shopping-cart"> </i> Add to cart</a>
                                                        <a href="{{url('checkout')}}" class="btn ripple btn-secondary"><i class="fe fe-credit-card"> </i> Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="card productdesc">
                                    <div class="card-body">
                                        <div class="panel panel-primary">
                                            <div class=" tab-menu-heading">
                                                <div class="tabs-menu1">
                                                    <!-- Tabs -->
                                                    <ul class="nav panel-tabs">
                                                        <li><a href="#tab5" class="active" data-bs-toggle="tab">Specifications</a></li>
                                                        <li><a href="#tab6" data-bs-toggle="tab">Dimensions</a></li>
                                                        <li><a href="#tab7" data-bs-toggle="tab">Features</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="panel-body tabs-menu-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab5">
                                                        <h4 class="mb-5 mt-3 fw-bold">Description :</h4>
                                                        <p class="mb-3 fs-15">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                                                            similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                                        <p class="mb-3 fs-15">odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.
                                                        </p>
                                                        <h4 class="mb-5 mt-3 fw-bold">Specifications :</h4>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <td class="fw-bold">Package Dimensions</td>
                                                                    <td> 33 x 22 x 3 cm; 450 Grams</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-bold">Manufacturer</td>
                                                                    <td>Chokka Production</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-bold">Item part number </td>
                                                                    <td>BNVRDMRHENFULL-Z14</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-bold">Best Sellers Rank</td>
                                                                    <td> #141 in Clothing & Accessories (See Top 100 in Clothing & Accessories)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-bold">Customer Reviews</td>
                                                                    <td>
                                                                        <p class="text-muted float-start me-3">
                                                                            <span class="fa fa-star text-warning"></span>
                                                                            <span class="fa fa-star text-warning"></span>
                                                                            <span class="fa fa-star text-warning"></span>
                                                                            <span class="fa fa-star-half-o text-warning"></span>
                                                                            <span class="fa fa-star-o text-warning"></span>
                                                                            <span class="text-success fw-semibold">(2,076 ratings)</span>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane pt-5" id="tab6">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <td class="fw-bold">Width</td>
                                                                    <td> 6.1 inch</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-bold">Height</td>
                                                                    <td>24 inch</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-bold">Depth</td>
                                                                    <td>6.1 inch</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-bold">Other Dimensions</td>
                                                                    <td>15.5*15.5*24CM</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab7">
                                                        <ul class="p-5">
                                                            <li><i class="fa fa-check me-3 text-success mb-5"></i>Asthetic Product - more lively movies and music</li>
                                                            <li><i class="fa fa-check me-3 text-success mb-5"></i>Long lasting 7,040 mAH battery with fast adaptive charging</li>
                                                            <li><i class="fa fa-check me-3 text-success mb-5"></i>8 MP Primary Camera, 5 MP Front Facing Camera</li>
                                                            <li><i class="fa fa-check me-3 text-success mb-5"></i>Seamless apps and gaming experience with Qualcomm Snapdragon 662 processor (4X2.0 GHz+4X1.8 GHz)</li>
                                                            <li><i class="fa fa-check me-3 text-success mb-5"></i>1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories</li>
                                                            <li><i class="fa fa-check me-3 text-success"></i>Customer care :1234 567 678</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Customer Services</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="customer-services mb-2">
                                                    <div class="icon-content">
                                                        <span><i class="bi bi-truck"></i></span>
                                                        <h4>Delivery Info</h4>
                                                    </div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="customer-services mb-2">
                                                    <div class="icon-content">
                                                        <span><i class="bi bi-arrow-repeat"></i></span>
                                                        <h4>30 days returns</h4>
                                                    </div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="customer-services">
                                                    <div class="icon-content">
                                                        <span><i class="bi bi-credit-card-2-front"></i></span>
                                                        <h4>15 years Warranty</h4>
                                                    </div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Reviews</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="media mb-5">
                                            <div class="me-3">
                                                <a href="javascript:void(0)"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/5.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-0">Gavin Murray</h5>
                                                <div class="text-warning mb-0">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p class="font-13 text-muted">Good Looking.........</p>
                                                <a class="like" href="javascript:;">
                                                    <span class="badge btn-danger-light rounded-pill py-2 px-3">
                                                            <i class="fe fe-heart me-1"></i>56</span>
                                                </a>
                                                <span class="reply" id="6">
                                                        <a href="javascript:;"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="media mb-5">
                                            <div class=" me-3">
                                                <a href="javascript:void(0)"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/15.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-0">Paul Smith</h5>
                                                <div class="text-warning mb-0">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p class="font-13 text-muted">Very nice ! On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the </p>
                                                <a class="like" href="javascript:;">
                                                    <span class="badge btn-danger-light rounded-pill py-2 px-3">
                                                            <i class="fe fe-heart me-1"></i>56</span>
                                                </a>
                                                <span class="reply" id="6">
                                                        <a href="javascript:;"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="media mb-0">
                                            <div class=" me-3">
                                                <a href="javascript:void(0)"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/5.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-0">Mozelle Belt</h5>
                                                <div class="text-warning mb-0">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Add Review</div>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal  m-t-20" action="{{url('index')}}">
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" required="" placeholder="Username*">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="email" required="" placeholder="Email*">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <textarea class="form-control" rows="5">Your Review*</textarea>
                                                </div>
                                            </div>
                                            <div class="">
                                                <a href="javascript:void(0)" class="btn btn-primary btn-rounded  waves-effect waves-light">Submit</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <h3 class="p-3 mb-5">Related Products</h3>
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="product-grid6">
                                        <div class="product-image6 p-5">
                                            <ul class="icons">
                                                <li>
                                                    <a href="{{url('shop-description')}}" class="bg-primary text-white border-primary border"> <i class="fe fe-eye ">  </i> </a>
                                                </li>
                                                <li><a href="{{url('add-product')}}" class="bg-success text-white border-success border"><i  class="fe fe-edit"></i></a></li>
                                                <li><a href="javascript:void(0)" class="bg-danger text-white border-danger border"><i class="fe fe-x"></i></a></li>
                                            </ul>
                                            <a href="{{url('shop-description')}}" class="bg-light">
                                                <img class="img-fluid br-7 w-100" src="{{asset('assets/images/pngs/4.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="product-content text-center">
                                                <h1 class="title fw-bold fs-20"><a href="{{url('shop-description')}}">Flower Pot for Home Decor</a></h1>
                                                <div class="mb-2 text-warning">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </div>
                                                <div class="price">$16,599<span class="ms-4">$18,299</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <a href="{{url('cart')}}"><button type="button" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Add to cart</button></a>
                                            <a href="{{url('wishlist')}}"><button type="button" class="btn btn-outline-primary mb-1"><i class="fe fe-heart me-2"></i>Add to wishlist</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="product-grid6">
                                        <div class="product-image6 p-5">
                                            <ul class="icons">
                                                <li>
                                                    <a href="{{url('shop-description')}}" class="bg-primary text-white border-primary border"> <i class="fe fe-eye ">  </i> </a>
                                                </li>
                                                <li><a href="{{url('add-product')}}" class="bg-success text-white border-success border"><i  class="fe fe-edit"></i></a></li>
                                                <li><a href="javascript:void(0)" class="bg-danger text-white border-danger border"><i class="fe fe-x"></i></a></li>
                                            </ul>
                                            <a href="{{url('shop-description')}}" class="bg-light">
                                                <img class="img-fluid br-7 w-100" src="{{asset('assets/images/pngs/6.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="product-content text-center">
                                                <h1 class="title fw-bold fs-20"><a href="{{url('shop-description')}}">Black Digital Camera</a></h1>
                                                <div class="mb-2 text-warning">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </div>
                                                <div class="price">$16,599<span class="ms-4">$56,599</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <a href="{{url('cart')}}"><button type="button" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Add to cart</button></a>
                                            <a href="{{url('wishlist')}}"><button type="button" class="btn btn-outline-primary mb-1"><i class="fe fe-heart me-2"></i>Add to wishlist</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="product-grid6">
                                        <div class="product-image6 p-5">
                                            <ul class="icons">
                                                <li>
                                                    <a href="{{url('shop-description')}}" class="bg-primary text-white border-primary border"> <i class="fe fe-eye ">  </i> </a>
                                                </li>
                                                <li><a href="{{url('add-product')}}" class="bg-success text-white border-success border"><i  class="fe fe-edit"></i></a></li>
                                                <li><a href="javascript:void(0)" class="bg-danger text-white border-danger border"><i class="fe fe-x"></i></a></li>
                                            </ul>
                                            <a href="{{url('shop-description')}}" class="bg-light">
                                                <img class="img-fluid br-7 w-100" src="{{asset('assets/images/pngs/9.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="product-content text-center">
                                                <h1 class="title fw-bold fs-20"><a href="{{url('shop-description')}}">Candy Pure Rose Water</a></h1>
                                                <div class="mb-2 text-warning">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </div>
                                                <div class="price">$16,599<span class="ms-4">$25,599</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <a href="{{url('cart')}}"><button type="button" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Add to cart</button></a>
                                            <a href="{{url('wishlist')}}"><button type="button" class="btn btn-outline-primary mb-1"><i class="fe fe-heart me-2"></i>Add to wishlist</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="product-grid6">
                                        <div class="product-image6 p-5">
                                            <ul class="icons">
                                                <li>
                                                    <a href="{{url('shop-description')}}" class="bg-primary text-white border-primary border"> <i class="fe fe-eye ">  </i> </a>
                                                </li>
                                                <li><a href="{{url('add-product')}}" class="bg-success text-white border-success border"><i  class="fe fe-edit"></i></a></li>
                                                <li><a href="javascript:void(0)" class="bg-danger text-white border-danger border"><i class="fe fe-x"></i></a></li>
                                            </ul>
                                            <a href="{{url('shop-description')}}" class="bg-light">
                                                <img class="img-fluid br-7 w-100" src="{{asset('assets/images/pngs/10.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="product-content text-center">
                                                <h1 class="title fw-bold fs-20"><a href="{{url('shop-description')}}">White Tshirt for Men</a></h1>
                                                <div class="mb-2 text-warning">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </div>
                                                <div class="price">$16,599<span class="ms-4">$18,399</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <a href="{{url('cart')}}"><button type="button" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Add to cart</button></a>
                                            <a href="{{url('wishlist')}}"><button type="button" class="btn btn-outline-primary mb-1"><i class="fe fe-heart me-2"></i>Add to wishlist</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

        @endsection

    @section('scripts')

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2.js')}}"></script>

    @endsection
