<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <title>SDN 1 Banjar</title>
    <link rel="shortcut icon" href="img/sd.png">
    <style>
       figure {
	width: 300px;
	height: 200px;
	margin: 0;
	padding: 0;
	background: #fff;
	overflow: hidden;
}
       /* Zoom In #1 */
.hover01 figure img {
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover01 figure:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}
    </style>
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
<!-- Start Berita -->


<!-- End Berita -->


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