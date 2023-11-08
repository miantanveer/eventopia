<div class="card-header border-bottom-0 ms-3">
    {{ @$count ?? '0' }} {{ lang('spaces found') }}
</div>
@foreach (@$listing as $value)
    @if ($value->listing_type == 'space')
        @php
            $space = App\Models\Space::find($value->listing_id);
            $lat = $space->lat;
            $lng = $space->lng;
        @endphp
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card overflow-hidden border">
                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                    <div class="me-2 card-background">
                        <button type="button" class="btn mt-1 mb-1 me-3">
                            <span class="badge bg-white p-0 py-3 pe-3 text-dark noti-design">&nbsp;<span
                                    class="bg-white p-1 span-design">{{ lang('SR') }}</span>&nbsp;
                                {{ lang('From SAR') }}
                                {{ @$space->spaceHaveActivities[0]->rate_per_hour }}/
                                {{ lang('Hour') }}</span>
                        </button>
                    </div>
                </div>
                <a href="{{ route('space-details', @$space->id) }}">
                    <div class="image-cover">
                        <img src="{{ s3Link(@$space->spaceImages[0]->image) }}" class="card-img-to h-card-imag"
                            alt="img">
                    </div>
                    <div class="row p-3">
                        <div class="row p-3">
                            <div class="col-12 text-dark">{{ lang(@$space->space_title) }}</div>
                            <div class="col-12 my-3 text-dark"><i class="fa fa-users"></i> 35
                                &nbsp;
                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                <i class="fa fa-star" style="color: #F1C40F"></i> &nbsp;
                                14
                            </div>
                            <div class="col-12 text-dark"><b>{{ lang('Responds within ') }} 1hr</b>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @elseif ($value->listing_type == 'entertainment')
        @php
            $entertainment = App\Models\Entertainment::find($value->listing_id);
            $lat = $entertainment->lat;
            $lng = $entertainment->lng;
        @endphp
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card overflow-hidden border">
                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                    <div class="me-2 card-background">
                        <button type="button" class="btn mt-1 mb-1 me-3">
                            <span class="badge bg-white p-0 py-3 pe-3 text-dark noti-design">&nbsp;<span
                                    class="bg-white p-1 span-design">{{ lang('SR') }}</span>&nbsp;
                                {{ lang('From SAR') }} {{ @$entertainment->entertainmentActivities[0]->hourly_rate }}/
                                {{ lang('Hour') }}</span>
                        </button>
                    </div>
                </div>
                <a href="{{ route('entertainment-details', @$entertainment->id) }}">
                    <div class="image-cover">
                        <img src="{{ s3Link(@$entertainment->entertainmentImages[0]->image) }}"
                            class="card-img-to h-card-imag" alt="img">
                    </div>
                    <div class="row p-3">
                        <div class="row p-3">
                            <div class="col-12 text-dark">{{ lang(@$entertainment->title) }}</div>
                            <div class="col-12 my-3 text-dark"><i class="fa fa-users"></i> 35
                                &nbsp;
                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                <i class="fa fa-star" style="color: #F1C40F"></i> &nbsp;
                                14
                            </div>
                            <div class="col-12 text-dark"><b>{{ lang('Responds within ') }} 1hr</b>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @elseif ($value->listing_type == 'service')
        @php
        $service = App\Models\Service::find($value->listing_id);
            $lat = $service->lat;
            $lng = $service->lng;
            $price = @$service->price;
            $parts = explode(';', $price);

            if (count($parts) === 2) {
                $min = $parts[0];
                $max = $parts[1];
            }
        @endphp

        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card overflow-hidden border">
                <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                    <div class="me-2 card-background">
                        <button type="button" class="btn mt-1 mb-1 me-3">
                            <span class="badge bg-white p-0 py-3 pe-3 text-dark noti-design">&nbsp;<span
                                    class="bg-white p-1 span-design">{{ lang('SR') }}</span>&nbsp;
                                {{ lang('From SAR') }}
                                {{ @$min }} {{ lang('to') }} {{ @$max }}/
                                {{ lang('Hour') }}</span>
                        </button>
                    </div>
                </div>
                <a href="{{ route('service-details', @$service->id) }}">
                    <div class="image-cover">
                        <img src="{{ s3Link(@$service->serviceImages[0]->image) }}" class="card-img-to h-card-imag"
                            alt="img">
                    </div>
                    <div class="row p-3">
                        <div class="row p-3">
                            <div class="col-12 text-dark">{{ lang(@$service->title) }}</div>
                            <div class="col-12 my-3 text-dark"><i class="fa fa-users"></i> 35
                                &nbsp;
                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                                <i class="fa fa-star" style="color: #F1C40F"></i>
                                <i class="fa fa-star" style="color: #F1C40F"></i> &nbsp;
                                14
                            </div>
                            <div class="col-12 text-dark"><b>{{ lang('Responds within ') }} 1hr</b>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endif
@endforeach
