<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit CRUD App</title>
</head>

<body>
    <h2>Edit Activity</h2><br>
    <a href="index.php"><- Back</a>

            <?php
            include 'connection.php';

            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "select * from list where id='$id'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <form method="post" action="update.php">
                    <table>
                        <tr>
                            <td>Kegiatan</td>

                            <td>
                                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                <input type="text" name="kegiatan" id="kegiatan" value="<?php echo $d['kegiatan']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><input type="text" name="cek" id="cek" value="<?php echo $d['cek']; ?>" ></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="SIMPAN"></td>
                        </tr>


                    </table>


                </form>

            <?php
            }
            ?>

</body>

</html>