@extends('layouts.app')

@section('nav')
    <a href="/admin" class="nav-link active" >Tables</a>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard/Tables') }}</div>

                <div class="card-body">
                    <div class="row mb-5">
                        <div class="col-sm d-flex justify-content-center ">
                            <a href="/admin/user/index" class="btn btn-outline-primary" >Table User</a>
                        </div>
                        <div class="col-smd-flex justify-content-center">
                            <a href="/users" class="btn btn-outline-primary">Table Petugas</a>
                        </div>
                        <div class="col-sm d-flex justify-content-center">
                            <a href="/admin/kecamatan/index" class="btn btn-outline-primary">Table Kecamatan</a>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-sm d-flex justify-content-center">
                            <a href="/admin/kelurahan/index" class="btn btn-outline-primary">Table Kelurahan</a>
                        </div>
                        <div class="col-smd-flex justify-content-center">
                            <a href="/admin/rt/index" class="btn btn-outline-primary">Table RT</a>
                        </div>
                        <div class="col-sm d-flex justify-content-center">
                            <a href="/admin/rw/index" class="btn btn-outline-primary">Table RW</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <a href="/admin/program/index" class="btn btn-outline-primary">Table Program</a>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="/admin/iuran/index" class="btn btn-outline-primary">Table Iuran</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
