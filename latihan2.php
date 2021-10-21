<?php
// bagian ini digunakan agar user tidak masuk sembaragan lewat url
// cek apakah tidak ada data di $_GET
// if( !isset($_GET["nama"]) || (!isset($_GET["nrp"])
// || (!isset($_GET["jurusan"]) || (!isset($_GET["email"]) || (!isset($_GET["gambar"])){
//     // redirect / jika alamat salah maka user akan di pakasa kembali ke halaman sebelumnya
//     header("Location: latihan1.php");
//     exit;
// }
if (
    !isset($_GET["nama"]) || !isset($_GET["nrp"])
    || !isset($_GET["jurusan"]) || !isset($_GET["email"]) || !isset($_GET["gambar"])
) {
    header("Location: latihan1.php");
    exit;
}

?>

<DOCTYPE html>
    <html>

    <head>
        <title>Detail Mahasiswa</title>
    </head>

    <body>
        <ul>
            <li><img src="../img/<?php echo $_GET["gambar"]; ?>" alt="gambar1" width="150px" height="150px"></li>
            <li>NAMA: <?php echo $_GET["nama"]; ?></li>
            <li>NRP: <?php echo $_GET["nrp"]; ?></li>
            <li>EMAIL: <?php echo $_GET["email"]; ?></li>
            <li>JURUSAN: <?php echo $_GET["jurusan"]; ?></li>
        </ul>
        <a href="latihan1.php">Kembali Ke Daftar Mahasiswa</a>
    </body>

    </html>