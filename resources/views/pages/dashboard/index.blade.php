@extends('layouts.app') @section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Welcome {{ request()->session()->get('user')['name'] }} </h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content font-poppins">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt odio nobis earum, saepe officia
                            quisquam quae quasi nulla totam magni, vitae quidem doloribus a veniam delectus consequatur
                            impedit soluta dicta.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
