<?php
include("connection.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
</head>

<body>
    <div class="container">
        <h1>Data Barang</h1>
        <div class="main">
            <table border="1">
                <tr>
                    <th width="200">Gambar</th>
                    <th width="170">Nama Barang</th>
                    <th width="120">Kategori</th>
                    <th width="130">Harga Jual</th>
                    <th width="130">Harga Beli</th>
                    <th width="70">Stok</th>
                    <th width="90">Aksi</th>
                </tr>
                <?php if ($result) : ?>
                    <?php while ($row = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <td><img style="width: 100px" src="image/<?= $row['gambar']; ?>" alt="<?=
                                                                                $row['nama']; ?>"></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['kategori']; ?></td>
                            <td><?= $row['harga_beli']; ?></td>
                            <td><?= $row['harga_jual']; ?></td>
                            <td><?= $row['stok']; ?></td>
                           <td>
                           <a href="update.php?id=<?= $row['id_barang']; ?>"><input type='button' class='btn-update'></a>
                            <a href="delete.php?id=<?= $row['id_barang']; ?>"><input type='button' class='btn-delete'></a>
                           </td>

                        </tr>
                    <?php endwhile;
                else : ?>
                    <tr>
                        <td colspan="7">Belum ada data</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>

</html>