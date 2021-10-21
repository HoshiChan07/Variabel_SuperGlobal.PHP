<DOCTYPE html>
    <html>

    <head>
        <title></title>
    </head>

    <body>
        <!-- ketika kita tidak menuliskan method dan action maka ada nilai default yang dikirimkan -->
        <form action="latihan4.php" method="post">
            <!-- jika action tidak ditulis maka default nya adalah mengirimkan pada foleder nya sendiri -->
            <!-- jika method nya tidak ditulis maka nilai default nya adalah $_GET -->
            <label for="user">Masukkan Nama Anda</label>
            <input id="user" type="text" name="nama">
            <br>
            <button type="submit" name="submit">KIRIM</button>
        </form>

    </body>

    </html>