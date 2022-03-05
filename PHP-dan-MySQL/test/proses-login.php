<?php 
    $inputEmail = $_POST["email"];
    $inputPassword = $_POST["password"];

    include "koneksi.php";
    $sql = "SELECT * FROM siswa WHERE email = '$inputEmail'";
    $dataSiswa = mysqli_query($connection, $sql);
    $kolom = mysqli_fetch_assoc($dataSiswa);

 //   $kunciemail = "riskydavidkasyanto25@gmail.com";
 //   $kunciPassword = "#25November";

    session_start();

    if ($inputEmail == $kolom["email"]) {
        $verifikasiPass = password_verify($inputPassword, $kolom["password"]);

        if ($verifikasiPass == true) {
            $_SESSION["email"] = $inputEmail;
        
    

 //   if ($inputEmail == $kunciemail && $inputPassword == $kunciPassword) {
  //      $_SESSION["email"] = $inputEmail;

            echo " <script>
                    alert('Login berhasil!');
                    window.location.replace('home.php');
            </script>";
        } else {
            echo "<script>
                    alert('Login gagal!');
                    window.location.replace('home.php');
            </script>";
        }
    }
?>