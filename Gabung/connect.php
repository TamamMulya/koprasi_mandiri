<?php
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$email = $_POST['email'];
$notelp = $_POST['notelp'];
$kelamin = $_POST['kelamin'];
$pekerjaan = $_POST['pekerjaan'];
$provinsi = $_POST['provinsi'];
$kota = $_POST['kota'];
$kecamatan = $_POST['kecamatan'];
$kelurahan = $_POST['kelurahan'];
$jalan = $_POST['jalan'];
$desa= $_POST['desa'];
$sumber = $_POST['sumber'];
$minat = $_POST['minat'];
$alasan = $_POST['alasan'];

$conn = new mysqli('localhost', 'root', '', 'kontak');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into tb_gabung(nama, tanggal, email, notelp, kelamin, pekerjaan, provinsi, kota, kecamatan, kelurahan, jalan, desa, sumber, minat, alasan)
        values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('sssssssssssssss',$nama, $tanggal, $email, $notelp, $kelamin, $pekerjaan, $provinsi, $kota, $kecamatan, $kelurahan, $jalan, $desa, $sumber, $minat, $alasan);
    $stmt->execute();
    echo "Registration Success";
    $stmt->close();
    $conn->close();
}
?>