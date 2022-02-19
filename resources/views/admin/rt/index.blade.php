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
            <h3 class="mb-0">Light table</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="nik">No Rt</th>
                  <th scope="col" class="sort" data-sort="nama">Nama Rt</th>
                  <th scope="col" class="sort" data-sort="email">Masa Jabatan</th>
                  <th scope="col" class="sort" data-sort="alamat">No Telpon</th>
                  <th scope="col" class="sort" data-sort="completion">Email</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              @foreach ($rt as $rt)
              <tbody class="list">
                <tr>
                  <td class="budget">
                    {{$rt->no_rt}}
                  </td>
                  <td>
                    {{$rt->nama_rt}}
                  </td>
                  <td>
                    {{$rt->masa_jabatan}}
                  </td>
                  <td>
                    {{$rt->no_telp}}
                  </td>
                  <td>
                    {{$rt->email}}
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="/admin/rt/edit/{{$rt->id_rt}}">Edit</a>
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