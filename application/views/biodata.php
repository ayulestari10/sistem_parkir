<div class="container">

	<div style="margin-bottom: 10%; text-align: center;">
		<h1><strong>Biodata</strong></h1>
	</div>

		<?php
			$msg = $this->session->flashdata('msg');
			if(isset($msg)){
				echo $msg;
			}

			$nim = $this->session->userdata('nim');
			if (isset($nim)) {
			     echo form_open_multipart('Mahasiswa/input_data/');
			} else {
			     redirect('Login/Mhs');
			}
		?>

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
                <?php if($dt->jurusan == 'Teknik Informatika (S1 Reguler)'): ?>
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

                <?php elseif($dt->jurusan == 'Teknik Informatika (S1 Bilingual)'): ?>
	              	<option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
                  <option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
	              	<option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
	              	<option value="Manajemen Infromatika (D3)">Manajemen Infromatika (D3)</option>
	              	<option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
	      	        <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
	        	      <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
	          	    <option value="Teknik Komputasi dan Jaringan (TKJ) (D3)">Teknik Komputasi dan Jaringan (TKJ) (D3)</option>
	            	  <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
	          	    <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
	            	  <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>

                <?php elseif($dt->jurusan == 'Komputer Akuntansi (D3)'): ?>
                  <option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
		          		<option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
	              	<option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
	              	<option value="Manajemen Infromatika (D3)">Manajemen Infromatika (D3)</option>
	              	<option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
	      	        <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
	        	      <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
	          	    <option value="Teknik Komputasi dan Jaringan (TKJ) (D3)">Teknik Komputasi dan Jaringan (TKJ) (D3)</option>
	            	  <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
	          	    <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
	            	  <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>

                <?php elseif($dt->jurusan == 'Manajemen Infromatika (D3)'): ?>
                  <option value="Manajemen Infromatika (D3)">Manajemen Infromatika (D3)</option>
  	          		<option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
                	<option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
                	<option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
                	<option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
        	        <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
          	      <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
            	    <option value="Teknik Komputasi dan Jaringan (TKJ) (D3)">Teknik Komputasi dan Jaringan (TKJ) (D3)</option>
              	  <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
            	    <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
              	  <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>

                <?php elseif($dt->jurusan == 'Sistem Informasi (S1 Reguler)'): ?>
                  <option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
		          		<option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
	              	<option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
	              	<option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
	              	<option value="Manajemen Infromatika (D3)">Manajemen Infromatika (D3)</option>
	      	        <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
	        	      <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
	          	    <option value="Teknik Komputasi dan Jaringan (TKJ) (D3)">Teknik Komputasi dan Jaringan (TKJ) (D3)</option>
	            	  <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
	          	    <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
	            	  <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>

                <?php elseif($dt->jurusan == 'Sistem Informasi (S1 Profesional)'): ?>
                  <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
		          		<option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
	              	<option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
	              	<option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
	              	<option value="Manajemen Infromatika (D3)">Manajemen Infromatika (D3)</option>
	              	<option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
	        	      <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
	          	    <option value="Teknik Komputasi dan Jaringan (TKJ) (D3)">Teknik Komputasi dan Jaringan (TKJ) (D3)</option>
	            	  <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
	          	    <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
	            	  <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>

                <?php elseif($dt->jurusan == 'Sistem Informasi (S1 Bilingual)'): ?>
                  <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
		          		<option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
	              	<option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
	              	<option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
	              	<option value="Manajemen Infromatika (D3)">Manajemen Infromatika (D3)</option>
	              	<option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
	      	        <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
	          	    <option value="Teknik Komputasi dan Jaringan (TKJ) (D3)">Teknik Komputasi dan Jaringan (TKJ) (D3)</option>
	            	  <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
	          	    <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
	            	  <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>

                <?php elseif($dt->jurusan == 'Teknik Komputasi dan Jaringan (TKJ) (D3)'): ?>
                  <option value="Teknik Komputasi dan Jaringan (TKJ) (D3)">Teknik Komputasi dan Jaringan (TKJ) (D3)</option>
		          		<option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
	              	<option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
	              	<option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
	              	<option value="Manajemen Infromatika (D3)">Manajemen Infromatika (D3)</option>
	              	<option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
	      	        <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
	        	      <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
	            	  <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
	          	    <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
	            	  <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>

                <?php elseif($dt->jurusan == 'Teknik Komputer (D3)'): ?>
                  <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
		          		<option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
	              	<option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
	              	<option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
	              	<option value="Manajemen Infromatika (D3)">Manajemen Infromatika (D3)</option>
	              	<option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
	      	        <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
	        	      <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
	          	    <option value="Teknik Komputasi dan Jaringan (TKJ) (D3)">Teknik Komputasi dan Jaringan (TKJ) (D3)</option>
	          	    <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
	            	  <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>

                <?php elseif($dt->jurusan == 'Sistem Komputer (S1 Reguler)'): ?>
            	    <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
              		<option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
                	<option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
                	<option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
                	<option value="Manajemen Infromatika (D3)">Manajemen Infromatika (D3)</option>
                	<option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
        	        <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
          	      <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
            	    <option value="Teknik Komputasi dan Jaringan (TKJ) (D3)">Teknik Komputasi dan Jaringan (TKJ) (D3)</option>
              	  <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
              	  <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>

                <?php elseif($dt->jurusan == 'Sistem Komputer (S1 Profesional)'): ?>
                  <option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
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

                <?php else: ?>
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
                <?php endif; ?>
              </select>
		        </div>
		        <div class="form-group">
					<label for="tgl_daftar">Tanggal Daftar <span style="color: red;">(dd-mm-yyy)</span></label>
					<input type="text" class="form-control" name="tgl_daftar" value="<?= $dt->tgl_daftar ?>"></input>
				</div>
				<div class="form-group">
		          <label for="lokasi"></label><br/>
		          <select name="lokasi" class="form-control">
                <?php if($dt->lokasi == 'Indralaya'): ?>
                  <option>Indralaya</option>
		          		<option>Bukit</option>
                <?php elseif($dt->lokasi == 'Bukit'): ?>
                  <option>Bukit</option>
                  <option>Indralaya</option>
		          	<?php else: ?>
                  <option>Indralaya</option>
		          		<option>Bukit</option>
                <?php endif; ?>
		          </select>
		        </div>
		        <div class="form-group">
		          <label for="angkatan"></label><br/>
		          <select name="angkatan" class="form-control">
                <?php if($dt->angkatan == '2016'): ?>
		          		<option>2016</option>
		          		<option>2015</option>
		          		<option>2014</option>
		          		<option>2013</option>
		          		<option>2012</option>
		          		<option>2011</option>
		          		<option>2010</option>
                <?php elseif($dt->angkatan == '2015'): ?>
                  <option>2015</option>
		          		<option>2016</option>
		          		<option>2014</option>
		          		<option>2013</option>
		          		<option>2012</option>
		          		<option>2011</option>
		          		<option>2010</option>
                <?php elseif($dt->angkatan == '2014'): ?>
                  <option>2014</option>
		          		<option>2016</option>
		          		<option>2015</option>
		          		<option>2013</option>
		          		<option>2012</option>
		          		<option>2011</option>
		          		<option>2010</option>
                <?php elseif($dt->angkatan == '2013'): ?>
                  <option>2013</option>
		          		<option>2016</option>
		          		<option>2015</option>
		          		<option>2014</option>
		          		<option>2012</option>
		          		<option>2011</option>
		          		<option>2010</option>
                <?php elseif($dt->angkatan == '2012'): ?>
                  <option>2012</option>
		          		<option>2016</option>
		          		<option>2015</option>
		          		<option>2014</option>
		          		<option>2013</option>
		          		<option>2011</option>
		          		<option>2010</option>
                <?php elseif($dt->angkatan == '2011'): ?>
                  <option>2011</option>
		          		<option>2016</option>
		          		<option>2015</option>
		          		<option>2014</option>
		          		<option>2013</option>
		          		<option>2012</option>
		          		<option>2010</option>
                <?php elseif($dt->angkatan == '2010'): ?>
                  <option>2010</option>
		          		<option>2016</option>
		          		<option>2015</option>
		          		<option>2014</option>
		          		<option>2013</option>
		          		<option>2012</option>
		          		<option>2011</option>
                <?php else: ?>
                  <option>2016</option>
		          		<option>2015</option>
		          		<option>2014</option>
		          		<option>2013</option>
		          		<option>2012</option>
		          		<option>2011</option>
		          		<option>2010</option>
                <?php endif; ?>
		          </select>
		        </div>
		    <div class="form-group">
    				<label for="foto_kendaraan">Foto Kendaraan</label>
    				<input type="file" name="userfile" />
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
				<input type="submit" value="Simpan" name="add_mhs" class="btn btn-success"></input>
			</div>
		</div>

		<?php echo form_close(); ?>
</div>
