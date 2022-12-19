<!-- <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Sewa Mobil</h1>
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
          <h3 class="card-title">Data Sewa Mobil</h3>

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
              <tr><td>ID</td><td><?=$sewa->id?></td></tr>
              <tr><td>Tanggal Mulai</td><td><?=$sewa->tanggal_mulai?></td></tr>
              <tr><td>Tanggal Akhir</td><td><?=$sewa->tanggal_akhir?></td></tr>
              <tr><td>Tujuan</td><td><?=$sewa->tujuan?></td></tr>
              <tr><td>No KTP</td><td><?=$sewa->noktp?></td></tr>
              <tr><td>Users Id</td><td><?=$sewa->users_id?></td></tr>
              <tr><td>Mobil Id</td><td><?=$sewa->mobil_id?></td></tr>
            </tbody>
          </table>
          </div>
          <!-- <div class="col-sm-4">
            Ini Foto
          </div> -->
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