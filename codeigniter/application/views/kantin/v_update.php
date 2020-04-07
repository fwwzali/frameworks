<br><br><br>

      <?php echo $this->session->flashdata('msg'); ?>

      <h2><?php echo $judul; ?></h2>
        
      <form action="<?php echo base_url()?>index.php/Kantin/update" method="post">
        <?php 
            foreach($menu as $key) :
        ?>

        <input type="hidden" name="k_menu" value="<?php echo $key->k_menu ?>">

      <div class="form-group">
        <label >Nama Warung</label>
        <input type="text" name="nama_warung" class="form-control" value="<?php echo $key->nama_warung?>">
      </div>

      <div class="form-group">
        <label >Menu</label>
        <input type="text" name="menu" class="form-control" value="<?php echo $key->menu ?>">
      </div>

      <div class="form-group">
        <label >Harga</label>
        <input type="text" name="harga" class="form-control" value="<?php echo $key->harga ?>">
      </div>
         <?php 
            endforeach;
        ?>
      <button type="submit" class="btn btn-warning">Update</button>
    </form>