@extends('layouts.master')
@section('content')
    

<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Table Kecamatan</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="/admin/kecamatan/index">Table Kecamatan</a></li>
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
              <form method="POST" action="/admin/program/update/{{$program->id_program}}">
                @csrf
                @method('PUT')
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">Nama Kecamatan</label>
                      <select class="form-control @error('password') is-invalid @enderror" name="" id="program">
                        <option value="">Pilih Program<option>
                        <option value="kas">Kas</option>
                        <option value="kebersihan">Kebersihan</option>
                        <option value="keamanan">Keamanan</option>
                        <option value="kematian">Kematian</option>
                        <option value="kegiatan">Kegiatan</option>
                        <option value="bencana">Bencana</option>
                    </select>
                    
                    @error('program')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-email">Nama Camat</label>
                      <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="" value="{{ old('deskripsi') }}" id="deskripsi" rows="3" required autocomplete="deskripsi" autofocus></textarea>

                                @error('deskripsi')
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

<script>

    const program = document.getElementById('program');
    const deskripsi = document.getElementById('deskripsi');
    let attName = document.createAttribute("name");

    console.info(document);

    program.addEventListener("click", () => {
        attName.value = program.value;
        deskripsi.setAttributeNode(attName);
    });

</script>

@stop
