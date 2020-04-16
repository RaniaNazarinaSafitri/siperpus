<?php
include '../koneksi.php';
$id_pinjam = $_GET["id_pinjam"];
    $query = mysqli_query($kon, "DELETE FROM peminjaman where id_pinjam='$id_pinjam'");
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
