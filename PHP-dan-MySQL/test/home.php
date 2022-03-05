<?php 
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>
            alert('Kamu belum login.');
            window.location.replace('login.php');
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>HOME</title>
</head>
    
<body>
    <div style="text-align: center;">
        <h1>Home</h1>
        <p>Selamat Datang,
            <?php echo ($_SESSION["email"]) ?>
        </p>
        <a href="logout.php">Logout</a>    
    </div>
</body>
</html>