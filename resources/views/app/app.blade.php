<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body class="bg-purple">
    
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" style="color:white;" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" style="color:white;" href="/mahasiswa/">Mahasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white;" href="/absen/">Absen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white;" href="/matkul/">Mata Kuliah</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"style="color:white;"  href="/jadwal/">Jadwal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white;" href="/kontrak_matakuliah/">Kontrak Mata Kuliah</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white;" href="/semester/">Semester</a>
      </li>
    </ul>
    
  </div>
</nav>
<marquee direction="left" scrollamount="10">
				<h1>
				  <font color="aqua">
							SISTEM ABSENSI MAHASISWA
					</font></h1>
</marquee>


    @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>