<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>
    <?php 
        include "koneksi.php";
        $dataSiswa = mysqli_query($connection, 'SELECT * FROM siswa');
    ?>
<body>
<h2>Login</h2>
    <form action="proses-login.php" method="POST">
        <label>Email</label>
        <br>
        <input type="text" name="email">
        <br>
        <label>Password</label>
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit" name="tombolSubmit" value="Login">
    </form>
</body>
</html>