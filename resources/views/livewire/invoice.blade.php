@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Invoice</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a class="header-brand" href="{{url('index')}}">
                                                    <img src="{{asset('assets/images/brand/logo-3.png')}}" class="header-brand-img logo-3" alt="Sash logo">
                                                    <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img logo" alt="Sash logo">
                                                </a>
                                                <div>
                                                    <address class="pt-3">
                                                        Street Address, State, City, Region, Postal Code<br>
                                                        yourdomain@example.com
                                                    </address>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-end border-bottom border-lg-0">
                                                <h3>#INV-526</h3>
                                                <h5>Date Issued: 12-07-2021</h5>
                                                <h5>Due Date: 12-07-2021</h5>
                                            </div>
                                        </div>
                                        <div class="row pt-5">
                                            <div class="col-lg-6">
                                                <p class="h3">Invoice To:</p>
                                                <p class="fs-18 fw-semibold mb-0">John Paige</p>
                                                <address>
                                                        Street Address, State, City<br>
                                                        State, City<br>
                                                        Region, Postal Code<br>
                                                        yourdomain@example.com
                                                    </address>
                                            </div>
                                            <div class="col-lg-6 text-end">
                                                <p class="h4 fw-semibold">Payment Details:</p>
                                                <p class="mb-1">Total Due: $5,89,789</p>
                                                <p class="mb-1">Bank Name: Union Bank 0456</p>
                                                <p class="mb-1">IBAN: 543218769</p>
                                                <p>Country: USA</p>
                                            </div>
                                        </div>
                                        <div class="table-responsive push">
                                            <table class="table table-bordered table-hover mb-0 text-nowrap">
                                                <tbody>
                                                    <tr class=" ">
                                                        <th class="text-center"></th>
                                                        <th>Item</th>
                                                        <th class="text-center">Quantity</th>
                                                        <th class="text-end">Unit Price</th>
                                                        <th class="text-end">Sub Total</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>
                                                            <p class="font-w600 mb-1">Logo Design</p>
                                                            <div class="text-muted">
                                                                <div class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-end">$674</td>
                                                        <td class="text-end">$1,308</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>
                                                            <p class="font-w600 mb-1">Website wireframe for 2 pages</p>
                                                            <div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</div>
                                                        </td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-end">$1,500</td>
                                                        <td class="text-end">$6,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td>
                                                            <p class="font-w600 mb-1">PSD to HTML coding</p>
                                                            <div class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</div>
                                                        </td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">$530</td>
                                                        <td class="text-end">$1,690</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td>
                                                            <p class="font-w600 mb-1">E-commerce Development</p>
                                                            <div class="text-muted">When our power of choice is untrammelled and when nothing prevents our being able</div>
                                                        </td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-end">$800</td>
                                                        <td class="text-end">$1,600</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">5</td>
                                                        <td>
                                                            <p class="font-w600 mb-1">Design and layout of 2 pages in Photoshop</p>
                                                            <div class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
                                                        </td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-end">$720</td>
                                                        <td class="text-end">$1,440</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="fw-bold text-uppercase text-end">Total</td>
                                                        <td class="fw-bold text-end h4">$12,038</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <button type="button" class="btn btn-primary mb-1" onclick="javascript:window.print();"><i class="si si-wallet"></i> Pay Invoice</button>
                                        <button type="button" class="btn btn-secondary mb-1" onclick="javascript:window.print();"><i class="si si-paper-plane"></i> Send Invoice</button>
                                        <button type="button" class="btn btn-danger mb-1" onclick="javascript:window.print();"><i class="si si-printer"></i> Print Invoice</button>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-1 CLOSED -->

        @endsection

    @section('scripts')



    @endsection
