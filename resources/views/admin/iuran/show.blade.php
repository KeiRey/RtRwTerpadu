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
                <li class="breadcrumb-item">Tambah</li>
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
              <div class="row">
                <div class="col-md-6">
                 <h4>NIK : </h4>
                </div>
                <div class="col-md-6">
                    <h4>{{$item->NIK}}</h4>
                </div>
                <div class="col-md-6">
                    <h4>Nama Warga: </h4>
                </div>
                <div class="col-md-6">
                    <h4>{{$item->name}}</h4>
                </div>
                <div class="col-md-6">
                    <h4>Pekerjaan:</h4>
                </div>
                <div class="col-md-6">
                    <h4>{{$item->pekerjaan}}</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="col-md-12">
                @if(Auth::user()->role != 'user')
                    <form class="form form-horizontal" action="/Iuran/store" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$item->id}}">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 for="nominal">Nominal Iuran</h4>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" class="form-control" name="nominal" id="nominal" placeholder="20****">
                            </div>
                            <div class="col-md-4">
                                <h4 for="tanggal_bayar">Tanggal Bayar</h4>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="date" class="form-control" name="tanggal_bayar" id="tanggal_bayar">
                            </div>
                            <div class="col-md-4">
                                <h4 for="bulan">Pembayaran Bulan</h4>
                            </div>
                            <div class="col-md-8 form-group">
                                <select name="bulan" class="form-select" id="basicSelect">
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                </select>
                            </div>
                            
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary mr-1 mb-1 form-control">Submit</button>
                            </div>
                            
                            </div>
                        </div>
                    </form>
                    @endif
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Bulan</th>
                            <th>Nominal</th>
                            
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Januari</td>
                                <td>
                                @foreach ($iuran as $value)
                                    @if($value->bulan=='Januari')
                                        Rp. {{$value->nominal}}
                                        @if($value->bulan == 'Januari')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Januari')
                                            <?php continue; ?>
                                        @endif
                                    @else 

                                        @if($value->bulan == 'Januari')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Januari')
                                            <?php continue; ?>
                                        @endif
                                        
                                        @if ($value->bulan != 'Januari' && $value->nominal < 1)
                                            -
                                        @endif
                                        
                                    @endif
                                    
                                    
                                @endforeach
                                @if (isset($value->bulan) != 'Januari')
                                    -
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Februari</td>
                                <td>
                                @foreach ($iuran as $value)
                                    @if($value->bulan=='Februari')
                                        Rp. {{$value->nominal}}
                                        @if($value->bulan == 'Februari')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Februari')
                                            <?php continue; ?>
                                        @endif
                                    @else 

                                        @if($value->bulan == 'Februari')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Februari')
                                            <?php continue; ?>
                                        @endif
                                        
                                        

                                    @endif

                                    

                                @endforeach
                                @if(isset($value->bulan) != 'Februari')
                                    -
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Maret</td>
                                <td>
                                @foreach ($iuran as $value)
                                    @if($value->bulan=='Maret')
                                        Rp. {{$value->nominal}}
                                        @if($value->bulan == 'Maret')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Maret')
                                            <?php continue; ?>
                                        @endif
                                    @else 

                                        @if($value->bulan == 'Maret')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Maret')
                                            <?php continue; ?>
                                        @endif
                                        
                                    @endif

                                @endforeach
                                @if (isset($value->bulan) != 'Maret')
                                    -
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>April</td>
                                <td>
                                @foreach ($iuran as $value)
                                    @if($value->bulan=='April')
                                        Rp. {{$value->nominal}}
                                        @if($value->bulan == 'April')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'April')
                                            <?php continue; ?>
                                        @endif
                                    @else 

                                        @if($value->bulan == 'April')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'April')
                                            <?php continue; ?>
                                        @endif
                                        
                                    @endif

                                @endforeach
                                @if (isset($value->bulan) != 'April')
                                    -
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Mei</td>
                                <td>
                                @foreach ($iuran as $value)
                                    @if($value->bulan=='Mei')
                                        Rp. {{$value->nominal}}
                                        @if($value->bulan == 'Mei')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Mei')
                                            <?php continue; ?>
                                        @endif
                                    @else 

                                        @if($value->bulan == 'Mei')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Mei')
                                            <?php continue; ?>
                                        @endif
                                        
                                    @endif

                                @endforeach 
                                @if (isset($value->bulan) != 'Mei')
                                    -
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Juni</td>
                                <td>
                                @foreach ($iuran as $value)
                                    @if($value->bulan=='Juni')
                                        Rp. {{$value->nominal}}
                                        @if($value->bulan == 'Juni')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Juni')
                                            <?php continue; ?>
                                        @endif
                                    @else 

                                        @if($value->bulan == 'Juni')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Juni')
                                            <?php continue; ?>
                                        @endif
                                        
                                    @endif

                                @endforeach     
                                @if (isset($value->bulan) != 'Juni')
                                    -
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Juli</td>
                                <td>
                                    @foreach ($iuran as $value)
                                    @if($value->bulan=='Juli')
                                        Rp. {{$value->nominal}}
                                        @if($value->bulan == 'Juli')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Juli')
                                            <?php continue; ?>
                                        @endif
                                    @else 

                                        @if($value->bulan == 'Juli')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Juli')
                                            <?php continue; ?>
                                        @endif
                                        
                                    @endif

                                @endforeach
                                @if (isset($value->bulan) != 'Juli')
                                    -
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Agustus</td>
                                <td>
                                @foreach ($iuran as $value)
                                    @if($value->bulan=='Agustus')
                                        Rp. {{$value->nominal}}
                                        @if($value->bulan == 'Agustus')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Agustus')
                                            <?php continue; ?>
                                        @endif
                                    @else 

                                        @if($value->bulan == 'Agustus')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Agustus')
                                            <?php continue; ?>
                                        @endif
                                        
                                    @endif

                                @endforeach
                                @if (isset($value->bulan) != 'Agustus')
                                    -
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>September</td>
                                <td>
                                @foreach ($iuran as $value)
                                    @if($value->bulan=='September')
                                        Rp. {{$value->nominal}}
                                        @if($value->bulan == 'September')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'September')
                                            <?php continue; ?>
                                        @endif
                                    @else 

                                        @if($value->bulan == 'September')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'September')
                                            <?php continue; ?>
                                        @endif
                                        
                                    @endif

                                @endforeach
                                @if (isset($value->bulan) != 'September')
                                    -
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Oktober</td>
                                <td>
                                @foreach ($iuran as $value)
                                    @if($value->bulan=='Oktober')
                                        Rp. {{$value->nominal}}
                                        @if($value->bulan == 'Oktober')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Oktober')
                                            <?php continue; ?>
                                        @endif
                                    @else 

                                        @if($value->bulan == 'Oktober')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Oktober')
                                            <?php continue; ?>
                                        @endif
                                        
                                    @endif

                                @endforeach
                                @if (isset($value->bulan) != 'Oktober')
                                    -
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>November</td>
                                <td>
                                @foreach ($iuran as $value)
                                    @if($value->bulan=='November')
                                        Rp. {{$value->nominal}}
                                        @if($value->bulan == 'November')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'November')
                                            <?php continue; ?>
                                        @endif
                                    @else 

                                        @if($value->bulan == 'November')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'November')
                                            <?php continue; ?>
                                        @endif
                                        
                                    @endif

                                @endforeach
                                @if (isset($value->bulan) != 'November')
                                    -
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Desember</td>
                                <td>
                                @foreach ($iuran as $value)
                                    @if($value->bulan=='Desember')
                                        Rp. {{$value->nominal}}
                                        @if($value->bulan == 'Desember')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Desember')
                                            <?php continue; ?>
                                        @endif
                                    @else 

                                        @if($value->bulan == 'Desember')
                                            <?php break; ?>
                                            
                                        @elseif($value->bulan != 'Desember')
                                            <?php continue; ?>
                                        @endif
                                        
                                    @endif

                                @endforeach
                                @if (isset($value->bulan) != 'Desember')
                                    -
                                @endif
                                </td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@stop