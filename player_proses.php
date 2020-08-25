<?php 

include("partials/config.php");
if(isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $lahir = $_POST['tgl'];
    $negara = $_POST['negara'];
    $tim = $_POST['tim'];

    echo $nama." - ".$lahir." - ".$negara." - ".$tim;

    // $result = mysqli_query($koneksi, "INSERT INTO player (nama,lahir,id_tim,id_negara) VALUES('$nama','$lahir','$tim','$negara')");

    // if($result){
    //     header('Location: http://localhost/Player/player.php?status=sukses');
    // }else{
    //     header('Location: http://localhost/Player/player.php?status=gagal');
    // }
}

?>