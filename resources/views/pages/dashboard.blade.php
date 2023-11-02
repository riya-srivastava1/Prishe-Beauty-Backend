@extends('layouts.main')
@section('content')
    <!-- BEGIN breadcrumb -->
    <ol class="breadcrumb float-xl-end">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <!-- END breadcrumb -->
    <!-- BEGIN page-header -->
    <h1 class="page-header mb-3">Dashboard</h1>
    <!-- END page-header -->
    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-6 -->
        <div class="col-xl-6">
            <!-- BEGIN row -->
            <div class="row">
                <!-- BEGIN col-6 -->
                <div class="col-sm-6">
                    <!-- BEGIN card -->
                    <div class="card border-0 text-truncate mb-3 bg-gray-800 text-white">
                        <!-- BEGIN card-body -->
                        <div class="card-body">
                            <a href="{{ route('contact.us.index') }}" style="text-decoration: none">
                                <!-- BEGIN title -->
                                <div class="mb-3 text-gray-500">
                                    <b class="mb-3">Contact-us Data</b>
                                    <span class="ms-2"><i class="fa fa-info-circle" data-bs-toggle="popover"
                                            data-bs-trigger="hover" data-bs-title="Store Sessions" data-bs-placement="top"
                                            data-bs-content="Number of sessions on your online store. A session is a period of continuous activity from a visitor."
                                            data-original-title="" title=""></i></span>
                                </div>
                                <!-- END title -->
                                <!-- BEGIN store-session -->
                                <div class="d-flex align-items-center mb-1">
                                    <h2 class="text-white mb-0"><span data-animation="number"
                                            data-value="{{ $totalContacts }}">0</span>
                                    </h2>
                                    <div class="ms-auto">
                                        <div id="store-session-sparkline"></div>
                                    </div>
                                </div>
                                <!-- END store-session -->
                                <!-- BEGIN percentage -->
                                <div class="mb-4 text-gray-500 ">
                                    <span data-value="9.5"></span> Total Contact-Us data
                                </div>
                                <!-- END percentage -->
                                <!-- BEGIN info-row -->
                                {{-- <div class="d-flex mb-2">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle text-teal fs-8px me-2"></i>
                                    Mobile
                                </div>
                                <div class="d-flex align-items-center ms-auto">
                                    <div class="text-gray-500 small"><i class="fa fa-caret-up"></i> <span
                                            data-animation="number" data-value="25.7">0.00</span>%</div>
                                    <div class="w-50px text-end ps-2 fw-bold"><span data-animation="number"
                                            data-value="53210">0</span></div>
                                </div>
                            </div>
                            <!-- END info-row -->
                            <!-- BEGIN info-row -->
                            <div class="d-flex mb-2">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle text-blue fs-8px me-2"></i>
                                    Desktop
                                </div>
                                <div class="d-flex align-items-center ms-auto">
                                    <div class="text-gray-500 small"><i class="fa fa-caret-up"></i> <span
                                            data-animation="number" data-value="16.0">0.00</span>%</div>
                                    <div class="w-50px text-end ps-2 fw-bold"><span data-animation="number"
                                            data-value="11959">0</span></div>
                                </div>
                            </div>
                            <!-- END info-row -->
                            <!-- BEGIN info-row -->
                            <div class="d-flex">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle text-cyan fs-8px me-2"></i>
                                    Tablet
                                </div>
                                <div class="d-flex align-items-center ms-auto">
                                    <div class="text-gray-500 small"><i class="fa fa-caret-up"></i> <span
                                            data-animation="number" data-value="7.9">0.00</span>%</div>
                                    <div class="w-50px text-end ps-2 fw-bold"><span data-animation="number"
                                            data-value="5545">0</span></div>
                                </div>
                            </div> --}}
                                <!-- END info-row -->
                            </a>
                        </div>
                        <!-- END card-body -->
                    </div>
                    <!-- END card -->
                </div>
                <!-- END col-6 -->
                <!-- BEGIN col-6 -->
                <div class="col-sm-6">
                    <!-- BEGIN card -->
                    <div class="card border-0 text-truncate mb-3 bg-gray-800 text-white">
                        <!-- BEGIN card-body -->
                        <div class="card-body">
                            <!-- BEGIN title -->
                            <a href="{{ route('orders.index') }}" style="text-decoration: none ">
                                <div class="mb-3 text-gray-500">
                                    <b class="mb-3">Orders</b>
                                    <span class="ms-2"><i class="fa fa-info-circle" data-bs-toggle="popover"
                                            data-bs-trigger="hover" data-bs-title="Conversion Rate" data-bs-placement="top"
                                            data-bs-content="Percentage of sessions that resulted in orders from total number of sessions."
                                            data-original-title="" title=""></i></span>
                                </div>
                                <!-- END title -->
                                <!-- BEGIN conversion-rate -->
                                <div class="d-flex align-items-center mb-1">
                                    <h2 class="text-white mb-0"><span data-animation="number"
                                            data-value="{{ $totalOrders }}">0.00</span>
                                    </h2>
                                    <div class="ms-auto">
                                        <div id="conversion-rate-sparkline"></div>
                                    </div>
                                </div>
                                <!-- END conversion-rate -->
                                <!-- BEGIN percentage -->
                                <div class="mb-4 text-gray-500 ">
                                    <span data-value=""></span> Total Orders
                                </div>
                            </a>
                        </div>
                        <!-- END card-body -->
                    </div>
                    <!-- END card -->
                </div>
                <!-- END col-6 -->
            </div>
            <!-- END row -->
        </div>
        <!-- END col-6 -->
    </div>
@endsection
@section('js')
    <script>
        $('#data-table-default').DataTable({
            responsive: true
        });
    </script>
@endsection
