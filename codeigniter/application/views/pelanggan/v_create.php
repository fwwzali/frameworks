<br><br><br>

      <h2><?php echo $judul; ?></h2>

  <form action="<?php echo base_url() ?>index.php/pelanggan/create/" method="post">
  <div class="form-group">
    <label>NPM</label>
    <input type="text" class="form-control" name="npm">
  </div>

  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>

  <div class="form-group">
    <label>Jurusan</label>
    <input type="text" class="form-control" name="jurusan">
  </div>

  <div class="form-group">
    <label>Fakultas</label>
    <input type="text" class="form-control" name="fakultas">
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
</form>