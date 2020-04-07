<br><br><br>

      <?php echo $this->session->flashdata('msg'); ?>

      <h2><?php echo $judul; ?></h2>
        
      <form action="<?php echo base_url()?>index.php/Kantin/create_menu" method="post">
      <div class="form-group">
        <label >Nama Warung</label>
        <input type="text" name="nama_warung" class="form-control">
      </div>

      <div class="form-group">
        <label >Menu</label>
        <input type="text" name="menu" class="form-control">
      </div>

      <div class="form-group">
        <label >Harga</label>
        <input type="text" name="harga" class="form-control">
      </div>
     
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>