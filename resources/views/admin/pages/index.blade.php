@extends('admin.layout.index')

@section('css')
<!-- JQVMap -->
<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard v3</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v3</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Online Store Visitors</h3>
                                <a href="javascript:void(0);">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">820</span>
                                    <span>Visitors Over Time</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                        <i class="fas fa-arrow-up"></i> 12.5%
                                    </span>
                                    <span class="text-muted">Since last week</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <canvas id="visitors-chart" height="200"></canvas>
                            </div>

                            <div class="d-flex flex-row justify-content-end">
                                <span class="mr-2">
                                    <i class="fas fa-square text-primary"></i> Visitors
                                </span>

                                <span>
                                    <i class="fas fa-square text-gray"></i> Page Views
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Products</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Sales</th>
                                        <th>More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="dist/img/default-150x150.png" alt="Product 1"
                                                class="img-circle img-size-32 mr-2">
                                            Some Product
                                        </td>
                                        <td>$13 USD</td>
                                        <td>
                                            <small class="text-success mr-1">
                                                <i class="fas fa-arrow-up"></i>
                                                12%
                                            </small>
                                            12,000 Sold
                                        </td>
                                        <td>
                                            <a href="#" class="text-muted">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="dist/img/default-150x150.png" alt="Product 1"
                                                class="img-circle img-size-32 mr-2">
                                            Another Product
                                        </td>
                                        <td>$29 USD</td>
                                        <td>
                                            <small class="text-warning mr-1">
                                                <i class="fas fa-arrow-down"></i>
                                                0.5%
                                            </small>
                                            123,234 Sold
                                        </td>
                                        <td>
                                            <a href="#" class="text-muted">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="dist/img/default-150x150.png" alt="Product 1"
                                                class="img-circle img-size-32 mr-2">
                                            Amazing Product
                                        </td>
                                        <td>$1,230 USD</td>
                                        <td>
                                            <small class="text-danger mr-1">
                                                <i class="fas fa-arrow-down"></i>
                                                3%
                                            </small>
                                            198 Sold
                                        </td>
                                        <td>
                                            <a href="#" class="text-muted">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="dist/img/default-150x150.png" alt="Product 1"
                                                class="img-circle img-size-32 mr-2">
                                            Perfect Item
                                            <span class="badge bg-danger">NEW</span>
                                        </td>
                                        <td>$199 USD</td>
                                        <td>
                                            <small class="text-success mr-1">
                                                <i class="fas fa-arrow-up"></i>
                                                63%
                                            </small>
                                            87 Sold
                                        </td>
                                        <td>
                                            <a href="#" class="text-muted">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Sales</h3>
                                <a href="javascript:void(0);">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">$18,230.00</span>
                                    <span>Sales Over Time</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                        <i class="fas fa-arrow-up"></i> 33.1%
                                    </span>
                                    <span class="text-muted">Since last month</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <canvas id="sales-chart" height="200"></canvas>
                            </div>

                            <div class="d-flex flex-row justify-content-end">
                                <span class="mr-2">
                                    <i class="fas fa-square text-primary"></i> This year
                                </span>

                                <span>
                                    <i class="fas fa-square text-gray"></i> Last year
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Online Store Overview</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-sm btn-tool">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-tool">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <p class="text-success text-xl">
                                    <i class="ion ion-ios-refresh-empty"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                        <i class="ion ion-android-arrow-up text-success"></i> 12%
                                    </span>
                                    <span class="text-muted">CONVERSION RATE</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <p class="text-warning text-xl">
                                    <i class="ion ion-ios-cart-outline"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                        <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                                    </span>
                                    <span class="text-muted">SALES RATE</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center mb-0">
                                <p class="text-danger text-xl">
                                    <i class="ion ion-ios-people-outline"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                        <i class="ion ion-android-arrow-down text-danger"></i> 1%
                                    </span>
                                    <span class="text-muted">REGISTRATION RATE</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-8">
                    <!-- MAP & BOX PANE -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">US-Visitors Report</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="d-md-flex">
                                <div class="p-1 flex-fill" style="overflow: hidden">
                                    <!-- Map will be created here -->
                                    <div id="world-map-markers" style="height: 325px; overflow: hidden;">
                                        <div class="map"></div>
                                    </div>
                                </div>
                                <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                                    <div class="description-block mb-4">
                                        <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                                        <h5 class="description-header">8390</h5>
                                        <span class="description-text">Visits</span>
                                    </div>
                                    <!-- /.description-block -->
                                    <div class="description-block mb-4">
                                        <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                        <h5 class="description-header">30%</h5>
                                        <span class="description-text">Referrals</span>
                                    </div>
                                    <!-- /.description-block -->
                                    <div class="description-block">
                                        <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                        <h5 class="description-header">70%</h5>
                                        <span class="description-text">Organic</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div><!-- /.card-pane-right -->
                            </div><!-- /.d-md-flex -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Browser Usage</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                        class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="chart-responsive">
                                        <canvas id="pieChart" height="150"></canvas>
                                    </div>
                                    <!-- ./chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <ul class="chart-legend clearfix">
                                        <li><i class="far fa-circle text-danger"></i> Chrome</li>
                                        <li><i class="far fa-circle text-success"></i> IE</li>
                                        <li><i class="far fa-circle text-warning"></i> FireFox</li>
                                        <li><i class="far fa-circle text-info"></i> Safari</li>
                                        <li><i class="far fa-circle text-primary"></i> Opera</li>
                                        <li><i class="far fa-circle text-secondary"></i> Navigator</li>
                                    </ul>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer bg-white p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        United States of America
                                        <span class="float-right text-danger">
                                            <i class="fas fa-arrow-down text-sm"></i>
                                            12%</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        India
                                        <span class="float-right text-success">
                                            <i class="fas fa-arrow-up text-sm"></i> 4%
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        China
                                        <span class="float-right text-warning">
                                            <i class="fas fa-arrow-left text-sm"></i> 0%
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.footer -->
                    </div>
                    <!-- /.card -->


                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection

@section('script')
<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admin/dist/js/pages/dashboard3.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('admin/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('admin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-mapael/maps/world_countries.min.js')}}"></script>

<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.world.js"></script>

@endsection