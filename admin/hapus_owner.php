<?php 
require '../functions.php';

$id = $_GET["id"];


if (hapus_kasir($id) > 0) {
    echo "<script>
              alert('Data berhasil dihapus!');
              document.location.href = 'data_owner.php';
            </script>";
} else {
    echo "<script>
              alert('Data gagal dihapus!');
              document.location.href = 'data_owner.php';
            </script>";
}

