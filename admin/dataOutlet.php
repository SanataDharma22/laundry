<?php 
require '../functions.php';
$outlet = query("SELECT * FROM tb_outlet");
?>
<?php require 'layouts/header.php'; ?>
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Data Outlet
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="tambahOutlet.php" class="btn btn-primary">Tambah Data</a>
                  <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Pilihan</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?>
                  <?php foreach($outlet as $o) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $o["nama"]; ?></td>
                        <td><?php echo $o["alamat"]; ?></td>
                        <td>
                          <a href="hapusOutlet.php?id=<?php echo $o["id"]; ?>"  class="btn btn-danger">Hapus</a>
                          <a href="updateOutlet.php?id=<?php echo $o["id"]; ?>" class="btn btn-warning">Update</a>
                        </td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require 'layouts/footer.php'; ?>