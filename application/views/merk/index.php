<!-- <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- <div class="col-sm-6">
            <h1>Kelola Merk</h1>
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
          <h3 class="card-title">Data Merk</h3>

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
        <a class="btn btn-success" href="create" role="button">Create merk</a>
        <table class="table table-striped">
    <thead>
        <tr><th>No</th><th>ID</th><th>Nama</th>
            <th>Produk</th><th>Action</th>  
    </tr>
    </thead>
    <tbody>
    <?php 
    $nomor = 1;
    foreach($list_merk as $obj){
    ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$obj->id?></td>
            <td><?=$obj->nama?></td>
            <td><?=$obj->produk?></td>
            <td>
              <a href="view?id=<?=$obj->id?>">view</a>|
              <a href="edit?id=<?=$obj->id?>">Edit</a>|
              <a href="delete?id=<?=$obj->id?>"
              onclick="if(!confirm('Anda Yakin Hapus merk ID<?=$obj->id?>?')) {return false}"
              >Delete</a>
            </td>
        </tr>
    <?php 
    $nomor++;   
    }?>
    </tbody>
</table>
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