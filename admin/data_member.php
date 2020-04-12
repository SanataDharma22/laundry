<?php 
require '../functions.php';
$member = query("SELECT * FROM tb_member");
?>
<?php require 'layouts/header.php'; ?>
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Data Member
              </div>
              <div class="card-body">
                <p align='left'><a class='btn btn-primary' href='tambah_member.php'><i class='icon-plus'></i>Tambah Member</a></p>
            <table id='datatable' class='table table-hover'>
              <thead>
                <tr>
                  <th><i class='icon-terminal'></i> No.</th>
                  <th><i class='icon-terminal'></i> Nama</th>
                  <th><i class='icon-signal'></i> Alamat</th>
                  <th><i class='icon-signal'></i> Telp</th>
                  <th><i class='icon-chevron-right'></i> Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $nomor=1; ?>
                <?php foreach($member as $m) : ?>
                  <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $m["nama"]; ?></td>
                    <td><?php echo $m["alamat"]; ?></td>
                    <td><?php echo $m["tlp"]; ?></td>
                    <td>
                      <a class='btn btn-danger' href='hapus_member.php?id=<?php echo $m["id"]; ?>'><i class='icon-edit'></i>Hapus</a> 
                      <a class='btn btn-primary' href='update_member.php?id=<?php echo $m["id"]; ?>'><i class='icon-edit'></i>Edit</a>
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

<?php require 'layouts/footer.php'; ?>