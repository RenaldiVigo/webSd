<!DOCTYPE html>
<html>
<head>
  <title>SDN 1 Banjar</title>
  <link rel="shortcut icon" href="img/sd.png">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">    
</head>
<body>
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
<section class="dataguru" id="dataguru">
    <div class="container">
        <div class="text-center">
            <h1>Tenaga Pendidik</h1>
        </div>
    </div>
    <div class="container col-md-10">
    <table>
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Tanggal Lahir</th>
    <th>Jenis Kelamin</th>
    <th>NIP/NUPTK</th>
    <th>Jabatan</th>
    <th>Tanggal Mulai Bekerja di SDN 1 Banjar</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Abdul Azis, S.Pd</td>
    <td>Banyuwangi, 01 Juni 1980</td>
    <td>Laki-Laki</td>
    <td>19800601 201407 1 007</td>
    <td>Guru Kelas</td>
    <td>01/01/2003</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Witono, S.Pd</td>
    <td>Banyuwangi,14 Desember 1974</td>
    <td>Laki-Laki</td>
    <td>19731214 201407 1 001</td>
    <td>Guru Kelas</td>
    <td>01/01/2003</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Istila'ah, S.Pd</td>
    <td>Banyuwangi, 10 Maret 1967</td>
    <td>Perempuan</td>
    <td>1642745647300062</td>
    <td>Guru Kelas</td>
    <td>08/01/2018</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Amak Padholi, S.Pd</td>
    <td>Banyuwangi, 05 Oktober 1975</td>
    <td>Laki-Laki</td>
    <td>8337753656200023</td>
    <td>Guru Kelas</td>
    <td>01/08/2003</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Zuliyatin Nuryah, S.Pd</td>
    <td> Banyuwangi, 18 Agustus 1983</td>
    <td>Perempuan</td>
    <td>2150761663300083</td>
    <td>Guru Kelas</td>
    <td>02/07/2002</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Rini Antika</td>
    <td>Banyuwangi, 26 Oktober 1989</td>
    <td>Perempuan</td>
    <td>5358767668300003</td>
    <td>Guru Kelas</td>
    <td>01/07/2007</td>
  </tr>
  <tr>
    <td>7</td>
    <td>Lu'luil Maknun, Spd AUD</td>
    <td>Banyuwangi, 07 Oktober 1988</td>
    <td>Perempuan</td>
    <td>8339766668300003</td>
    <td>Guru Kelas</td>
    <td>31/07/2017</td>
  </tr>
  <tr>
    <td>8</td>
    <td>Ida Safitri</td>
    <td>Banyuwangi, 09 Februari 1997</td>
    <td>Perempuan</td>
    <td>-</td>
    <td>Guru Kelas</td>
    <td>14/08/2017</td>
  </tr>
</table>
</div>
</section>
<br><br><br><br>
<!-- copyright text -->
<p class="copyright">&copy; SD N 1 Banjar</p>



   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.min.js"></script>
   <script src="{{ asset('js/halaman.js')}}"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
