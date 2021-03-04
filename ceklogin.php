<?php
session_start();

include 'koneksi.php';

  $user = $_POST['username'];
  $pass = $_POST['password'];
  $data_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($data_user);

if($cek > 0){

 $data = mysqli_fetch_assoc($data_user);


 if($data['role']=="superadmin"){

 
  $_SESSION['username'] = $username;
  $_SESSION['role'] = "superadmin";
  
  header("location:halaman_superadmin.php");

 }else if($data['role']=="AuditrPB1"){

  $_SESSION['username'] = $username;
  $_SESSION['role'] = "AuditorPB1";
 
  header("location:halaman_auditorpb1.php");

 }else if($data['role']=="AuditorPB2"){
  $_SESSION['username'] = $username;
  $_SESSION['role'] = "AuditorPB2";
  header("location :halaman_auditorpb2.php");

 }else if ($data['role']=="Auditordaerah") {
   $_SESSION['username'] = $username;
  $_SESSION['role'] = "Auditordaerah";
  header("location :halaman_auditordaerah.php");

}else{

  // alihkan ke halaman login kembali
  header("location:index.php?pesan=gagal");
 } 
}else{
 header("location:index.php?pesan=gagal");
}


?>