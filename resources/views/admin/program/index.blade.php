@extends('layouts.master')
@section('content')
    
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Table Kelurahan</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="/admin/program/index">Table Program</a></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <h3 class="mb-0">Data Kelurahan</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="nik">No</th>
                  <th scope="col" class="sort" data-sort="nama">Nama Program</th>
                  <th scope="col" class="sort" data-sort="nama"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              @foreach ($program as $program)
              <tbody>
              <tr>
                  <td>{{$loop->iteration}}</td>
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
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="/admin/program/edit/{{$program->id_program}}">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">Hapus</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection