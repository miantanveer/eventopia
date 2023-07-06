@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                      <!-- PAGE-HEADER -->
                      <div class="page-header">
                        <h1 class="page-title">Typography</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Componets</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Typography</li>
                    </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- ROW-1 OPEN -->
                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Default Heading Text</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-wrap">
                                        <p>Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
                                        <div class="example">
                                            <h1>h1. Heading</h1>
                                            <h2>h2. Heading</h2>
                                            <h3>h3. Heading</h3>
                                            <h4>h4. Heading</h4>
                                            <h5>h5. Heading</h5>
                                            <h6>h6. Heading</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL-END -->
                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Heading with color Text</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-wrap">
                                        <p>Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
                                        <div class="example">
                                            <h1 class="text-primary">h1. Heading</h1>
                                            <h2 class="text-secondary">h2. Heading</h2>
                                            <h3 class="text-success">h3. Heading</h3>
                                            <h4 class="text-danger">h4. Heading</h4>
                                            <h5 class="text-info">h5. Heading</h5>
                                            <h6 class="text-warning">h6. Heading</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL-END -->
                    </div>
                    <!-- ROW-1 CLOSED -->

                    <!-- ROW-1 OPEN -->
                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Display Headings</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-wrap">
                                        <p>Examples using standard <code>display-1</code> to <code>display-6</code> html tags</p>
                                        <div class="example">
                                            <h2 class="display-1">Display 1</h2>
                                            <h2 class="display-2">Display 2</h2>
                                            <h2 class="display-3">Display 3</h2>
                                            <h2 class="display-4">Display 4</h2>
                                            <h2 class="display-5">Display 5</h2>
                                            <h2 class="display-6">Display 6</h2>
                                            <h2 class="display-7">Display 7</h2>
                                            <h2 class="display-8">Display 8</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL-END -->
                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Display headings with color Text</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-wrap">
                                        <p>Examples using standard <code>display-1</code> to <code>display-6</code> html tags</p>
                                        <div class="example">
                                            <h2 class="display-1 text-primary">Display 1</h2>
                                            <h2 class="display-2 text-secondary">Display 2</h2>
                                            <h2 class="display-3 text-success">Display 3</h2>
                                            <h2 class="display-4 text-danger">Display 4</h2>
                                            <h2 class="display-5 text-info">Display 5</h2>
                                            <h2 class="display-6 text-warning">Display 6</h2>
                                            <h2 class="display-7 text-pink">Display 7</h2>
                                            <h2 class="display-8 text-lime">Display 8</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL-END -->
                    </div>
                    <!-- ROW-1 CLOSED -->

                    <!-- ROW-3 OPEN -->
                    <div class="row ">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Line Height</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-wrap">
                                        <p>Utilities for controlling the leading (line height) of an element.</p>
                                        <div class="example">
                                            <p class="leading-none">Lorem ipsum dolor sit amet.<br /> Dolor sit amet.
                                            </p>
                                            <p class="leading-tight">Lorem ipsum dolor sit amet.<br /> Dolor sit amet.
                                            </p>
                                            <p class="leading-normal">Lorem ipsum dolor sit amet.<br /> Dolor sit amet.
                                            </p>
                                            <p class="leading-loose m-0">Lorem ipsum dolor sit amet.<br /> Dolor sit amet.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL-END -->
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Inline text elements</h3>
                                </div>
                                <div class="card-body">
                                    <div class="example">
                                        <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                                        <p><del>This line of text is meant to be treated as deleted text.</del></p>
                                        <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                        <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                                        <p><u>This line of text will render as underlined.</u></p>
                                        <p><small>This line of text is meant to be treated as fine print.</small></p>
                                        <p><strong>This line rendered as bold text.</strong></p>
                                        <p class="mb-0"><em>This line rendered as italicized text.</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL-END -->
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Text alignment</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-wrap">
                                        <p>Easily realign text to components with text alignment classes.</p>
                                        <div class="example">
                                            <p class="text-start">Left aligned text on all viewport sizes.</p>
                                            <p class="text-center">Center aligned text on all viewport sizes.</p>
                                            <p class="text-end">Right aligned text on all viewport sizes.</p>
                                            <p class="text-justify m-0">Both aligned text on all viewport sizes. Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL-END -->
                    </div>
                    <!-- ROW-3 CLOSED -->

                    <!-- ROW-4 OPEN -->
                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Paragraph Text</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-wrap">
                                        <div class="example">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                                                ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                            <p class="lead">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid. The former case isn't worth discussing here, but the latter requires a closer look.</p>
                                            <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL-END -->
                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Letter spacing</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-wrap">
                                        <p>Utilities for controlling the tracking (letter spacing) of an element.</p>
                                        <div class="example">
                                            <p class="tracking-tight">Lorem ipsum dolor sit amet. Tight letter spacing.</p>
                                            <p class="tracking-normal">Lorem ipsum dolor sit amet. Normal letter spacing.</p>
                                            <p class="tracking-wide m-0">Lorem ipsum dolor sit amet. Wide letter spacing.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL-END -->
                    </div>
                    <!-- ROW-4 CLOSED -->

                    <!-- ROW-5 OPEN -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Description list alignment</h3>
                                </div>
                                <div class="card-body">
                                    <div class="example">
                                        <dl class="row">
                                            <dt class="col-sm-3">Description lists</dt>
                                            <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                                            <dt class="col-sm-3">Term</dt>
                                            <dd class="col-sm-9">
                                                <p>Definition for the term.</p>
                                                <p>And some more placeholder definition text.</p>
                                            </dd>

                                            <dt class="col-sm-3">Another term</dt>
                                            <dd class="col-sm-9">This definition is short, so no extra paragraphs or anything.</dd>

                                            <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                            <dd class="col-sm-9">This can be useful when space is tight. Adds an ellipsis at the end.</dd>

                                            <dt class="col-sm-3">Nesting</dt>
                                            <dd class="col-sm-9">
                                                <dl class="row">
                                                    <dt class="col-sm-4">Nested definition list</dt>
                                                    <dd class="col-sm-8">I heard you like definition lists. Let me put a definition list inside your definition list.</dd>
                                                </dl>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL-END -->
                    </div>
                    <!-- ROW-5 CLOSED -->

                    <!-- ROW-6 OPEN -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Blockquotes</h3>
                                </div>
                                <div class="card-body">
                                    <p>The HTML spec requires that blockquote attribution be placed outside the <code class="highlighter-rouge">&lt;blockquote&gt;</code>.</p>
                                    <div class="example mb-5">
                                        <blockquote class="blockquote">
                                            <p class="mt-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                        </blockquote>
                                    </div>
                                    <p>Use text utilities as needed to change the alignment of your blockquote..</p>
                                    <div class="example mb-5">
                                        <blockquote class="blockquote text-center">
                                            <p class="mt-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                        </blockquote>
                                    </div>
                                    <p>The HTML spec requires that blockquote attribution be placed in the <code class="highlighter-rouge">.blockquote-reverse</code>.</p>
                                    <div class="example">
                                        <blockquote class="blockquote blockquote-reverse">
                                            <p class="mt-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-6 CLOSED -->

        @endsection

    @section('scripts')



    @endsection
