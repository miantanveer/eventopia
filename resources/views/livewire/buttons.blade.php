@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                         <!-- PAGE-HEADER -->
                         <div class="page-header">
                            <h1 class="page-title">Buttons</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Componets</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Buttons</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row ">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Default Button</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use any of the available <code class="highlighter-rouge">.btn btn-</code> classes to quickly create a styled button.</p>
                                            <div class="example">
                                                <div class="btn-list">
                                                    <a href="javascript:void(0)" class="btn btn-default">Default</a>
                                                    <a href="javascript:void(0)" class="btn btn-primary">Primary</a>
                                                    <a href="javascript:void(0)" class="btn btn-secondary">Secondary</a>
                                                    <a href="javascript:void(0)" class="btn btn-success">Success</a>
                                                    <a href="javascript:void(0)" class="btn btn-info">Info</a>
                                                    <a href="javascript:void(0)" class="btn btn-warning">Warning</a>
                                                    <a href="javascript:void(0)" class="btn btn-danger">Danger</a>
                                                    <a href="javascript:void(0)" class="btn btn-link">Link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Disable Default Button</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use any of the available <code class="highlighter-rouge">.btn btn-</code> classes you must add the <code class="highlighter-rouge">.disabled</code> class to make it visually appear disabled.</p>
                                            <div class="example">
                                                <div class="btn-list">
                                                    <a href="javascript:void(0)" class="btn btn-default disabled">Default</a>
                                                    <a href="javascript:void(0)" class="btn btn-primary disabled">Primary</a>
                                                    <a href="javascript:void(0)" class="btn btn-secondary disabled">Secondary</a>
                                                    <a href="javascript:void(0)" class="btn btn-success disabled">Success</a>
                                                    <a href="javascript:void(0)" class="btn btn-info disabled">Info</a>
                                                    <a href="javascript:void(0)" class="btn btn-warning disabled">Warning</a>
                                                    <a href="javascript:void(0)" class="btn btn-danger disabled">Danger</a>
                                                    <a href="javascript:void(0)" class="btn btn-link disabled">Link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!--ROW-1 CLOSED-->

                        <!-- ROW-2 OPEN -->
                        <div class="row ">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Rounded Button</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use any of the available <code class="highlighter-rouge">.btn-pill</code> classes to quickly create a styled button.</p>
                                            <div class="example">
                                                <div class="btn-list">
                                                    <a href="javascript:void(0)" class="btn btn-default btn-pill">Default</a>
                                                    <a href="javascript:void(0)" class="btn btn-primary btn-pill">Primary</a>
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-pill">Secondary</a>
                                                    <a href="javascript:void(0)" class="btn btn-success btn-pill">Success</a>
                                                    <a href="javascript:void(0)" class="btn btn-info btn-pill">Info</a>
                                                    <a href="javascript:void(0)" class="btn btn-warning btn-pill">Warning</a>
                                                    <a href="javascript:void(0)" class="btn btn-danger btn-pill">Danger</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Outline Button</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use any of the available <code class="highlighter-rouge">.btn-outline-</code> classes to quickly create a styled button.</p>
                                            <div class="example">
                                                <div class="btn-list">
                                                    <a href="javascript:void(0)" class="btn btn-outline-default">Default</a>
                                                    <a href="javascript:void(0)" class="btn btn-outline-primary">Primary</a>
                                                    <a href="javascript:void(0)" class="btn btn-outline-secondary">Secondary</a>
                                                    <a href="javascript:void(0)" class="btn btn-outline-success">Success</a>
                                                    <a href="javascript:void(0)" class="btn btn-outline-info">Info</a>
                                                    <a href="javascript:void(0)" class="btn btn-outline-warning">Warning</a>
                                                    <a href="javascript:void(0)" class="btn btn-outline-danger">Danger</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-2 CLOSED -->

                        <!-- ROW-3 OPEN -->
                        <div class="row ">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Light Button</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use any of the available <code class="highlighter-rouge">.btn-light-</code> classes to quickly create a styled button.</p>
                                            <div class="example">
                                                <div class="btn-list">
                                                    <a href="javascript:void(0)" class="btn btn-default-light">Default</a>
                                                    <a href="javascript:void(0)" class="btn btn-primary-light ">Primary</a>
                                                    <a href="javascript:void(0)" class="btn btn-secondary-light ">Secondary</a>
                                                    <a href="javascript:void(0)" class="btn btn-success-light ">Success</a>
                                                    <a href="javascript:void(0)" class="btn btn-info-light ">Info</a>
                                                    <a href="javascript:void(0)" class="btn btn-warning-light ">Warning</a>
                                                    <a href="javascript:void(0)" class="btn btn-danger-light ">Danger</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Button with icon</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Basic buttons are traditional buttons with borders color opitons.</p>
                                            <div class="example">
                                                <div class="btn-list btn-list-icon">
                                                    <button type="button" class="btn btn-dark"><i class="fe fe-upload me-2"></i>Upload</button>
                                                    <button type="button" class="btn btn-warning"><i class="fe fe-heart me-2"></i>I like</button>
                                                    <button type="button" class="btn btn-success"><i class="fe fe-check me-2"></i>I agree</button>
                                                    <button type="button" class="btn btn-primary"><i class="fe fe-plus me-2"></i>More</button>
                                                    <button type="button" class="btn btn-danger"><i class="fe fe-link me-2"></i>Link</button>
                                                    <button type="button" class="btn btn-info"><i class="fe fe-message-circle me-2"></i>Comment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-3 CLOSED -->

                        <!-- ROW-4 OPEN -->
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Button size</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</p>
                                            <div class="example">
                                                <div class="btn-list">
                                                    <div class="row row-cols-4">
                                                        <div class="col mb-2">
                                                            <div class="btn-list">
                                                                <button type="button" class="btn btn-primary btn-sm mb-1">Small button</button>
                                                                <button type="button" class="btn btn-primary btn-sm mb-1">Small button</button>
                                                            </div>
                                                        </div>
                                                        <div class="col mb-2">
                                                            <button type="button" class="btn btn-secondary mb-1">Default button</button>
                                                            <button type="button" class="btn btn-secondary mb-1">Default button</button>
                                                        </div>
                                                        <div class="col mb-2">
                                                            <button type="button" class="btn btn-success btn-lg mb-1 me-1">Large button</button>
                                                            <button type="button" class="btn btn-success btn-lg mb-1">Large button</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Block Button</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Add <code class="highlighter-rouge">.d-grid</code> or <code class="highlighter-rouge">.gap-2</code> for additional sizes.</p>
                                            <div class="example">
                                                <div class="d-grid gap-2">
                                                    <button type="button" class="btn btn-secondary-light mb-1">Block button</button>
                                                    <button type="button" class="btn btn-danger-light mb-1">Block button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-4 CLOSED -->

                        <!-- ROW-5 OPEN -->
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Icon buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Icon only button. Add <code class="highlighter-rouge">.btn-icon</code> classes to quickly create a styled button..</p>
                                            <div class="example">
                                                <div class="btn-list">
                                                    <button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-activity"></i></button>
                                                    <button type="button" class="btn btn-icon  btn-github"><i class="fe fe-github"></i></button>
                                                    <button type="button" class="btn btn-icon  btn-success"><i class="fe fe-bell"></i></button>
                                                    <button type="button" class="btn btn-icon  btn-warning"><i class="fe fe-star"></i></button>
                                                    <button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i></button>
                                                    <button type="button" class="btn btn-icon  btn-purple"><i class="fe fe-mail"></i></button>
                                                    <button type="button" class="btn btn-icon  btn-secondary"><i class="fe fe-git-merge"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Social buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>You can use only icons.</p>
                                            <div class="example">
                                                <div class="btn-list">
                                                    <button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
                                                    <button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
                                                    <button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
                                                    <button type="button" class="btn btn-icon btn-youtube"><i class="fa fa-youtube"></i></button>
                                                    <button type="button" class="btn btn-icon btn-vimeo"><i class="fa fa-vimeo"></i></button>
                                                    <button type="button" class="btn btn-icon btn-dribbble"><i class="fa fa-dribbble"></i></button>
                                                    <button type="button" class="btn btn-icon btn-github"><i class="fa fa-github"></i></button>
                                                    <button type="button" class="btn btn-icon btn-instagram"><i class="fa fa-instagram"></i></button>
                                                    <button type="button" class="btn btn-icon btn-pinterest"><i class="fa fa-pinterest"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-5 CLOSED -->

                        <!-- ROW-6 OPEN -->
                        <div class="row ">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Button Tags</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Add <code class="highlighter-rouge">.btn</code>, <code class="highlighter-rouge">&lt;input&gt;</code>, <code class="highlighter-rouge">&lt;a&gt;</code>classes to quickly create a styled button..</p>
                                            <div class="example">
                                                <div class="btn-list">
                                                    <a class="btn btn-primary" href="javascript:void(0)" role="button">Link</a>
                                                    <button class="btn btn-primary" type="submit">Button</button>
                                                    <input class="btn btn-primary" type="button" value="Input">
                                                    <input class="btn btn-primary" type="submit" value="Submit">
                                                    <input class="btn btn-primary" type="reset" value="Reset">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Toggle buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Add <code class="highlighter-rouge">data-bs-toggle="button"</code> to toggle a button <code class="highlighter-rouge">.active</code> class & required <code class="highlighter-rouge">aria-pressed="true"</code>.</p>
                                            <div class="example">
                                                <div class="btn-list">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="button">Toggle button</button>
                                                    <button type="button" class="btn btn-primary active" data-bs-toggle="button"  aria-pressed="true">Active toggle button</button>
                                                    <button type="button" class="btn btn-primary" disabled data-bs-toggle="button" >Disabled toggle button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-6 CLOSED -->

                        <!-- ROW-7 OPEN -->
                        <div class="row ">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Color variations</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>The classic button, in different colors.</p>
                                            <div class="example">
                                                <div class="btn-list">
                                                    <a href="javascript:void(0)" class="btn btn-blue">Blue</a>
                                                    <a href="javascript:void(0)" class="btn btn-azure">Azure</a>
                                                    <a href="javascript:void(0)" class="btn btn-indigo">Indigo</a>
                                                    <a href="javascript:void(0)" class="btn btn-purple">Purple</a>
                                                    <a href="javascript:void(0)" class="btn btn-pink">Pink</a>
                                                    <a href="javascript:void(0)" class="btn btn-red">Red</a>
                                                    <a href="javascript:void(0)" class="btn btn-orange">Orange</a>
                                                    <a href="javascript:void(0)" class="btn btn-yellow">Yellow</a>
                                                    <a href="javascript:void(0)" class="btn btn-lime">Lime</a>
                                                    <a href="javascript:void(0)" class="btn btn-green">Green</a>
                                                    <a href="javascript:void(0)" class="btn btn-teal">Teal</a>
                                                    <a href="javascript:void(0)" class="btn btn-cyan">Cyan</a>
                                                    <a href="javascript:void(0)" class="btn btn-gray">Gray</a>
                                                    <a href="javascript:void(0)" class="btn btn-gray-dark">Dark gray</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Social buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>The classic button, in different social classes.</p>
                                            <div class="example">
                                                <div class="btn-list">
                                                    <button type="button" class="btn btn-facebook"><i class="fa fa-facebook me-2"></i>Facebook</button>
                                                    <button type="button" class="btn btn-twitter"><i class="fa fa-twitter me-2"></i>Twitter</button>
                                                    <button type="button" class="btn btn-google"><i class="fa fa-google me-2"></i>Google</button>
                                                    <button type="button" class="btn btn-youtube"><i class="fa fa-youtube me-2"></i>Youtube</button>
                                                    <button type="button" class="btn btn-vimeo"><i class="fa fa-vimeo me-2"></i>Vimeo</button>
                                                    <button type="button" class="btn btn-dribbble"><i class="fa fa-dribbble me-2"></i>Dribble</button>
                                                    <button type="button" class="btn btn-github"><i class="fa fa-github me-2"></i>Github</button>
                                                    <button type="button" class="btn btn-instagram"><i class="fa fa-instagram me-2"></i>Instagram</button>
                                                    <button type="button" class="btn btn-pinterest"><i class="fa fa-pinterest me-2"></i>Pinterest</button>
                                                    <button type="button" class="btn btn-vk"><i class="fa fa-vk me-2"></i>VKontakte</button>
                                                    <button type="button" class="btn btn-rss"><i class="fa fa-rss me-2"></i>RSS</button>
                                                    <button type="button" class="btn btn-flickr"><i class="fa fa-flickr me-2"></i>Flickr</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-7 CLOSED -->

                        <!-- ROW-8 OPEN -->
                        <div class="row ">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Loading button</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Add <code class="highlighter-rouge">.btn-loading</code> to use a loading state on a button. The width of the button depends on the length of the text inside Since the loading spinner is implemented using the element.</p>
                                            <div class="example">
                                                <div class="btn-list">
                                                    <button type="button" class="btn btn-primary btn-loading">Button text</button><br>
                                                    <button type="button" class="btn btn-success btn-loading btn-icon"><i class="fe fe-check"></i></button>
                                                    <button type="button" class="btn btn-warning btn-loading btn-sm">Button text</button><br>
                                                    <button type="button" class="btn btn-danger btn-loading btn-lg">Button text</button>
                                                    <button type="button" class="btn btn-info btn-loading d-grid">Button text</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Button dropdown</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Wrap the dropdown’s toggle using different colors and icons implemented in different dropdowns styles (your button or link) and the dropdown menu within <code class="highlighter-rouge">.dropdown</code>, or another
                                                element that declares <code class="highlighter-rouge">position: relative;</code>. Dropdowns can be triggered from <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;button&gt;</code>                                            elements to better fit your potential needs.</p>
                                            <div class="example">
                                                <div class="btn-list">
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                                                <i class="fe fe-calendar"></i>
                                                            </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
                                                                <i class="fe fe-calendar me-2"></i>Show calendar
                                                            </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">
                                                                Show calendar
                                                            </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-8 CLOSED -->

                        <!-- ROW-9 OPEN -->
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Button Group</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use any of the available <code class="highlighter-rouge">.btn</code> in <code class="highlighter-rouge">.btn-group</code> classes to quickly create a styled button.</p>
                                            <div class="example">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-primary">Left</button>
                                                    <button type="button" class="btn btn-primary">Middle</button>
                                                    <button type="button" class="btn btn-primary">Right</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Button Toolbar</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Combine sets of button groups into button toolbars for more complex components.</p>
                                            <div class="example">
                                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                    <div class="btn-group me-2 mb-1" role="group" aria-label="First group">
                                                        <button type="button" class="btn btn-primary">1</button>
                                                        <button type="button" class="btn btn-primary">2</button>
                                                        <button type="button" class="btn btn-primary">3</button>
                                                        <button type="button" class="btn btn-primary">4</button>
                                                    </div>
                                                    <div class="btn-group me-2 mb-1" role="group" aria-label="Second group">
                                                        <button type="button" class="btn btn-secondary">5</button>
                                                        <button type="button" class="btn btn-secondary">6</button>
                                                        <button type="button" class="btn btn-secondary">7</button>
                                                    </div>
                                                    <div class="btn-group mb-1" role="group" aria-label="Third group">
                                                        <button type="button" class="btn btn-info">8</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-9 CLOSED -->

                        <!-- ROW-10 OPEN -->
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Outline Button Group</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use any of the available <code class="highlighter-rouge">.btn .btn-outline-</code> in <code class="highlighter-rouge">.btn-group</code> classes to quickly create a styled button.</p>
                                            <div class="example">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-outline-primary">Left</button>
                                                    <button type="button" class="btn btn-outline-primary">Middle</button>
                                                    <button type="button" class="btn btn-outline-primary">Right</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Min-Width Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Add <code class="highlighter-rouge">.btn</code>, <code class="highlighter-rouge">.w-xs</code>, <code class="highlighter-rouge">.w-sm</code>, <code class="highlighter-rouge">.w-md</code>, <code class="highlighter-rouge">.w-lg</code>,
                                                classes to quickly create a styled button..</p>
                                            <div class="example">
                                                <div class="btn-list">
                                                    <button type="button" class="btn btn-primary w-xs mb-1">Min-XS</button>
                                                    <button type="button" class="btn btn-secondary w-sm mb-1">Min-SM</button>
                                                    <button type="button" class="btn btn-danger w-md mb-1">Min-MD</button>
                                                    <button type="button" class="btn btn-success w-lg mb-1">Min-LG</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-10 CLOSED -->

                        <!-- ROW-11 OPEN -->
                        <div class="row ">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Checkbox Button Group</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use any of the available <code class="highlighter-rouge">.btn</code> in <code class="highlighter-rouge">.btn-group</code> classes to quickly create a styled button.</p>
                                            <div class="example">
                                                <div class="btn-list checkboxbtns">
                                                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                        <input type="checkbox" class="btn-check" id="btncheck1" >
                                                        <label class="btn btn-outline-primary" for="btncheck1">Checkbox</label>

                                                        <input type="checkbox" class="btn-check" id="btncheck2" >
                                                        <label class="btn btn-outline-primary" for="btncheck2">Checkbox</label>

                                                        <input type="checkbox" class="btn-check" id="btncheck3">
                                                        <label class="btn btn-outline-primary" for="btncheck3">Checkbox</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-6 ">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Radio Button Group</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use any of the available <code class="highlighter-rouge">.btn</code> in <code class="highlighter-rouge">.btn-group</code> classes to quickly create a styled button.</p>
                                            <div class="example">
                                                <div class="btn-group radiobtns" role="group" aria-label="Basic radio toggle button group">
                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio111" checked>
                                                    <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio112">
                                                    <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio113">
                                                    <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-11 CLOSED -->

                        <!-- ROW-12 OPEN -->
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Button Group Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use any of the available <code class="highlighter-rouge">.btn-group-*</code> in <code class="highlighter-rouge">.btn-group</code> classes to quickly create a styled button.</p>
                                            <div class="example">
                                                <div class="btn-group btn-group-lg mb-3" role="group">
                                                    <button type="button" class="btn btn-primary">Left</button>
                                                    <button type="button" class="btn btn-primary">Middle</button>
                                                    <button type="button" class="btn btn-primary">Right</button>
                                                </div><br>
                                                <div class="btn-group mb-3" role="group">
                                                    <button type="button" class="btn btn-primary">Left</button>
                                                    <button type="button" class="btn btn-primary">Middle</button>
                                                    <button type="button" class="btn btn-primary">Right</button>
                                                </div><br>
                                                <div class="btn-group btn-group-sm" role="group">
                                                    <button type="button" class="btn btn-primary">Left</button>
                                                    <button type="button" class="btn btn-primary">Middle</button>
                                                    <button type="button" class="btn btn-primary">Right</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Vertical Button Group</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>Use any of the available <code class="highlighter-rouge">.btn-group-vertical</code> classes to quickly create a styled button.</p>
                                            <div class="example">
                                                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                    <button type="button" class="btn btn-primary">Button</button>
                                                    <button type="button" class="btn btn-primary">Button</button>
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                                            Dropdown
                                                        </button>
                                                        <ul class="dropdown-menu" data-popper-placement="bottom-start">
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Dropdown link</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                    <button type="button" class="btn btn-primary">Button</button>
                                                    <button type="button" class="btn btn-primary">Button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-12 CLOSED -->

        @endsection

    @section('scripts')



    @endsection
