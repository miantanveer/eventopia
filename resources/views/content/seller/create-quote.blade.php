@extends('layouts.app2')

@section('styles')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card border">
                            <div class="text-center mt-2">
                                <h3><b>Service Quote for customer</b></h3>
                                <p>This quote is made for the service Wedding Planner</p>
                            </div>
                            <hr class="m-0 bg-dark">
                            <form action="">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputPhone2"
                                                    placeholder="Service type">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Location">
                                            </div>
                                            <div class="form-group">
                                                <input type="date" class="form-control" id="exampleInputPhone2"
                                                    placeholder="Wedding date">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Number of guests">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleInputEmail1" placeholder="Description" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputPhone2"
                                                    placeholder="Amount">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Sub Total">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputPhone2"
                                                    placeholder="Vat %">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Admin fees">
                                            </div>
                                            <div class="form-group">
                                                <input type="file" class="form-control" id="exampleInputPhone2"
                                                    placeholder="Images">
                                            </div>
                                            <div class="float-end">
                                                <a href="#" class="me-3">Preview</a>
                                                <input type='submit' class="btn btn-primary text-white px-6" id='quote-btn'
                                                    value="Send">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#quote-btn').on("click", function(e) {
            $('body').addClass('timer-alert');
            swal({
                title: 'Quotation sent',
                text: 'Your quotation has been sent to customer. Wait for the response.',
                timer: 3000
            });
        });
    </script>
@endsection
