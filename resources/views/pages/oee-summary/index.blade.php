@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>OEE Summary</h1>
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
                    @include('pages.oee-summary.table.table-oee-summary-available')
                </div>
                <div class="col-12">
                    @include('pages.oee-summary.table.table-oee-summary-performance')
                </div>
                <div class="col-12">
                    @include('pages.oee-summary.table.table-oee-summary-quality')
                </div>
                <div class="col-12">
                    @include('pages.oee-summary.table.table-oee-summary-oee-accuracy')
                </div>
            </div>
        </div>
    </section>
@endsection
