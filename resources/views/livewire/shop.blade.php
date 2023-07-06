@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Shop</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">E-Commerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row row-cards">
                            <div class="col-xl-3 col-lg-4">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Categories</div>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item border-0 p-0"> <a href="javascript:void(0)"><i class="fe fe-chevron-right"></i> Mens </a><span class="product-label">22</span> </li>
                                                    <li class="list-group-item border-0 p-0"> <a href="javascript:void(0)"><i class="fe fe-chevron-right"></i> Womens </a><span class="product-label">15</span> </li>
                                                    <li class="list-group-item border-0 p-0"> <a href="javascript:void(0)"><i class="fe fe-chevron-right"></i> Kids </a><span class="product-label">10</span> </li>
                                                    <li class="list-group-item border-0 p-0"> <a href="javascript:void(0)"><i class="fe fe-chevron-right"></i> Others </a><span class="product-label">88</span> </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Price Range</div>
                                            </div>
                                            <div class="card-body">
                                                <label class="custom-control custom-radio mb-0 mt-1">
                                                    <input type="radio" class="custom-control-input" name="example-radios"
                                                        value="option1" checked>
                                                    <span class="custom-control-label">Upto $500</span>
                                                </label>
                                                <label class="custom-control custom-radio mb-0 mt-1">
                                                    <input type="radio" class="custom-control-input" name="example-radios"
                                                        value="option1">
                                                    <span class="custom-control-label">$500 - $1000</span>
                                                </label>
                                                <label class="custom-control custom-radio mb-0 mt-1">
                                                    <input type="radio" class="custom-control-input" name="example-radios"
                                                        value="option1">
                                                    <span class="custom-control-label">$1000 - $1500</span>
                                                </label>
                                                <label class="custom-control custom-radio mb-0 mt-1">
                                                    <input type="radio" class="custom-control-input" name="example-radios"
                                                        value="option1">
                                                    <span class="custom-control-label">Over $2000</span>
                                                </label>
                                                <div class="d-flex">
                                                    <div class="card-body px-0">
                                                        <div id="mySlider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    Colors
                                                </h3>
                                            </div>
                                            <div class="card-body">
                                                <form class="shop__filter">
                                                    <div class="row gutters-xs">
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="azure"
                                                                    class="colorinput-input" checked="">
                                                                <span class="colorinput-color bg-azure"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="indigo"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-indigo"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="purple"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-purple"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="pink"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-pink"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="red"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-red"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="orange"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-orange"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="yellow"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-yellow"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="lime"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-lime"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="color" type="radio" value="green"
                                                                    class="colorinput-input">
                                                                <span class="colorinput-color bg-green"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="form-label">Category</label>
                                                    <select name="beast" id="select-beast" class="form-control form-select select2">
                                                        <option value="0">--Select--</option>
                                                        <option value="1">Dress</option>
                                                        <option value="2">Bags &amp; Purses</option>
                                                        <option value="3">Coat &amp; Jacket</option>
                                                        <option value="4">Beauty</option>
                                                        <option value="5">Jeans</option>
                                                        <option value="5">Jewellery</option>
                                                        <option value="5">Electronics</option>
                                                        <option value="5">Sports</option>
                                                        <option value="5">Technology</option>
                                                        <option value="5">Watches</option>
                                                        <option value="5">Accessories</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Brand</label>
                                                    <select name="beast" id="select-beast1" class="form-control form-select select2">
                                                        <option value="0">--Select--</option>
                                                        <option value="1">White</option>
                                                        <option value="2">Black</option>
                                                        <option value="3">Red</option>
                                                        <option value="4">Green</option>
                                                        <option value="5">Blue</option>
                                                        <option value="6">Yellow</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Type</label>
                                                    <select name="beast" id="select-beast2" class="form-control form-select select2">
                                                        <option value="0">--Select--</option>
                                                        <option value="1">Extra Small</option>
                                                        <option value="2">Small</option>
                                                        <option value="3">Medium</option>
                                                        <option value="4">Large</option>
                                                        <option value="5">Extra Large</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Color</label>
                                                    <select name="beast" id="select-beast3" class="form-control form-select select2">
                                                        <option value="0">--Select--</option>
                                                        <option value="1">White</option>
                                                        <option value="2">Black</option>
                                                        <option value="3">Red</option>
                                                        <option value="4">Green</option>
                                                        <option value="5">Blue</option>
                                                        <option value="6">Yellow</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Top Products</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="">
                                                    <div class="d-flex overflow-visible">
                                                        <img class="avatar bradius avatar-xl me-4 p-2 bg-white border" src="{{asset('assets/images/pngs/8.png')}}" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="" class="fw-semibold text-dark">Hand Bag</a>
                                                            <div class="mb-1 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <h5 class="fw-bold">$345</h5>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex overflow-visible mt-5">
                                                        <img class="avatar bradius avatar-xl me-4 p-2 bg-white border" src="{{asset('assets/images/pngs/5.png')}}" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="" class="fw-semibold text-dark">Chair</a>
                                                            <div class="mb-1 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <h5 class="fw-bold">$345</h5>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex overflow-visible mt-5">
                                                        <img class="avatar bradius avatar-xl me-4 p-2 bg-white border" src="{{asset('assets/images/pngs/1.png')}}" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="" class="fw-semibold text-dark">Laptop Bag</a>
                                                            <div class="mb-1 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <h5 class="fw-bold">$345</h5>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex overflow-visible mt-5">
                                                        <img class="avatar bradius avatar-xl me-4 p-2 bg-white border" src="{{asset('assets/images/pngs/6.png')}}" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="" class="fw-semibold text-dark">Watch</a>
                                                            <div class="mb-1 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <h5 class="fw-bold">$345</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-9 col-lg-8">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card p-0">
                                            <div class="card-body p-4">
                                                <div class="row">
                                                    <div class="col-xl-5 col-lg-8 col-md-8 col-sm-8">
                                                        <div class="input-group d-flex w-100 float-start">
                                                            <input type="text" class="form-control border-end-0 my-2" placeholder="Search ...">
                                                            <button class="btn input-group-text bg-transparent border-start-0 text-muted my-2">
                                                                <i class="fe fe-search text-muted" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                                        <ul class="nav item2-gl-menu float-end my-2">
                                                            <li class="border-end"><a href="#tab-11" class="show active" data-bs-toggle="tab" title="List style"><i class="fa fa-th"></i></a></li>
                                                            <li><a href="#tab-12" data-bs-toggle="tab" class="" title="Grid"><i class="fa fa-list"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-12">
                                                        <a href="{{url('add-product')}}" class="btn btn-primary btn-block float-end my-2"><i class="fa fa-plus-square me-2"></i>New Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-11">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card">
                                                    <div class="product-grid6">
                                                        <div class="product-image6 p-5">
                                                            <ul class="icons">
                                                                <li>
                                                                    <a href="{{url('shop-description')}}" class="bg-primary text-white border-primary border"> <i class="fe fe-eye">  </i> </a>
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
                                                                <div class="price">$599<span class="ms-4">$799</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <a href="{{url('cart')}}" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Add to cart</a>
                                                            <a href="{{url('wishlist')}}" class="btn btn-outline-primary mb-1"><i class="fe fe-heart me-2 wishlist-icon"></i>Add to wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
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
                                                                <div class="price">$1,399<span class="ms-4">$1,599</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <a href="{{url('cart')}}" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Add to cart</a>
                                                            <a href="{{url('wishlist')}}" class="btn btn-outline-primary mb-1"><i class="fe fe-heart me-2 wishlist-icon"></i>Add to wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
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
                                                                <div class="price">$1,299<span class="ms-4">$1,899</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <a href="{{url('cart')}}" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Add to cart</a>
                                                            <a href="{{url('wishlist')}}" class="btn btn-outline-primary mb-1"><i class="fe fe-heart me-2 wishlist-icon"></i>Add to wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card">
                                                    <div class="product-grid6">
                                                        <div class="product-image6 p-5">
                                                            <ul class="icons">
                                                                <li>
                                                                    <a href="{{url('shop-description')}}" class="bg-primary text-white border-primary border"> <i class="fe fe-eye"></i> </a>
                                                                </li>
                                                                <li><a href="{{url('add-product')}}" class="bg-success text-white border-success border"><i  class="fe fe-edit"></i></a></li>
                                                                <li><a href="javascript:void(0)" class="bg-danger text-white border-danger border"><i class="fe fe-x"></i></a></li>
                                                            </ul>
                                                            <a href="{{url('shop-description')}}" class="bg-light">
                                                                <img class="img-fluid br-7 w-100" src="{{asset('assets/images/pngs/8.jpg')}}" alt="img">
                                                            </a>
                                                        </div>
                                                        <div class="card-body pt-0">
                                                            <div class="product-content text-center">
                                                                <h1 class="title fw-bold fs-20"><a href="{{url('shop-description')}}">Stylish Rockerz 255 Ear Pods</a></h1>
                                                                <div class="mb-2 text-warning">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                                    <i class="fa fa-star-o text-warning"></i>
                                                                </div>
                                                                <div class="price">$16,599<span class="ms-4">$19,799</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <a href="{{url('cart')}}" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Add to cart</a>
                                                            <a href="{{url('wishlist')}}" class="btn btn-outline-primary mb-1"><i class="fe fe-heart me-2 wishlist-icon"></i>Add to wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
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
                                                                <img class="img-fluid br-7 w-100" src="{{asset('assets/images/pngs/1.jpg')}}" alt="img">
                                                            </a>
                                                        </div>
                                                        <div class="card-body pt-0">
                                                            <div class="product-content text-center">
                                                                <h1 class="title fw-bold fs-20"><a href="{{url('shop-description')}}">Women Party Wear Dress</a></h1>
                                                                <div class="mb-2 text-warning">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                                    <i class="fa fa-star-o text-warning"></i>
                                                                </div>
                                                                <div class="price">$2,299<span class="ms-4">$1,599</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <a href="{{url('cart')}}" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Add to cart</a>
                                                            <a href="{{url('wishlist')}}" class="btn btn-outline-primary mb-1"><i class="fe fe-heart me-2 wishlist-icon"></i>Add to wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
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
                                                                <div class="price">$56,599<span class="ms-4">$59,799</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <a href="{{url('cart')}}" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Add to cart</a>
                                                            <a href="{{url('wishlist')}}" class="btn btn-outline-primary mb-1"><i class="fe fe-heart me-2 wishlist-icon"></i>Add to wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
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
                                                                <img class="img-fluid br-7 w-100" src="{{asset('assets/images/pngs/5.jpg')}}" alt="img">
                                                            </a>
                                                        </div>
                                                        <div class="card-body pt-0">
                                                            <div class="product-content text-center">
                                                                <h1 class="title fw-bold fs-20"><a href="{{url('shop-description')}}">Men shirt for party wear</a></h1>
                                                                <div class="mb-2 text-warning">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                                    <i class="fa fa-star-o text-warning"></i>
                                                                </div>
                                                                <div class="price">$3,599<span class="ms-4">$3,799</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <a href="{{url('cart')}}" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Add to cart</a>
                                                            <a href="{{url('wishlist')}}" class="btn btn-outline-primary mb-1"><i class="fe fe-heart me-2 wishlist-icon"></i>Add to wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
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
                                                                <img class="img-fluid br-7 w-100" src="{{asset('assets/images/pngs/7.jpg')}}" alt="img">
                                                            </a>
                                                        </div>
                                                        <div class="card-body pt-0">
                                                            <div class="product-content text-center">
                                                                <h1 class="title fw-bold fs-20"><a href="{{url('shop-description')}}">Light pink nail polish</a></h1>
                                                                <div class="mb-2 text-warning">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                                    <i class="fa fa-star-o text-warning"></i>
                                                                </div>
                                                                <div class="price">$399<span class="ms-4">499</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <a href="{{url('cart')}}" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Add to cart</a>
                                                            <a href="{{url('wishlist')}}" class="btn btn-outline-primary mb-1"><i class="fe fe-heart me-2 wishlist-icon"></i>Add to wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
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
                                                                <img class="img-fluid br-7 w-100" src="{{asset('assets/images/pngs/3.jpg')}}" alt="img">
                                                            </a>
                                                        </div>
                                                        <div class="card-body pt-0">
                                                            <div class="product-content text-center">
                                                                <h1 class="title fw-bold fs-20"><a href="{{url('shop-description')}}">Running Shoes for men</a></h1>
                                                                <div class="mb-2 text-warning">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <i class="fa fa-star text-warning"></i>
                                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                                    <i class="fa fa-star-o text-warning"></i>
                                                                </div>
                                                                <div class="price">$6,599<span class="ms-4">$9,799</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <a href="{{url('cart')}}" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Add to cart</a>
                                                            <a href="{{url('wishlist')}}" class="btn btn-outline-primary mb-1"><i class="fe fe-heart me-2 wishlist-icon"></i>Add to wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <div class="float-end">
                                                <ul class="pagination ">
                                                    <li class="page-item page-prev disabled">
                                                        <a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                                    <li class="page-item page-next">
                                                        <a class="page-link" href="javascript:void(0)">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="card overflow-hidden">
                                                    <div class="card-body">
                                                        <div class="row g-0">
                                                            <div class="col-xl-3 col-lg-12 col-md-12">
                                                                <div class="product-list">
                                                                    <div class="product-image">
                                                                        <ul class="icons">
                                                                            <li><a href="{{url('shop-description')}}" class="bg-primary border-primary border"><i class="fe fe-eye text-white "></i></a></li>
                                                                            <li><a href="{{url('add-product')}}" class="bg-success border-success border"><i class="fe fe-edit text-white "></i></a></li>
                                                                            <li><a href="{{url('wishlist')}}" class="bg-danger border-danger border"><i class="fe fe-x text-white"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="br-be-0 br-te-0">
                                                                        <a href="{{url('shop-description')}}" class=""> </a>
                                                                        <img src="{{asset('assets/images/pngs/9.jpg')}}" alt="img" class="cover-image br-7 w-100">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-12 border-end my-auto">
                                                                <div class="card-body">
                                                                    <div class="mb-3">
                                                                        <a href="{{url('shop-description')}}" class="">
                                                                            <h3 class="fw-bold fs-30 mb-3">Candy Pure Rose Water</h3>
                                                                            <div class="mb-2 text-warning">
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-half-o fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-o fs-18 text-warning"></i>
                                                                            </div>
                                                                        </a>
                                                                        <p class="fs-16">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat,quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                                                                        <form class="shop__filter">
                                                                            <div class="row gutters-xs">
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="azure" class="colorinput-input" checked>
                                                                                        <span class="colorinput-color bg-azure"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="indigo" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-indigo"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="purple" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-purple"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-12 col-md-12 my-auto">
                                                                <div class="card-body p-0">
                                                                    <div class="price h3 text-center mb-5 fw-bold">$599</div>
                                                                    <a href="{{url('cart')}}" class="btn btn-primary btn-block"><i class="fe fe-shopping-cart me-2"></i>Add to cart</a>
                                                                    <a href="{{url('wishlist')}}" class="btn btn-outline-primary btn-block mt-2"><i class="fe fe-heart me-2 wishlist-icon"></i>Add to wishlist</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="card overflow-hidden">
                                                    <div class="card-body">
                                                        <div class="row g-0">
                                                            <div class="col-xl-3 col-lg-12 col-md-12">
                                                                <div class="product-list">
                                                                    <div class="product-image">
                                                                        <ul class="icons">
                                                                            <li><a href="{{url('shop-description')}}" class="bg-primary border-primary border"><i class="fe fe-eye text-white "></i></a></li>
                                                                            <li><a href="{{url('add-product')}}" class="bg-success border-success border"><i class="fe fe-edit text-white "></i></a></li>
                                                                            <li><a href="{{url('wishlist')}}" class="bg-danger border-danger border"><i class="fe fe-x text-white"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="br-be-0 br-te-0">
                                                                        <a href="{{url('shop-description')}}" class=""> </a>
                                                                        <img src="{{asset('assets/images/pngs/10.jpg')}}" alt="img" class="cover-image br-7 w-100">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-12 border-end my-auto">
                                                                <div class="card-body">
                                                                    <div class="mb-3">
                                                                        <a href="{{url('shop-description')}}" class="">
                                                                            <h3 class="fw-bold fs-30 mb-3">White Tshirt for Men</h3>
                                                                            <div class="mb-2 text-warning">
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-half-o fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-o fs-18 text-warning"></i>
                                                                            </div>
                                                                        </a>
                                                                        <p class="fs-16">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat,quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                                                                        <form class="shop__filter">
                                                                            <div class="row gutters-xs">
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="azure" class="colorinput-input" checked="">
                                                                                        <span class="colorinput-color bg-azure"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="indigo" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-indigo"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="purple" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-purple"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-12 col-md-12 my-auto">
                                                                <div class="card-body p-0">
                                                                    <div class="price h3 text-center mb-5 fw-bold">$1,399</div>
                                                                    <a href="{{url('cart')}}" class="btn btn-primary btn-block"><i class="fe fe-shopping-cart me-2"></i>Add to cart</a>
                                                                    <a href="{{url('wishlist')}}" class="btn btn-outline-primary btn-block mt-2"><i class="fe fe-heart me-2 wishlist-icon"></i>Add to wishlist</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="card overflow-hidden">
                                                    <div class="card-body">
                                                        <div class="row g-0">
                                                            <div class="col-xl-3 col-lg-12 col-md-12">
                                                                <div class="product-list">
                                                                    <div class="product-image">
                                                                        <ul class="icons">
                                                                            <li><a href="{{url('shop-description')}}" class="bg-primary border-primary border"><i class="fe fe-eye text-white "></i></a></li>
                                                                            <li><a href="{{url('add-product')}}" class="bg-success border-success border"><i class="fe fe-edit text-white "></i></a></li>
                                                                            <li><a href="{{url('wishlist')}}" class="bg-danger border-danger border"><i class="fe fe-x text-white"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="br-be-0 br-te-0">
                                                                        <a href="{{url('shop-description')}}" class=""> </a>
                                                                        <img src="{{asset('assets/images/pngs/8.jpg')}}" alt="img" class="cover-image br-7 w-100">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-12 border-end my-auto">
                                                                <div class="card-body">
                                                                    <div class="mb-3">
                                                                        <a href="{{url('shop-description')}}" class="">
                                                                            <h3 class="fw-bold fs-30 mb-3">Stylish Rockerz 255 Ear Pods</h3>
                                                                            <div class="mb-2 text-warning">
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-half-o fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-o fs-18 text-warning"></i>
                                                                            </div>
                                                                        </a>
                                                                        <p class="fs-16">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat,quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                                                                        <form class="shop__filter">
                                                                            <div class="row gutters-xs">
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="azure" class="colorinput-input" checked="">
                                                                                        <span class="colorinput-color bg-azure"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="indigo" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-indigo"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="purple" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-purple"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-12 col-md-12 my-auto">
                                                                <div class="card-body p-0">
                                                                    <div class="price h3 text-center mb-5 fw-bold">$16,599</div>
                                                                    <a href="{{url('cart')}}"><span  class="btn btn-primary btn-block"><i class="fe fe-shopping-cart me-2"></i>Add to cart</span></a>
                                                                    <a href="{{url('wishlist')}}"><span  class="btn btn-outline-primary btn-block mt-2"><i class="fe fe-heart me-2 wishlist-icon"></i>Add to wishlist</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="card overflow-hidden">
                                                    <div class="card-body">
                                                        <div class="row g-0">
                                                            <div class="col-xl-3 col-lg-12 col-md-12">
                                                                <div class="product-list">
                                                                    <div class="product-image">
                                                                        <ul class="icons">
                                                                            <li><a href="{{url('shop-description')}}" class="bg-primary border-primary border"><i class="fe fe-eye text-white "></i></a></li>
                                                                             <li><a href="{{url('add-product')}}" class="bg-success border-success border"><i class="fe fe-edit text-white "></i></a></li>
                                                                            <li><a href="{{url('wishlist')}}" class="bg-danger border-danger border"><i class="fe fe-x text-white"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="br-be-0 br-te-0">
                                                                        <a href="{{url('shop-description')}}" class=""> </a>
                                                                        <img src="{{asset('assets/images/pngs/4.jpg')}}" alt="img" class="cover-image br-7 w-100">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-12 border-end my-auto">
                                                                <div class="card-body">
                                                                    <div class="mb-3">
                                                                        <a href="{{url('shop-description')}}" class="">
                                                                            <h3 class="fw-bold fs-30 mb-3">Flower Pot for Home Decor</h3>
                                                                            <div class="mb-2 text-warning">
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-half-o fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-o fs-18 text-warning"></i>
                                                                            </div>
                                                                        </a>
                                                                        <p class="fs-16">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat,quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                                                                        <form class="shop__filter">
                                                                            <div class="row gutters-xs">
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="azure" class="colorinput-input" checked="">
                                                                                        <span class="colorinput-color bg-azure"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="indigo" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-indigo"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="purple" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-purple"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-12 col-md-12 my-auto">
                                                                <div class="card-body p-0">
                                                                    <div class="price h3 text-center mb-5 fw-bold">$1,299</div>
                                                                    <a href="{{url('cart')}}"><span class="btn btn-primary btn-block"><i class="fe fe-shopping-cart me-2"></i>Add to cart</span></a>
                                                                    <a href="{{url('wishlist')}}"><span class="btn btn-outline-primary btn-block mt-2"><i class="fe fe-heart me-2 wishlist-icon"></i>Add to wishlist</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="card overflow-hidden">
                                                    <div class="card-body">
                                                        <div class="row g-0">
                                                            <div class="col-xl-3 col-lg-12 col-md-12">
                                                                <div class="product-list">
                                                                    <div class="product-image">
                                                                        <ul class="icons">
                                                                            <li><a href="{{url('shop-description')}}" class="bg-primary border-primary border"><i class="fe fe-eye text-white "></i></a></li>
                                                                            <li><a href="{{url('add-product')}}" class="bg-success border-success border"><i class="fe fe-edit text-white "></i></a></li>
                                                                            <li><a href="{{url('wishlist')}}" class="bg-danger border-danger border"><i class="fe fe-x text-white"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="br-be-0 br-te-0">
                                                                        <a href="{{url('shop-description')}}" class=""> </a>
                                                                        <img src="{{asset('assets/images/pngs/3.jpg')}}" alt="img" class="cover-image br-7 w-100">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-12 border-end my-auto">
                                                                <div class="card-body">
                                                                    <div class="mb-3">
                                                                        <a href="{{url('shop-description')}}" class="">
                                                                            <h3 class="fw-bold fs-30 mb-3">Running Shoes for men</h3>
                                                                            <div class="mb-2 text-warning">
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-half-o fs-18 text-warning"></i>
                                                                                <i class="fa fa-star-o fs-18 text-warning"></i>
                                                                            </div>
                                                                        </a>
                                                                        <p class="fs-16">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat,quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                                                                        <form class="shop__filter">
                                                                            <div class="row gutters-xs">
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="azure" class="colorinput-input" checked="">
                                                                                        <span class="colorinput-color bg-azure"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="indigo" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-indigo"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <label class="colorinput">
                                                                                        <input type="checkbox" name="color" value="purple" class="colorinput-input">
                                                                                        <span class="colorinput-color bg-purple"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-12 col-md-12 my-auto">
                                                                <div class="card-body p-0">
                                                                    <div class="price h3 text-center mb-5 fw-bold">$6,599</div>
                                                                    <a href="{{url('cart')}}"><span class="btn btn-primary btn-block"><i class="fe fe-shopping-cart me-2"></i>Add to cart</span></a>
                                                                    <a href="{{url('wishlist')}}"><span class="btn btn-outline-primary btn-block mt-2"><i class="fe fe-heart me-2 wishlist-icon"></i>Add to wishlist</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <div class="float-end">
                                                    <ul class="pagination ">
                                                        <li class="page-item page-prev disabled">
                                                            <a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
                                                        </li>
                                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                                        <li class="page-item page-next">
                                                            <a class="page-link" href="javascript:void(0)">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                            </div>
                            <!-- ROW-1 CLOSED -->
                        </div>
                        <!-- ROW-1 END -->

        @endsection

    @section('scripts')

    <!-- Ion.RangeSlider js-->
    <script src="{{asset('assets/plugins/jquery-uislider/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/js/slider.js')}}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2.js')}}"></script>

    @endsection
