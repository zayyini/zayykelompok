<!DOCTYPE html>
<html>

<head>
    <title>Halaman Ubah Data</title>
</head>

<body>
    <?php
    include "config.php";
    $user = $_GET['user_nama'];
    $sql = "SELECT * FROM user WHERE user_nama='$user'";
    $hasil = mysqli_query($config, $sql);
    $data = mysqli_fetch_assoc($hasil);
    ?>
    <h3>Ubah Data Username</h3>
    <form method="POST" action="user_edit_action.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td>
                    <input type="text" value="<?php echo
                    $data['user_nama'] ?>" disabled>
                    <input type="text" name="username" value="<?php
                    echo $data['user_nama'] ?>" hidden>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td> : </td>
                <td>
                    <input type="text" name="password" value="<?php
                    echo $data['user_password'] ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td> : </td>
                <td>
                    <input type="text" name="namalengkap" value="<?php
                    echo $data['user_namalengkap'] ?>">
                </td>
            </tr>
            <td>Email</td>
            <td> : </td>
            <td>
                <input type="email" name="email" value="<?php echo
                $data['user_email'] ?>">
            </td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="submit" name="ubah" value="Simpan">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>