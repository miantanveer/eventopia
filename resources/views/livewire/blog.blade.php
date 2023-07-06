@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                           <!-- PAGE-HEADER -->
                           <div class="page-header">
                            <h1 class="page-title">Blog</h1>
                            <div>
                                <div class="breadcrumb">
                                    <a href="{{url('blog-post')}}" class="btn btn-primary"><i class="fa fa-plus-square me-2"></i>Add Post</a>
                                </div>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6 col-xl-4">
                                <div class="card">
                                    <a href="{{url('blog-details')}}"><img class="card-img-top br-tr-7 br-tl-7" src="{{asset('assets/images/media/13.jpg')}}" alt="And this isn&#39;t my nose. This is a false one."></a>
                                    <div class="card-body d-flex flex-column">
                                        <h3><a href="{{url('blog-details')}}">Voluptatem quia voluptas.</a></h3>
                                        <div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
                                        <div class="d-flex align-items-center pt-5 mt-auto">
                                            <div class="avatar brround avatar-md me-3 cover-image" data-bs-image-src="{{asset('assets/images/users/18.jpg')}}"></div>
                                            <div>
                                                <a href="{{url('profile')}}" class="text-default">Megan Peters</a>
                                                <small class="d-block text-muted">1 days ago</small>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block text-muted"><i class="fe fe-heart me-1 border brround"></i></a>
                                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block text-muted"><i class="fa fa-thumbs-o-up border brround"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="{{url('blog-details')}}"><img class="card-img-top br-br-0 br-bl-0" src="{{asset('assets/images/media/15.jpg')}}" alt="How do you know she is a witch?"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h3><a href="{{url('blog-details')}}"> Voluptatem quia voluptas </a></h3>
                                        <div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
                                        <div class="d-flex align-items-center pt-5 mt-auto">
                                            <div class="avatar  brround avatar-md me-3 cover-image" data-bs-image-src="{{asset('assets/images/users/6.jpg')}}"></div>
                                            <div>
                                                <a href="{{url('profile')}}" class="text-default">Carol Paige</a>
                                                <small class="d-block text-muted">2 days ago</small>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block text-muted"><i class="fe fe-heart me-1 border brround"></i></a>
                                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block text-muted"><i class="fa fa-thumbs-o-up border brround"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                            </div>
                            <!-- COL-END -->
                            <div class="col-sm-6 col-md-12 col-lg-6 col-xl-4">
                                <div class="card">
                                    <a href="{{url('blog-details')}}"><img class="card-img-top br-tr-7 br-tl-7" src="{{asset('assets/images/media/14.jpg')}}" alt="Well, I didn&#39;t vote for you."></a>
                                    <div class="card-body d-flex flex-column">
                                        <h3><a href="{{url('blog-details')}}"> Voluptatem quia voluptas </a></h3>
                                        <div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
                                        <div class="d-flex align-items-center pt-5 mt-auto">
                                            <div class="avatar brround avatar-md me-3 cover-image" data-bs-image-src="{{asset('assets/images/users/16.jpg')}}"></div>
                                            <div>
                                                <a href="{{url('profile')}}" class="text-default">Anna Ogden</a>
                                                <small class="d-block text-muted">2 days ago</small>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block text-muted"><i class="fe fe-heart me-1 border brround"></i></a>
                                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block text-muted"><i class="fa fa-thumbs-o-up border brround"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="{{url('blog-details')}}"><img class="card-img-top br-br-0 br-bl-0" src="{{asset('assets/images/media/16.jpg')}}" alt="Shut up!"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h3><a href="{{url('blog-details')}}"> Voluptatem quia voluptas </a></h3>
                                        <div class="text-muted">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut ..</div>
                                        <div class="d-flex align-items-center pt-5 mt-auto">
                                            <div class="avatar brround avatar-md me-3 cover-image" data-bs-image-src="{{asset('assets/images/users/7.jpg')}}"></div>
                                            <div>
                                                <a href="{{url('profile')}}" class="text-default">Fiona Hodges</a>
                                                <small class="d-block text-muted">5 days ago</small>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block text-muted"><i class="fe fe-heart me-1 border brround"></i></a>
                                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block text-muted"><i class="fa fa-thumbs-o-up border brround"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-9">
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
                            <!-- COL-END -->
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control border-end-0" placeholder="Search ...">
                                            <button class="btn input-group-text bg-transparent border-start-0 text-muted">
                                                <i class="fe fe-search" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Recent Posts</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <div class="d-flex overflow-visible">
                                                <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('assets/images/media/22.jpg')}}" style="background: url(&quot;{{asset('assets/images/media/18.jpg')}}&quot;) center top;"></a>
                                                <div class="ps-3 flex-column">
                                                    <span class="badge bg-danger me-1 mb-1 mt-1">Lifestyle</span>
                                                    <h4><a href="{{url('blog-details')}}">Generator on the Internet..</a></h4>
                                                    <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible mt-5">
                                                <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('assets/images/media/12.jpg')}}" style="background: url(&quot;{{asset('assets/images/media/19.jpg')}}&quot;) center top;"></a>
                                                <div class="ps-3 flex-column">
                                                    <span class="badge bg-primary me-1 mb-1 mt-1">Business</span>
                                                    <h4><a href="{{url('blog-details')}}">Voluptatem quia voluptas...</a></h4>
                                                    <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible mt-5">
                                                <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('assets/images/media/about.jpg')}}" style="background: url(&quot;{{asset('assets/images/media/19.jpg')}}&quot;) center top;"></a>
                                                <div class="ps-3 flex-column">
                                                    <span class="badge bg-secondary me-1 mb-1 mt-1">Travel</span>
                                                    <h4><a href="{{url('blog-details')}}">Generator on the Internet..</a></h4>
                                                    <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible mt-5">
                                                <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('assets/images/media/25.jpg')}}" style="background: url(&quot;{{asset('assets/images/media/19.jpg')}}&quot;) center top;"></a>
                                                <div class="ps-3 flex-column">
                                                    <span class="badge bg-success me-1 mb-1 mt-1">Meeting</span>
                                                    <h4><a href="{{url('blog-details')}}">Voluptatem quia voluptas...</a></h4>
                                                    <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="fw-bold">NEVER MISS A POST !</h4>
                                        <P>Signup for free to get the latest posts.</P>
                                        <input class="form-control" placeholder="Enter your name *" type="text">
                                        <a href="javascript:void(0)" class="btn btn-danger mt-5">Subscribe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

        @endsection

    @section('scripts')



    @endsection
