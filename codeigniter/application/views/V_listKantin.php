<br><br><br>

      <h2><?php echo $judul; ?></h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Warung</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach ($warung as $key): ?>
                  <tr>
                    <td><?php echo $no; $no++ ?></td>
                    <td><?php echo $key->nama_warung; ?></td>
                  </tr>
            <?php endforeach ?>
            
          </tbody>
        </table>
      </div>