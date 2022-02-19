@extends('layouts.master')

@section('content')
    
<div class="main-content" id="panel">
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-6">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="/profile">Profile</a></li>
            </ol>
            <h1 class="display-2 text-white">Hello {{ Auth::user()->name }}</h1>
            <p class="text-white mt-0 mb-5">Ini adalah halaman profil kamu, kamu bisa melihat data dan kontak pribadi kamu disini. Kamu tidak bisa mengedit data yang tertera, bila ingin mengubahnya silahkan hubungi admin ;-) </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--9">
      <div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h2 class="mb-0">Your profile </h2>
                </div>
              </div>
            </div>
            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Data Pribadi</h6>
              <form>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nama</label>
                        <input type="text" id="input-username" class="form-control" placeholder="Username" value="{{ $user->name }}" disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email</label>
                        <input type="email" id="input-email" class="form-control" placeholder="{{ $user->email }}" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">NIK</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="{{ $user->NIK }}" disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Jenis Kelamin</label>
                        <input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="{{ $user->jenis_kelamin }}" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Tempat Lahir</label>
                        <input type="text" id="input-username" class="form-control" placeholder="Username" value="{{ $user->tempat_lahir }}" disabled>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Tanggal Lahir</label>
                        <input type="email" id="input-email" class="form-control" placeholder="{{ $user->tanggal_lahir }}" disabled>
                      </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email">Penghasilan</label>
                          <input type="email" id="input-email" class="form-control" placeholder="{{ $user->penghasilan }}" disabled>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email">Pekerjaan</label>
                          <input type="email" id="input-email" class="form-control" placeholder="{{ $user->pekerjaan }}" disabled>
                        </div>
                      </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Informasi Alamat</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">ALamat</label>
                        <input id="input-address" class="form-control" placeholder="Home Address" value="{{ $user->alamat }}" disabled type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Kota</label>
                        <input type="text" id="input-city" class="form-control" placeholder="City" disabled value="{{ $user->kota }}">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Kecamatan</label>
                        <input type="text" id="input-country" class="form-control" placeholder="Country" disabled value="{{ $user->kecamatan }}">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Kelurahan</label>
                        <input type="text" id="input-postal-code" class="form-control" disabled value="{{ $user->kelurahan }}">
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
  </div>

@endsection