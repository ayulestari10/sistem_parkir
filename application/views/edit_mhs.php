<style type="text/css">
	a{list-style: none;}
	table{margin-top: 5%;}
	.box{
		width: 250px; height: 60px;
		background-color: rgba(0, 400, 0, 0.5);
		font-size: 18px; font-weight: bold; text-align: center;
		margin-bottom: 8%; margin-left: 3%; padding: 2%; margin-top: -20%;
	}
</style>

<div class="container">
	<?php  
		$msg = $this->session->flashdata('msg');
		if(isset($msg)){
			echo $msg;
		}

		$id_mhs = $dt->id_mhs;
		if (isset($id_mhs)) {
		     echo form_open_multipart('Admin/edit_mhs/'.$id_mhs);
		} else {
		     echo form_open_multipart('Admin/edit_mhs/');
		}
	?>

	<div style="margin-bottom: 8%;">
		<h1><strong>Edit Data Mahasiswa</strong></h1>
	</div>

	<div class="add">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama" value="<?= $dt->nama ?>"></input>
				</div>
				<div class="form-group">
					<label for="nim">NIM</label>
					<input type="text" class="form-control" name="nim" value="<?= $dt->nim ?>"></input>
				</div>
				<div class="form-group">
		          <label for="jurusan">Jurusan</label><br/>
		          <select name="jurusan" class="form-control">
		          		<option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
		              	<option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
		              	<option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
		              	<option value="Manajemen Infromatika (D3)">Manajemen Infromatika (D3)</option>  
		              	<option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
		      	        <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
		        	      <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
		          	    <option value="Teknik Komputasi dan Jaringan (TKJ) (D3)">Teknik Komputasi dan Jaringan (TKJ) (D3)</option>
		            	  <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
		          	    <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
		            	  <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
		          </select>
		        </div>
		        <div class="form-group">
					<label for="tgl_daftar">Tanggal Daftar</label>
					<input type="text" class="form-control" name="tgl_daftar" value="<?= $dt->tgl_daftar ?>"></input>
				</div>
				<div class="form-group">
		          <label for="lokasi">Kampus</label><br/>
		          <select name="lokasi" class="form-control">
	          		<?php if($dt->lokasi == 'Indralaya'): ?>
		          		<option>Indralaya</option>
		          		<option>Bukit</option>
	          		<?php else: ?>
	          			<option>Bukit</option>
	          			<option>Indralaya</option>
	          		<?php endif; ?>
		          </select>
		        </div>
		        <div class="form-group">
		          <label for="angkatan">Angkatan</label><br/>
		          <select name="angkatan" class="form-control">
	          		<option>2010</option>
	          		<option>2011</option>
	          		<option>2012</option>
	          		<option>2013</option>
	          		<option>2014</option>
	          		<option>2015</option>
	          		<option>2016</option>
		          </select>
		        </div>
				<div class="form-group">
					<label for="plat_kendaraan">Plat Kendaraan</label>
					<input type="text" class="form-control" name="plat_kendaraan" value="<?= $dt->plat_kendaraan ?>"></input>
				</div>
				<div class="form-group">
					<label for="tipe">Tipe Motor/Mobil</label>
					<input type="text" class="form-control" name="tipe" value="<?= $dt->tipe ?>"></input>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-1 col-md-offset-5" style="margin-top: 1%;">
				<input type="submit" value="Simpan" name="edit_mhs" class="btn btn-success"></input>
			</div>
		</div>

		<?php echo form_close(); ?>
	</div>
</div>