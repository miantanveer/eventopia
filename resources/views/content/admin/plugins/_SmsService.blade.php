<form class="theme-form mega-form" action="{{ route('admin.plugins.update') }}" method="post">
    @csrf
    @method('put')
    <div class="">
        <div class="mb-3">
            <label class="col-form-label">Twilio Account SID</label>
            <input class="form-control" type="text" name="TWILIO_SID" value="{{$env->get('TWILIO_SID')}}">
        </div>
        <div class="mb-3">
            <label class="col-form-label">Twilio Auth Token</label>
            <input class="form-control" type="text" name="TWILIO_TOKEN" value="{{$env->get('TWILIO_TOKEN')}}">
        </div>
        <div class="mb-3">
            <label class="col-form-label">Twilio From</label>
            <input class="form-control" type="text" name="TWILIO_PHONE" value="{{$env->get('TWILIO_PHONE')}}">
        </div>
    </div>
    <div class="mt-5">
        <button class="btn btn-primary">Update</button>
    </div>
</form>
