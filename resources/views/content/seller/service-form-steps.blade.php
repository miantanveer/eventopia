@extends('layouts.seller-web-layout')

@section('styles')
    <style>
        .seller-web-sidebar {
            z-index: 9999;
        }

        .sw-btn-group-extra {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="smartwizard-3">
                        <ul class="justify-content-around">
                            <li><a href="#step-1">Photos</a></li>
                            <li><a href="#step-2">About Service</a></li>
                            <li><a href="#step-3">Detail</a></li>
                            <li><a href="#step-4">Pricing</a></li>
                            <li><a href="#step-5">Team</a></li>
                        </ul>
                        <div>
                            <div id="step-1" class="mb-5">
                                <div class="text-center">
                                    <h2 class="fw-bolder">
                                        Upload photos of your services
                                    </h2>
                                    <p>Photos are the first thing that guests will see. We recommend adding 10 or more high
                                        quality photos.</p>
                                </div>
                                <div class="row">
                                    <h5>Photo requirements:</h5>
                                    <div class="col-6">
                                        <ul>
                                            <li class="m-3" style="list-style: circle">
                                                High resolution - At least 1,000 pixels wide
                                            </li>
                                            <li class="m-3" style="list-style: circle">
                                                Color photos - No black & white
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul>
                                            <li class="m-3" style="list-style: circle">
                                                Horizontal orientation - No vertical photos
                                            </li>
                                            <li class="m-3" style="list-style: circle">
                                                Misc. - No collages, screenshots, or watermarks
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <form class="mt-4 mb-5" id="form-step-1" method="post"
                                    action="{{ route('service_form_1') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="control-group form-group row">
                                        <div class="col-12">
                                            <label class="form-label">Please add at least 4 space photos</label>
                                            <input id="demo" type="file" name="files[]" accept=".jpg, .png"
                                                multiple value="images">
                                                <input type="file" name="test" id="yesy">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <p><i class="ion-lightbulb text-warning fs-3 me-3"></i> Drag and drop your
                                                photos to change the order. Your first photo is what your guests will see
                                                when browsing so make sure it represents your space.</p>
                                        </div>
                                    </div>
                                    <div id="image-preview-container" class="mt-4"></div>
                                </form>

                            </div>
                            <div id="step-2" class="mb-5">
                                <div class="text-center">
                                    <h2 class="fw-bolder">
                                        About your service
                                    </h2>
                                    <p>Create a title that will grab a guest’s interest and describes your entertainment &
                                        talent. Do not include your business’s name.</p>
                                </div>
                                <br>
                                <form class="mt-4 mb-5">
                                    <div class="form-group">
                                        <h3 class="fw-bolder">Add title to your service</h3>
                                        <select name="service-title"
                                            class="form-control form-select select2 select2-hidden-accessible"
                                            tabindex="-1" aria-hidden="true" data-bs-placeholder="Select Service Title">
                                            <option value="VG">Video Graphers</option>
                                            <option value="BS">Beauty Services</option>
                                            <option value="SE">Soloists & Ensembles</option>
                                            <option value="DL">Dance Lessons</option>
                                            <option value="D">Decor</option>
                                            <option value="IN">Invitations</option>
                                            <option value="RV">Reception Venues</option>
                                            <option value="WPG">Wedding Photographers</option>
                                            <option value="WP">Wedding Planners</option>
                                            <option value="WB">Wedding Bands</option>
                                            <option value="WR">Wedding Rentals</option>
                                            <option value="TRA">Transportation</option>
                                            <option value="TS">Travel Specialists</option>
                                            <option value="BS">Bar Services</option>
                                            <option value="FL">Florists</option>
                                        </select>
                                    </div>
                                    <hr class="border-3 bg-dark">
                                    <div class="form-group mt-3">
                                        <h3 class="fw-bolder">Describe your company</h3>
                                        <textarea name="decription" cols="30" rows="5" class="w-100 form-control" placeholder="About Seller"></textarea>
                                        <p class="text-end mt-2">Minimum 100 characters</p>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <p><i class="fa fa-lock text-gray fs-3 me-3"></i> Don't worry, we'll only share
                                                this with customers after you have accepted their booking.</p>
                                        </div>
                                    </div>
                                    <hr class="border-3 bg-dark">
                                </form>
                            </div>
                            <div id="step-3" class="">
                                <div class="text-center">
                                    <h2 class="fw-bolder">
                                        Detail
                                    </h2>
                                    <p>Create a title that will grab a guest’s interest and describes your entertainment &
                                        talent. Do not include your business’s name.</p>
                                </div>
                                <br>
                                <form class="mt-4 mb-5">
                                    <div class="form-group mt-3">
                                        <h3 class="fw-bolder">Destination Weddings</h3>
                                        <input type="text" name="destination" placeholder="Destination Wedding Planning"
                                            class="form-control">
                                    </div>
                                    <hr class="border-3 bg-dark">
                                    <div class="form-group mt-3">
                                        <h3 class="fw-bolder">Planning</h3>
                                        <textarea name="decription" cols="30" rows="5" class="w-100 form-control"
                                            placeholder="e.g. Budgeting, Destination, Wedding Design"></textarea>
                                    </div>
                                    <hr class="border-3 bg-dark">
                                    <div class="form-group mt-3">
                                        <h3 class="fw-bolder">Wedding Activities</h3>
                                        <textarea name="decription" cols="30" rows="5" class="w-100 form-control"
                                            placeholder="e.g. Engagement Party, Honeymoon, Rehearsals & Parties"></textarea>
                                    </div>
                                    <br>
                                    <hr class="border-3 bg-dark">
                                </form>
                            </div>
                            <div id="step-4" class="">
                                <div class="text-center">
                                    <h2 class="fw-bolder">
                                        Pricing for services
                                    </h2>
                                </div>
                                <br>
                                <form class="mt-4 mb-5">
                                    <div class="form-group m-0">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="price-1"
                                                    value="option1">
                                                <span class="custom-control-label">0 - 500</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="price-2"
                                                    value="option2">
                                                <span class="custom-control-label">500 - 1000</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="price-3"
                                                    value="option3">
                                                <span class="custom-control-label">1000 - 5000</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="price-4"
                                                    value="option4">
                                                <span class="custom-control-label">5000 - 10000</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="price-5"
                                                    value="option4">
                                                <span class="custom-control-label">20k+</span>
                                            </label>
                                        </div>
                                    </div>
                                    <hr class="border-3 bg-dark">
                                </form>
                            </div>
                            <div id="step-5" class="">
                                <div class="text-center">
                                    <h2 class="fw-bolder">
                                        Team
                                    </h2>
                                    <p>Add team profile or details.</p>
                                </div>
                                <br>
                                <form class="mt-4 mb-5" id="last_form">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="row fieldGroup align-items-center">
                                                <h3 class="fw-bolder">Full Name</h3>
                                                <div class="col-11">
                                                    <div class="form-group mt-3">
                                                        <input type="text" name="destination" placeholder="Enter Name"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-1 ps-0">
                                                    <a class="btn btn-success ms-1 addMore text-white mb-1">+</a>
                                                </div>
                                            </div>
                                            <hr class="border-3 bg-dark">
                                            <div class="form-group mt-3">
                                                <h3 class="fw-bolder">Description</h3>
                                                <textarea name="decription" cols="30" rows="5" class="w-100 form-control" placeholder="About Team"></textarea>
                                                <p class="text-end mt-2">Minimum 100 characters</p>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p><i class="fa fa-lock text-gray fs-3 me-3"></i> Don't worry, we'll
                                                        only share
                                                        this with customers after you have accepted their booking.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <input type="file" class="mydropify"
                                                data-bs-default-file="{{ asset('assets/images/media/1.jpg') }}"
                                                data-bs-height="180" />
                                        </div>
                                    </div>
                                    <hr class="border-3 bg-dark">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- INTERNAL File-Uploads Js-->
    {{-- <script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script> --}}
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>

    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>

    <!-- FORM WIZARD JS-->
    <script src="{{ asset('assets/plugins/formwizard/jquery.smartWizard.js') }}"></script>
    <script src="{{ asset('assets/plugins/formwizard/fromwizard.js') }}"></script>

    <!-- INTERNAl Jquery.steps js -->
    <script src="{{ asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>

    <!-- INTERNAL Accordion-Wizard-Form js-->
    <script src="{{ asset('assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard.js') }}"></script>

    <!-- FORMELEMENTS JS -->
    <script src="{{ asset('assets/js/formelementadvnced.js') }}"></script>
    <script src="{{ asset('assets/js/form-elements.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.mydropify').dropify({
                messages: {
                    'default': 'Upload Company Image',
                    'replace': 'Uploaded',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (2M max).'
                }
            });
            var maxGroup = 4;
            $(".addMore").click(function() {
                var ri = $('.fieldGroup').length;
                if ($('body').find('.fieldGroup').length < maxGroup) {
                    var fieldHTML =
                        `<div class="row fieldGroup align-items-center my-3">
                            <div class="col-11">
                                <div class="form-group">
                                    <input type="text" name="destination" placeholder="Enter Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-1 ps-0">
                                <a class="btn btn-danger remove ms-1 text-white mb-4" style="padding-left:1.1rem; padding-right:1.1rem;"> - </a>
                            </div>
                        </div>`;

                    $('body').find('.fieldGroup:last').after(fieldHTML);
                } else {
                    alert('Maximum ' + maxGroup + ' are allowed.');
                }
            });
            $("body").on("click", ".remove", function() {
                $(this).parents(".fieldGroup").remove();
            });
            $('.sw-btn-next').on('click', function(e) {
                var checkSecondClass = $('.sw-btn-next').hasClass('last_step_btn');
                $('.last_step_btn').on('click', function(e) {
                    // console.log("asdf");
                    window.location.href = '{{ url('/steps-form-submit') }}';
                });
            });
        });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to display image previews
            function showImagePreview(input) {
                for (const file of input.files) {
                    const img = $("<img>", {
                        src: URL.createObjectURL(file),
                        class: "img-thumbnail me-2 mb-2",
                        style: "max-width: 10%;"
                    });

                    const deleteBtn = $("<button>", {
                        class: "btn btn-danger btn-sm mt-5",
                        style: "max-height: 30px;"
                    }).html('<i class="fa-solid fa-trash"></i>');

                    deleteBtn.on("click", function() {
                        const parentDiv = $(this).closest(".image-preview");
                        const imgSrc = parentDiv.find("img").attr("src");

                        const input = $("#demo")[0];
                        const fileList = Array.from(input.files);
                        const updatedFiles = fileList.filter(file => URL.createObjectURL(file) !== imgSrc);
                        input.files = new FileList(updatedFiles);

                        parentDiv.remove();
                    });

                    const div = $("<div>", {
                        class: "image-preview d-flex justify-content-between"
                    }).append(img, deleteBtn);

                    $("#image-preview-container").append(div);
                }
            }
            $("#demo").on("change", function() {
                showImagePreview(this);
            });
        });
    </script>
@endsection
