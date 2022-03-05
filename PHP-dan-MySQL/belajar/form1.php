<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form PHP</title>
</head>

<body>
    <form method="POST" action="proses.php"> <!-- untuk submit form -->
        <label>Nama : </label>
        <input type="text" name="nama">
        <input type="submit" value="Simpan" name="OK">
    </form>

    <?php
    echo "Output nama : ";
    if (isset($_POST["OK"])) {
        echo $_POST["nama"];
    }
    ?>
</body>

</html>