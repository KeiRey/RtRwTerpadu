
@extends('layouts.app')
@section('nav')
    <a href="/admin" class="nav-link" >Tables</a>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update RW') }}</div>

                <div class="card-body">
                    <form method="POST" action="/admin/rw/update/{{$rw->id_rw}}">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="no_rw" class="col-md-4 col-form-label text-md-right">{{ __('No RW') }}</label>

                            <div class="col-md-6">
                                <input id="no_rw" type="text" class="form-control @error('no_rw') is-invalid @enderror" name="no_rw" value="{{ $rw->no_rw }}" required autocomplete="no_rw" autofocus>

                                @error('no_rw')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_rw" class="col-md-4 col-form-label text-md-right">{{ __('Nama RW') }}</label>

                            <div class="col-md-6">
                                <input id="nama_rw" type="text" class="form-control @error('nama_rw') is-invalid @enderror" name="nama_rw" value="{{ $rw->nama_rw }}" required autocomplete="nama_rw" autofocus>

                                @error('nama_rw')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="masa jabatan" class="col-md-4 col-form-label text-md-right">{{ __('Masa Jabatan') }}</label>

                            <div class="col-md-6">
                                <input id="masa_jabatan" type="text" class="form-control @error('masa_jabatan') is-invalid @enderror" name="masa_jabatan" value="{{ $rw->masa_jabatan }}" required autocomplete="masa_jabatan" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $rw->email }}" required autocomplete="email">

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
                                <input id="no_telp" type="no_telp" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ $rw->no_telp }}" required autocomplete="no_telp">

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
                                    {{ __('Update') }}
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

