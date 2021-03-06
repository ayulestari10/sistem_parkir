<style type="text/css">
  ul li{margin-top: 6%; font-size: 22px;}
</style>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url('home') ?>"><h3 style="margin-top: -2%;">Sistem Parkir Fakultas Ilmu Komputer</h3></a>
    </div>

    <ul class="nav navbar-nav navbar-right">
    <?php
      $username    = $this->session->userdata('username');
      $nim         = $this->session->userdata('nim');
    ?>
        <li>
          <?php if(isset($username)){
              echo '<a href="'.base_url('Admin/list_mhs').'">List Mahasiswa</a>';
            } ?>
        </li>

        <li>
          <?php if(isset($nim)){
            echo '<a href="'.base_url('Mahasiswa/pernyataan').'">Cetak Pernyataan</a>';
          }?>
        </li>

        <li>
            <?php
                if(!isset($username) && !isset($nim)){
                    echo '<a href="'.base_url('Login/Mhs').'" class="btn btn-primary btn-lg" role="button">LOGIN</a>';
                }
                else{
                    echo '<a href="'.base_url('Logout').'" class="btn btn-primary btn-lg" role="button">LOGOUT</a>';
                }
            ?>
        </li>
    </ul>

  </div><!-- /.container-fluid -->
</nav>
