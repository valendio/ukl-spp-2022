<?php
include '../connect.php'; 
session_start();

$username = $_POST['nama'];
$password = ($_POST['password']);

if($username == "" || $password == ""){
    header("location: form-login.php");
} else {
    $query = "SELECT * FROM petugas WHERE nama = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);

    
    $num = mysqli_num_rows($result);
    
    if($num ==1 ){
        $dt_login = mysqli_fetch_assoc($result);

        $_SESSION['nama'] = $username;
        $_SESSION['id_petugas'] = $dt_login['id_petugas'];
        $_SESSION['password'] = $dt_login['password'];
        $_SESSION['role'] = $dt_login['role'];
        $_SESSION['nama_petugas'] = $dt_login['nama_petugas'];
        header("location: ../homepage/home-petugas.php");

    } else {
        header("location: form-login.php");
    }
}

?>
