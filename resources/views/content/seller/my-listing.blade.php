@extends('layouts.seller-web-layout')

@section('styles')
    <style>
        .seller-web-sidebar {
            z-index: 9999;
        }

        /* img {
            width: 100% !important;
        } */

        .pagination {
            justify-content: end;
            margin-right: 13px;
            margin-bottom: 10px;
        }

        @media(min-width:0px) and (max-width:991px) {
            .image_lg {
                border-radius: 7px !important;
            }
        }

        .customize_img {
            max-width: 100px !important;
        }
    </style>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-10 col-12 mt-5 ">
            <div class="card border overflow-hidden">
                <div class="row align-items-center pt-3">
                    <div class="col-md-3 col-12 ps-4 mb-3 mb-md-0">
                        <h3 class="number-font mb-0">{{ lang('Listings') }}</h3>
                    </div>
                    <div class="col-md-9 col-12 text-md-end">
                        <button type="button" class="btn btn-primary">
                            <a class="text-white" href="{{ route('list-space') }}">{{ lang('Add a space') }}</a>
                        </button>
                        <button type="button" class="btn btn-primary my-3 my-sm-0">
                            <a class="text-white"
                                href="{{ route('list-entertainment') }}">{{ lang('Add an Entertainment') }}</a>
                        </button>
                        <button type="button" class="btn btn-primary">
                            <a class="text-white" href="{{ route('list-service') }}">{{ lang('Add a Service') }}</a>
                        </button>
                    </div>
                    <div class="card-body p-0 mt-5">
                        <div class="col-12 px-0 px-sm-2">
                            <div class="card border">
                                @foreach ($spaces_remaining as $space_remaining)
                                    @php
                                        $progress = 0;
                                        switch ($space_remaining->last_step) {
                                            case '1':
                                                $progress = 10;
                                                break;
                                            case '2':
                                                $progress = 20;
                                                break;
                                            case '3':
                                                $progress = 30;
                                                break;
                                            case '4':
                                                $progress = 40;
                                                break;
                                            case '5':
                                                $progress = 50;
                                                break;
                                            case '6':
                                                $progress = 60;
                                                break;
                                            case '7':
                                                $progress = 75;
                                                break;
                                            case '8':
                                                $progress = 90;
                                                break;
                                            case '9':
                                                $progress = 100;
                                                break;
                                            // Add more cases as needed
                                        }

                                    @endphp
                                    <div class="row">
                                        <div class="col-12 p-2">
                                            <div class="card shadow-sm border">
                                                <div class="card-body p-0">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-4 col-lg-6">
                                                            <h5 class="card-title mt-3">
                                                                {{ lang($space_remaining->space_title) }}
                                                            </h5>
                                                        </div>
                                                        <div class="col-12 col-sm-4 col-lg-3">
                                                            <div class="progress progress-md mt-3">
                                                                <div class="progress-bar bg-primary"
                                                                    style="width: {{ $progress }}%;">
                                                                    {{ $progress }}%
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4 col-lg-3 mt-5 mt-sm-0">
                                                            <div class="text-end">
                                                                <a href="{{ route('space-form-resume', $space_remaining->id) }}"
                                                                    class="btn btn-primary">{{ lang('Resume') }}</a>
                                                                <a class="modal-effect btn" data-bs-effect="effect-scale"
                                                                    onclick="deleteModal('{{ route('space-delete', $space_remaining->id) }}')">
                                                                    <i class="fa fs-16 fa-trash text-danger"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach ($service_remaining as $key => $data)
                                    @php
                                        $progress = 0;
                                        switch ($data->last_steps) {
                                            case 'step-1':
                                                $progress = 10;
                                                break;
                                            case 'step-2':
                                                $progress = 25;
                                                break;
                                            case 'step-3':
                                                $progress = 45;
                                                break;
                                            case 'step-4':
                                                $progress = 65;
                                                break;
                                            case 'step-5':
                                                $progress = 75;
                                                break;
                                            case 'step-6':
                                                $progress = 85;
                                                break;
                                            // Add more cases as needed
                                        }

                                    @endphp
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card border">
                                                <div class="col-12 p-2">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-4 col-lg-6 m-auto">
                                                            <h5 class="card-title mt-3 d-inline">{{ lang($data->title) }}
                                                            </h5>
                                                        </div>
                                                        <div class="col-12 col-sm-4 col-lg-3">
                                                            <div class="progress progress-md mt-3">
                                                                <div class="progress-bar bg-primary"
                                                                    style="width: {{ $progress }}%;">
                                                                    {{ $progress }}%
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4 col-lg-3 mt-5 mt-sm-0">
                                                            <div class="text-end">
                                                                <a href="{{ route('service_form_resume', $data->id) }}"
                                                                    class="btn btn-primary">{{ lang('Resume') }}</a>
                                                                <a class="modal-effect btn" data-bs-effect="effect-scale"
                                                                    onclick="deleteModal('{{ route('service-delete', $data->id) }}')">
                                                                    <i class="fa fs-16 fa-trash text-danger"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach ($entertainment_remaining as $key => $data)
                                    @php
                                        $progress = 0;
                                        switch ($data->last_steps) {
                                            case 'step-1':
                                                $progress = 15;
                                                break;
                                            case 'step-2':
                                                $progress = 30;
                                                break;
                                            case 'step-3':
                                                $progress = 45;
                                                break;
                                            case 'step-4':
                                                $progress = 55;
                                                break;
                                            case 'step-5':
                                                $progress = 65;
                                                break;
                                            case 'step-6':
                                                $progress = 75;
                                                break;
                                            case 'step-7':
                                                $progress = 85;
                                                break;
                                            // Add more cases as needed
                                        }

                                    @endphp
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card border">
                                                <div class="col-12 p-2">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-4 col-lg-6">
                                                            <h5 class="card-title mt-3 d-inline">{{ lang($data->title) }}
                                                            </h5>
                                                        </div>
                                                        <div class="col-12 col-sm-4 col-lg-3">
                                                            <div class="progress progress-md mt-3">
                                                                <div class="progress-bar bg-primary"
                                                                    style="width: {{ $progress }}%;">
                                                                    {{ $progress }}%
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4 col-lg-3 mt-5 mt-sm-0">
                                                            <div class="text-end">
                                                                <a href="{{ route('entertainment-form-resume', $data->id) }}"
                                                                    class="btn btn-primary">{{ lang('Resume') }}</a>
                                                                <a class="modal-effect btn" data-bs-effect="effect-scale"
                                                                    onclick="deleteModal('{{ route('entertainment-delete', $data->id) }}')">
                                                                    <i class="fa fs-16 fa-trash text-danger"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach (@$spaces as $space)
                                    <div class="col-12">
                                        <div class="row g-0">
                                            <div class="col-md-4 pe-3 pe-lg-0">
                                                <img src="{{ asset(@$space->spaceImages[0]->image) ?? asset('assets/images/no-image-icon-15.png') }}"
                                                    class="card-img-left h-100 image_lg" width="100%" height="auto"
                                                    alt="img">
                                            </div>
                                            <div class="col-md-8 ps-3 ps-md-0 pe-0 pe-lg-2">
                                                <div class="card-body p-0 p-sm-5">
                                                    <div class="mx-0 row w-100 align-items-center">
                                                        <div class="col-12 pt-4 pb-5 fw-bolder">
                                                            <h5 class="card-title">
                                                                {{ lang(@$space->space_title ?? 'No Title') }}
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-6 col-12 col-lg-8 pe-0">
                                                            <p class="card-text">
                                                                {{ lang(@$space->space_description ?? 'No Description') }}
                                                            </p>
                                                            <div class="">
                                                                <span class="tag tag-rounded tag-icon {{@$space->status == '0' ? 'tag-info' : (@$space->status == '1' ? 'tag-green' : 'tag-red')}}">{{@$space->status == '0' ? 'Review' : (@$space->status == '1' ? 'Active' :'Rejected')}}<a class="tag-addon {{@$space->status == '0' ? 'tag-info' : (@$space->status == '1' ? 'tag-green' : 'tag-red')}}"></a></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-12 col-lg-4 my-auto ps-0 mt-3 mt-sm-0">
                                                            <div class="text-end">
                                                                <a href="{{ route('edit-space-address', @$space->id) }}"
                                                                    class="btn btn-primary">{{ lang('Edit') }}</a>
                                                                <div class="btn-group mt-2 mb-2">
                                                                    <button type="button" class="btn border rounded-1 p-2"
                                                                        data-bs-toggle="dropdown">
                                                                        <i class="icon icon-options"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu"
                                                                        style="">
                                                                        <li><a onclick="deleteModal('{{ route('space-delete', @$space->id) }}')"
                                                                                class="text-danger">{{ lang('Delete') }}</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <h4 class="fw-bolder">{{ lang('Customize for different activities') }}
                                                </h4>
                                            </div>
                                        </div>
                                        @foreach (@$space_acitivities as $space_acitiviy)
                                            <div class="row">
                                                <div class="col-12 p-2">
                                                    <div class="card shadow-sm border">
                                                        <div class="card-body p-0 p-sm-5">
                                                            <div class="row align-items-center">
                                                                <div
                                                                    class="col-12 col-sm-1 col-lg-1 pt-3 ps-5 pt-sm-0 ps-sm-3">
                                                                    <span><img class="customize_img justify-content-start"
                                                                            style="max-width: 65px !important"
                                                                            src="{{ asset('assets/images/icons/' . @$space_acitiviy->image) }}"></span>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-6 col-lg-8 mt-3 mt-sm-0 ps-5 ps-sm-0">
                                                                    <h6 class="ps-3 ps-sm-2 ps-lg-0 d-none d-sm-block">
                                                                        {{ lang(@$space_acitiviy->title) }}</h6>
                                                                    <div class="row ps-0 ps-sm-2 ps-lg-0">
                                                                        <div class="col-12">
                                                                            <span>{{ lang(@$space_acitiviy->description) }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @php
                                                                    $editButtonShown = false;
                                                                @endphp

                                                                @foreach (@$space->spaceHaveActivities as $spaceHaveActivity)
                                                                    @if (!$editButtonShown && $spaceHaveActivity->activities->id == $space_acitiviy->id)
                                                                        @php
                                                                            $editButtonShown = true;
                                                                        @endphp
                                                                        <div
                                                                            class="col-12 col-sm-5 col-lg-3 text-end align-self-md-center">
                                                                            <a href="{{ route('activities-step', ['space_id' => @$space->id, 'key' => 1]) }}"
                                                                                class="btn btn-white">{{ lang('Edit') }}</a>
                                                                        </div>
                                                                    @endif
                                                                @endforeach

                                                                @if (!$editButtonShown)
                                                                    <div
                                                                        class="col-12 col-sm-5 col-lg-3 text-end align-self-md-center">
                                                                        <a href="{{ route('activities-step', ['space_id' => @$space->id, 'key' => 1]) }}"
                                                                            class="btn btn-white">{{ lang('Enable') }}</a>
                                                                    </div>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                                {!! @$spaces->links('vendor\pagination\tailwind') !!}
                                {{-- {!!@$spaces->links('vendor\pagination\tailwind')!!}  --}}

                            </div>
                        </div>
                        @foreach ($service as $key => $data)
                            <div class="col-12">
                                <div class="card border">

                                    <div class="row g-0">
                                        <div class="col-md-4 pe-3 pe-lg-0">
                                            <img src="{{ asset(@$data->serviceImages[0]->image) }}"
                                                class="card-img-left h-100 image_lg" width="100%" height="auto"
                                                alt="img">
                                        </div>
                                        <div class="col-md-8 ps-3 ps-md-0 pe-0 pe-lg-2">
                                            <div class="card-body p-0 p-sm-5">
                                                <div class="mx-0 row w-100 align-items-center">
                                                    <div class="col-12 pt-4 pb-5 fw-bolder">
                                                        <h5 class="card-title">{{ lang($data->title) }}</h5>
                                                    </div>
                                                    <div class="col-sm-6 col-12 col-lg-8 pe-0">
                                                        <p class="card-text">{{ lang($data->description) }}</p>
                                                        <div class="">
                                                            <span class="tag tag-rounded tag-icon {{@$data->status == '0' ? 'tag-info' : (@$data->status == '1' ? 'tag-green' : 'tag-red')}}">{{@$data->status == '0' ? 'Review' : (@$data->status == '1' ? 'Active' :'Rejected')}}<a class="tag-addon {{@$data->status == '0' ? 'tag-info' : (@$data->status == '1' ? 'tag-green' : 'tag-red')}}"></a></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12 col-lg-4 my-auto ps-0 mt-3 mt-sm-0">
                                                        <div class="text-end">
                                                            <a href="{{ route('service-form-1', $data->id) }}"
                                                                class="btn btn-primary">{{ lang('Edit') }}</a>
                                                            <div class="btn-group mt-2 mb-2">
                                                                <button type="button" class="btn border rounded-1 p-2"
                                                                    data-bs-toggle="dropdown">
                                                                    <i class="icon icon-options"></i>
                                                                </button>
                                                                <ul class="dropdown-menu" role="menu" style="">
                                                                    <li><a onclick="deleteModal('{{ route('service-delete', $data->id) }}')"
                                                                            class="text-danger">{{ lang('Delete') }}</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($data->status == 0)
                                        <div class="row mt-5">
                                            <div class="col-12 p-2">
                                                <div class="card bg-light-gray">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h6><i
                                                                        class="fe fe-alert-circle me-3"></i>{{ lang('We have received your submission') }}
                                                                </h6>
                                                                <p>{{ lang('Your submission is currently under review by our host onboarding team. To avoid any delays in your activation, please review
                                                                our requirements to go live.') }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        {{-- {{@$service->onEachSide(5)->fragment(Hash::make($type))->links('vendor\pagination\tailwind')}} --}}

                        {!! $service->links('vendor\pagination\tailwind') !!}
                        @foreach ($entertainment as $key => $data)
                            <div class="col-12">
                                <div class="card border">
                                    <div class="row g-0">
                                        <div class="col-md-4 pe-3 pe-lg-0">
                                            <img src="{{ asset($data->entertainmentImages[0]->image) }}"
                                                class="card-img-left h-100 image_lg" width="100%" height="auto"
                                                alt="img">
                                        </div>
                                        <div class="col-md-8 ps-3 ps-md-0 pe-0 pe-lg-2">
                                            <div class="card-body p-0 p-sm-5">
                                                <div class="mx-0 row w-100 align-items-center">
                                                    <div class="col-12 pt-4 pb-5 fw-bolder">
                                                        <h5 class="card-title">{{ lang($data->title) }}</h5>
                                                    </div>
                                                    <div class="col-sm-6 col-12 col-lg-8 pe-0">
                                                        <p class="card-text">{{ lang($data->house_rules) }}</p>
                                                        <div class="">
                                                            <span class="tag tag-rounded tag-icon {{@$data->status == '0' ? 'tag-info' : (@$data->status == '1' ? 'tag-green' : 'tag-red')}}">{{@$data->status == '0' ? 'Review' : (@$data->status == '1' ? 'Active' :'Rejected')}}<a class="tag-addon {{@$data->status == '0' ? 'tag-info' : (@$data->status == '1' ? 'tag-green' : 'tag-red')}}"></a></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-12 col-lg-4 my-auto ps-0 mt-3 mt-sm-0">
                                                        <div class="text-end">
                                                            <a href="{{ route('load_entertainment_form_1', $data->id) }}"
                                                                class="btn btn-primary">{{ lang('Edit') }}</a>
                                                            <div class="btn-group mt-2 mb-2">
                                                                <button type="button" class="btn border rounded-1 p-2"
                                                                    data-bs-toggle="dropdown">
                                                                    <i class="icon icon-options"></i>
                                                                </button>
                                                                <ul class="dropdown-menu" role="menu" style="">
                                                                    <li><a onclick="deleteModal('{{ route('entertainment-delete', $data->id) }}')"
                                                                            class="text-danger">{{ lang('Delete') }}</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($data->status == 0)
                                        <div class="row mt-5">
                                            <div class="col-12 p-2">
                                                <div class="card bg-light-gray">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h6><i
                                                                        class="fe fe-alert-circle me-3"></i>{{ lang('We have received
                                                                                                                                your
                                                                                                                                submission') }}
                                                                </h6>
                                                                <p>{{ lang('Your submission is currently under review by our host
                                                                                                                        onboarding
                                                                                                                        team. To avoid any delays in your activation, please review
                                                                                                                        our
                                                                                                                        requirements to
                                                                                                                        go live.') }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="fw-bolder">{{ lang('Customize for different activities') }}</h4>
                                        </div>
                                    </div>
                                    @foreach ($ent_activity as $value)
                                        <div class="row">
                                            <div class="col-12 p-2">
                                                <div class="card shadow-sm border">
                                                    <div class="card-body p-0 p-sm-5">
                                                        <div class="row align-items-center">
                                                            <div
                                                                class="col-12 col-sm-1 col-lg-1 pt-3 ps-5 pt-sm-0 ps-sm-3">
                                                                <span><img class="customize_img justify-content-start"
                                                                        style="max-width: 65px !important"
                                                                        src="{{ asset('assets/images/icons/' . $value->image) }}"></span>
                                                                {{-- <h6 class="ps-4 d-inline d-sm-none">Meetings</h6> --}}
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-6 col-lg-8 mt-3 mt-sm-0 ps-5 ps-sm-0">
                                                                <h6 class="ps-3 ps-sm-2 ps-lg-0 d-none d-sm-block">
                                                                    {{ lang($value->title) }}</h6>
                                                                <div class="row ps-0 ps-sm-2 ps-lg-0">
                                                                    <div class="col-12">
                                                                        <span>{{ lang($value->description) }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @php
                                                                $editButtonShown = false;
                                                            @endphp

                                                            @foreach ($data->entertainmentActivities as $val)
                                                                @if (!$editButtonShown && @$val->entertainment->id == $value->id)
                                                                    @php
                                                                        $editButtonShown = true;
                                                                    @endphp
                                                                    <div
                                                                        class="col-12 col-sm-5 col-lg-3 text-end align-self-md-center">
                                                                        <a href="{{ route('load_entertainment_form_step_7', ['id' => $data->id, 'key' => rand(0000, 9999)]) }}"
                                                                            class="btn btn-white">{{ lang('Edit') }}</a>
                                                                    </div>
                                                                @endif
                                                            @endforeach

                                                            @if (!$editButtonShown)
                                                                <div
                                                                    class="col-12 col-sm-5 col-lg-3 text-end align-self-md-center">
                                                                    <a href="{{ route('load_entertainment_form_step_7', ['id' => $data->id, 'key' => rand(0000, 9999)]) }}"
                                                                        class="btn btn-white">{{ lang('Enable') }}</a>
                                                                </div>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                        {{-- {{@$entertainments->onEachSide(5)->fragment(Hash::make($type))->links('vendor\pagination\tailwind')}}  --}}
                        {!! @$entertainment->links('vendor\pagination\tailwind') !!}
                    </div>
                </div>
            </div>
        </div>
        {{-- Delete Modal --}}
        <div class="modal fade" id="delete-modal">
            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-body text-center p-4 pb-5">
                        <button aria-label="Close" class="btn-close position-absolute" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                        <i class="icon icon-close fs-70 text-danger lh-1 my-5 d-inline-block"></i>
                        <form action="" id="delete-form" method="POST">
                            @csrf
                            @method('delete')
                            <h2 class="text-danger">{{ lang('Warning!') }}</h2>
                            <h4 class="text-danger">{{ lang('Are you sure you want to delete this Listing?') }}</h4>
                            <p class="mg-b-20 mg-x-20">{{ lang('This action is not repeatable.') }}</p>
                            <button class="btn btn-danger pd-x-25">{{ lang('Continue') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('scripts')
        <script src="{{ asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
        <script>
            function deleteModal(url) {
                $('#delete-form').attr('action', url);
                $('#delete-modal').modal('show');
            }
        </script>
    @endsection
