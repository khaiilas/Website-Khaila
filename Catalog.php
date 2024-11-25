<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Catalog Barang</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="cv.php">CV</a>
            <a href="Chart.php">Chart</a>
        </nav>
    </header>
    <section class="CV">
    <table border="1">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM barang";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['Kode_Barang']}</td>
                        <td>{$row['Nama_Barang']}</td>
                        <td>{$row['Deskripsi']}</td>
                        <td>Rp" . number_format($row['Harga_Barang'], 2, ',', '.') . "</td>
                        <td>{$row['Stock_Barang']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data barang</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
