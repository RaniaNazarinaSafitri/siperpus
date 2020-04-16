<?php
include '../koneksi.php';
$id_anggota = $_GET["id_anggota"];
$query=mysqli_query($kon,"DELETE FROM anggota where id_anggota='$id_anggota'");
// var_dump($query);

if($query>0){
    echo "
    <script>
    alert('Data berhasil dihapus, Yeay!');
    document.location.href = 'index.php';
    </script>
    "
    ;
}
?>
