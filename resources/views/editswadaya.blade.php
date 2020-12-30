<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/36b9a3dc03.js" crossorigin="anonymous"></script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link href="css/app.css" rel="stylesheet"> -->
    <link href="css/cpp.css" rel="stylesheet">
</head>
<body>
    <!-- Image and text -->
<nav class="navbar navbar-dark bg-warning fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand  mt-2  text-dark" > SELAMAT DATANG DI DESAKU.ID | <b>DESA SINAR JAYA</b> 
    </a>
  </div>
</nav>

<div class="row no-gutters mt-4 ">
    <div class="col-md-2 mt-3 pt-5 bg-dark">
           <ul class="nav flex-column mb-5 ml-3 ">
                <li class="nav-item ">
                    <a class="nav-link active text-white" aria-current="page" href="/home"> <i class="fas fa-tachometer-alt mr-2"></i>   DASHBOARD</a><hr class="bg-secondary"> 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/agenda"> <i class="far fa-calendar-alt mr-2"></i>  AGENDA</a><hr class="bg-secondary"> 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/datapenduduk"> <i class="fas fa-user-friends mr-2"></i>  DATA PENDUDUK</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/rekapdana"> <i class="fas fa-coins mr-2"></i>  REKAP DANA</a><hr class="bg-secondary">
                </li>
                
                <li class="nav-item" aria-labelledby="navbarDropdown">
                    <a class="nav-link text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt mr-2"></i>
                        {{ __('LOGOUT') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li><hr class="bg-secondary">
            </ul>
    
    </div>

    <div class="col-md-10 mt-2 p-5 pl-5">
        <h3><i class="fas fa-user-plus mr-2"></i>  FORM TAMBAH RINCIAN </h3> <hr class="bg-secondary">
            

            @if (session('status'))
                <div class="alert alert-success">
                        {{ session('status')}}
                </div>
            @endif


            <form method="post" action="/danaswadaya/edit/{{ $danaswadaya->id }}">
            @csrf
            <div class="form-group col-md-6">
                
                <div class="form-group">
                    <label for="tanggal">Tanggal  </label>
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" aria-describedby="tanggalhelp" name="tanggal" value="{{$danaswadaya->tanggal}}">
                    <small id="tanggalhelp" class="form-text text-muted">masukan Tanggal Pembauatan.</small>
                </div>
                
                
                
                <div class="form-group">
                    <label for="pemasukan"> Pemasukan </label>
                    <input type="text" class="form-control @error('pemasukan') is-invalid @enderror" id="pemasukan" aria-describedby="pemasukan help" name="pemasukan" value="{{old('pemasukan')}}">
                    <small id="pemasukanhelp" class="form-text text-muted">pemasukan.</small>
                    
                </div>
                
                <div class="form-group">
                    <label for="sumber"> Sumber </label>
                    <input type="text" class="form-control @error('sumber') is-invalid @enderror" id="sumber" aria-describedby="sumberhelp" name="sumber" value="{{old('sumber')}}">
                    <small id="sumberhelp" class="form-text text-muted">sumber.</small>
                </div>

                <div class="form-group">
                    <label for="pengeluaran"> Pengeluaran </label>
                    <input type="text" class="form-control @error('pengeluaran') is-invalid @enderror" id="pengeluaran" aria-describedby="pengeluaranhelp" name="pengeluaran" value="{{old('pengeluaran')}}">
                    <small id="pemasukanhelp" class="form-text text-muted">pengeluaran.</small>
                </div>

                <div class="form-group">
                    <label for="penggunaan"> Penggunaan </label>
                    <input type="text" class="form-control @error('penggunaan') is-invalid @enderror" id="penggunaan" aria-describedby="pengeluaranhelp" name="penggunaan" value="{{old('penggunaan')}}">
                    <small id="pemasukanhelp" class="form-text text-muted">penggunaan.</small>
                </div>

                <div class="form-group">
                    <label for="total"> Total </label>
                    <input type="text" class="form-control @error('total') is-invalid @enderror" id="total" aria-describedby="totalhelp" name="total" value="{{old('total')}}">
                    <small id="totalhelp" class="form-text text-muted">total</small>
                </div>


            
            <button type="submit" class="btn btn-success"><i class="fas fa-location-arrow mr-2"></i>Submit</button>
            </form>
            
            <div class="row pl-3">
            </div>
            </div>
            

