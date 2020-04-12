<?php 
require '../functions.php';

$id = $_GET["id"];


if (hapus_paket($id) > 0) {
    echo "<script>
              alert('Data berhasil dihapus!');
              document.location.href = 'dataPaket.php';
            </script>";
} else {
    echo "<script>
              alert('Data gagal dihapus!');
              document.location.href = 'dataPaket.php';
            </script>";
}

