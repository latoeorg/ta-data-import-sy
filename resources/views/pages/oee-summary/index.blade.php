@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>OEE Standard</h1>
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
                            {{-- <form action="{{ route('oee-summary.import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="file" required>
                                <button type="submit">Import</button>
                            </form> --}}
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#formCreate"><i
                                    class="fa fa-plus"></i> Tambah</a>
                            @include('pages.oee-summary.create')
                            <table id="defaultTable" class="table table-responsive table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Date</th>
                                        <th>JobOrderID</th>
                                        <th>ProductID</th>
                                        <th>ProductName</th>
                                        <th>ToolingID</th>
                                        <th>MachineID</th>
                                        <th>MachineTonnage</th>
                                        <th>StartTime</th>
                                        <th>ShiftID</th>
                                        <th>Output</th>
                                        <th>BlackDot</th>
                                        <th>Bubble</th>
                                        <th>BurnMark</th>
                                        <th>Dented</th>
                                        <th>Discoloration</th>
                                        <th>DragMark</th>
                                        <th>Flashes</th>
                                        <th>FlowMark</th>
                                        <th>OilyMark</th>
                                        <th>OverCut</th>
                                        <th>PinBroken</th>
                                        <th>PinMark</th>
                                        <th>Scratches</th>
                                        <th>Shiny</th>
                                        <th>ShortMolding</th>
                                        <th>SilverStreak</th>
                                        <th>SinkMark</th>
                                        <th>WeldLine</th>
                                        <th>WhiteM</th>
                                        <th>RejectTotal</th>
                                        <th>ActualCycleTime</th>
                                        <th>PlanCycleTime</th>
                                        <th>DMC</th>
                                        <th>JOS</th>
                                        <th>MB</th>
                                        <th>MOC</th>
                                        <th>MOR1</th>
                                        <th>MOR2</th>
                                        <th>MSSD</th>
                                        <th>NMP</th>
                                        <th>NPO</th>
                                        <th>PA</th>
                                        <th>PM</th>
                                        <th>QP</th>
                                        <th>T</th>
                                        <th>TPM</th>
                                        <th>DowntimeTotal</th>
                                        <th>AvailableT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td style="min-width: 100px">{{ $item->date }}</td>
                                            <td>{{ $item->jobOrderID }}</td>
                                            <td>{{ $item->productID }}</td>
                                            <td>{{ $item->productNAME }}</td>
                                            <td>{{ $item->toolingID }}</td>
                                            <td>{{ $item->machineID }}</td>
                                            <td>{{ $item->Machine_Tonnage }}</td>
                                            <td>{{ $item->Start_Time }}</td>
                                            <td>{{ $item->Shift_ID }}</td>
                                            <td>{{ $item->Output }}</td>
                                            <td>{{ $item->BlackDot }}</td>
                                            <td>{{ $item->Buble }}</td>
                                            <td>{{ $item->BurnMark }}</td>
                                            <td>{{ $item->Dented }}</td>
                                            <td>{{ $item->Discoloration }}</td>
                                            <td>{{ $item->DragMark }}</td>
                                            <td>{{ $item->Flahes }}</td>
                                            <td>{{ $item->FlowMark }}</td>
                                            <td>{{ $item->OilyMark }}</td>
                                            <td>{{ $item->OverCut }}</td>
                                            <td>{{ $item->PinBroken }}</td>
                                            <td>{{ $item->PinMark }}</td>
                                            <td>{{ $item->Scratches }}</td>
                                            <td>{{ $item->Shiny }}</td>
                                            <td>{{ $item->ShortMolding }}</td>
                                            <td>{{ $item->SilverStreak }}</td>
                                            <td>{{ $item->SinkMark }}</td>
                                            <td>{{ $item->WeldLine }}</td>
                                            <td>{{ $item->WhiteM }}</td>
                                            <td>{{ $item->Reject_Total }}</td>
                                            <td>{{ $item->ActualCycleTime }}</td>
                                            <td>{{ $item->PlanCycleTime }}</td>
                                            <td>{{ $item->DMC }}</td>
                                            <td>{{ $item->JOS }}</td>
                                            <td>{{ $item->MB }}</td>
                                            <td>{{ $item->MOC }}</td>
                                            <td>{{ $item->MOR1 }}</td>
                                            <td>{{ $item->MOR2 }}</td>
                                            <td>{{ $item->MSSD }}</td>
                                            <td>{{ $item->NMP }}</td>
                                            <td>{{ $item->NPO }}</td>
                                            <td>{{ $item->PA }}</td>
                                            <td>{{ $item->PM }}</td>
                                            <td>{{ $item->QP }}</td>
                                            <td>{{ $item->T }}</td>
                                            <td>{{ $item->TPM }}</td>
                                            <td>{{ $item->Downtime_Total }}</td>
                                            <td>{{ $item->Available_T }}</td>
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
