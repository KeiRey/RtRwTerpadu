@extends('layouts.app')
@section('nav')
    <a href="/admin" class="nav-link" >Tables</a>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Update User') }}</div>

                <div class="card-body">
                    <form method="POST" action="/admin/user/update/{{$user->id}}">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col">
                                <div class="form-group row">
                                    <label for="NIK" class="col-md-3 col-form-label text-md-right">{{ __('NIK') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="NIK" type="text" class="form-control @error('NIK') is-invalid @enderror" name="NIK" value="{{ $user->NIK }}" required autocomplete="NIK" autofocus>
        
                                        @error('NIK')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"value="{{$user->password}}" autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="pekerjaan" class="col-md-3 col-form-label text-md-right">{{ __('Pekerjaan') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" value="{{ $user->pekerjaan }}" name="pekerjaan" autocomplete="new-pekerjaan">
        
                                        @error('pekerjaan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="penghasilan" class="col-md-3 col-form-label text-md-right">{{ __('Penghasilan') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="penghasilan" type="text" class="form-control @error('penghasilan') is-invalid @enderror" value="{{ $user->penghasilan }}" name="penghasilan" autocomplete="new-penghasilan">
        
                                        @error('penghasilan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-md-3 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>
        
                                    <div class="col-md-8">
                                        {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> --}}
                                        <select class="form-control @error('password') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="{{$user->jenis_kelamin}}">{{$user->jenis_kelamin}}</option>
                                            <option value="laki-laki">Laki - Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                        
                                        @error('jenis_kelamin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="qrcode" class="col-md-3 col-form-label text-md-right">{{ __('QRcode') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="qrcode" type="file" class="form-control-file @error('qrcode') is-invalid @enderror" name="qrcode" autocomplete="new-qrcode">
        
                                        @error('qrcode')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="col">

                                <div class="form-group row">
                                    <label for="tempat_lahir" class="col-md-3 col-form-label text-md-right">{{ __('Tempat Lahir') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ $user->tempat_lahir }}" name="tempat_lahir"  autocomplete="new-tempat_lahir">
        
                                        @error('tempat_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tanggal_lahir" class="col-md-3 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ $user->tanggal_lahir }}" name="tanggal_lahir" autocomplete="new-tanggal_lahir">
        
                                        @error('tanggal_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kelurahan" class="col-md-3 col-form-label text-md-right">{{ __('Kelurahan') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="kelurahan" type="text" class="form-control @error('kelurahan') is-invalid @enderror" value="{{ $user->kelurahan }}" name="kelurahan"  autocomplete="new-kelurahan">
        
                                        @error('kelurahan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kecamatan" class="col-md-3 col-form-label text-md-right">{{ __('Kecamatan') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="kecamatan" type="text" class="form-control @error('kecamatan') is-invalid @enderror" value="{{ $user->kecamatan }}" name="kecamatan"  autocomplete="new-kecamatan">
        
                                        @error('kecamatan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kota" class="col-md-3 col-form-label text-md-right">{{ __('Kota') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="kota" type="text" class="form-control @error('kota') is-invalid @enderror" value="{{ $user->tempat_lahir }}"" name="kota"  autocomplete="new-kota">
        
                                        @error('kota')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-md-3 col-form-label text-md-right">{{ __('Alamat') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" value="{{ $user->alamat }}" name="alamat"  autocomplete="new-alamat">
        
                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_rumah" class="col-md-3 col-form-label text-md-right">{{ __('No. Rumah') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="no_rumah" type="text" class="form-control @error('no_rumah') is-invalid @enderror" value="{{ $user->no_rumah }}" name="no_rumah" autocomplete="new-no_rumah">
        
                                        @error('no_rumah')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
        
                                    <div class="col-md-12 offset-md-3">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
