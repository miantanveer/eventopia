<div class="card-header border-bottom-0 ms-3">
    {{ @$listing->count() ?? '0' }} {{ lang(@$type.' found') }}
</div>
@foreach(@$listing as $value)
@php
$lat = $value->lat;
$lng = $value->lng;
@endphp
<div class="col-xl-4 col-md-6 col-sm-12">
    <div class="card overflow-hidden">
        <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
            <div class="me-2 card-background">
                <button type="button" class="btn mt-1 mb-1 me-3">
                    <span class="badge bg-white p-0 py-3 pe-3 text-dark noti-design">&nbsp;<span
                            class="bg-white p-1 span-design">{{lang('SR')}}</span>&nbsp;
                        {{lang('From SAR')}}
                        {{ @$value->spaceHaveActivities[0]->rate_per_hour}}/
                        {{lang('Hour')}}</span>
                </button>
            </div>
        </div>
        <a href="{{ route('space-details', @$value->id) }}">
            <img src="{{ asset(@$value->spaceImages[0]->image) }}" class="card-img-top h-card-image" alt="img">
            <div class="row p-3">
                <div class="row p-3">
                    <div class="col-12 text-dark">{{ lang(@$value->space_title) }}</div>
                    <div class="col-12 my-3 text-dark"><i class="fa fa-users"></i> 35
                        &nbsp;
                        <i class="fa fa-star" style="color: #F1C40F"></i>
                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                        <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                        <i class="fa fa-star" style="color: #F1C40F"></i>
                        <i class="fa fa-star" style="color: #F1C40F"></i> &nbsp;
                        14
                    </div>
                    <div class="col-12 text-dark"><b>{{lang('Responds within ')}} 1hr</b>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endforeach