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
                <!-- <li class="nav-item">
                    <a class="nav-link text-white"  href="{{ route('logout') }}"> <i class="fas fa-sign-out-alt mr-2"></i>  LOGOUT</a><hr class="bg-secondary">
                </li> -->
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
        <h3><i class="fas fa-user-plus mr-2"></i>  FORM TAMBAH DATA </h3> <hr class="bg-secondary">
            

            @if (session('status'))
                <div class="alert alert-success">
                        {{ session('status')}}
                </div>
            @endif


            <form method="post" action="/create">
            @csrf
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="nama"> Nama </label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" aria-describedby="namahelp" name="nama" value="{{old('nama')}}">
                    <small id="namahelp" class="form-text text-muted">masukan nama.</small>
                    
                </div>


                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
                    <small id="emailHelp" class="form-text text-muted ">masukan email.</small>
                </div>


                <div class="form-group">
                    <label for="nik">NIK </label>
                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" aria-describedby="nikhelp" name="nik" value="{{old('nik')}}">
                    <small id="nikhelp" class="form-text text-muted">masukan nik (16 Digit).</small>
                </div>
                
                <div class="form-group">
                    <label for="tanggal">Tanggal Lahir </label>
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" aria-describedby="tanggalhelp" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
                    <small id="tanggalhelp" class="form-text text-muted">masukan Tanggal Lahir.</small>
                </div>

                <div class="form-group">
                    <label for="tanggal">Jenis Kelamin </label> 
                        <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{old('jenis_kelamin')}}">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-location-arrow mr-2"></i>Submit</button>
            </form>
            
            <div class="row pl-3">
            </div>
            </div>
            

