<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $nm=$_POST['nama'];
    $jb=$_POST['jabatan'];
    $nmb=$_POST['namabah'];
    $j=$_POST['jenis'];
    $st=$_POST['stok'];
    $hr=$_POST['harga'];
    $knd=$_POST['kondisi'];
    $ms=$_POST['masuk'];
    $id=$_POST['id'];
    
    $sql="UPDATE tb_user SET nama_user='$nm', jabatan='$jb' WHERE id_user='$id'";
    $query=mysqli_query($koneksi,$sql);

    $sql="UPDATE tb_bahan SET nama_bahan='$nmb', jenis_bahan='$j', stok='$st', harga='$hr', 
    kondisi='$knd', tgl_masuk='$ms' WHERE id_bahan='$id'";
    $query=mysqli_query($koneksi,$sql);

    if($query){
        header('location:tampil.php?status=sukses');
        }else{
            header('location:tampil.php?status=gagal');
        }
    
}
?>