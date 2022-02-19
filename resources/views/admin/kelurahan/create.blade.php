
@extends('layouts.app')
@section('nav')
    <a href="/admin" class="nav-link" >Tables</a>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Kelurahan') }}</div>

                <div class="card-body">
                    <form method="POST" action="/admin/kelurahan/store">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_kelurahan" class="col-md-4 col-form-label text-md-right">{{ __('Nama kelurahan') }}</label>

                            <div class="col-md-6">
                                <input id="nama_kelurahan" type="text" class="form-control @error('nama_kelurahan') is-invalid @enderror" name="nama_kelurahan" value="{{ old('nama_kelurahan') }}" required autocomplete="nama_kelurahan" autofocus>

                                @error('nama_kelurahan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_lurah" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lurah') }}</label>

                            <div class="col-md-6">
                                <input id="nama_lurah" type="text" class="form-control @error('nama_lurah') is-invalid @enderror" name="nama_lurah" value="{{ old('nama_lurah') }}" required autocomplete="nama_lurah" autofocus>

                                @error('nama_lurah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="masa jabatan" class="col-md-4 col-form-label text-md-right">{{ __('Masa Jabatan') }}</label>

                            <div class="col-md-6">
                                <input id="masa_jabatan" type="text" class="form-control @error('masa_jabatan') is-invalid @enderror" name="masa_jabatan" value="{{ old('masa_jabatan') }}" required autocomplete="masa_jabatan" autofocus>

                                @error('masa_jabatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

    

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_telp" class="col-md-4 col-form-label text-md-right">{{ __('No Telp') }}</label>

                            <div class="col-md-6">
                                <input id="no_telp" type="no_telp" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp') }}" required autocomplete="no_telp">

                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

