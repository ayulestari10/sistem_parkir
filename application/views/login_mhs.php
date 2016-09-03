<style type="text/css">
	h2{text-align: center; margin-bottom: 2%;}
	a{list-style: none;}
</style>
<?php echo form_open_multipart('Login/Mhs'); ?>
	<div class="container">
	<?php
		$msg = $this->session->flashdata('msg');
		if(isset($msg)){
			echo $msg;
		}
	?>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div style="margin-bottom: 10%;">
					<h2>Login</h2>
				</div>
				<div class="form-group" style="margin-bottom:10%;">
            <input type="text" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa / NIM"/>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password"/>
        </div>
			</div>

	    </div>
	    <div class="row" style="margin-bottom: 2%; margin-top: 3%;">
		    <div class="col-md-1 col-md-offset-5">
						<input type="submit" value="Masuk" class="btn btn-success" name="login" />
        </div>
				<div class="col-md-1">
						<a href="<?= base_url('Register/regist') ?>"><button type="button" class="btn btn-info">Daftar</button></a>
				</div>
		</div>
	</div>
<?php echo form_close(); ?>
