<div class="card-header border-bottom-0 ms-3">
    {{lang('4,333'.' party hall spaces near USA')}}
</div>
@foreach (@$data as $value)
    @php
        $lat = $value->lat;
        $lng = $value->lng;
        $title = $value->title;
    @endphp
    <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card overflow-hidden">
            <div class="p-0 mt-3 w-100 position-absolute top-0 left-0">
                <div class="ms-1 card-border float-start">
                    <p class="text-dark p-2 bg-primary">
                        {{ lang('From SAR') }}{{ @$value->price }}
                    </p>
                </div>
                <div class="me-2 card-background float-end">
                    <span class="mini-stat-icon p-0"><i class="fa fa-shopping-bag p-3"></i></span>
                </div>
            </div>
            <a href="{{ route('service-details', @$value->id) }}">
                <img src="{{ asset(@$value->serviceImages[0]->image) }}" class="card-img-top"
                    style="width: 200px;padding-top: 10px" alt="img">
                <div class="card-body">
                    <h5 class="card-title">{{ @$value->title }}</h5>
                    <i class="fa fa-group"></i> 25 &nbsp;
                    <i class="fa fa-star" style="color:#f1c40f"></i>
                    <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                    <i class="fa fa-star" style="color: rgb(241, 196, 15);"></i>
                    <p>{{ lang('Responds within 1 hour') }}</p>
                </div>
            </a>
        </div>
    </div>
@endforeach
