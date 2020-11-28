<!DOCTYPE html>
<html>
<head>
  <title>SDN 1 Banjar</title>
  <link rel="shortcut icon" href="img/sd.png">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tabelsiswa.css')}}">    
</head>
<body>
<!-- header start -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
   <div class="container-fluid">
      <a class="navbar-brand" href="{{ asset('/')}}">
      <img class="logo horizontal-logo" src="img/tutwuri.png" alt="forecastr logo">
      </a>
      <h1>SDN 1 Banjar</h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link" href="{{ asset('/')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="{{ asset('#guru')}}" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Profil Sekolah
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                  <a class="dropdown-item" href="{{ asset('sambutan')}}">Sambutan Sekolah</a>
                  <a class="dropdown-item" href="{{ asset('visimisi')}}">Visi-Misi</a>
                  <a class="dropdown-item" href="<?= url("fotokegiatan")?>">Galery</a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ asset('#guru')}}">Guru</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Siswa
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                  <a class="dropdown-item" href="<?= url("kelas1")?>">Kelas 1</a>
                  <a class="dropdown-item" href="<?= url("kelas2")?>">Kelas 2</a>
                  <a class="dropdown-item" href="<?= url("kelas3")?>">Kelas 3</a>
                  <a class="dropdown-item" href="<?= url("kelas4")?>">Kelas 4</a>
                  <a class="dropdown-item" href="<?= url("kelas5")?>">Kelas 5</a>
                  <a class="dropdown-item" href="<?= url("kelas6")?>">Kelas 6</a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ asset('#profil')}}">Berita</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= url("#contact")?>">Hubungi Kami</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<!-- header end -->

<!-- start siswa -->
<section class="siswa" id="siswa">
    <div class="container">
        <div class="card">
            <div class="row">
                <h3>Direktori Siswa</h3>
            </div>
            <div class="row1">
                <h4>Kelas</h4>
                <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">1</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="<?= url("kelas2")?>">2</a>
                <a class="dropdown-item" href="<?= url("kelas3")?>">3</a>
                <a class="dropdown-item" href="<?= url("kelas4")?>">4</a>
                <a class="dropdown-item" href="<?= url("kelas5")?>">5</a>
                <a class="dropdown-item" href="<?= url("kelas6")?>">6</a>
            </div> 

            <div class="container">
            <table class="table table-bordered">
                <thead class="thead-dark text-center">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jenis Kelamin</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Azka Calisa Banuwati</td>
                    <td>1</td>
                    <td>Perempuan</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Difta Eko Prasetya</td>
                    <td>1</td>
                    <td>Laki-Laki</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kanza Sherasafira</td>
                    <td>1</td>
                    <td>Perempuan</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Moh. Alvin</td>
                    <td>1</td>
                    <td>Laki-Laki</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Naysila Indayani</td>
                    <td>1</td>
                    <td>Perempuan</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Rehan</td>
                    <td>1</td>
                    <td>Laki-Laki</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Yusuf Maulana</td>
                    <td>1</td>
                    <td>Laki-Laki</td>
                  </tr>
                  </tbody>
              </table>
            </div>
        </div>
    </div>
</section>
<!-- end siswa -->
<br><br><br><br>
<!-- copyright text -->
<p class="copyright">&copy; SD N 1 Banjar</p>


<script src="js/jquery.min.js"></script>
<script src="{{ asset('js/halaman.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
