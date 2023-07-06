@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Form-Elements</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Form-Elements</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Inputs & Textareas </h3>
                                    </div>
                                    <div class="card-body pb-2">
                                        <p>Textual form controls like <code class="highlighter-rouge">&lt;input&gt;</code> s and <code class="highlighter-rouge">&lt;textarea&gt;</code> s an upgrade with custom styles,focus states, and more.</p>
                                        <div class="row row-sm">
                                            <div class="col-lg">
                                                <input class="form-control mb-4" placeholder="Input box" type="text">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <input class="form-control mb-4" placeholder="Input box (readonly)" readonly="" type="text">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <input class="form-control mb-4" disabled="" placeholder="Input box (disabled)" type="text">
                                            </div>
                                        </div>
                                        <div class="row row-sm">
                                            <div class="col-lg">
                                                <textarea class="form-control mb-4" placeholder="Textarea" rows="4"></textarea>
                                            </div>
                                            <div class="col-lg mg-t-10">
                                                <textarea class="form-control mb-4" placeholder="Textarea (readonly)" readonly="" rows="4"></textarea>
                                            </div>
                                            <div class="col-lg mg-t-10">
                                                <textarea class="form-control mb-4" disabled="" placeholder="Texarea (disabled)" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Input Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Set heights using classes like <code class="highlighter-rouge">.form-control-lg</code> and <code class="highlighter-rouge">.form-control-sm</code>.</p>
                                        <div class="row row-sm">
                                            <div class="col-lg">
                                                <input class="form-control form-control-sm mb-4" placeholder="from-control-sm" type="text">
                                                <input class="form-control  mb-4" placeholder=" Default from-control" type="text">
                                                <input class="form-control form-control-lg" placeholder="from-control-lg" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Valid Inputs</h3>
                                    </div>
                                    <div class="card-body pb-2">
                                        <form class="needs-validation was-validated">
                                            <div class="row row-sm">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input class="form-control  mb-4 is-valid state-valid" placeholder="Input box (success state)" required="" type="text" value="This is input">
                                                        <textarea class="form-control mb-4 is-valid state-valid" placeholder="Textarea (success state)" required="" rows="3">This is textarea</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input class="form-control mb-4 is-invalid state-invalid" placeholder="Input box (invalid state)" required="" type="text">
                                                        <textarea class="form-control mb-4 is-invalid state-invalid" placeholder="Textarea (invalid state)" required="" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Readonly plain text</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>If you want to have <code class="highlighter-rouge">&lt;input readonly&gt;</code> elements in your form styled as plain text, use the <code class="highlighter-rouge">&lt;.form-control-plaintext&gt;</code> class to remove
                                            the default form field styling and preserve the correct margin and padding .</p>
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Select</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Customize the native <code class="highlighter-rouge">&lt;select&gt;</code>s with custom CSS that changes the element’s initial appearance.</p>
                                        <div class="form-group">
                                            <label class="form-label">Default Select</label>
                                            <select name="country" class="form-control form-select" data-bs-placeholder="Select Country">
                                                    <option value="br">Brazil</option>
                                                    <option value="cz">Czech Republic</option>
                                                    <option value="de">Germany</option>
                                                    <option value="pl" selected>Poland</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Customize Select</label>
                                            <select name="country" class="form-control form-select select2" data-bs-placeholder="Select Country">
                                                    <option value="br">Brazil</option>
                                                    <option value="cz">Czech Republic</option>
                                                    <option value="de">Germany</option>
                                                    <option value="pl" selected>Poland</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Disabled Select</label>
                                            <select name="country" class="form-control form-select select2" data-bs-placeholder="Select Country" disabled>
                                                    <option value="br">Brazil</option>
                                                    <option value="cz">Czech Republic</option>
                                                    <option value="de">Germany</option>
                                                    <option value="pl" selected>Poland</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Select Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>You may also choose from small and large custom selects to match our similarly sized text inputs.</p>
                                        <div class="form-group select2-sm">
                                            <label class="form-label">Small Size Select</label>
                                            <select name="country" class="form-control form-select form-select-sm select2" data-bs-placeholder="Select Country">
                                                    <option value="br">Brazil</option>
                                                    <option value="cz">Czech Republic</option>
                                                    <option value="de">Germany</option>
                                                    <option value="pl" selected>Poland</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Default Size Select</label>
                                            <select name="country" class="form-control form-select select2" data-bs-placeholder="Select Country">
                                                    <option value="br">Brazil</option>
                                                    <option value="cz">Czech Republic</option>
                                                    <option value="de">Germany</option>
                                                    <option value="pl" selected>Poland</option>
                                                </select>
                                        </div>
                                        <div class="form-group select2-lg">
                                            <label class="form-label">Large Size Select</label>
                                            <select name="country" class="form-control form-select form-select-lg select2" data-bs-placeholder="Select Country">
                                                    <option value="br">Brazil</option>
                                                    <option value="cz">Czech Republic</option>
                                                    <option value="de">Germany</option>
                                                    <option value="pl" selected>Poland</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Gerenal Elements</h4>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal">
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Text</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" value="Typing.....">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label" for="example-email">Email</label>
                                                <div class="col-md-9">
                                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Password</label>
                                                <div class="col-md-9">
                                                    <input type="password" class="form-control" value="password">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Placeholder</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="text">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Readonly</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" readonly="" value="Readonly value">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Disabled</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" disabled value="Disabled value">
                                                </div>
                                            </div>
                                            <div class=" row mb-4 mb-4">
                                                <label class="col-md-3 form-label">Number</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="number" name="number">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">URL</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="url" name="url">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Search</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="search" name="search">
                                                </div>
                                            </div>
                                            <div class=" row mb-0">
                                                <label class="col-md-3 form-label">Tel</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="tel" name="tel">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Checksbox & Radio Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-4 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label">Radios</div>
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" name="example-radios" value="option1" checked>
                                                                <span class="custom-control-label">Option 1</span>
                                                            </label>
                                                        <label class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" name="example-radios" value="option2">
                                                                <span class="custom-control-label">Option 2</span>
                                                            </label>
                                                        <label class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" name="example-radios" value="option3" disabled>
                                                                <span class="custom-control-label">Option Disabled</span>
                                                            </label>
                                                        <label class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" name="example-radios5" value="option4" disabled checked>
                                                                <span class="custom-control-label">Option Disabled Checked</span>
                                                            </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label">Medium Radios</div>
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-radio-md">
                                                                <input type="radio" class="custom-control-input" name="example-radios1" value="option5" checked>
                                                                <span class="custom-control-label">Option 1</span>
                                                            </label>
                                                        <label class="custom-control custom-radio-md">
                                                                <input type="radio" class="custom-control-input" name="example-radios1" value="option6">
                                                                <span class="custom-control-label">Option 2</span>
                                                            </label>
                                                        <label class="custom-control custom-radio-md">
                                                                <input type="radio" class="custom-control-input" name="example-radios1" value="option7" disabled>
                                                                <span class="custom-control-label">Option Disabled</span>
                                                            </label>
                                                        <label class="custom-control custom-radio-md">
                                                                <input type="radio" class="custom-control-input" name="example-radios4" value="option8" disabled checked>
                                                                <span class="custom-control-label">Option Disabled Checked</span>
                                                            </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label">Large Radios</div>
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-radio-lg">
                                                                <input type="radio" class="custom-control-input" name="example-radios2" value="option9" checked>
                                                                <span class="custom-control-label">Option 1</span>
                                                            </label>
                                                        <label class="custom-control custom-radio-lg">
                                                                <input type="radio" class="custom-control-input" name="example-radios2" value="option10">
                                                                <span class="custom-control-label">Option 2</span>
                                                            </label>
                                                        <label class="custom-control custom-radio-lg">
                                                                <input type="radio" class="custom-control-input" name="example-radios2" value="option11" disabled>
                                                                <span class="custom-control-label">Option Disabled</span>
                                                            </label>
                                                        <label class="custom-control custom-radio-lg">
                                                                <input type="radio" class="custom-control-input" name="example-radios3" value="option12" disabled checked>
                                                                <span class="custom-control-label">Option Disabled Checked</span>
                                                            </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-xl-4 col-md-6">
                                                <div class="form-group m-0">
                                                    <div class="form-label">Checkboxes</div>
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                                <span class="custom-control-label">Option 1</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                <span class="custom-control-label">Option 2</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled>
                                                                <span class="custom-control-label">Option Disabled</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked disabled>
                                                                <span class="custom-control-label">Option Disabled Checked</span>
                                                            </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="form-group m-0">
                                                    <div class="form-label">Medium Checkboxes</div>
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-checkbox-md">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox5" value="option5" checked>
                                                                <span class="custom-control-label">Option 1</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox-md">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox6" value="option6">
                                                                <span class="custom-control-label">Option 2</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox-md">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox7" value="option7" disabled>
                                                                <span class="custom-control-label">Option Disabled</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox-md">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox8" value="option8" checked disabled>
                                                                <span class="custom-control-label">Option Disabled Checked</span>
                                                            </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="form-group m-0">
                                                    <div class="form-label">Large Checkboxes</div>
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-checkbox-lg">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9" checked>
                                                                <span class="custom-control-label">Option 1</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox-lg">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox10" value="option10">
                                                                <span class="custom-control-label">Option 2</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox-lg">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox11" value="option11" disabled>
                                                                <span class="custom-control-label">Option Disabled</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox-lg">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox12" value="option12" checked disabled>
                                                                <span class="custom-control-label">Option Disabled Checked</span>
                                                            </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Row -->
                        <div class="row">
                            <div class="col-xl-8 col-lg-12">
                                <form method="post" class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Toggle switches</h3>
                                    </div>
                                    <div class=" card-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-xxl-4 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label">Toggle switch</div>
                                                    <label class="custom-switch form-switch me-5">
                                                            <input type="radio" name="custom-switch-radio" class="custom-switch-input">
                                                            <span class="custom-switch-indicator"></span>
                                                            <span class="custom-switch-description">Switch toggle</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                            <input type="radio" name="custom-switch-radio" class="custom-switch-input" checked>
                                                            <span class="custom-switch-indicator"></span>
                                                            <span class="custom-switch-description">Switch toggle</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                            <input type="radio" name="custom-switch-radio" class="custom-switch-input" disabled>
                                                            <span class="custom-switch-indicator"></span>
                                                            <span class="custom-switch-description">Switch toggle</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                            <input type="radio" name="custom-switch-radio3" class="custom-switch-input" checked disabled>
                                                            <span class="custom-switch-indicator"></span>
                                                            <span class="custom-switch-description">Switch toggle</span>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-xxl-4 col-md-6">
                                                <div class="form-label">Medium Toggle switch</div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                            <input type="radio" name="custom-switch-radio1" class="custom-switch-input">
                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                            <span class="custom-switch-description">Switch toggle</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                            <input type="radio" name="custom-switch-radio1" class="custom-switch-input" checked>
                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                            <span class="custom-switch-description">Switch toggle</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                            <input type="radio" name="custom-switch-radio1" class="custom-switch-input" disabled>
                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                            <span class="custom-switch-description">Switch toggle</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                            <input type="radio" name="custom-switch-radio2" class="custom-switch-input" checked disabled>
                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                            <span class="custom-switch-description">Switch toggle</span>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-xxl-4 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label">Large Toggle switch</div>
                                                    <label class="custom-switch form-switch me-5">
                                                            <input type="checkbox" name="custom-switch-checkbox1" class="custom-switch-input">
                                                            <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                                            <span class="custom-switch-description">Switch toggle</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                            <input type="checkbox" name="custom-switch-checkbox2" class="custom-switch-input" checked>
                                                            <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                                            <span class="custom-switch-description">Switch toggle</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                            <input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input" disabled>
                                                            <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                                            <span class="custom-switch-description">Switch toggle</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                            <input type="checkbox" name="custom-switch-checkbox4" class="custom-switch-input" checked disabled>
                                                            <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                                            <span class="custom-switch-description">Switch toggle</span>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Your skills</label>
                                                <div class="selectgroup selectgroup-pills">
                                                    <label class="selectgroup-item">
                                                            <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button">HTML</span>
                                                        </label>
                                                    <label class="selectgroup-item">
                                                            <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                                                            <span class="selectgroup-button">CSS</span>
                                                        </label>
                                                    <label class="selectgroup-item">
                                                            <input type="checkbox" name="value" value="PHP" class="selectgroup-input">
                                                            <span class="selectgroup-button">PHP</span>
                                                        </label>
                                                    <label class="selectgroup-item">
                                                            <input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
                                                            <span class="selectgroup-button">JavaScript</span>
                                                        </label>
                                                    <label class="selectgroup-item">
                                                            <input type="checkbox" name="value" value="Angular" class="selectgroup-input">
                                                            <span class="selectgroup-button">Angular</span>
                                                        </label>
                                                    <label class="selectgroup-item">
                                                            <input type="checkbox" name="value" value="Java" class="selectgroup-input">
                                                            <span class="selectgroup-button">Java</span>
                                                        </label>
                                                    <label class="selectgroup-item">
                                                            <input type="checkbox" name="value" value="C++" class="selectgroup-input">
                                                            <span class="selectgroup-button">C++</span>
                                                        </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Switches </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                Bootstrap Switch Default
                                                <div class="material-switch pull-right">
                                                    <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox" />
                                                    <label for="someSwitchOptionDefault" class="label-default"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Bootstrap Switch Primary
                                                <div class="material-switch pull-right">
                                                    <input id="someSwitchOptionPrimary" name="someSwitchOption001" type="checkbox" />
                                                    <label for="someSwitchOptionPrimary" class="label-primary"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Bootstrap Switch Success
                                                <div class="material-switch pull-right">
                                                    <input id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox" />
                                                    <label for="someSwitchOptionSuccess" class="label-success"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Bootstrap Switch Info
                                                <div class="material-switch pull-right">
                                                    <input id="someSwitchOptionInfo" name="someSwitchOption001" type="checkbox" />
                                                    <label for="someSwitchOptionInfo" class="label-info"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Bootstrap Switch Warning
                                                <div class="material-switch pull-right">
                                                    <input id="someSwitchOptionWarning" name="someSwitchOption001" type="checkbox" />
                                                    <label for="someSwitchOptionWarning" class="label-warning"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Bootstrap Switch Danger
                                                <div class="material-switch pull-right">
                                                    <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox" />
                                                    <label for="someSwitchOptionDanger" class="label-danger"></label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="form-group m-0 mt-2">
                                            <label class="form-label">Select Color</label>
                                            <div class="row ">
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="azure" class="colorinput-input" checked />
                                                            <span class="colorinput-color bg-azure"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="indigo" class="colorinput-input"  />
                                                            <span class="colorinput-color bg-indigo"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="purple" class="colorinput-input" />
                                                            <span class="colorinput-color bg-purple"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="pink" class="colorinput-input" />
                                                            <span class="colorinput-color bg-pink"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="red" class="colorinput-input" />
                                                            <span class="colorinput-color bg-red"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="orange" class="colorinput-input" />
                                                            <span class="colorinput-color bg-orange"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="yellow" class="colorinput-input" />
                                                            <span class="colorinput-color bg-yellow"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="lime" class="colorinput-input" />
                                                            <span class="colorinput-color bg-lime"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="green" class="colorinput-input" />
                                                            <span class="colorinput-color bg-green"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="teal" class="colorinput-input" />
                                                            <span class="colorinput-color bg-teal"></span>
                                                        </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row-->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Default Input Groups</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <span class="input-group-text" id="basic-addon2">@example.com</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                                <span class="input-group-text br-0">@</span>
                                                <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <button class="btn btn-light" type="button" id="button-addon1">Button</button>
                                                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                <button class="btn btn-light" type="button" id="button-addon2">Button</button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                                </ul>
                                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Input Groups Sizes</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Bootstrap Fileuploads</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label mt-0">Default file input example</label>
                                            <input class="form-control" type="file">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Small File Input</label>
                                            <input class="form-control form-control-sm" type="file">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Large File Input</label>
                                            <input class="form-control form-control-lg" type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                        <!--Row-->
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Form Elements With Sizes</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row p-0 m-0">
                                            <div class="form-label mt-0 p-0">Form-control small sizes</div>
                                            <div class="col-xl-2 p-0">
                                                <div class="">
                                                    <button type="button" class="btn btn-primary btn-sm mb-3 btn-block">Small button</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group">
                                                    <input class="form-control form-control-sm" placeholder="from-control-sm" type="text">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group select2-sm">
                                                    <select class="form-select form-select-sm select2" id="inputGroupSelect013">
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 ps-1 pe-1">
                                                <div class="form-group">
                                                    <label class="custom-control custom-radio mb-0 mt-1">
                                                        <input type="radio" class="custom-control-input" name="example-radios" value="option1">
                                                        <span class="custom-control-label">Radio example</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 ps-1 pe-1">
                                                <div class="form-group">
                                                    <label class="custom-control custom-checkbox mb-0">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">checkbox example</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 ps-1 pe-1">
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch mb-0">
                                                            <input type="checkbox" name="custom-switch-radio" class="custom-switch-input">
                                                            <span class="custom-switch-indicator"></span>
                                                            <span class="custom-switch-description">Toggle example</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-0 m-0">
                                            <div class="form-label mt-4 p-0">Form-control Medium sizes</div>
                                            <div class="col-xl-2 p-0">
                                                <div class="">
                                                    <button type="button" class="btn btn-secondary mb-3 btn-block">Default button</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="from-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group">
                                                    <select class="form-select form-select select2" id="inputGroupSelect01">
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 ps-1 pe-1">
                                                <div class="form-group">
                                                    <label class="custom-control custom-radio-md mb-0 mt-1">
                                                            <input type="radio" class="custom-control-input" name="example-radios2" value="option2">
                                                            <span class="custom-control-label">Radio example</span>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 ps-1 pe-1">
                                                <div class="form-group">
                                                    <label class="custom-control custom-checkbox-md mb-0">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3">
                                                            <span class="custom-control-label">checkbox example</span>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 ps-1 pe-1">
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch mb-0">
                                                            <input type="checkbox" name="custom-switch-radio" class="custom-switch-input">
                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                            <span class="custom-switch-description">Toggle example</span>
                                                        </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-0 m-0">
                                            <div class="form-label mt-4 p-0">Form-control Large sizes</div>
                                            <div class="col-xl-2 p-0">
                                                <div class="">
                                                    <button type="button" class="btn btn-success btn-lg mb-3 btn-block me-2">Large button</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group">
                                                    <input class="form-control form-control-lg" placeholder="from-control-sm" type="text">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group select2-lg">
                                                    <select class="form-select form-select-lg select2" id="inputGroupSelect012">
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 ps-1 pe-1">
                                                <div class="form-group">
                                                    <label class="custom-control custom-radio-lg mb-0">
                                                            <input type="radio" class="custom-control-input" name="example-radios2" value="option2">
                                                            <span class="custom-control-label">Radio example</span>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 ps-1 pe-1">
                                                <div class="form-group">
                                                    <label class="custom-control custom-checkbox-lg mb-0">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3">
                                                            <span class="custom-control-label">checkbox example</span>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 ps-1 pe-1">
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch mb-0">
                                                        <input type="checkbox" name="custom-switch-radio" class="custom-switch-input">
                                                        <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                                        <span class="custom-switch-description">Toggle example</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

        @endsection

    @section('scripts')

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2.js')}}"></script>

    @endsection
