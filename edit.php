<?php
include("koneksi.php");

if(!isset($_GET['id_user'])){
    header("Location:tampil.php");
}

$id = $_GET['id_user'];
$sql =("SELECT * FROM tb_user INNER JOIN tb_bahan ON 
tb_user.id_user = tb_bahan.id_bahan
 where tb_user.id_user='$id'");

$query=mysqli_query($koneksi,$sql);
$row =mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
    die ("data tidak ditemukan");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <body bgcolor="Aqua">
<center>
    <h1>Edit Data</h1>
</center>
    <form action="proses_edit.php" method="POST">
        <fieldset>
            <p>
            <input type="hidden" name="id" value="<?php echo $row['id_user']?>"/>
</p>
            <p>
                <label for="nama_user">Nama:</label>
                <input type="text" name="nama" value="<?php echo $row['nama_user']?>"/>
            </p>
            <p>
                <label for="jabatan">Jabatan:</label>
                <input type="text" name="jabatan" value="<?php echo $row['jabatan']?>"/>
            </p>
            <p>
                <label for="nama_bahan">Nama Bahan:</label>
                <input type="text" name="namabah" value="<?php echo $row['nama_bahan']?>"/>
            </p>
            <p>
                <label for="jenis_bahan">Jenis Bahan:</label>
                <input type="text" name="jenis" value="<?php echo $row['jenis_bahan']?>"/>
            </p>
            <p>
                <label for="stok">Stok:</label>
                <input type="number" name="stok" value="<?php echo $row['stok']?>"/>
            </p>
            <p>
                <label for="harga">Harga:</label>
                <input type="number" name="harga" value="<?php echo $row['harga']?>"/>
            </p>
            <p>
                <label for="kondisi">Kondisi:</label>
                <input type="radio" name="kondisi"  value="baik" value="<?php echo $row['kondisi']?>"/>Baik
                <input type="radio" name="kondisi"  value="rusak" value="<?php echo $row['kondisi']?>"/>rusak
            </p>
            <p>
                <label for="tgl_masuk">Tanggal masuk:</label>
                <input type="date" name="masuk" value="<?php echo $row['tgl_masuk']?>"/>
            </p>
            <p>
                <input type="submit" name="edit" value="Edit">
            </p>

</fieldset>
</body>
</html>