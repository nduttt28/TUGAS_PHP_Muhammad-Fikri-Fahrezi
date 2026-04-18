<!DOCTYPE html>
<html>
<head>
    <title>Tugas 1 PHP Muhammad Fikri F</title>
</head>
<body>
    <h2>Form Nilai Ujian</h2>
    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Nilai Ujian:</label><br>
        <input type="number" name="nilai" required><br><br>

        <input type="submit" name="proses" value="Cek Hasil">
    </form>

    <hr>

    <?php
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nilai = $_POST['nilai'];

        if ($nilai > 70) {
            $status = "Lulus";
        } else {
            $status = "Remedial";
        }

 
        echo "<h3>Hasil Penilaian:</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Nilai: " . $nilai . "<br>";
        echo "Status: <strong>" . $status . "</strong>";
    }
    ?>
</body>
</html>