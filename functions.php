<?php 

$conn = mysqli_connect("localhost","root","","lundri");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function update_owner($data){
    global $conn;
    $nama = $data["nama"];
    $username = $data["username"];
    $password = $data["password"];
    $id_outlet = $data["id_outlet"];
    $id = $data["id"];
    mysqli_query($conn,"UPDATE tb_user SET 
                    nama = '$nama',
                    username = '$username',
                    password = '$password',
                    id_outlet = '$id_outlet'
                    WHERE id = '$id'
                ");
    return mysqli_affected_rows($conn);
}

function tambah_kasir($data){
    global $conn;
    $nama = $data["nama"];
    $username = $data["username"];
    $password = password_hash($data["password"], PASSWORD_DEFAULT);
    $id_outlet = $data["id_outlet"];
    mysqli_query($conn,"INSERT INTO tb_user VALUES ('','$nama','$username','$password','$id_outlet','kasir')");
    return mysqli_affected_rows($conn);
}

function tambah_owner($data){
        global $conn;
    $nama = $data["nama"];
    $username = $data["username"];
    $password = password_hash($data["password"], PASSWORD_DEFAULT);
    $id_outlet = $data["id_outlet"];
    mysqli_query($conn,"INSERT INTO tb_user VALUES ('','$nama','$username','$password','$id_outlet','owner')");
    return mysqli_affected_rows($conn);
}

function update_kasir($data){
    global $conn;
    $nama = $data["nama"];
    $username = $data["username"];
    $password = $data["password"];
    $id_outlet = $data["id_outlet"];
    $id = $data["id"];
    mysqli_query($conn,"UPDATE tb_user SET 
                    nama = '$nama',
                    username = '$username',
                    password = '$password',
                    id_outlet = '$id_outlet'
                    WHERE id = '$id'
                ");
    return mysqli_affected_rows($conn);
}

function tambah_tranksaksi($data){
    global $conn;
    $id_outlet = $data["id_outlet"];
    $kode_invoice = $data["kode_invoice"];
    $id_member = $data["id_member"];
    $tgl = date("Y-m-d H:i:s");
    $batas_waktu = $data["batas_waktu"];
    $id_user = $data["id_user"];
    $total = $data["harga"];
    mysqli_query($conn,"INSERT INTO tb_transaksi VALUES ('','$id_outlet','$kode_invoice','$id_member','$tgl','$batas_waktu',null,'proses','belum_dibayar','$total','$id_user')");
    return mysqli_affected_rows($conn);
}

function tambah_outlet($data)
{
    global $conn;
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $tlp = $data["tlp"];

    mysqli_query($conn,"INSERT INTO tb_outlet VALUES ('','$nama','$alamat','$tlp')");
    return mysqli_affected_rows($conn);
}

function tambah_customer($data){
    global $conn;
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $jenis_kelamin = $data["gender"];
    $tlp = $data["tlp"];


    mysqli_query($conn,"INSERT INTO tb_member VALUES ('','$nama','$alamat','$jenis_kelamin','$tlp')");
    return mysqli_affected_rows($conn);
}

function tambah_paket($data){
	    global $conn;
    $id_outlet = $data["id_outlet"];
    $jenis = $data["jenis"];
    $nama_paket = $data["nama_paket"];
    $harga = $data["harga"];

    mysqli_query($conn,"INSERT INTO tb_paket VALUES ('','$id_outlet','$jenis','$nama_paket','$harga')");
    return mysqli_affected_rows($conn);
}

function update_paket($data){
	global $conn;
    $id_outlet = $data["id_outlet"];
    $jenis = $data["jenis"];
    $nama_paket = $data["nama_paket"];
    $harga = $data["harga"];
    $id = $data["id"];

    mysqli_query($conn,"UPDATE tb_paket SET 
    				id_outlet = '$id_outlet',
    				jenis = '$jenis',
    				nama_paket = '$nama_paket',
    				harga = '$harga'
    				WHERE id = '$id'
    			");
    return mysqli_affected_rows($conn);
}

function update_member($data){
    global $conn;
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $jenis_kelamin = $data["gender"];
    $tlp = $data["tlp"];
    $id = $data["id"];

    mysqli_query($conn,"UPDATE tb_member SET 
                    nama = '$nama',
                    alamat = '$alamat',
                    jenis_kelamin = '$jenis_kelamin',
                    tlp = '$tlp'
                    WHERE id = '$id'
                ");
    return mysqli_affected_rows($conn);
}

function hapus_paket($id){
   global $conn;
    mysqli_query($conn, "DELETE FROM tb_paket WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

function hapus_customer($id){
   global $conn;
    mysqli_query($conn, "DELETE FROM tb_member WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

function hapus_outlet($id){
   global $conn;
    mysqli_query($conn, "DELETE FROM tb_outlet WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

function hapus_kasir($id){
   global $conn;
    mysqli_query($conn, "DELETE FROM tb_user WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

function update_outlet($data){
	global $conn;
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $tlp = $data["tlp"];
    $id = $data["id"];

    mysqli_query($conn,"UPDATE tb_outlet SET 
    				nama = '$nama',
    				alamat = '$alamat',
    				tlp = '$tlp'
    				WHERE id = '$id'
    			");
    return mysqli_affected_rows($conn);
}
