@extends('layouts.seller-web-layout')
@section('styles')
<style>
        .sw-btn-group-extra {
            display: none;
        }
</style>
@endsection
@section('content')
<!--Row open-->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div id="smartwizard-3">
                    <ul class="justify-content-around">
                        <li><a href="#step-1">Step 1</a></li>
                        <li><a href="#step-2">Step 2</a></li>
                        <li><a href="#step-3">Step 3</a></li>
                        <li><a href="#step-4">Step 4</a></li>
                        <li><a href="#step-5">Step 5</a></li>
                        <li><a href="#step-6">Step 6</a></li>
                        <li><a href="#step-7">Step 7</a></li>
                    </ul>
                    <div>
                        <div id="step-1" class="">
                            <div class="container">
                                <div class="text-center mb-6">
                                    <h3 class="mt-3 mt-1"><b>What type of entertainment & talent are you listing?</b>
                                    </h3>
                                    <p class="">Enter the type of entertainment & talent that most closely represents
                                        the physical space being listed. <a href="#">Learn more</a></p>
                                </div>
                                <div class="mt-6">
                                    <p><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-5" alt=""> Examples: 'Comedian' 'Singers' 'Food & Beverages'
                                    </p>
                                    <input type="text" class="w-100 p-4" placeholder="Comedian for event">
                                    <hr class="bg-dark">
                                    <h3 class="mb-2 mt-md-7"><b>Security cameras and recording devices</b></h3>
                                    <div class="w-50 float-start">
                                        <p class="mb-3">Does the event have security cameras or recording devices?</p>
                                    </div>
                                    <div class="w-50 float-end">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckChecked" checked onchange="toggleTextArea()">
                                        </div>
                                    </div>
                                    <br>
                                    <div id="textAreaDiv" class="mt-5">
                                        <p class="mb-1">Describe any device that records video, audio, or still images.
                                            Specify where each device is in your event and if they’ll be on or off.</p>
                                        <textarea name="" id="" cols="30" rows="5" class="w-100 p-5"
                                            placeholder="Add description"></textarea>
                                        <p class="text-end">Minimum 50 characters</p>
                                    </div>
                                </div>
                                <hr class="bg-dark h-1">
                            </div>
                        </div>
                        <div id="step-2" class="">
                            <div class="container">
                                <div class="text-center mb-6">
                                    <h3 class="mt-3 mt-1"><b>What type of entertainment & talent are you listing?</b>
                                    </h3>
                                    <p class="">Create a title that will grab a guest’s interest and describes your entertainment & talent. Do not include your business’s name.</p>
                                </div>
                                <div class="mt-6">
                                    <h4>Try to include the following:</h4>
                                        <li class="">Location - urban, downtown, marina</li>
                                        <li class="">The type of space - loft, studio, dance hall, penthouse</li>
                                        <li class="">Unique adjective - industrial, rustic, roomy</li>

                                    <div class="mt-5">
                                        <p><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-5" alt=""> Example: “Downtown Loft with Skyline View”</p>
                                        <input type="text" class="w-100 p-4" placeholder="Enter your entertainment & talent title">
                                        <hr class="bg-dark">
                                    </div>
                                    <div class="mt-7">
                                        <p class="display-8"><b>How Big is the space needed?</b></p>
                                        <p class="my-4">Please only include the size of the space that guests can use during their booking.</p>
                                        <p><img src="{{ asset('assets/images/brand/light-bulb.png') }}" class="w-5" alt=""> Example: If your space is 2,000 sq m, but guests are booking a 500 sq m conference room, you would enter “500”.</p>
                                        <div class="form-group">
                                            <div class="input-group w-30">
                                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <span class="input-group-text" id="basic-addon2">sq ft</span>
                                            </div>
                                        </div>
                                        <hr class="bg-dark">
                                    </div>
                                </div>
                                <div class="">
                                    <p class="display-8"><b>What are your entertainment / talent rules?? </b> (Optional)</p>
                                    <p class="my-6">Include any rules about what your guests can and cannot do in the event.</p>
                                    <p class="mb-3"><b>Example rules:</b></p>
                                    <li>No smoking in the building</li>
                                    <li>Outside catering is allowed</li>
                                    <li>No alcohol allowed after 8pm</li>
                                    <hr class="bg-dark">
                                </div>
                                <div class="mt-7">
                                    <p class="display-8"><b>Who’s allowed to watch your entertainment / talent?</b></p>
                                    <p class="mt-5">Typically, only venues that serve alcohol have age requirements.</p>
                                    <select name="country" class="form-control form-select select2" data-bs-placeholder="All Ages">
                                        <option value="All Ages" selected>All Ages</option>
                                        <option value="18+">18+</option>
                                        <option value="21+">22+</option>
                                    </select>
                                    <hr class="bg-dark">
                                </div>
                                <div class="mt-7">
                                    <p class="display-8"><b>Provide arrival instructions </b> (Optional)</p>
                                    <p class="my-5">Help your guests and their attendees find and enter your event.</p>
                                    <h4><b>Try to include:</b></h4>
                                    <li class="mb-5">Directions to your space, building access, door buzzers, floors, stairs/elevator access etc.</li>
                                    <textarea name="" id="" cols="30" rows="5" class="w-100 p-5"
                                            placeholder="Add description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</textarea>
                                        <p class="text-end">Minimum 100 characters</p>
                                </div>
                                <hr class="bg-dark h-1">
                            </div>
                        </div>
                        <div id="step-3" class="">

                        </div>
                        <div id="step-4" class="">

                        </div>
                        <div id="step-5" class="">

                        </div>
                        <div id="step-6" class="">

                        </div>
                        <div id="step-7" class="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--row closed-->
@endsection
@section('scripts')

<!-- FORM WIZARD JS-->
<script src="{{asset('assets/plugins/formwizard/jquery.smartWizard.js')}}"></script>
<script src="{{asset('assets/plugins/formwizard/fromwizard.js')}}"></script>
<script>
    function toggleTextArea() {
      const checkbox = document.getElementById('flexSwitchCheckChecked');
      const textAreaDiv = document.getElementById('textAreaDiv');

      if (checkbox.checked) {
        textAreaDiv.style.display = 'block'; // Show the text area
      } else {
        textAreaDiv.style.display = 'none';  // Hide the text area
      }
    }
</script>
@endsection
