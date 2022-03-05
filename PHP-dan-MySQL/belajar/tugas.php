<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <!-- berfungsi untuk mengirimkan informasi -->
        <table>
            <tr>
                <td>Input 1:</td>
                <td>
                    <input type="number" namespace="angka 1" name="angka_1">
                </td>
            </tr>
            <tr>
                <td>Input 2:</td>
                <td>
                    <input type="number" namespace="angka 2" name="angka_2">
                </td>
            </tr>
            <tr>
                <td>Input 3:</td>
                <td>
                    <input type="number" namespace="angka 3" name="angka_3">
                </td>
            </tr>
        </table>
        <button type="submit" name="hasil">submit</button>
    </form>

    <?php
    $result = 0;
    if (isset($_POST['hasil'])) // jika tombol submit di tekan, if akan bernilai true
    {
        $a1 = $_POST['angka_1']; // mengambil nilai input dg name 'angka_1' dan 'angka_2'
        $a2 = $_POST['angka_2'];
        $a3 = $_POST['angka_3'];
        $result = $a1 * $a2 + $a3; //Operasi perhitungan
    }
    ?>

    <table>
        <tr>
            <td>Hasil :</td>
            <td><?php echo $result; ?></td> <!-- Menampilkan hasil perhitungan -->
        </tr>
    </table>
</body>

</html>