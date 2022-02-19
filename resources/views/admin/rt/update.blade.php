@extends('layouts.master')
@section('content')
    

<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Table RT</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="/admin/rt/index">Table RT</a></li>
                <li class="breadcrumb-item">Edit</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-12 order-xl-1">
        <div class="card">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h2 class="mb-0">Edit Kecamatan</h2>
              </div>
            </div>
          </div>
          <div class="card-body">
              <h6 class="heading-small text-muted mb-4">Form Edit</h6>
              <form method="POST" action="/admin/rt/update/{{$rt->id_rt}}">
                @csrf
                @method('put')
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">No RT</label>
                      <input id="no_rt" type="text" class="form-control @error('no_rt') is-invalid @enderror" name="no_rt" value="{{ $rt->no_rt }}" required autocomplete="no_rt" autofocus>

                                @error('no_rt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-email">Nama RT</label>
                      <input id="nama_rt" type="text" class="form-control @error('nama_rt') is-invalid @enderror" name="nama_rt" value="{{ $rt->nama_rt }}" required autocomplete="nama_rt" autofocus>

                      @error('nama_rt')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-first-name">Masa Jabatan</label>
                      <input id="masa_jabatan" type="text" class="form-control @error('masa_jabatan') is-invalid @enderror" name="masa_jabatan" value="{{ $rt->masa_jabatan }}" required autocomplete="masa_jabatan" autofocus>

                                @error('masa_jabatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-last-name">Email</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $rt->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-last-name">No Telpon</label>
                      <input id="no_telp" type="no_telp" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ $rt->no_telp }}" required autocomplete="no_telp">

                      @error('no_telp')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                    
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@stop