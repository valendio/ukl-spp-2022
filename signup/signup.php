<?php
if($_POST){
    $nama=$_POST['nama'];
    $nama_petugas= $_POST['nama_petugas'];
    $password=$_POST['password'];
    $role= $_POST['role'];

    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='form-signup.php';</script>";
    } elseif(empty($nama_petugas)){
        echo "<script>alert('Nama lengkap tidak boleh kosong');location.href='form-signup.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='form-signup.php';</script>";
    } elseif(empty($role)){
            echo "<script>alert('role tidak boleh kosong');location.href='form-signup.php';</script>";
    } else {
        include "../connect.php";
        $insert=mysqli_query($connect,"insert into petugas (nama,nama_petugas, password, role) value ('".$nama."','".$nama_petugas."','".$password."','".$role."')") or die(mysqli_error($connect));
        if($insert){
            echo "<script>alert('Berhasil Membuat akun');location.href='form-signup.php';</script>";
        } else {
            echo "<script>alert('Gagal membuat akun');location.href='form-signup.php';</script>";
        }
    }
}
?>
