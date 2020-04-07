 <br><br><br>

      <h2><?php echo $judul; ?></h2>

  <form action="<?php echo base_url() ?>index.php/pelanggan/edit/" method="post">

    <?php foreach ($pelanggan as $key ) : ?>

  <div class="form-group">
    <label>NPM</label>
    <input type="text" class="form-control" name="npm" value="<?php echo $key->npm ?>" readonly>
  </div>

  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $key->nama ?>">
  </div>

  <div class="form-group">
    <label>Jurusan</label>
    <input type="text" class="form-control" name="jurusan" value="<?php echo $key->jurusan ?>">
  </div>

  <div class="form-group">
    <label>Fakultas</label>
    <input type="text" class="form-control" name="fakultas" value="<?php echo $key->fakultas ?>">
  </div>

  <button type="submit" class="btn btn-warning">Update</button>

    <?php endforeach ?>
</form>
    