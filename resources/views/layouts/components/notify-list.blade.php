@extends('layouts.app')

@section('styles')
    <style>
        .notification:before {
            background-color: rgb(0 46 215 / 65%);
        }
    </style>
@endsection

@section('content')
    <!-- Container -->
    <div class="container">
        <ul class="notification">
            @foreach (@$notifies as $notify)
                @php
                    @$notificationDate = @$notify->created_at->format('Y-m-d');
                    @$notificationTime = @$notify->created_at->format('H:i');
                    @$todayDate = now()->format('Y-m-d');
                    @$yesterdayDate = now()
                        ->subDay()
                        ->format('Y-m-d');
                @endphp
                @if (@$notify->type == 'service')
                    <li>
                        <div class="notification-time">
                            @if (@$notificationDate == @$todayDate)
                                <span class="date">Today</span>
                            @elseif (@$notificationDate == @$yesterdayDate)
                                <span class="date">Yesterday</span>
                            @else
                                <span class="date">{{ @$notify->created_at->format('F j, Y') }}</span>
                            @endif
                            <span class="time">{{ @$notificationTime }}</span>
                        </div>
                        <div class="notification-icon">
                            <a href="javascript:void(0);"></a>
                        </div>
                        <div class="notification-time-date mb-2 d-block d-md-none">
                            @if (@$notificationDate == @$todayDate)
                                <span class="date">Today</span>
                            @elseif (@$notificationDate == @$yesterdayDate)
                                <span class="date">Yesterday</span>
                            @else
                                <span class="date">{{ @$notify->created_at->format('F j, Y') }}</span>
                            @endif
                            <span class="time ms-2">{{ @$notificationTime }}</span>
                        </div>
                        <div class="notification-body">
                            <div class="media mt-0">
                                <div class="main-avatar avatar-md online">
                                    <div class="me-3 notifyimg bg-primary brround box-shadow-primary">
                                        <i class="fe fe-dollar-sign"></i>
                                    </div>
                                </div>
                                <div class="media-body ms-3 d-flex">
                                    <div class="">
                                        <p class="fs-15 text-dark fw-bold mb-0">{{ @$notify->name }}</p>
                                        <p class="mb-0 fs-13 text-dark">{{ @$notify->description }}</p>
                                    </div>
                                    <div class="notify-time">
                                        <p class="mb-0 text-muted fs-11">{{ @$notify->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @else
                    <li>
                        <div class="notification-time">
                            @if (@$notificationDate == @$todayDate)
                                <span class="date">Today</span>
                            @elseif (@$notificationDate == @$yesterdayDate)
                                <span class="date">Yesterday</span>
                            @else
                                <span class="date">{{ @$notify->created_at->format('F j, Y') }}</span>
                            @endif
                            <span class="time">{{ @$notificationTime }}</span>
                        </div>
                        <div class="notification-icon">
                            <a href="javascript:void(0);"></a>
                        </div>
                        <div class="notification-time-date mb-2 d-block d-md-none">
                            @if (@$notificationDate == @$todayDate)
                                <span class="date">Today</span>
                            @elseif (@$notificationDate == @$yesterdayDate)
                                <span class="date">Yesterday</span>
                            @else
                                <span class="date">{{ @$notify->created_at->format('F j, Y') }}</span>
                            @endif
                            <span class="time ms-2">{{ @$notificationTime }}</span>
                        </div>
                        <div class="notification-body">
                            <div class="media mt-0">
                                <div class="main-avatar avatar-md online">
                                    <div class="me-3 notifyimg bg-primary brround box-shadow-primary">
                                        <i class="fe fe-dollar-sign"></i>
                                    </div>
                                </div>
                                <div class="media-body ms-3 d-flex">
                                    <div class="">
                                        <p class="fs-15 text-dark fw-bold mb-0">{{ @$notify->name }}</p>
                                        <p class="mb-0 fs-13 text-dark">{{ @$notify->description }}</p>
                                    </div>
                                    <div class="notify-time">
                                        <p class="mb-0 text-muted fs-11">{{ @$notify->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>
        @if ($notifies && !$notifies->isEmpty())
        <div class="text-center mb-4">
            <a href="{{route('mark_as_read')}}" class="btn ripple btn-primary w-md">Mark all as read</a>
        </div>
        @endif
    </div>
    <!-- End Container -->
    <!-- /Row -->
@endsection

@section('scripts')
@endsection
