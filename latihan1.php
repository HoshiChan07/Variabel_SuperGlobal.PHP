<!-- Super globals -->
<!-- adalah variabel yang dimiliki php -->

<!-- Variabel scope -->
<?php
// Variable scope / lingkup variabel
// variabel lokal untul file latihan7
// $x = 10;
// echo $x;
// // variabel yang di buat oleh function hanya berlaku didalam function saja
// // kita tidak bisa menampilkan variabel luar pada function
// function tampilX(){
//     echo $x;
// }
// tampilX();

// // kecuali ketika kita membuat variabel di dalam function
// function tampilX(){
//     // maka yang tampil adalah 20 karena function akan mengambil variabel lokal dalam function saja
//     // sedangkan variabel global diabaikan
//     $x = 20;
//     echo $x;
// }
// // sedangkan yang diluar function akan menampilkan variabel global karena variabel lokal tak dapat di akses dari luar
// echo $x;


// // jika ingin mengakses variabel global maka kita membutuhkan sebuah keyword
// function tampilX(){
//     // maka function akan mengakses variabel yang di luar function.
//     global $x;
//     echo $x;
// }

// // variabel super global
// // variabel yang sudah dibuat oleh php yang dapat di akses kapanpun dan dimanapun di halaman php kita

// // $_GET
// // cara
// // masukkan key nya dan value nya
// $_GET["nama"] = "Muhammad Bintang";
// $_GET["nrp"] = "47529875525";
// // cara lain dengan menggunakan url websitenya




// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
// semuanya array associative
// semuanya memiliki perilaku berbeda

// variabel global milik php
// var_dumb($_SEREVER);
$mahasiswa = [
    [
        "gambar" => "profil.jpeg",
        "nama" => "Muhammad Bintang",
        "nrp" => "2896587962",
        "jurusan" => "Rekayasa Prangkat Lunak",
        "email" => "muhbintang650@gmail.com"
    ],

    [
        "nama" => "Fey Abdul Rahman",
        "nrp" => "8979527952",
        "jurusan" => "Rekayasa Prangkat Lunak",
        "email" => "fery789@gmail.com",
        "gambar" => "gambar1.jpg"
    ],

    [
        "nama" => "Zhaka Hidayat Yasir",
        "nrp" => "9289375757",
        "jurusan" => "Rekayasa Prangkat Lunak",
        "email" => "Zhakah745@gmail.com",
        "gambar" => "Toman_Symbol.jpg"
    ]
];
?>


<DOCTYPE html>
    <html>

    <head>
        <title>GET</title>
    </head>

    <body>
        <h1>Daftar Mahasiswa ARRAY ASSOCIATIVE</h1>
        <ul>
            <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
                        &nrp=<?= $mhs["nrp"]; ?>
                        &jurusan=<?= $mhs["jurusan"]; ?>
                        &email=<?= $mhs["email"]; ?>
                        &gambar=<?= $mhs["gambar"]; ?>"><?php echo $mhs["nama"]; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </body>

    </html>