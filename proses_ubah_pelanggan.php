<?php

if($_POST){

    $nama=$_POST['nama'];

    $alamat=$_POST['alamat'];

    $telp=$_POST['telp'];

    if(empty($nama)){

        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='ubah_pelanggan.php';</script>";


    } elseif(empty($alamat)){

        echo "<script>alert('alamat tidak boleh kosong');location.href='ubah_pelanggan.php';</script>";

    }   elseif(empty($telp)){

            echo "<script>alert('nomor telepon tidak boleh kosong tidak boleh kosong');location.href='ubah_pelanggan.php';</script>";
    
        }else{

        include "koneksitoko.php";

            $update=mysqli_query($conn,"update pelanggan set nama='".$nama."',alamat='".$alamat."', telp='".$telp."'") or die(mysqli_error($conn));

            if($update){

                echo "<script>alert('Sukses update siswa');location.href='tampil_pelanggan.php';</script>";

            } else {

                echo "<script>alert('Gagal update siswa');location.href='ubah_pelanggan.php?id_siswa=".$id_pelanggan."';</script>";

            }

        }

}
?>

