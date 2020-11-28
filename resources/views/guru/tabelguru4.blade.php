<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <title>SDN 1 Banjar</title>
    <link rel="shortcut icon" href="img/sd.png">
    
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
<!-- guru1 -->
<section class="guru1" id="guru1">
  <div class="container">
      <div class="row">
          <div class="col text-center">
              <img src="img/man.png" alt="fotoguru" >
          </div>
      </div>
  </div>

  <div class="container col-md-7">
  <table class="table table-bordered">
    <tbody>
      <tr>
         <th width="250px">Nama :</th>
         <td>Amak Padholi, S.Pd</td>
      </tr>
      <tr>
         <th>Tempat Tanggal Lahir :</th>
         <td> Banyuwangi, 05 Oktober 1975</td>
      </tr>
      <tr>
         <th>Jenis Kelamin :</th>
         <td>Laki-Laki</td>
      </tr>
      <tr>
         <th>NUPTK :</th>
         <td>8337753656200023</td>
      </tr>
      <tr>
         <th>Jabatan :</th>
         <td>Guru Kelas</td>
      </tr>
      <tr>
         <th>Ijasah Tertinggi :</th>
         <td>S1</td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="flex-parent jc-center">
  <a href="<?= url("tabelguru3")?>"><button type="submit" class="green margin-right">Previous</button></a>
  <a href="<?= url("tabelguru5")?>"><button type="submit" class="magenta">Next</button></a>
</div>

   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/jquery.min.js"></script>
   <script src="{{ asset('js/halaman.js')}}"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
           
</body>
</html>