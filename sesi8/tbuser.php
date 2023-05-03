<?php
    include("konfigurasi.php");
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal Koneksi ke dbms");

    $jdpage = "List";
    $page= "userlist.php";

    if(isset($_POST["opsi"]))
    switch($_POST["opsi"]){
        case "store":
            $p1 = $_POST["txPASS1"];
            $p2 = $_POST["txPASS2"];
            if($p1 == $p2){
                $nama = $_POST["txNAMA"];
                $email = $_POST["txEMAIL"];
                $username = $_POST["txUSERNAME"];
                $iduser = md5($email);
$sql = "INSERT INTO tbuser (nama, email, username, passkey, iduser) VALUES('$nama','$email','$username','$p1','$iduser');";
$hasil = mysqli_query($cnn, $sql);
                break;
            }
    }

    if(isset($_GET["aksi"])){
        switch($_GET["aksi"]){
            case "new":
                $page = "user-new.php";
                $jdpage = "Tambah";
                break;
            case "edit":
                break;
            case "del":
                break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF=8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initian-scale=1">
    <title><?=$jdpage?> - Tabel User</title>
</head>
<body>

<?php
    include($page);
?>


</body>