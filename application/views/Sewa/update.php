<!-- <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$judul?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid 
    </section> -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?=$judul?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <?php
            $hidden = ['idedit'=>$sewaedit->id];
        ?>
        <?php echo form_open('sewa/save','',$hidden)?>
        <div class="form-group row">
            <label for="id" class="col-4 col-form-label">Id</label> 
            <div class="col-8">
              <input id="id" name="id" type="text" class="form-control">
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
  <!-- <div class="form-group row">
    <label for="id" class="col-4 col-form-label">id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-500px"></i>
          </div>
        </div> 
        <input id="id" name="id" 
        value="<?=$sewaedit->id?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal mulai" class="col-4 col-form-label">Tanggal Mulai</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="mulai" name="tanggal_mulai" 
        value="<?=$sewaedit->tanggal_mulai?>" type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal akhir" class="col-4 col-form-label">Tanggal Akhir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="akhir" name="tanggal_akhir" 
        value="<?=$sewaedit->tanggal_akhir?>" type="date" class="form-control">
      </div>
    </div>
  </div> -->
  <div class="form-group row">
    <label for="tujuan" class="col-4 col-form-label">Tujuan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-location-arrow"></i>
          </div>
        </div> 
        <input id="tujuan" name="tujuan" 
        value="<?=$sewaedit->tujuan?>" type="text" class="form-control">
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
        <input id="ktp" name="noktp" 
        value="<?=$sewaedit->noktp?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="users_id" class="col-4 col-form-label">Users id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user"></i>
          </div>
        </div> 
        <input id="users" name="users_id" 
        value="<?=$sewaedit->users_id?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="mobil_id" class="col-4 col-form-label">Mobil id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-car"></i>
          </div>
        </div> 
        <input id="mobil" name="mobil_id" 
        value="<?=$sewaedit->mobil_id?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close()?>

</div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>