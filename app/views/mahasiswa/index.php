<div class="container">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary mb-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
			  Tambah Data Mahasiswa
			</button>
		</div>	
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
				<div class="input-group">
					<input type="text" name="keyword" id="keyword" class="form-control" placeholder="cari mahasiswa..." autocomplete="off" >
				</div>
				<div class="input-group-append">
					<button class="btn btn-primary" type="submit" id="tombolCari">
						Cari
					</button>
				</div>
			</form>
		</div>	
	</div>

	<div class="row">
		<div class="col-lg-6">
			
		<h3>Daftar Mahasiswa</h3>
		<?php foreach($data['mhs'] as $mhs) : ?>
			<ul class="list-group">
				<li class="list-group-item d-flex justify-content-between align-items-center">
					<?= $mhs['nama']; ?>				
					<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="btn btn-danger float-right ml-1" onclick="return confirm('yakin ingin menghapus.?')">Hapus</a>
					<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="btn btn-success float-right ml-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
					<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="btn btn-primary float-right ml-1">Detail</a>
				</li>
			</ul>
		<?php endforeach; ?>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judul" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        	<input type="hidden" name="id" id="id">
        	<div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" id="nama" name="nama">
		  </div>
		  <div class="form-group">
			    <label for="nim">Nim</label>
			    <input type="number" class="form-control" id="nim" name="nim">
		  </div>
		  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
			    <label for="jurusan">Jurusan</label>
			    <select class="form-control" id="jurusan" name="jurusan">
			    	<option value="Sistem Informasi">Sistem Informasi</option>
			    	<option value="Teknik Informatika">Teknik Informatika</option>
			    	<option value="DKV">DKV</option>
			    </select>
		  </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>