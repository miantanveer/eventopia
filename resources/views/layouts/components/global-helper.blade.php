<!-- global-helper -->
<div id="global-helper" class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999;">
    <div class="dropdown btn-group mt-2 mb-2">
        <div class="btn-group mt-2 mb-2">
            <button class="btn btn-pill btn-white border-info text-end dropdown-toggle" type="button"
                data-bs-toggle="dropdown" id="global-helper-btn">Do
                {{lang('you need Help?')}}</button>
            <div class="dropdown-menu w-260" style="">
                <form class="card-body pt-3" id="contactForm">
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="{{lang('Enter Email')}}">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="{{lang('Enter your Name')}}" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="{{lang('Enter Phone Number')}}" type="text">
                    </div>
                    <div class="submit">
                        <button class="btn btn-primary btn-block">{{lang('Submit')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- global-helper closed -->
