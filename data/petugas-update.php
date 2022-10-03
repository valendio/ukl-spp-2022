<?php
if ($_POST) {
    $id_petugas = $_POST['id_petugas'];
    $nama = $_POST['nama'];
    // $pass = $_POST['password'];
    $nama_petugas = $_POST['nama_petugas'];
    $role = $_POST['role'];
    if (empty($nama)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='data-petugas.php';</script>";
    } elseif (empty($nama_petugas)) {
        echo "<script>alert('Nama Lengkap tidak boleh kosong');location.href='data-petugas.php';</script>";
    } else {
        include "../connect.php";
        if (empty($nama)) {
            $update = mysqli_query($connect, "update petugas set nama='" . $nama .// "',password='" . $pass .
             "' where id_petugas = '" . $id_petugas ."' " ) or die(mysqli_error($connect));
            if ($update) {
                echo "<script>alert('Sukses update Petugas');location.href='data-petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='petugas-update.php?id_siswa=" . $nama . "';</script>";
            }
        } else {
            $update = mysqli_query($connect, "update petugas set nama='" . $nama .// "',password='" . $pass . 
             "' where id_petugas = '" . $id_petugas ."'") or die(mysqli_error($connect));
            if ($update) {
                echo "<script>alert('Sukses update Petugas');location.href='data-petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='petugas-update.php?id_siswa=" . $nama . "';</script>";
            }
        }
    }
}
