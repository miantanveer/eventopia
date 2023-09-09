@extends('layouts.calendar-layout')

@section('styles')
    <style>
        .remove {
            width: 25px;
            height: 25px;
            border: 1px solid transparent;
            border-radius: 50% !important;
            background: black;
            color: white;
            padding: auto;
            padding-left: 8px;
            position: absolute;
            right: 0;
            top: -10px;
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <!-- ROW-1 -->
    <div class="row mt-5">
        <div class="col-10 m-auto">
            <div class="card" id="modal3">
                <div class="card-body border p-4 pb-5">
                    <form action="{{ route('new-operating-hours', ['id' => $id, 'type' => $type]) }}" method="POST">
                        @csrf
                        <div class="text-center mb-4">
                            <h2 class="mx-4 fw-bolder">{{lang('What are your operating hours?')}}</h2>
                            <p class="mx-4">{{lang('Operating hours are the days and hours of the week that your space is open to
                                host
                                bookings (i.e. your general availability). Guests
                                will not be able to book times outside of your operating hours. Learn More.')}}</p>
                        </div>
                        <div class="text-start mb-4">
                            <p> {{lang('Birthday event - 23408 Bernier Cliff Suite 526')}} </p>
                        </div>
                        <div class="text-start bg-gray-light">
                            <p class="p-5"><i class="mdi mdi-alert-circle"></i> &nbsp; &nbsp; {{lang('Operating hours end times
                                are
                                restricted to 12 AM for this space type. Read our Social Events Policy for more information.')}}
                            </p>
                        </div>
                        <input type="hidden" name="id" value="{{ $id }}">
                        <input type="hidden" name="type" value="{{ $type }}">
                        @include('layouts.components.setHoursHTMLCode')
                        <hr style="border-top: 1px solid black">
                        <div class="text-end mb-2 mt-5">
                            <div class="btn-list">
                                <button class="btn btn-primary float-sm-end">{{lang('Done')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 END -->
@endsection

@section('scripts')
    @include('layouts.components.notification-scripts')
    @include('layouts.components.setHoursScript')
@endsection
