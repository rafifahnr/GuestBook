<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>
    <h2>Form Buku Tamu</h2>
    <form action="proses.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Isi:</label><br>
        <textarea name="isi" rows="5" required></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>

    <h2>Daftar Buku Tamu</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Isi</th>
        </tr>

        <?php
        $result = $conn->query("SELECT * FROM buku_tamu");

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['ID_BT'] . "</td>";
            echo "<td>" . $row['NAMA'] . "</td>";
            echo "<td>" . $row['EMAIL'] . "</td>";
            echo "<td>" . $row['ISI'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
