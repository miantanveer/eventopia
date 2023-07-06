@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                           <!-- PAGE-HEADER -->
                           <div class="page-header">
                            <h1 class="page-title">Mail-Inbox</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mail-Inbox</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
                                        <div class="mt-4 mx-4 mb-4 text-center">
                                            <a href="{{url('email-compose')}}" class="btn btn-primary btn-lg d-grid">Compose</a>
                                        </div>
                                        <a href="{{url('email-inbox')}}" class="list-group-item d-flex align-items-center active mx-4">
                                            <span class="icons"><i class="ri-mail-line"></i></span> Inbox <span class="ms-auto badge bg-secondary bradius">14</span>
                                        </a>
                                        <a href="javascript:void(0)" class="list-group-item d-flex align-items-center mx-4">
                                            <span class="icons"><i class="ri-mail-open-line"></i></span> Drafts
                                        </a>
                                        <a href="javascript:void(0)" class="list-group-item d-flex align-items-center mx-4">
                                            <span class="icons"><i class="ri-star-line"></i></span> Starred <span class="ms-auto badge bg-success bradius">03</span>
                                        </a>
                                        <a href="javascript:void(0)" class="list-group-item d-flex align-items-center mx-4">
                                            <span class="icons"><i class="ri-price-tag-3-line"></i></span> Tags
                                        </a>
                                        <a href="javascript:void(0)" class="list-group-item d-flex align-items-center mx-4">
                                            <span class="icons"><i class="ri-mail-send-line"></i></span> Sent Mail
                                        </a>
                                        <a href="javascript:void(0)" class="list-group-item d-flex align-items-center mx-4">
                                            <span class="icons"><i class="ri-delete-bin-line"></i></span> Trash
                                        </a>
                                    </div>
                                    <div class="card-body border-top p-0 py-3">
                                        <div class="list-group list-group-transparent mb-0 mail-inbox mx-4">
                                            <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center py-2">
                                                <span class="w-3 h-3 brround bg-primary me-2"></span> Friends
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center py-2">
                                                <span class="w-3 h-3 brround bg-secondary me-2"></span> Family
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center py-2">
                                                <span class="w-3 h-3 brround bg-success me-2"></span> Social
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center py-2">
                                                <span class="w-3 h-3 brround bg-info me-2"></span> Office
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center py-2">
                                                <span class="w-3 h-3 brround bg-warning me-2"></span> Work
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center py-2">
                                                <span class="w-3 h-3 brround bg-danger me-2"></span> Settings
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body p-6">
                                        <div class="inbox-body">
                                            <div class="mail-option">
                                                <div class="chk-all">
                                                    <div class="btn-group">
                                                        <a data-bs-toggle="dropdown" href="javascript:void(0)" class="btn mini all" aria-expanded="false">
                                                                All
                                                                <i class="fa fa-angle-down "></i>
                                                            </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="javascript:void(0)"> None</a></li>
                                                            <li><a href="javascript:void(0)"> Read</a></li>
                                                            <li><a href="javascript:void(0)"> Unread</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" class="btn mini tooltips">
                                                        <i class=" fa fa-refresh"></i>
                                                    </a>
                                                </div>
                                                <div class="btn-group hidden-phone">
                                                    <a data-bs-toggle="dropdown" href="javascript:void(0)" class="btn mini blue" aria-expanded="false">
                                                            More
                                                            <i class="fa fa-angle-down "></i>
                                                        </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="javascript:void(0)"><i class="fa fa-pencil me-2"></i> Mark as Read</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-ban me-2"></i> Spam</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-trash-o me-2"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                                <ul class="unstyled inbox-pagination">
                                                    <li><span class="fs-13">1-50 of 234</span></li>

                                                    <li>
                                                        <a class="np-btn" href="javascript:void(0)"><i class="fa fa-angle-right pagination-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-inbox table-hover text-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>Tim Reid, S P N</td>
                                                            <td class="view-message clickable-row" data-href='{{url('email-read')}}'>Boost Your Website Traffic</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>April 01</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>Freelancer.com</td>
                                                            <td class="view-message clickable-row" data-href='{{url('email-read')}}'>Stop wasting your visitors</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>May 23</td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
                                                            <td class="view-message  dont-show clickable-row" data-href='{{url('email-read')}}'>PHPClass</td>
                                                            <td class="view-message clickable-row" data-href='{{url('email-read')}}'>Added a new class: Login Class Fast Site</td>
                                                            <td class="view-message  text-end clickable-row" data-href='{{url('email-read')}}'>9:27 AM</td>
                                                        </tr>

                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>Facebook</td>
                                                            <td class="view-message view-message clickable-row" data-href='{{url('email-read')}}'>Somebody requested a new password </td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>June 13</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>Skype</td>
                                                            <td class="view-message view-message clickable-row" data-href='{{url('email-read')}}'>Password successfully changed</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>March 24</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>Google+</td>
                                                            <td class="view-message clickable-row" data-href='{{url('email-read')}}'>alireza, do you know</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>March 09</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>WOW Slider </td>
                                                            <td class="view-message clickable-row" data-href='{{url('email-read')}}'>New WOW Slider v7.8 - 67% off</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>March 14</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>LinkedIn Pulse</td>
                                                            <td class="view-message clickable-row" data-href='{{url('email-read')}}'>The One Sign Your Co-Worker Will Stab</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>Feb 19</td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>Google Webmaster </td>
                                                            <td class="view-message clickable-row" data-href='{{url('email-read')}}'>Improve the search presence of WebSite</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>March 15</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>JW Player</td>
                                                            <td class="view-message clickable-row" data-href='{{url('email-read')}}'>Last Chance: Upgrade to Pro for </td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>March 15</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>Drupal Community</td>
                                                            <td class="view-message view-message clickable-row" data-href='{{url('email-read')}}'>Welcome to the Drupal Community</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>March 04</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>Zoosk </td>
                                                            <td class="view-message clickable-row" data-href='{{url('email-read')}}'>7 new singles we think you'll like</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>May 14</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>LinkedIn </td>
                                                            <td class="view-message clickable-row" data-href='{{url('email-read')}}'>Alireza: Nokia Networks, System Group and </td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>February 25</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>Facebook</td>
                                                            <td class="view-message view-message clickable-row" data-href='{{url('email-read')}}'>Your account was recently logged into</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>March 14</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>Twitter</td>
                                                            <td class="view-message clickable-row" data-href='{{url('email-read')}}'>Your Twitter password has been changed</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>April 07</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>InternetSeer</td>
                                                            <td class="view-message clickable-row" data-href='{{url('email-read')}}'>Performance Report</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>July 14</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>Bertina </td>
                                                            <td class="view-message clickable-row" data-href='{{url('email-read')}}'>IMPORTANT: Don't lose your domains!</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>June 16</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>Laura Gaffin, S P N </td>
                                                            <td class="view-message clickable-row" data-href='{{url('email-read')}}'>Your Website On Google (Higher Rankings Are Better)</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>August 10</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>Facebook</td>
                                                            <td class="view-message view-message clickable-row" data-href='{{url('email-read')}}'>Alireza Zare Login faild</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>feb 14</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>AddMe.com</td>
                                                            <td class="view-message clickable-row" data-href='{{url('email-read')}}'>Submit Your Website to the AddMe Business Directory</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>August 10</td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="inbox-small-cells">
                                                                <label class="custom-control custom-checkbox mb-0 ms-3">
                                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                            </td>
                                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                                            <td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
                                                            <td class="view-message dont-show fw-semibold clickable-row" data-href='{{url('email-read')}}'>Terri Rexer, S P N</td>
                                                            <td class="view-message view-message clickable-row" data-href='{{url('email-read')}}'>Forget Google AdWords: Un-Limited Clicks fo</td>
                                                            <td class="view-message text-end fw-semibold clickable-row" data-href='{{url('email-read')}}'>April 14</td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="pagination mb-4">
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
                        <!-- ROW-1 CLOSED -->

        @endsection

    @section('scripts')



    @endsection
