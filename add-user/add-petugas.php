<?php
if($_POST){
    $nama=$_POST['nama'];
    $nama_petugas= $_POST['nama_petugas'];
    $pass=$_POST['password'];
    $role= $_POST['role'];

    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='form-add-petugas.php';</script>";
    } elseif(empty($nama_petugas)){
        echo "<script>alert('Nama lengkap tidak boleh kosong');location.href='form-add-petugas.php';</script>";
    } elseif(empty($pass)){
        echo "<script>alert('password tidak boleh kosong');location.href='form-add-petugas.php';</script>";
    } elseif(empty($role)){
            echo "<script>alert('role tidak boleh kosong');location.href='form-add-petugas.php';</script>";
    } else {
        include "../connect.php";
        $insert=mysqli_query($connect,"insert into petugas (nama, password, nama_petugas, role) value ('".$nama."','".$pass."','".$nama_petugas."','".$role."')") or die(mysqli_error($connect));
        if($insert){
            echo "<script>alert('Berhasil Membuat akun');location.href='form-add-petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal membuat akun');location.href='form-add-petugas.php';</script>";
        }
    }
}
?>
