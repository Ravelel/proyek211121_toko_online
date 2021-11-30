<?php

if($_POST){

    $nama_petugas=$_POST['nama_petugas'];

    $username=$_POST['username'];

    $level=$_POST['level'];

    if(empty($nama_petugas)){

        echo "<script>alert('nama petugas tidak boleh kosong');location.href='ubah_petugas.php';</script>";


    } elseif(empty($username)){

        echo "<script>alert('username tidak boleh kosong');location.href='ubah_petugas.php';</script>";

    }   elseif(empty($level)){

            echo "<script>alert('level tidak boleh kosong tidak boleh kosong');location.href='ubah_petugas.php';</script>";
    
        }else{

        include "koneksitoko.php";

            $update=mysqli_query($conn,"update petugas set nama_petugas='".$nama_petugas."',username='".$username."', level='".$level."'") or die(mysqli_error($conn));

            if($update){

                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";

            } else {

                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_petugas=".$id_petugas."';</script>";

            }

        }

}
?>

