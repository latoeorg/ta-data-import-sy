@extends('layouts.app') @section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Welcome {{ request()->session()->get('user')['name'] }} </h1>
                    <p>Production Efficiency Reporting System OEE</p>
                </div>
            </div>
        </div>
    </div>

    <section class="content font-poppins">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5">
                    <div class="card">
                        <div class="card-body">
                            <h5>Standard OEE</h5>
                            <ul>
                                @foreach ($OEEStandard as $item)
                                    <li>{{ $item->name }} : {{ $item->standard }} %</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Production Efficiency Reporting System OEE</h3>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="barChart"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
