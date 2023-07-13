<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$conn = new mysqli('localhost', 'root', '', 'kontak');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into tb_kontak(nama, email, pesan)
        values(?, ?, ?)");
    $stmt->bind_param('sss',$nama, $email, $pesan);
    $stmt->execute();
    echo "Registration Success";
    $stmt->close();
    $conn->close();
}
?>