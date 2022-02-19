@extends('layouts.master')
@section('content')
    
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Table Warga</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="/admin/user/index">Table Warga</a></li>
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
            <div class="row">
              <div class="col-md-6"><h3 class="mb-0">Data Warga</h3></div>
              <div class="col-md-6 d-flex justify-content-end"><a href="/admin/user/create"><i class="ni ni-support-16"></i></a></div>
            
            </div>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="nik">NIK</th>
                  <th scope="col" class="sort" data-sort="nama">Nama </th>
                  <th scope="col" class="sort" data-sort="email">Email</th>
                  <th scope="col" class="sort" data-sort="alamat">Alamat</th>
                  <th scope="col" class="sort" data-sort="completion">QR</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              @foreach ($user as $user)
              <tbody class="list">
                <tr>
                  <td class="budget">
                    {{$user->NIK}}
                  </td>
                  <td>
                    {{$user->name}}
                  </td>
                  <td>
                    {{$user->email}}
                  </td>
                  <td>
                    {{$user->alamat}}
                  </td>
                  <td>
                    <div class="visible-print text-center">
                        {!! QrCode::eyeColor(0, 255, 100, 255,)
                                    ->size(70)
                                    ->generate($user->qrcode); !!}
                        
                    </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="/admin/user/edit/{{$user->id}}">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="/admin/user/delete/{{$user->id}}">Hapus</a>
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