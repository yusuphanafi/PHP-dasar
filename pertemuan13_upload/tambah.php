<?php 
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil ditambahkan atau tidak
    if ( tambah($_POST) > 0 ) {
        echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
    }

}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label>
                    Nama : 
                    <input type="text" name="nama">
                </label>
            </li>
            <li>
                <label for="npm">NPM : </label>
                <input type="text" name="npm" id="npm"required>
            </li>
            <li>
                <label>
                    Email : 
                    <input type="text" name="email">
                </label>
            </li>   
            <li>
                <label>
                    Jurusan :
                    <input type="text" name="jurusan">
                </label>
            </li>
            <li>
                <label>
                    Gambar : 
                    <input type="file" name="gambar">
                </label>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    
    </form>

</body>
</html>