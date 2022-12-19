<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rentakā | Form Sewa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css')?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css')?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-danger">
    <div class="card-header text-center">
    <a href="<?php echo base_url('index.php/home/index')?>" class="h1"><img class="logo" src="<?php echo base_url('rentakaa.png')?>" alt="" width="150px"></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Form Penyewaan  Mobil</p>

      
      
      <?php echo form_open('sewa/save')?>
          <div class="form-group row">
            <!-- <label for="id" class="col-4 col-form-label">Id</label>  -->
            <div class="col-8">
              <input id="id" name="id"  type="hidden" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="tanggal_mulai" class="col-4 col-form-label">Tanggal Mulai</label> 
            <div class="col-8">
              <input id="mulai" name="tanggal_mulai" type="date" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="tanggal_akhir" class="col-4 col-form-label">Tanggal Akhir</label> 
            <div class="col-8">
              <input id="akhir" name="tanggal_akhir" type="date" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="tujuan" class="col-4 col-form-label">Tujuan</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-location-arrow"></i>
                  </div>
                </div> 
                <input id="tujuan" name="tujuan" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="noktp" class="col-4 col-form-label">No KTP</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-id-card"></i>
                  </div>
                </div> 
                <input id="ktp" name="noktp" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
         
            <!-- <label for="users_id" class="col-4 col-form-label">Users Id</label>  -->
            <div class="col-8">
              <div class="input-group">
                <!-- <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-user"></i>
                  </div>
                </div>  -->
                <input id="users" name="users_id" type="hidden" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
          <label for="mobil_id" class="col-4">Pilih Mobil</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-car"></i>
                  </div>
                </div> 
                <select name="mobil_id" id="mobil_id" class="form-control" required>
                    <option value="">-</option>
                    <?php foreach($mobil_data as $m) :?>
                      <option value="<?= $m->id;?>"><?= $m->nama;?> - <?= $m->nopol;?></option>
                    <?php endforeach;?>
                  </select>
              </div>
            </div>
          </div>
          
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary" >Submit</button>
            </div>
          </div>
        <?php echo form_close()?>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0"> --> 
        <!-- <a href="<?php echo base_url('index.php/registrasi/index')?>" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('dist/js/adminlte.min.js')?>"></script>
</body>
</html>
