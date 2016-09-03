<style type="text/css">
	h2{text-align: center; margin-bottom: 15%;}
</style>
<?php echo form_open_multipart('register/regist'); ?>
	<div class="container">
	<?php
	$msg = $this->session->flashdata('msg');
	if(isset($msg)){
		echo $msg;
	}
	//$this->session->unset_flashdata('msg');

	?>
		<div class="row">
			<div class="col-md-5 col-md-offset-3">
				<h2>Daftar Akun</h2>
				<div class="form-group">
              <input type="text" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa / NIM"/>
          </div>
          <div class="form-group">
              <input class="form-control" type="password" name="password" placeholder="Password" required>
          </div>
          <div class="form-group">
              <input class="form-control" type="password" name="password2" placeholder="Konfirmasi Password" required>
          </div>
			</div>
	  </div>
	  <div class="row" style="margin-bottom: 2%; margin-top: 3%;">
		    <div class="col-md-1 col-md-offset-3">
            <input type="submit" value="Daftar" class="btn btn-success" />
        </div>
		</div>
	</div>
<?php echo form_close(); ?>
