@extends('layouts.admin')

@section('styles')
@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Plugins</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Plugins</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row">
        <div class="col-md-12 col-xl-6">
            <div class="card">
                <div class="card-status card-status-left bg-primary br-bs-7 br-ts-7"></div>
                <div class="card-header">
                    <h3 class="card-title">Stripe credentials</h3>
                    <div class="card-options">
                        <button class="btn btn-pill btn-primary update_btn" type="button" title="Update credentials"
                            data-title="Stripe credentials"
                            data-url="{{ route('admin.plugins.plugin', ['plugin' => 'stripe']) }}">Update</button>
                    </div>
                </div>
                <div class="card-body">
                    <p>Stripe, Inc. is an Irish-American financial services and software as a service company dual-headquartered in South San Francisco, California, United States and Dublin, Ireland.</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-6">
            <div class="card">
                <div class="card-status card-status-left bg-red br-bs-7 br-ts-7"></div>
                <div class="card-header">
                    <h3 class="card-title">Email credentials</h3>
                    <div class="card-options">
                        <button class="btn btn-pill btn-red btn-air-dark update_btn" type="button" title="Update credentials"
                            data-title="Email credentials"
                            data-url="{{ route('admin.plugins.plugin', ['plugin' => 'email']) }}">Update</button>
                    </div>
                </div>
                <div class="card-body">
                    <p>Email (electronic mail) is the exchange of computer-stored messages from one user to one or more
                        recipients via the internet. Emails are a fast, inexpensive and accessible way to communicate for
                        business or personal use.</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-6">
            <div class="card">
                <div class="card-status card-status-left bg-warning br-bs-7 br-ts-7"></div>
                <div class="card-header">
                    <h3 class="card-title">Sms Service credentials</h3>
                    <div class="card-options">
                        <button class="btn btn-pill btn-warning btn-air-warning update_btn" type="button" title="Update credentials"
                            data-title="Sms Service credentials"
                            data-url="{{ route('admin.plugins.plugin', ['plugin' => 'SmsService']) }}">Update</button>
                    </div>
                </div>
                <div class="card-body">
                    <p>Here you can provide the credentials and active messagebird or twilio as sms service provider.</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-6">
            <div class="card">
                <div class="card-status card-status-left bg-green br-bs-7 br-ts-7"></div>
                <div class="card-header">
                    <h3 class="card-title">Google Map Api Key</h3>
                    <div class="card-options">
                        <button class="btn btn-pill btn-green btn-air-warning update_btn" type="button" title="Update credentials"
                            data-title="GOOGLE MAPS API KEY"
                            data-url="{{ route('admin.plugins.plugin', ['plugin' => 'google_map']) }}">Update</button>
                    </div>
                </div>
                <div class="card-body">
                    <p>Google Map Api key set by admin which use for choose address from google map.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 END -->
@endsection

@section('scripts')
@endsection
