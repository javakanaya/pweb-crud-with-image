<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD with Image</title>
</head>

<body>
    <h1>Data Siswa</h1>
    <a href="form-simpan.php">Tambah Data</a>
    <br>
    <br>
    <table>
        <tr>
            <th>Foto</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        include "koneksi.php";

        $sql = $pdo->prepare("SELECT * FROM siswa");
        $sql->execute();

        while ($data = $sql->fetch()) {
            echo "<tr>";
            echo "<td><img src='images/" . $data['foto'] . "' width='100' height='100'></td>";
            echo "<td>" . $data['nis'] . "</td>";
            echo "<td>" . $data['nama'] . "</td>";
            echo "<td>" . $data['jenis_kelamin'] . "</td>";
            echo "<td>" . $data['telp'] . "</td>";
            echo "<td>" . $data['alamat'] . "</td>";
            echo "<td><a href='form_ubah.php?id=" . $data['id'] . "'>Ubah</a></td>";
            echo "<td><a href='proses_hapus.php?id=" . $data['id'] . "'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>