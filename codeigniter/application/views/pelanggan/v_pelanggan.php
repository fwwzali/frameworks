<br><br><br>
<a href="<?php echo base_url()?>index.php/Pelanggan/create" class="btn btn-primary" >+ Pelanggan Baru </a>
<?php echo $this->session->flashdata('msg'); ?>
<h2><?php echo $judul; ?></h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Fakultas</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      <?php $no=1; foreach ($pelanggan as $key): ?>
          <tr>
            <td><?php echo $no; $no++; ?></td>
            <td><?php echo $key->npm; ?></td>
            <td><?php echo $key->nama ?></td>
            <td><?php echo $key->jurusan ?></td>
            <td><?php echo $key->fakultas ?></td>
            <td>
                <a href="<?php echo base_url() ?>index.php/pelanggan/edit/<?php echo $key->npm; ?>" class="btn btn-primary">
                    Edit data
                </a>

                <a href="<?php echo base_url() ?>index.php/pelanggan/delete/<?php echo $key->npm; ?>" class="btn btn-danger">
                    Delete
                </a>
            </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
    