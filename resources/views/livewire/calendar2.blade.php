@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                           <!-- PAGE-HEADER -->
                           <div class="page-header">
                            <h1 class="page-title">Full Calendar</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Full Calender</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Calender With different Color Events</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-xl-3">
                                                <div id="external-events">
                                                    <h4>Draggable Events</h4>
                                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-primary">
                                                        <div class="fc-event-main">My Event 1</div>
                                                    </div>
                                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-secondary" data-class="bg-secondary">
                                                        <div class="fc-event-main">My Event 2</div>
                                                    </div>
                                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-warning" data-class="bg-warning">
                                                        <div class="fc-event-main">My Event 3</div>
                                                    </div>
                                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-success" data-class=" bg-info">
                                                        <div class="fc-event-main">My Event 4</div>
                                                    </div>
                                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-danger" data-class="bg-danger">
                                                        <div class="fc-event-main">My Event 5</div>
                                                    </div>
                                                </div>
                                                <div class="mt-5">
                                                    <h4 class="card-title mb-4">My Schedules</h4>
                                                    <div class="card border p-0 pt-3">
                                                        <div class="card-body pt-3">
                                                            <div class="dropdown">
                                                                <a class="nav-link float-end text-muted pe-0 pt-0" href="" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit me-1"></i> Shedule Date</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash-2 me-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            <h5 class="card-title">Design Review</h5>
                                                            <h6 class="card-subtitle mb-2 text-muted">13-01-2022</h6>
                                                            <a href="javascript:void(0)" class="btn btn-primary btn-sm me-3">Urgent</a>
                                                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Face to Face</a>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="media media-xs overflow-visible">
                                                                <img class="avatar brround avatar-md me-3" src="{{asset('assets/images/users/12.jpg')}}" alt="avatar-img">
                                                                <div class="media-body valign-middle">
                                                                    <a href="{{url('profile')}}" class=" fw-semibold text-dark">John Paige</a><br>
                                                                    <a href="{{url('profile')}}" class="text-muted mb-0"> View client profile</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card border p-0 pt-3">
                                                        <div class="card-body pt-3">
                                                            <div class="dropdown pe-0 pt-0">
                                                                <a class="nav-link float-end text-muted" href="" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit me-1"></i> Schedule Date</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash-2 me-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            <h5 class="card-title">New Project</h5>
                                                            <h6 class="card-subtitle mb-2 text-muted">14-01-2022</h6>
                                                            <a href="javascript:void(0)" class="btn btn-primary btn-sm me-3">Urgent</a>
                                                            <a href="javascript:void(0)" class="btn btn-danger btn-sm">Online Meeting</a>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="media media-xs overflow-visible">
                                                                <img class="avatar brround avatar-md me-3" src="{{asset('assets/images/users/16.jpg')}}" alt="avatar-img">
                                                                <div class="media-body valign-middle">
                                                                    <a href="{{url('profile')}}" class=" fw-semibold text-dark">Mozelle Belt</a><br>
                                                                    <a href="{{url('profile')}}" class="text-muted mb-0"> View client profile</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-9">
                                                <div id='calendar2'></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">List Calendar</h3>
                                    </div>
                                    <div class="card-body">
                                        <div id='calendar'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW CLOSED -->

        @endsection

    @section('scripts')

    <!-- FULL CALENDAR JS -->
    <script src='{{asset('assets/plugins/fullcalendar/moment.min.js')}}'></script>
    <script src='{{asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}'></script>
    <script src="{{asset('assets/js/fullcalendar.js')}}"></script>

    @endsection
