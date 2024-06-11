@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Report Reject</h1>
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
                                        <th>BlackDot(%)</th>
                                        <th>Buble(%)</th>
                                        <th>BurnMark(%)</th>
                                        <th>Dented(%)</th>
                                        <th>Discoloration(%)</th>
                                        <th>DragMark(%)</th>
                                        <th>Flahes(%)</th>
                                        <th>FlowMark(%)</th>
                                        <th>OilyMark(%)</th>
                                        <th>OverCut(%)</th>
                                        <th>PinBroken(%)</th>
                                        <th>PinMark(%)</th>
                                        <th>Scratches(%)</th>
                                        <th>Shiny(%)</th>
                                        <th>ShortMolding(%)</th>
                                        <th>SilverStreak(%)</th>
                                        <th>SinkMark(%)</th>
                                        <th>WeldLine(%)</th>
                                        <th>WhiteM(%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td style="min-width: 100px">{{ $item->date }}</td>
                                            <td>{{ $item->BlackDot }} %</td>
                                            <td>{{ $item->Buble }} %</td>
                                            <td>{{ $item->BurnMark }} %</td>
                                            <td>{{ $item->Dented }} %</td>
                                            <td>{{ $item->Discoloration }} %</td>
                                            <td>{{ $item->DragMark }} %</td>
                                            <td>{{ $item->Flahes }} %</td>
                                            <td>{{ $item->FlowMark }} %</td>
                                            <td>{{ $item->OilyMark }} %</td>
                                            <td>{{ $item->OverCut }} %</td>
                                            <td>{{ $item->PinBroken }} %</td>
                                            <td>{{ $item->PinMark }} %</td>
                                            <td>{{ $item->Scratches }} %</td>
                                            <td>{{ $item->Shiny }} %</td>
                                            <td>{{ $item->ShortMolding }} %</td>
                                            <td>{{ $item->SilverStreak }} %</td>
                                            <td>{{ $item->SinkMark }} %</td>
                                            <td>{{ $item->WeldLine }} %</td>
                                            <td>{{ $item->WhiteM }} %</td>
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
