<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman | <?= $data['title'] ?></title>
	<link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-light">
  		<div class="container">
  			<a class="navbar-brand" href="#">PHP MVC</a>
  				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  					<span class="navbar-toggler-icon"></span>
  				</button>
  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
  				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
  					<li class="nav-item">
  						<a class="nav-link active" href="<?= BASEURL; ?>">Home</a>
  					</li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL; ?>/about" >About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa" >Mahasiswa</a>
            </li>
  					<!-- <li class="nav-item">
  						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  							CV
  						</a>
  						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  							<li><a class="dropdown-item" href="#dataDiri" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithdataDiri" aria-controls="offcanvasWithdataDiri">Data Diri</a></li>
  							<li><a class="dropdown-item" href="#pendidikan" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithpendidikan" aria-controls="offcanvasWithpendidikan">Pendidikan</a></li>
  							<li><a class="dropdown-item" href="#kemampuan" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithkemampuan" aria-controls="offcanvasWithkemampuan">Kemampuan</a></li>
  							<li><a class="dropdown-item" href="#pengalaman" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithpengalamanKerja" aria-controls="offcanvasWithpengalamanKerja">Pengalaman Kerja</a></li>
  							<li><hr class="dropdown-divider"></li>
  							<li><a class="dropdown-item" href="#kontak" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithkontak" aria-controls="offcanvasWithkontak">Kontak</a></li>
  						</ul>
  					</li> -->
  				</ul>
  			</div>
	  	</div>
  	</nav>
  	<div class="container">
  		<div class="mt-3">