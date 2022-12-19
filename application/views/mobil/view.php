<!-- <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- <div class="col-sm-6">
            <h1>Data Mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid 
    </section> -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Mobil</h3>

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
        
        <div class="row mb-2">
          <div class="col-sm-8">
          <table class="table table-striped">
            <tbody>
              <tr><td>ID</td><td><?=$mbl->id?></td></tr>
              <tr><td>No. Polisi</td><td><?=$mbl->nopol?></td></tr>
              <tr><td>Warna</td><td><?=$mbl->warna?></td></tr>
              <tr><td>Biaya Sewa</td><td><?=$mbl->biaya_sewa?></td></tr>
              <tr><td>Deskripsi</td><td><?=$mbl->deskripsi?></td></tr>
              <tr><td>CC</td><td><?=$mbl->cc?></td></tr>
              <tr><td>Tahun</td><td><?=$mbl->tahun?></td></tr>
              <tr><td>ID Merk</td><td><?=$mbl->merk_id?></td></tr>
              <tr><td>Foto</td><td><?=$mbl->foto?></td></tr>
            </tbody>
          </table>
          </div>
          <div class="col-sm-4">
            <?php
            $filegambar = base_url('/uploads/'.$mbl->foto);

            $array = get_headers($filegambar);
            $string = $array[0];
            if(!strpos($string,'200')){
              //echo 'url doesn\'t exists';
              echo '<img src="'.base_url('/uploads/noimage.jpeg').'" alt="foto"/>';
              
            }
            else{
              //echo 'url exists';
              echo '<img src="'.$filegambar.'" width="75%" alt="foto"/>';
              
            }

            // echo $filegambar;
            // //if(file_exists($filegambar)){
            //   echo '<img src="'.$filegambar.'" alt="foto"/>';
            // //}else{
            //   echo '<img src="'.base_url('/uploads/noimage.png').'" alt="foto"/>';
            // //}
            ?>
            <br/>
              Nama File : <?=$mbl->foto?>
            <br/> 
            <?php
              echo form_open_multipart('mobil/upload')
            ?>
              <input type='hidden' name='nopol' value="<?=$mbl->nopol?>"/>
              <input type='hidden' name='id' value="<?=$mbl->id?>"/>
              <input type='file' name='fotombl'/><br/>
              <input type='submit' class='btn btn-success' value='upload'/>
            <?php
              echo form_close()
            ?>
          </div>
        </div>
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