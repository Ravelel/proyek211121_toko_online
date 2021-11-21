<?php
if($_POST){
    
    $nama_produk=$_POST['nama_produk'];

    $deskripsi=$_POST['deskripsi'];

    $harga=$_POST['harga'];
    

    if(empty($_POST['nama_produk'])){
        echo "<script>alert('nama produk tidak boleh kosong');location.href='akses.php';</script>";
    } elseif(empty($_POST['deskripsi'])){
        echo "<script>alert('deskripsi tidak boleh kosong');location.href='akses.php';</script>";
    } elseif(empty($_POST['harga'])){
        echo "<script>alert('harga tidak boleh kosong');location.href='akses.php';</script>";
    } else {
        include "koneksitoko.php";

        // upload image
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["foto_produk"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["foto_produk"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["foto_produk"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }
    }
         
    $insert=mysqli_query($conn,"insert into produk (nama_produk, deskripsi, harga, foto_produk) value ('".$_POST['nama_produk']."','".$_POST['deskripsi']."','".$_POST['harga']."','".basename($_FILES["foto_produk"]["name"])."')");
        if($insert){

            echo "<script>alert('Sukses menambahkan produk');location.href='tambah_produk.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan produk');location.href='tambah_produk.php';</script>";

        }

    }


?>