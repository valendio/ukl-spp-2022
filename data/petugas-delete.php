<?php
if ($_GET['id_petugas']) {
    include "../connect.php";
    $qry_hapus = mysqli_query($connect, "delete from petugas where id_petugas='" . $_GET['id_petugas'] . "'");
    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus Petugas');location.href='/data/data-petugas.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus Petugas');location.href='/data/data-petugas.php';</script>";
    }
}
?>
<?php error_reporting (E_ALL ^ E_NOTICE);?>
