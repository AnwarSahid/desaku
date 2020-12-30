<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/36b9a3dc03.js" crossorigin="anonymous"></script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        <h3><i class="fas fa-coins mr-2"></i>  REKAP DANA SWADAYA </h3> <hr class="bg-secondary">
        <a class="btn btn-info mb-3 text-bold" href="/rekapdana" role="button"><i class="fas fa-angle-double-left mr-2"></i>DANA DESA</i></a>
        <a class="btn btn-success mb-3 text-bold" href="/danaswadaya/tambahrincian" role="button">TAMBAH RINCIAN<i class="fas fa-plus ml-2"></i></></a>
        



        <div class="row pl-3">



        @if (session('status'))
                <div class="alert alert-success">
                        {{ session('status')}}
                </div>
            @endif
        <table class="table table-striped">
                <thead>
                    <tr class="table-info"> 
                        <th scope="col">NO</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Pemasukan</th>
                        <th scope="col">Sumber</th>
                        <th scope="col">Pengeluaran</th>
                        <th scope="col">Penggunaan</th>
                        <th scope="col">Total </th>
                        <th scope="col">Action</th>
                        
                    </tr>
                </thead>
                <tbody>

                    @foreach ($danaswadaya as $ds)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$ds->tanggal}}</td>
                        <td>{{$ds->pemasukan}}</td>
                        <td>{{$ds->sumber}}</td>
                        <td>{{$ds->pengeluaran}}</td>
                        <td>{{$ds->penggunaan}}</td>
                        <td>{{$ds->total}}</td>
                        <td>
                            <div class="row ">
                                
                    
                            <a href="/danaswadaya/hapus/{{$ds->iddw}}" class="badge badge-danger btn-sm ml-2"> Delete</a>
                            </div>
                        </td>

                    
                    </tr>
                    
                    @endforeach
            
                </tbody>
                </table>


        </div>
</div>
    

</body>
</html>