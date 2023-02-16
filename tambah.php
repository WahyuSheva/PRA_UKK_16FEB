<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <body bgcolor="yellow">
<center>
    <h1>Tambah Data</h1>
</center>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama_user">Nama:</label>
                <input type="text" name="nama">
            </p>
            <p>
                <label for="jabatan">Jabatan:</label>
                <input type="text" name="jabatan">
            </p>
            <p>
                <label for="nama_bahan">Nama Bahan:</label>
                <input type="text" name="namabahan">
            </p>
            <p>
                <label for="jenis_bahan">Jenis Bahan:</label>
                <input type="text" name="jenisbahan">
            </p>
            <p>
                <label for="stok">Stok:</label>
                <input type="number" name="stokbahan">
            </p>
            <p>
                <label for="harga">Harga:</label>
                <input type="number" name="hargabahan">
            </p>
            <p>
                <label for="kondisi">Kondisi:</label>
                <input type="radio" name="kondisi" value="baik">Baik
                <input type="radio" name="kondisi" value="rusak">Rusak
            </p>
            <p>
                <label for="tgl_masuk">Tanggal masuk:</label>
                <input type="date" name="masukbahan">
            </p>
            <p>
                <input type="submit" name="submit" value="Tambah">
            </p>

</fieldset>
</body>
</html>