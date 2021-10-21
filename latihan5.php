<DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
        <form action="" method="post">
                <label for="user1">Masukkan Nama</label>
                <input type="text" name="nama1">
                <button type="submit" name="submit">KIRIM</button>
            </form>
            <?php if(isset($_POST["submit"]) ) :?>
            <h1>HI SELAMAT DATANG <?php echo $_POST["nama1"];?></h1>
            <?php endif; ?>
        </body>
    </html>