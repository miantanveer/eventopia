@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Colors</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Componets</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Colors</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Contextual Colors</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="row">
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-primary text-white">
                                                            <p class="mb-0">#6c5ffc</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Primary</strong>
                                                            <p class="mb-0 text-primary">.bg-primary</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-info text-white">
                                                            <p class="mb-0">#1170e4</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Info</strong>
                                                            <p class="mb-0 text-info">.bg-info</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-secondary text-white">
                                                            <p class="mb-0">#05c3fb</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Secondary</strong>
                                                            <p class="mb-0 text-secondary">.bg-secondary</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-warning text-white">
                                                            <p class="mb-0">#f7b731</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Warning</strong>
                                                            <p class="mb-0 text-warning">.bg-warning</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-danger text-white">
                                                            <p class="mb-0">#e82646</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Danger</strong>
                                                            <p class="mb-0 text-danger">.bg-danger</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-success text-white">
                                                            <p class="mb-0">#09ad95</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Success</strong>
                                                            <p class="mb-0 text-success">.bg-success</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- COL END -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Transparent Colors</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="row">
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-primary-transparent text-primary">
                                                            <p class="mb-0">rgba(108, 95, 252, 0.1)</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Primary</strong>
                                                            <p class="mb-0 text-primary">.bg-primary-transparent</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-secondary-transparent text-secondary">
                                                            <p class="mb-0">rgba(5, 195, 251, 0.1)</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Secondary</strong>
                                                            <p class="mb-0 text-secondary">.bg-secondary-transparent </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-success-transparent text-success">
                                                            <p class="mb-0">rgba(0, 230, 130, 0.1)</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Success</strong>
                                                            <p class="mb-0 text-success">.bg-success-transparent</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-warning-transparent text-warning">
                                                            <p class="mb-0">rgba(255, 162, 43, 0.1)</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Warning</strong>
                                                            <p class="mb-0 text-warning">.bg-warning-transparent</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-danger-transparent text-danger">
                                                            <p class="mb-0">rgba(255, 56, 43, 0.1)</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Danger</strong>
                                                            <p class="mb-0 text-danger">.bg-danger-transparent</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-info-transparent text-info">
                                                            <p class="mb-0">#09ad95</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Info</strong>
                                                            <p class="mb-0 text-info">.bg-info-transparent</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- COL END -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Gradient Colors</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="row">
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-primary-gradient text-white">
                                                            <p class="mb-0">.bg-primary-gradient</p>
                                                        </div>
                                                        <div class="card-body my-auto">
                                                            <h5 class="mb-0 text-primary fw-semibold">Primary</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-secondary-gradient text-white">
                                                            <p class="mb-0">.bg-secondary-gradient</p>
                                                        </div>
                                                        <div class="card-body my-auto">
                                                            <p class="mb-0 text-secondary fw-semibold">Secondary </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-success-gradient text-white">
                                                            <p class="mb-0">.bg-success-gradient</p>
                                                        </div>
                                                        <div class="card-body my-auto">
                                                            <p class="mb-0 text-success fw-semibold">Success</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-warning-gradient text-white">
                                                            <p class="mb-0">.bg-warning-gradient</p>
                                                        </div>
                                                        <div class="card-body my-auto">
                                                            <p class="mb-0 text-warning fw-semibold">Warning</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-danger-gradient text-white">
                                                            <p class="mb-0">.bg-danger-gradient</p>
                                                        </div>
                                                        <div class="card-body my-auto">
                                                            <p class="mb-0 text-danger fw-semibold">Danger</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-info-gradient text-white">
                                                            <p class="mb-0">.bg-info-gradient</p>
                                                        </div>
                                                        <div class="card-body my-auto">
                                                            <p class="mb-0 text-info fw-semibold">Info</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <table class="table border">
                                        <thead>
                                            <tr>
                                                <th class="wd-40p">Class Reference</th>
                                                <th class="wd-60p">Values</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><code class="pd-0 bg-transparent">class="bg-primary-gradient"</code></td>
                                                <td>linear-gradient(to bottom right, #6c5ffc 0%, #8e77fa 100%)</td>
                                            </tr>
                                            <tr>
                                                <td><code class="pd-0 bg-transparent">class="bg-secondary-gradient"</code></td>
                                                <td>linear-gradient(to bottom right, #82cff2 0%, #28b7f9 100%)</td>
                                            </tr>
                                            <tr>
                                                <td><code class="pd-0 bg-transparent">class="bg-success-gradient"</code></td>
                                                <td>linear-gradient(to bottom right, #1ea38f 0%, #5cf9e2 100%)</td>
                                            </tr>
                                            <tr>
                                                <td><code class="pd-0 bg-transparent">class="bg-warning-gradient"</code></td>
                                                <td>linear-gradient(to bottom right, #f66b4e 0%, #fbc434 100%)</td>
                                            </tr>
                                            <tr>
                                                <td><code class="pd-0 bg-transparent">class="bg-danger-gradient"</code></td>
                                                <td>linear-gradient(to bottom right, #b51b35 0%, #fd4a68 100%)</td>
                                            </tr>
                                            <tr>
                                                <td><code class="pd-0 bg-transparent">class="bg-info-gradient"</code></td>
                                                <td>linear-gradient(to bottom right, #1e63c3 0%, #00f2fe 100%)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Other Colors</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="row">
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-blue text-white">
                                                            <p class="mb-0">#3223f1</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Blue</strong>
                                                            <p class="mb-0 text-blue">.bg-blue</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-teal text-white">
                                                            <p class="mb-0">#1caf9f</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Teal</strong>
                                                            <p class="mb-0 text-teal">.bg-teal</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-azure text-white">
                                                            <p class="mb-0">#45aaf2</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Azure</strong>
                                                            <p class="mb-0 text-azure">.bg-azure</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-orange text-white">
                                                            <p class="mb-0">#fc7303</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Orange</strong>
                                                            <p class="mb-0 text-orange">.bg-orange</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-cyan text-white">
                                                            <p class="mb-0">#007ea7</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Cyan</strong>
                                                            <p class="mb-0 text-cyan">.bg-cyan</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-yellow text-white">
                                                            <p class="mb-0">#FBB034</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Yellow</strong>
                                                            <p class="mb-0 text-yellow">.bg-yellow</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-gray text-white">
                                                            <p class="mb-0">#5a6970</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Gray</strong>
                                                            <p class="mb-0 text-gray">.bg-gray</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-purple text-white">
                                                            <p class="mb-0">#8927ec</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Purple</strong>
                                                            <p class="mb-0 text-purple">.bg-purple</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-lime text-white">
                                                            <p class="mb-0">#7bd235</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Lime</strong>
                                                            <p class="mb-0 text-lime">.bg-lime</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-gray-dark text-white">
                                                            <p class="mb-0">#343a40</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Gray-dark</strong>
                                                            <p class="mb-0 text-gray-dark">.bg-gray-dark</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-green text-white">
                                                            <p class="mb-0">#4ecc48</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Green</strong>
                                                            <p class="mb-0 text-green">.bg-green</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-pink text-white">
                                                            <p class="mb-0">#fc5296</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Pink</strong>
                                                            <p class="mb-0 text-pink">.bg-pink</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-secondary text-white">
                                                            <p class="mb-0">#05c3fb</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Secondary</strong>
                                                            <p class="mb-0 text-secondary">.bg-secondary</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-red text-white">
                                                            <p class="mb-0">#e73827</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Red</strong>
                                                            <p class="mb-0 text-red">.bg-red</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card card-aside color-card-radius">
                                                        <div class="card-header bg-indigo text-white">
                                                            <p class="mb-0">#6574cd</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <strong class="mb-0">Indigo</strong>
                                                            <p class="mb-0 text-indigo">.bg-indigo</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

        @endsection

    @section('scripts')



    @endsection
