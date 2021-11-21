<?php

if($_POST){

    $id_produk=$_POST['id_produk'];

    $nama_produk=$_POST['nama_produk'];

    $deskripsi_produk=$_POST['deskripsi'];

    $harga_produk=$_POST['harga_produk'];

    $foto_produk=basename($_FILES["product_photo"]["name"]);
    
    if(empty($nama_produk)){

        echo "<script>alert('nama produk tidak boleh kosong');location.href='ubah_produk.php';</script>";

    } elseif(empty($deskripsi_produk)){

        echo "<script>alert('deskripsi tidak boleh kosong');location.href='ubah_produk.php';</script>";

    } elseif(empty($harga_produk)) {

        echo  "<script>alert('harga tidak boleh kosong');location.href='ubah_produk.php';</script>";

    } else {

            include "koneksitoko.php";
            include "upload_produk.php";

            $update=mysqli_query($conn, "update produk set nama_produk='".$nama_produk."',deskripsi='".$deskripsi_produk."',harga='".$harga_produk."',foto_produk='".$foto_produk."' where id_produk='".$id_produk."'") or die(mysqli_error($conn));
            if($uploadOk == false){

                echo "sorry, your file is not uploaded";
            }else{
                if(move_uploaded_file($_FILES["product_photo"]["tmp_name"], $target_file)){
                    
                    
                
                    if($update){

                        echo "<script>alert('Sukses update produk');location.href='tampil_produk.php';</script>";
        
                    } else {
        
                        echo "<script>alert('Gagal update produk');location.href='ubah_produk.php?id_produk=".$id_produk."';</script>";
        
                    }
                }else{

                    echo "Sorry, your file is not uploaded";
                }
            }

        }

    }

?>