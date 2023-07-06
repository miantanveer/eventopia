@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                       <!-- PAGE-HEADER -->
                       <div class="page-header">
                        <h1 class="page-title">Table</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Table</li>
                    </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- Row -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Simple Table</h3>
                                </div>
                                <div class="card-body">
                                    <p>Using the most basic table markup, here’s how <code class="highlighter-rouge">.table</code> based tables look in Bootstrap.</p>
                                    <div class="table-responsive">
                                        <table class="table text-nowrap text-md-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Joan Powell</td>
                                                    <td>Associate Developer</td>
                                                    <td>$450,870</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Gavin Gibson</td>
                                                    <td>Account manager</td>
                                                    <td>$230,540</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Julian Kerr</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>$55,300</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Cedric Kelly</td>
                                                    <td>Accountant</td>
                                                    <td>$234,100</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Samantha May</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>$43,198</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Striped Rows</h3>
                                </div>
                                <div class="card-body">
                                    <p>Use <code class="highlighter-rouge">.table-striped</code>to add zebra-striping to any table row within the <code class="highlighter-rouge">.tbody</code>.</p>
                                    <div class="table-responsive">
                                        <table class="table border text-nowrap text-md-nowrap table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Joan Powell</td>
                                                    <td>Associate Developer</td>
                                                    <td>$450,870</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Gavin Gibson</td>
                                                    <td>Account manager</td>
                                                    <td>$230,540</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Julian Kerr</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>$55,300</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Cedric Kelly</td>
                                                    <td>Accountant</td>
                                                    <td>$234,100</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Samantha May</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>$43,198</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->

                    <!-- Row -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Bordered Table</h3>
                                </div>
                                <div class="card-body">
                                    <p>Use <code class="highlighter-rouge">.table-bordered</code>to add zebra-striping to any table row within the <code class="highlighter-rouge">.tbody</code>.</p>
                                    <div class="table-responsive">
                                        <table class="table border text-nowrap text-md-nowrap table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Joan Powell</td>
                                                    <td>Associate Developer</td>
                                                    <td>$450,870</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Gavin Gibson</td>
                                                    <td>Account manager</td>
                                                    <td>$230,540</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Julian Kerr</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>$55,300</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Cedric Kelly</td>
                                                    <td>Accountant</td>
                                                    <td>$234,100</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Samantha May</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>$43,198</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Hoverable Rows Table</h3>
                                </div>
                                <div class="card-body">
                                    <p>Use <code class="highlighter-rouge">.table-hover</code>to add zebra-striping to any table row within the <code class="highlighter-rouge">.tbody</code>.</p>
                                    <div class="table-responsive">
                                        <table class="table border text-nowrap text-md-nowrap table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Joan Powell</td>
                                                    <td>Associate Developer</td>
                                                    <td>$450,870</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Gavin Gibson</td>
                                                    <td>Account manager</td>
                                                    <td>$230,540</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Julian Kerr</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>$55,300</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Cedric Kelly</td>
                                                    <td>Accountant</td>
                                                    <td>$234,100</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Samantha May</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>$43,198</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->

                    <!-- Row -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Borderless Table</h3>
                                </div>
                                <div class="card-body">
                                    <p>Use <code class="highlighter-rouge">.table-borderless</code>to add zebra-striping to any table row within the <code class="highlighter-rouge">.tbody</code>.</p>
                                    <div class="table-responsive">
                                        <table class="table border text-nowrap text-md-nowrap table-borderless mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Joan Powell</td>
                                                    <td>Associate Developer</td>
                                                    <td>$450,870</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Gavin Gibson</td>
                                                    <td>Account manager</td>
                                                    <td>$230,540</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Julian Kerr</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>$55,300</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Cedric Kelly</td>
                                                    <td>Accountant</td>
                                                    <td>$234,100</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Small Table</h3>
                                </div>
                                <div class="card-body">
                                    <p>Add <code class="highlighter-rouge">.table-sm</code> to make any <code class="highlighter-rouge">.table</code> more compact by cutting all cell <code class="highlighter-rouge">padding</code> in half.</p>
                                    <div class="table-responsive">
                                        <table class="table border text-nowrap text-md-nowrap table-sm mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Joan Powell</td>
                                                    <td>Associate Developer</td>
                                                    <td>$450,870</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Gavin Gibson</td>
                                                    <td>Account manager</td>
                                                    <td>$230,540</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Julian Kerr</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>$55,300</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Cedric Kelly</td>
                                                    <td>Accountant</td>
                                                    <td>$234,100</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Samantha May</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>$43,198</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->

                    <!-- Row -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Nested Table</h3>
                                </div>
                                <div class="card-body">
                                    <p>Border styles, active styles, and table variants are not inherited by nested tables.</p>
                                    <div class="table-responsive">
                                        <table class="table border text-nowrap text-md-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Joan Powell</td>
                                                    <td>Associate Developer</td>
                                                    <td>$450,870</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <table class="table border text-nowrap text-md-nowrap  mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Name</th>
                                                                    <th>Position</th>
                                                                    <th>Salary</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Joan Powell</td>
                                                                    <td>Associate Developer</td>
                                                                    <td>$450,870</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Gavin Gibson</td>
                                                                    <td>Account manager</td>
                                                                    <td>$230,540</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Julian Kerr</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>$55,300</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Accountant</td>
                                                                    <td>$234,100</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Samantha May</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>$43,198</td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Contextual Table</h3>
                                </div>
                                <div class="card-body">
                                    <p>Use contextual classes to color tables, table rows or individual cells.</p>
                                    <div class="table-responsive">
                                        <table class="table border text-nowrap text-md-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="table-default">
                                                    <td>1</td>
                                                    <td>Joan Powell</td>
                                                    <td>Associate Developer</td>
                                                    <td>$450,870</td>
                                                </tr>
                                                <tr class="table-primary">
                                                    <td>2</td>
                                                    <td>Gavin Gibson</td>
                                                    <td>Account manager</td>
                                                    <td>$230,540</td>
                                                </tr>
                                                <tr class="table-secondary">
                                                    <td>3</td>
                                                    <td>Gavin Gibson</td>
                                                    <td>Account manager</td>
                                                    <td>$230,540</td>
                                                </tr>
                                                <tr class="table-success">
                                                    <td>4</td>
                                                    <td>Julian Kerr</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>$55,300</td>
                                                </tr>
                                                <tr class="table-danger">
                                                    <td>5</td>
                                                    <td>Cedric Kelly</td>
                                                    <td>Accountant</td>
                                                    <td>$234,100</td>
                                                </tr>
                                                <tr class="table-warning">
                                                    <td>6</td>
                                                    <td>Cedric Kelly</td>
                                                    <td>Accountant</td>
                                                    <td>$234,100</td>
                                                </tr>
                                                <tr class="table-info">
                                                    <td>7</td>
                                                    <td>Cedric Kelly</td>
                                                    <td>Accountant</td>
                                                    <td>$234,100</td>
                                                </tr>
                                                <tr class="table-light">
                                                    <td>8</td>
                                                    <td>Cedric Kelly</td>
                                                    <td>Accountant</td>
                                                    <td>$234,100</td>
                                                </tr>
                                                <tr class="table-dark">
                                                    <td>9</td>
                                                    <td>Cedric Kelly</td>
                                                    <td>Accountant</td>
                                                    <td>$234,100</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->

                    <!-- Row -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Table head</h3>
                                </div>
                                <div class="card-body">
                                    <p>Similar to tables and dark tables, use the modifier classes <code class="highlighter-rouge">.table-primary</code> or <code class="highlighter-rouge">.table-dark</code> to make <code class="highlighter-rouge">&lt;thead&gt;</code>
                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap mb-0">
                                                <thead class="table-primary">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Table Dark</h3>
                                </div>
                                <div class="card-body">
                                    <p>Use <code class="highlighter-rouge">.table-dark</code>to add zebra-striping to any table row within the <code class="highlighter-rouge">.tbody</code>.</p>
                                    <div class="table-responsive">
                                        <table class="table border text-nowrap text-md-nowrap  table-dark table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Joan Powell</td>
                                                    <td>Associate Developer</td>
                                                    <td>$450,870</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Gavin Gibson</td>
                                                    <td>Account manager</td>
                                                    <td>$230,540</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Julian Kerr</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>$55,300</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Cedric Kelly</td>
                                                    <td>Accountant</td>
                                                    <td>$234,100</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->

        @endsection

    @section('scripts')



    @endsection
