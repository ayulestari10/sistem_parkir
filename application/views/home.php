<div class="container">
	<div class="row" style="margin-bottom: 5%;">
		<h1><strong>Daftar Parkir Kendaraan Mahasiswa</strong></h1>
		<h2><strong>Fakultas Ilmu Komputer Universitas Sriwijaya</strong></h2>
	</div>
	<div class="row">
		<table class="table table-striped">
			<tr>
				<?php echo form_open('home'); ?>
				<div style="margin-bottom: 10px;">
					<strong>Angkatan >> </strong>
					<input type="submit" value="2010" name="2010" /> 
					<input type="submit" value="2011" name="2011" />
					<input type="submit" value="2012" name="2012" />
					<input type="submit" value="2013" name="2013" />
					<input type="submit" value="2014" name="2014" />
					<input type="submit" value="2015" name="2015" />
					<input type="submit" value="2016" name="2016" />			
				</div>

				<div style="margin-top: 10px;">
					<strong>jurusan >>  </strong>
					<input type="submit" value="Teknik Informatika" name="TI" /> 
					<input type="submit" value="Sistem Informasi" name="SI" /> 
					<input type="submit" value="Sistem Komputer" name="SK" /> 
					<input type="submit" value="D3" name="D3" /> 
				</div>

				<div style="margin-bottom: 10px; margin-top: 10px; margin-left: 10%;">
					<input type="submit" value="A-Z" name="az" /> 
					<input type="submit" value="Z-A" name="za" /> 
				</div>
				<?php echo form_close(); ?>
			</tr>
			<tr>
				<th style="width: 150px;">Foto</th>
				<th>Nama</th>
				<th>NIM</th>
				<th style="width: 100px;">Jurusan</th>
				<th>Angkatan</th>
				<th style="width: 100px;">No.Pol Kendaraan</th>
				<th>Foto Kendaraan</th>
				<th>Kampus</th>
			</tr>
			<?php foreach ($dt as $row): ?>
				<tr>
					<td><img src="https://akademik.unsri.ac.id/images/foto_mhs/<?= $row->angkatan ?>/<?= $row->nim ?>.jpg" width="100" height="150" alt="foto"></td>
					<td><?= $row->nama ?></td>
					<td><?= $row->nim ?></td>
					<td><?= $row->jurusan ?></td>
					<td><?= $row->angkatan ?></td>
					<td><?= $row->plat_kendaraan ?></td>
					<td>
						<img src="<?= base_url('kendaraan/'.$row->nim.'.png') ?>" width="150" height="150">
					</td>
					<td><?= $row->lokasi ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>