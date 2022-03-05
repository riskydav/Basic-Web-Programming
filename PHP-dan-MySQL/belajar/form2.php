<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form PHP</title>
</head>

<body>
    <form method="GET" action="proses.php">
        <!-- untuk submit form -->
        <label>Nama : </label>
        <input type="text" name="nama">
        <input type="submit" value="Simpan" name="OK">
    </form>

    <?php
    echo $_GET["OK"];
    ?>
</body>

</html>