
 
 <!-- Main content -->
 <section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Form Data Perawatan Mobil</h3>

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
  <div class="col-md-12">
  <div class="col-md-12">

  <?php echo form_open('perawatan/save');?>
  <div class="form-group row">
    <label for="id" class="col-4 col-form-label">ID Perawatan</label> 
    <div class="col-8">
      <input id="id" name="id"  placeholder="Masukkan ID" type="text" class="form-control" required="required" >
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl" class="col-4 col-form-label">Tanggal Perawatan</label> 
    <div class="col-8">
      <input id="tgl" name="tgl" placeholder="Masukkan Tanggal Perawatan" type="date" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="biaya" class="col-4 col-form-label">Biaya Perawatan</label> 
    <div class="col-8">
      <input id="biaya" name="biaya" placeholder="Masukkan Biaya Perawatan" type="number" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="km" class="col-4 col-form-label">KM Mobil</label> 
    <div class="col-8">
      <input id="km" name="km" placeholder="Masukkan KM Mobil" type="number" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="desk" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <textarea id="desk" name="desk" placeholder="Deskripsi peratawan..." cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <label for="id_mobil" class="col-4 col-form-label">Mobil</label> 
    <div class="col-8">
      <select id="id_mobil" name="id_mobil" class="custom-select">
        <option value="1">1 - B2050SJD</option>
        <option value="2">2 - B27822EY</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="id_jenis_perawatan" class="col-4 col-form-label">Jenis Peratawan</label> 
    <div class="col-8">
      <select id="id_jenis_perawatan" name="id_jenis_perawatan" class="custom-select">
        <option value="1">1 - Ganti Oli</option>
        <option value="2">2 - Service Rutin</option>
        <option value="3">3 - Turun Mesin</option>
        <option value="4">4 - Ganti Spartpart</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close(); ?>
</div>
<!-- Default box -->
<!-- <div class="card">
  <div class="card-header">

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
  <div class="col-md-12">
  <div class="col-md-12">
 <h3>
 Daftar Mahasiswa
 </h3>
 <a href="mahasiswa/create" type="button" class="btn btn-success mb-3">Tambah Data</a>

 <table class="table">
 <thead>
 <tr>
 <th>#</th><th>NIM</th><th>Nama</th><th>Gender</th><th>Tempat Lahir</th><th>Tanggal Lahir</th>
<th>IPK</th><th>Prodi Kode</th><th>Aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor=1;
 foreach($list_mhs as $mhs){
 ?>
 <tr>
 <td><?=$nomor?></td>
 <td><?=$mhs->nim?></td>
 <td><?=$mhs->nama?></td>
 <td><?=$mhs->gender?></td>
 <td><?=$mhs->tmp_lahir?></td>
 <td><?=$mhs->tgl_lahir?></td>
<td><?=$mhs->ipk?></td>
<td><?=$mhs->prodi_kode?></td>
<td>
<a href="view?id=<?=$mhs->nim?>">view</a>
</td>
 </tr>
 <?php
 $nomor++;
 }
 ?>
 </tbody>
 </table>
</div>
  /.card-body
</div>
/.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->