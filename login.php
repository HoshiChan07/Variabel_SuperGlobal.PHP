<?php
// cek apakah tombol sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek username & password
    if ($_POST["nama"] === "Muhammad Bintang" && $_POST["password"] === "Bintangkun21chan") {
        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        // jika salah
    } else {
        // tampilkan pesan kesalahan
        $eror = true;
    }
}


?>




<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php if (isset($eror)) : ?>
    <p>user name / password ERROR!!!</p>
    <?php endif; ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="user">Username: </label>
                <input id="user" type="text" name="nama">
            </li>
            <li>
                <label for="pass">Username: </label>
                <input id="pass" type="password" name="password">
            </li>
            <li>
                <button type="submit" name="submit">KIRIM</button>
            </li>
        </form>
    </ul>

</body>

</html>