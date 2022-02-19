@extends('layouts.master')

@section('content')

<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="/home">Dashboards</a></li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- Card stats -->
        <div class="row">
          <div class="col-xl-12 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h2 class="card-title text-uppercase text-primary mb-0">Selamat Datang...</h2>
                    <span class="h2 font-weight-bold mb-0">{{ Auth::user()->name }}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <h3 class="text-success">Yuk lakukan hal yang bermanfaat...wkwk</h3>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-7">
        <div class="card bg-default">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
              <div class="col">
                <h5 class="h3 text-white mb-0">Program dan Kegiatan</h5>
                <h6 class="text-light text-uppercase ls-1 mb-1">Berbagai jenis program dan kegiatan yang diadakan di Sekitar</h6>
              </div>
            </div>
          </div>
          <div class="card-body">
            <!-- Chart -->
            <div class="chart">
              <!-- Chart wrapper -->
              <div class="table-responsive">
                <table class="table align-items-center table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="nik">No</th>
                    <th scope="col" class="sort" data-sort="nik"></th>
                    <th scope="col" class="sort" data-sort="nama">Nama Program</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                @foreach ($program as $program)
                <tbody>
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td></td>
                    @switch($program)
                        @case($program->kas == !null)
                            <td>Kas : {{$program->kas}}</td>
                            @break
                        @case($program->kebersihan == !null)
                            <td>Kebersihan : {{$program->kebersihan}}</td>
                            @break
                        @case($program->keamanan == !null)
                            <td>Keamanan : {{$program->keamanan}}</td>
                            @break
                        @case($program->kematian == !null)
                            <td>Kematian : {{$program->kematian}}</td>
                            @break
                        @case($program->kegiatan == !null)
                            <td>Kegiatan : {{$program->kegiatan}}</td>
                            @break
                        @case($program->bencana == !null)
                            <td>Bencana : {{$program->bencana}}</td>
                            @break
                        @default
                            <td>{{$program->kas}}</td>
                            <td>{{$program->kebersihan}}</td>
                            <td>{{$program->keamanan}}</td>
                            <td>{{$program->kematian}}</td>
                            <td>{{$program->kegiatan}}</td>
                            <td>{{$program->bencada}}</td>
                    @endswitch
                  </tr>
                </tbody>
                @endforeach
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-5">
        <div class="card">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="text-uppercase text-muted ls-1 mb-1">Data Iuran Anda</h3>
              </div>
            </div>
          </div>
          <div class="card-body">
            <!-- Chart -->
            <div class="chart">
              <canvas id="chart-bars" class="chart-canvas"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
