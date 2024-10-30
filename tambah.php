<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
</head>
<body>
    <h1>Add Activity</h1>
    <br>
    <a href="index.php">Back</a>
    <br><br>
    <h3>Add Activity</h3>
    <form method="post" action="tambah_.php">
        <table>
            <tr>
                <td>Activity</td>
                <td><input type="text" name="kegiatan" id="kegiatan"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <input type="radio" name="cek" id="cek" value="Done">
                    <label for="cek">Done</label>
                    <input type="radio" name="cek" id="cek" value="In Progress">
                    <label for="cek">Progress</label>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>


        </table>


    </form>
</body>
</html>