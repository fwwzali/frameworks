<br><br><br>
      <a href="<?php echo base_url()?>index.php/Kantin/create_menu" class="btn btn-primary" >+ Menu Baru </a>
      <?php echo $this->session->flashdata('msg'); ?>
      <h2><?php echo $judul; ?></h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Warung</th>
              <th>Menu</th>
              <th>Harga</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <?php $no=1; foreach ($menu as $key): ?>
                <tr>
                  <td><?php echo $no; $no++; ?></td>
                  <td><?php echo $key->nama_warung; ?></td>
                  <td><?php echo $key->menu ?></td>
                  <td><?php echo curr_rp($key->harga) ?></td>
                  <td>
                      <a href="<?php echo base_url()?>index.php/Kantin/update/<?php echo $key->k_menu; ?>" class="btn btn-primary">
                          Edit data
                      </a>

                      <a href="<?php echo base_url()?>index.php/Kantin/delete/<?php echo $key->k_menu; ?>" class="btn btn-danger">
                          Delete
                      </a>
                  </td>
            </tr>
            <?php endforeach ?>
           
          </tbody>
        </table>
      </div>