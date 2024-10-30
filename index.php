<!DOCTYPE html>
<html lang="en">
<head>
    <!-- 
Materi kisi2 UAS  :

Part 1 : https://www.malasngoding.com/membuat-crud-dengan-php-dan-mysqli-menampilkan-data/
Part 2 : https://www.malasngoding.com/membuat-crud-dengan-php-dan-mysqli-input-data/ 

Sumber Belajar

1. WPU : https://youtube.com/playlist?list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6&si=_WvOQv29dUI0VZid
2. Buku di link : bit.ly/modultkj101 
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
</head>
<body>
    <header>
        <h1 class="header-text">To Do List App</h1>
        <br>
        <a href="tambah.php">+ Add Activity</a>
        <br><br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Activity</th>
                <th>Check</th>
                <th>Action</th>
            </tr>
            <?php
            include 'connection.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from list");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kegiatan'] ?></td>
                <td><?php echo $d['cek'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">DELETE</a>
                </td>
            </tr>
            <?php  
            }
            ?>
            
            

            

        </table>
    </header>
    
</body>
</html>