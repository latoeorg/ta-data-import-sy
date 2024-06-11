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
                            <table id="defaultTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>OEE Indicator</th>
                                        <th>Standard Value (%)</th>
                                        <th>Description</th>
                                        @if (request()->session()->get('user')['role'] === 'MANAGER')
                                            <th>Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->standard }}</td>
                                            <td>{{ $item->description ? $item->description : '-' }}</td>
                                            @if (request()->session()->get('user')['role'] === 'MANAGER')
                                                <td>
                                                    <a type="button" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#formUpdate{{ $item->id }}">
                                                        <i class="fa fa-edit" title="Ubah Data User"></i>
                                                    </a>
                                                </td>
                                            @endif
                                        </tr>
                                        <?php $i++; ?>
                                        @include('pages.oee-standard.update')
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
