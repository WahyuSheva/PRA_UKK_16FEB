<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<center>
<body>
    <body bgcolor="aqua">
    <table border="1">
    <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Nama Bahan</th>
        <th>Jenis Bahan</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Kondisi</th>
        <th>Tanggal masuk</th>
        <th>Aksi</th>        
</tr>

<?php
include "koneksi.php";
$query=mysqli_query($koneksi,"SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan=tb_bahan.id_bahan");

while($data=mysqli_fetch_array($query)){
    echo "<tr>";   
    echo "<td>".$data['nama_user']."</td>";
    echo "<td>".$data['jabatan']."</td>";   
    echo "<td>".$data['nama_bahan']."</td>";
    echo "<td>".$data['jenis_bahan']."</td>";
    echo "<td>".$data['stok']."</td>";
    echo "<td>".$data['harga']."</td>";
    echo "<td>".$data['kondisi']."</td>";
    echo "<td>".$data['tgl_masuk']."</td>"; 
    echo "<td>";
    echo "<a href='edit.php?id_user=".$data['id_user']."'>Edit</a> |";
    echo "<a href='hapus.php?id_user=".$data['id_user']."'>Hapus</a>";
    echo "</td>";
    echo "</tr>";
}
?>
</table>
<br>
<input type="button" value="Kembali" onclick="history.back(-1)" />
<a href="tambah.php"><input type="button"  value="Tambah">  
</body>
</html>