<?php
if($_POST){
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $pass=$_POST['password'];
    $id_kelas=$_POST['id_kelas'];
    $alamat= $_POST['alamat'];
    $no_tlp=$_POST['no_tlp'];

    if(empty($nisn)){
        echo "<script>alert('nisn siswa tidak boleh kosong');location.href='form-add-siswa.php';</script>";
    } elseif(empty($nis)){
        echo "<script>alert('nis tidak boleh kosong');location.href='form-add-siswa.php';</script>";
    } elseif(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='form-add-siswa.php';</script>";
    }elseif(empty($pass)){
        echo "<script>alert('password tidak boleh kosong');location.href='add-siswa.php';</script>";
    }elseif(empty($id_kelas)){
        echo "<script>alert('Kelas tidak boleh kosong');location.href='form-add-siswa.php';</script>";
    }elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='form-add-siswa.php';</script>";
    }elseif(empty($no_tlp)){
        echo "<script>alert('Nomor handphone tidak boleh kosong');location.href='form-add-siswa.php';</script>";
    }
     else {
        include "../connect.php";
        $insert=mysqli_query($connect,"insert into siswa (nisn, nis, nama, password, id_kelas, alamat, no_tlp) value ('".$nisn."','".$nis."','".$nama."','".$pass."','".$id_kelas."','".$alamat."','".$no_tlp."')") or die(mysqli_error($connect));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='form-add-siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='form-add-siswa.php';</script>";
        }
    }
}
?>
