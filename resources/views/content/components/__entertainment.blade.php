<div class="card-header border-bottom-0 ms-3">
    {{ @$listing->count() ?? '0' }} {{ lang('entertainment and talent found') }}
</div>
@foreach (@$listing as $key => $value)
    @php
        $lat = $value->lat;
        $lng = $value->lng;
    @endphp
    <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card overflow-hidden border">
            <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                <div class="me-2 card-background">
                    <button type="button" class="btn mt-1 mb-1 me-3">
                        <span class="badge bg-white p-0 py-3 pe-3 text-dark noti-design">&nbsp;<span
                                class="bg-white p-1 span-design">{{ lang('SR') }}</span>&nbsp;
                            {{ lang('From SAR') }} {{ @$value->entertainmentActivities[0]->hourly_rate }}/ {{ lang('Hour') }}</span>
                    </button>
                </div>
            </div>
            <a href="{{ route('entertainment-details', @$value->id) }}">
                <div class="image-cover">
                <img src="{{ s3Link(@$value->entertainmentImages[0]->image) }}" class="card-img-to h-card-imag"
                    alt="img">
                </div>
                <div class="row p-3">
                    <div class="row p-3">
                        <div class="col-12 text-dark">{{ lang(@$value->title) }}</div>
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
@endforeach
