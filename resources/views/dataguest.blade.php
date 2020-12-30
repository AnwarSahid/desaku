<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
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
                    <a class="nav-link active text-white" aria-current="page" href="/"> <i class="fas fa-tachometer-alt mr-2"></i>   DASHBOARD</a><hr class="bg-secondary"> 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/agendaguest"> <i class="far fa-calendar-alt mr-2"></i>  AGENDA</a><hr class="bg-secondary"> 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/datapendudukguest"> <i class="fas fa-user-friends mr-2"></i>  DATA PENDUDUK</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/rekapdanaguest"> <i class="fas fa-coins mr-2"></i>  REKAP DANA</a><hr class="bg-secondary">
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link text-white" href="/logout" > <i class="fas fa-sign-out-alt mr-2"></i>  LOGOUT</a><hr class="bg-secondary">
                </li> -->
            </ul>
    
    </div>





    <div class="col-md-10 mt-2 p-5 pl-5">
        <h3><i class="fas fa-tachometer-alt mr-2"></i>  DASHBOARD </h3> <hr class="bg-secondary">
            <div class="row pl-3">
            <table class="table table-striped">
                <thead>
                    <tr class="table-info"> 
                        <th scope="col">NO</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Email</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach ($data_penduduk as $dg)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{ $dg-> nama}}</td>
                        <td>{{ $dg-> tanggal_lahir}}</td>
                        <td>{{ $dg-> email}}</td>
                        <td>{{ $dg-> nik}}</td>
                        <td>{{ $dg-> jenis_kelamin}}</td>
                    <tr>
                    @endforeach
                </tbody>
                </table>
                
            </div>
    
    
    </div>
</div>
    

</body>
</html>

