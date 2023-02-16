<?php
include("koneksi.php");
if(isset($_POST['submit'])){
    $nm=$_POST['nama'];
    $jb=$_POST['jabatan'];
    $namabahan=$_POST['namabahan'];
    $jenis=$_POST['jenisbahan'];
    $stok=$_POST['stokbahan'];
    $harga=$_POST['hargabahan'];
    $kondisi=$_POST['kondisi'];
    $masuk=$_POST['masukbahan'];

    $sql = "INSERT INTO tb_bahan(nama_bahan,jenis_bahan,stok,harga,kondisi,tgl_masuk) 
    VALUES ('$namabahan','$jenis','$stok','$harga','$kondisi','$masuk')";
    $query = mysqli_query($koneksi, $sql); 

    $sql="SELECT max(id_bahan)AS ib FROM tb_bahan LIMIT 1";
    $query = mysqli_query($koneksi, $sql);                                                                             

    $data=mysqli_fetch_array($query);
    $bh=$data['ib'];
          
    $sql="INSERT INTO tb_user(nama_user, jabatan, id_bahan)
    VALUES ('$nm','$jb','$bh')";
    $query = mysqli_query($koneksi, $sql);


    if($query){
    header('location:tampil.php?status=sukses');
    }else{
        header('location:tampil.php?status=gagal');
    }
}
?>