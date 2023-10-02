<form class="theme-form mega-form" action="{{ route('admin.plugins.update') }}" method="post">
    @csrf
    @method('put')
    <div class="">
        <div class="mb-3">
            <label class="col-form-label">API KEY</label>
            <input class="form-control" type="text" name="GOOGLE_MAP_API_KEY" value="{{$env->get('GOOGLE_MAP_API_KEY')}}">
        </div>
    </div>
    <div class="mt-5">
        <button class="btn btn-primary">Update</button>
    </div>
</form>
