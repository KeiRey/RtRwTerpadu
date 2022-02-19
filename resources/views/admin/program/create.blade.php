
@extends('layouts.app')
@section('nav')
    <a href="/admin" class="nav-link" >Tables</a>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Program') }}</div>

                <div class="card-body">
                    <form method="POST" action="/admin/program/store">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="program" class="col-md-3 col-form-label text-md-right">{{ __('Program') }}</label>

                            <div class="col-md-8">
                                {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> --}}
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

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-3 col-form-label text-md-right">{{ __('Deskripsi') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="" value="{{ old('deskripsi') }}" id="deskripsi" rows="3" required autocomplete="deskripsi" autofocus></textarea>

                                @error('deskripsi')
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
@endsection

