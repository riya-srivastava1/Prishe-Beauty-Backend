@extends('layouts.main')
@section('content')
    <!-- BEGIN breadcrumb -->
    <ol class="breadcrumb float-xl-end">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Library</a></li>
        <li class="breadcrumb-item active">Data</li>
    </ol>
    <!-- END breadcrumb -->
    <!-- BEGIN page-header -->
    <h1 class="page-header">Order Details</h1>
    <!-- END page-header -->
    <!-- BEGIN panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">Order Details</h4>
            <center>
                <div class="container">
                    <a href="{{ route('export.orders') }}">
                        <button type="submit" onclick="return confirm('Are you sure you want to export this item?');" style="height:30%;width:80px">
                            <span>Export</span>
                            <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                                <path
                                    d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0" />
                            </svg>
                        </button>
                    </a>
                </div>
            </center>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                        class="fa fa-expand"></i></a>
                {{-- <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                        class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                        class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i
                        class="fa fa-times"></i></a> --}}
            </div>
        </div>
        <div class="panel-body">
           <div class="table-responsive">
            <table id="data-table-default" class="table table-striped table-bordered align-middle text-nowrap">
                <thead>
                    <tr>
                        <th width="1%">Id</th>
                        <td><Noscript></Noscript>Name</td>
                        <td>Email</td>
                        <td>Number</td>
                        <td>Address</td>
                        <td>Product</td>
                        <td>Date</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer_details as $key => $data)
                        <tr>
                            <td> {{ $key + 1 }} </td>
                            <td>{{ $data->name ?? '' }} </td>
                            <td>{{ $data->email ?? '' }} </td>
                            <td>{{ $data->phone_no ?? '' }} </td>
                            <td>
                                @php
                                    $address_detail = json_decode($data->address);
                                    $address = $address_detail->address1 ?? '';
                                    $city = $address_detail->city ?? '';
                                    $country = $address_detail->country ?? '';
                                    // $firstName = $address_detail->firstName ?? '';
                                    // $lastName = $address_detail->lastName ?? '';
                                    // $name = $data->name ?? '';
                                    $phone = $address_detail->phone ?? '';
                                    $province = $address_detail->province ?? '';
                                    $zip = $address_detail->zip ?? '';

                                    echo "$address, $city, $province, $zip, $country </br>";
                                    echo "Phone: $phone";
                                @endphp
                                {{-- {{  $data->address ?? '' }}  --}}
                            </td>
                            <td>
                                <ul>
                                    @if (!is_null(json_decode($data->order_details)))
                                        @foreach (json_decode($data->order_details) as $variant)
                                            <li>
                                                <p>
                                                    {{ $variant->node->variant->title }}<br>
                                                    quantity : {{ $variant->node->quantity }}
                                                </p>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </td>
                            <td>{{ date('d/m/Y', strtotime($data->created_at)) }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
           </div>
        </div>
    </div>
    <style>
        html {
            height: 100%;
        }

        button {
            appearance: none;
            background: transparent;
            border: 0;
            color: #fff;
            cursor: pointer;
            font: inherit;
            font-weight: 500;
            line-height: 1;
            padding: 1em 1.5em;
            position: relative;
            transition: filter var(--motion-duration);
        }

        button:hover {
            filter: brightness(1.1);
        }

        button:active {
            filter: brightness(0.9);
        }

        button>span {
            display: block;
            position: relative;
            transition: transform var(--motion-duration) var(--motion-ease);
            z-index: 1;
        }

        button:hover>span {
            transform: scale(1.05);
        }

        button:active>span {
            transform: scale(0.95);
        }

        button>svg {
            fill: #950cde;
            position: absolute;
            top: -5%;
            left: -5%;
            width: 110%;
            height: 110%;
        }

        button>svg>path {
            transition: var(--motion-duration) var(--motion-ease);
        }

        button:hover>svg>path {
            d: path("M0,0 C0,-5 100,-5 100,0 C105,0 105,100 100,100 C100,105 0,105 0,100 C-5,100 -5,0 0,0");
        }

        button:active>svg>path {
            d: path("M0,0 C30,10 70,10 100,0 C95,30 95,70 100,100 C70,90 30,90 0,100 C5,70 5,30 0,0");
        }
    </style>
    <!-- END panel -->
@endsection
@section('js')
    <script>
        $('#data-table-default').DataTable({
            responsive: true
        });
    </script>
@endsection
