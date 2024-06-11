@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Report Downtime</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @include('includes.error-card')
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Date</th>
                                        <th>DMC(%)</th>
                                        <th>JOS(%)</th>
                                        <th>MB(%)</th>
                                        <th>MOC(%)</th>
                                        <th>MOR1(%)</th>
                                        <th>MOR2(%)</th>
                                        <th>MSSD(%)</th>
                                        <th>NMP(%)</th>
                                        <th>NPO(%)</th>
                                        <th>PA(%)</th>
                                        <th>PM(%)</th>
                                        <th>QP(%)</th>
                                        <th>T(%)</th>
                                        <th>TPM(%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td style="min-width: 100px">{{ $item->date }}</td>
                                            <td>{{ $item->DMC }} %</td>
                                            <td>{{ $item->JOS }} %</td>
                                            <td>{{ $item->MB }} %</td>
                                            <td>{{ $item->MOC }} %</td>
                                            <td>{{ $item->MOR1 }} %</td>
                                            <td>{{ $item->MOR2 }} %</td>
                                            <td>{{ $item->MSSD }} %</td>
                                            <td>{{ $item->NMP }} %</td>
                                            <td>{{ $item->NPO }} %</td>
                                            <td>{{ $item->PA }} %</td>
                                            <td>{{ $item->PM }} %</td>
                                            <td>{{ $item->QP }} %</td>
                                            <td>{{ $item->T }} %</td>
                                            <td>{{ $item->TPM }} %</td>
                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
