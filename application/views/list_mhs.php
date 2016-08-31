<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div style="margin-bottom: 5%;">
				<h1><strong>List Mahasiswa</strong></h1>
			</div>

			<div style="margin-top: 10px; margin-bottom: 10px;">
				<a href="<?= base_url('Admin') ?>"> <strong><< Kembali</strong></a>
			</div>

			<div>
				<table class="table table-striped">
					<tr>
						<th>No.</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Jurusan</th>
						<th>Angkatan</th>
						<th>Lokasi</th>
						<th>Tanggal Daftar</th>
						<th>Plat Kendaraan</th>
						<th>Tipe</th>
						<th></th>
						<th></th>
					</tr>
					<?php $i = 0; ?>
					<?php foreach($dt as $row): ?>
						<tr>
							<td><?= ++$i ?></td>
							<td><?= $row->nim ?></td>
							<td><?= $row->nama ?></td>
							<td><?= $row->jurusan ?></td>
							<td><?= $row->angkatan ?></td>
							<td><?= $row->lokasi ?></td>
							<td><?= $row->tgl_daftar ?></td>
							<td><?= $row->plat_kendaraan ?></td>
							<td><?= $row->tipe ?></td>
							<td>
								<a href="<?= base_url('Admin/edit_mhs/'.$row->id_mhs) ?>"><button class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</button></a>
							</td>
							<td>
								<a href="<?= base_url('Admin/delete_mhs/'.$row->id_mhs) ?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</button></a>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
</div>