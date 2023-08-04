<?php
require ("../../config/config_database.php");
$db = koneksi(hostname, username, password, database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <a href="form_mahasiswa.php">Tambah Data</a>
    <?php
    $query = $db->query("SELECT * FROM mahasiswa");
    ?>
    <table>
        <thead>
        <tr>
            <th>No</th>
            <th>npm</th>
            <th>nama</th>
            <th>alamat</th>
            <th>asrama</th>
            <th>act</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
                while($row = $query->fetch_array()){
                    ?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $row['npm'];?></td>
                            <td><?php echo $row['nama'];?></td>
                            <td><?php echo $row['alamat'];?></td>
                            <td><?php echo $row['asrama'];?></td>
                            <td>Edit | Hapus</td>
                        </tr>
                    <?php
                    }
            ?>
        </tbody>
    </table>
</body>
</html>